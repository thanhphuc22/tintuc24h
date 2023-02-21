(function ($) {
    'use strict'

    try {
		var stripe = Stripe( jpw_stripe_params.key );
	} catch( error ) {
		console.log( error );
		return;
    }

    var stripe_card,
        iban;

    $(document).on('ready', function (e, data) {
        window.jnews.paywall.stripe = window.jnews.paywall.stripe || {}
    
        window.jnews.paywall.stripe = {
            init: function (container) {
                if ( 'yes' === jpw_stripe_params.is_checkout ) {
                    $( document.body ).on( 'updated_checkout', function() {
                        window.jnews.paywall.stripe.mountElement();
                    } );
                } else if ( $( 'form#add_payment_method' ).length ) {
                    window.jnews.paywall.stripe.mountElement();
                }
                
                // checkout page
                if ( $( 'form.woocommerce-checkout' ).length ) {
                    this.form = $( 'form.woocommerce-checkout' );
                    this.form.on( 'checkout_place_order', window.jnews.paywall.stripe.onSubmit );                  
                    this.form.on( 'click', 'input[name="jpw-stripe-payment-source"]', window.jnews.paywall.stripe.onSaveCardChange );
                }

                // add paywall method page
                if ( $( 'form#add_payment_method' ).length ) {
                    this.form = $( 'form#add_payment_method' );
                    this.form.on( 'submit', window.jnews.paywall.stripe.onSubmit );
                }

                // stripe error message
                $( document ).on( 'stripeError', this.onError )

                // 3D Secure Flow
                window.addEventListener( 'hashchange', window.jnews.paywall.stripe.onHashChange );
            },

            mountElement: function (container) {
                var elements = stripe.elements();

                // Credit Card Element
                var style = {
                    base: {
                        color: '#32325d',
                        fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
                        fontSmoothing: 'antialiased',
                        fontSize: '16px',
                        '::placeholder': {
                            color: '#aab7c4',
                        },
                    },
                    invalid: {
                        color: '#fa755a',
                        iconColor: '#fa755a',
                    },
                };
                
                stripe_card = elements.create( 'card', { hidePostalCode: true, style: style } );
                if ( $( '#card-element' ).length ) { 
                    stripe_card.mount( '#card-element' );
                    if( ! window.jnews.paywall.stripe.isSaveCard() ) {
                        $( '#card-element' ).css( 'display','block' );
                        $( '.jpw-save-payment-method' ).css( 'display','block' );
                    }
                }
                stripe_card.addEventListener( 'change', function() {
                    window.jnews.paywall.stripe.onCardChange();
                } );

                // SEPA Debit Element
                var style = {
                    base: {
                        color: '#32325d',
                        fontSize: '16px',
                        '::placeholder': {
                            color: '#aab7c4'
                        },
                        ':-webkit-autofill': {
                            color: '#32325d',
                        },
                    },
                    invalid: {
                        color: '#fa755a',
                        iconColor: '#fa755a',
                        ':-webkit-autofill': {
                            color: '#fa755a',
                        },
                    },
                };
                
                var options = {
                    style: style,
                    supportedCountries: ['SEPA'],
                    placeholderCountry: jpw_stripe_params.country,
                };
                
                iban = elements.create('iban', options);
                if ( $( '#iban-element' ).length ) { 
                    iban.mount( '#iban-element' );
                    if( ! window.jnews.paywall.stripe.isSaveCard() ) {
                        $( '#iban-element' ).css( 'display','block' );
                        $( '.jpw-save-payment-method' ).css( 'display','block' );
                    }
                }
                iban.addEventListener( 'change', function() {
                    window.jnews.paywall.stripe.onCardChange();
                } );
            },

            onSubmit: function (container) {
                if( ! $( '#payment_method_stripepaywall, #payment_method_stripepaywall_sepa' ).is( ':checked' ) ) {
                    return true;
                }

                if ( 0 < $( 'input.stripe-source' ).length ) {
                    return true;
                }

                if( window.jnews.paywall.stripe.isSaveCard() ) {
                    window.jnews.paywall.stripe.useSavedSource( $( 'input[name="jpw-stripe-payment-source"]:checked' ).val() );
                } else {
                    window.jnews.paywall.stripe.createSource();
                }
                
                return false;
            },

            isSaveCard: function() {
                return ( 
                        $( 'input[name="jpw-stripe-payment-source"]' ).is( ':checked' ) 
                        && 'new' !== $( 'input[name="jpw-stripe-payment-source"]:checked' ).val() 
                    ) || ( 
                        $( 'input[name="jpw-stripe-sepa-payment-source"]' ).is( ':checked' ) 
                        && 'new' !== $( 'input[name="jpw-stripe-sepa-payment-source"]:checked' ).val()
                );
            },

            createSource: function (container) {
                var owner                           = { name: '', address: {}, email: '', phone: '' },
                    first_name                      = $( '#billing_first_name' ).val()  || jpw_stripe_params.billing_first_name,
                    last_name                       = $( '#billing_last_name' ).val()   || jpw_stripe_params.billing_last_name,
                    details                         = {};
                
                owner.name                          = first_name + ' ' + last_name;
                owner.email                         = $( '#billing_email' ).val()       || jpw_stripe_params.billing_email;
                owner.phone                         = $( '#billing_phone' ).val()       || jpw_stripe_params.billing_phone;
                
                owner.address.city                  = $( '#billing_city' ).val()        || jpw_stripe_params.billing_city;
                owner.address.country               = $( '#billing_country' ).val()     || jpw_stripe_params.billing_country;
                owner.address.line1                 = $( '#billing_address_1' ).val()   || jpw_stripe_params.billing_address_1;
                owner.address.line2                 = $( '#billing_address_2' ).val()   || jpw_stripe_params.billing_address_2;
                owner.address.postal_code           = $( '#billing_postcode' ).val()    || jpw_stripe_params.billing_postcode;
                owner.address.state                 = $( '#billing_state' ).val()       || jpw_stripe_params.billing_state;

                details.owner                       = owner;

                if ( jpw_stripe_params.statement_descriptor !== '' )
                    details.statement_descriptor    = jpw_stripe_params.statement_descriptor;

                if( $( '#payment_method_stripepaywall' ).is( ':checked' ) ) { 
                    details.type                    = 'card';
                    stripe.createSource(stripe_card, details).then( window.jnews.paywall.stripe.sourceResponse );
                }

                if( $( '#payment_method_stripepaywall_sepa' ).is( ':checked' ) ) {
                    details.type                    = 'sepa_debit';
                    details.currency                = jpw_stripe_params.currency;
                    details.mandate                 = { notification_method: jpw_stripe_params.sepa_mandate_notification };
                    
                    stripe.createSource(iban, details).then( window.jnews.paywall.stripe.sourceResponse );
                }
            },

            sourceResponse: function( response ) {
                if ( response.error ) {
                    return $( document.body ).trigger( 'stripeError', response );
                }

                window.jnews.paywall.stripe.reset();

                window.jnews.paywall.stripe.form.append(
                    $( '<input type="hidden" />' )
                        .addClass( 'stripe-source' )
                        .attr( 'name', 'stripe_source' )
                        .val( response.source.id )
                );

                if ( $( 'form#add_payment_method' ).length ) {
                    $( window.jnews.paywall.stripe.form ).off( 'submit', window.jnews.paywall.stripe.onSubmit );
                }

                window.jnews.paywall.stripe.form.submit();
            },

            useSavedSource: function( source ) {
                window.jnews.paywall.stripe.reset();

                window.jnews.paywall.stripe.form.append(
                    $( '<input type="hidden" />' )
                        .addClass( 'stripe-source' )
                        .attr( 'name', 'stripe_source' )
                        .val( source )
                );
    
                window.jnews.paywall.stripe.form.submit();
            },

            reset: function() {
                $( '.stripe-error-message, .stripe-error-message, .stripe-source' ).remove();
            },

            onHashChange: function() {
                if( ! $( '#payment_method_stripepaywall, #payment_method_stripepaywall_sepa' ).is( ':checked' ) ) {
                    return true;
                }

                var partials = window.location.hash.match( /^#?jpw-stripe-confirm-(pi|si)-([^:]+):(.+)$/ );

                if ( ! partials || 4 > partials.length ) {
                    return;
                }

                var type               = partials[1];
                var intentClientSecret = partials[2];
                var redirectURL        = decodeURIComponent( partials[3] );

                // Cleanup the URL
                window.location.hash = '';

                window.jnews.paywall.stripe.openIntentModal( intentClientSecret, redirectURL, false, 'si' === type );
            },

            openIntentModal: function( intentClientSecret, redirectURL, alwaysRedirect, isSetupIntent ) {
                stripe[ isSetupIntent ? 'handleCardSetup' : 'handleCardPayment' ]( intentClientSecret )
                    .then( function( response ) {
                        if ( response.error ) {
                            throw response.error;
                        }

                        var intent = response[ isSetupIntent ? 'setupIntent' : 'paymentIntent' ];
                        if ( 'requires_capture' !== intent.status && 'succeeded' !== intent.status ) {
                            return;
                        }

                        window.location = redirectURL;
                    } )
                    .catch( function( error ) {
                        if ( alwaysRedirect ) {
                            return window.location = redirectURL;
                        }

                        $( document.body ).trigger( 'stripeError', { error: error } );
                        window.jnews.paywall.stripe.form && window.jnews.paywall.stripe.form.removeClass( 'processing' );
                    } );
            },

            onCardChange: function() {
                window.jnews.paywall.stripe.reset();
            },

            onSaveCardChange: function() {
                window.jnews.paywall.stripe.reset();

                if( window.jnews.paywall.stripe.isSaveCard() ) {
                    $('#card-element').css('display','none');
                    $('#iban-element').css('display','none');
                    $( '.jpw-save-payment-method' ).css( 'display','none' );
                } else {
                    $('#card-element').css('display','block');
                    $('#iban-element').css('display','block');
                    $( '.jpw-save-payment-method' ).css( 'display','block' );
                }
            },

            onError: function( e, result ) {
                var message         = jpw_stripe_params[ result.error.code ] ? jpw_stripe_params[ result.error.code ] : jpw_stripe_params.default_card_error;

                if( $( '#payment_method_stripepaywall' ).is( ':checked' ) ) {
                    $( '#card-errors' ).append('<div class="stripe-error-message"><i class="fa fa-times-circle"></i>' + message + '</div>' );
                    $( 'html, body' ).animate({
                        scrollTop: ( $( '#card-errors' ).offset().top - 200 )
                    }, 200 );
                }

                if( $( '#payment_method_stripepaywall_sepa' ).is( ':checked' ) ) {
                    $( '#iban-errors' ).append('<div class="stripe-error-message"><i class="fa fa-times-circle"></i>' + message + '</div>' );
                    $( 'html, body' ).animate({
                        scrollTop: ( $( '#iban-errors' ).offset().top - 200 )
                    }, 200 );
                }

                window.jnews.paywall.stripe.form && window.jnews.paywall.stripe.form.unblock();

            },

        }
    
        jnews.paywall.stripe.init()
    })

})(jQuery)