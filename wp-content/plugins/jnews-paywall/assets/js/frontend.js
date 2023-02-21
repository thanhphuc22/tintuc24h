(function ($) {

    'use strict'

    /**
     * Ajax send request for unlocking post
     */
    $(document).on('ready jnews-ajax-load', function (e, data) {
        window.jnews.paywall = window.jnews.paywall || {}

        window.jnews.paywall = {
            init: function () {
                var base = this

                base.container = $('body')
                base.user_login = base.container.hasClass('logged-in')
                base.form_login = base.container.find('.jeg_accountlink')
                base.xhr = null
                base.login_button = base.container.find('.jpw_login a')
                base.package_item_button = base.container.find('.jpw-wrapper .package-item .button')
                base.path = (jnewsoption.site_slug === undefined) ? '/' : jnewsoption.site_slug
                base.domain = (jnewsoption.site_domain === undefined) ? window.location.hostname : jnewsoption.site_domain

                base.set_event()

                document.cookie = 'paywall_product = false; path = ' + base.path + '; domain = ' + base.domain
            },

            set_event: function () {
                var base = this
                /**
                 * Unlock Popup
                 */
                base.container.find('.jeg_paywall_unlock_post').off('click').on('click', function (e) {
                    base.post_id = $(this).data('id')
                    base.open_form(e, '#jpw_unlock_popup')
                })

                base.container.find('#jpw_unlock_popup .btn.yes').off('click').on('click', function (e) {
                    e.preventDefault()
                    e.stopPropagation()
                    var $element = $(this),
                        ajax_data = {
                            unlock_post_id: '1',
                            action: 'paywall_handler',
                            post_id: base.post_id
                        }
                    $element.find('.fa-spinner').show();
                    $element.find('span').hide();
                    if (base.xhr !== null) {
                        base.xhr.abort()
                    }
                    base.paywall_ajax(ajax_data)
                })

                base.container.find('#jpw_unlock_popup .btn.no').off('click').on('click', function (e) {
                    $.magnificPopup.close()
                })

                /**
                 * Cancel Subscription
                 */
                base.container.find('.jpw_manage_status .subscription').off('click').on('click', function (e) {
                    base.open_form(e, '#jpw_cancel_subs_popup')
                })

                base.container.find('#jpw_cancel_subs_popup .btn.yes').off('click').on('click', function (e) {
                    e.preventDefault()
                    e.stopPropagation()
                    var $element = $(this),
                        ajax_data = {
                            cancel_subscription: 'yes',
                            action: 'cancel_subs_handler',
                        }
                    $element.find('.fa-spinner').show();
                    $element.find('span').hide();
                    if (base.xhr !== null) {
                        base.xhr.abort()
                    }
                    base.paywall_ajax(ajax_data)
                })

                base.container.find('#jpw_cancel_subs_popup .btn.no').off('click').on('click', function (e) {
                    $.magnificPopup.close()
                })

                /**
                 * Login Needed
                 */
                if (! base.user_login) {
                    base.login_button.off('click')
                    base.package_item_button.off('click')
                    if (base.form_login.length > 0) {
                        var login_button = base.login_button.attr("href", "#jeg_loginform")
                        base.open_form_login(login_button)

                        var package_item_button = base.package_item_button.attr("href", "#jeg_loginform")
                        base.open_form_login(package_item_button)
                    } else {
                        base.login_button.on('click', function (e) {
                            e.preventDefault()
                            alert('Please login to buy!')
                        })
                        base.package_item_button.on('click', function (e) {
                            e.preventDefault()
                            e.stopPropagation()
                            alert('Please login to buy!')
                        })
                    }
                    base.container.find('.jpw-wrapper .package-item .button').on('click', function (e) {
                        var $element = $(this),
                            productID = $element.attr('data-product_id'),
                            ajax_data = {
                                product_id: productID,
                                action: 'refresh_checkout_redirect'
                            };
                        
                        document.cookie = 'paywall_product = ' + productID + '; path = ' + base.path + '; domain = ' + base.domain

                        base.xhr = $.ajax({
                            url: jnews_ajax_url,
                            type: 'post',
                            dataType: 'json',
                            data: ajax_data,
                        }).done(function (data) {
                            jnewsoption.login_reload = data.login_reload
                        })

                        $('#jeg_loginform form > p:nth-child(2)').text(jnewsoption.paywall_login)
                        $('#jeg_registerform form > p:nth-child(2)').text(jnewsoption.paywall_register)
                    })
                } else {
                    base.container.find('.jpw-wrapper .package-item .button').off('click').on('click', function (e) {
                        e.preventDefault()
                        e.stopPropagation()
                        var $element = $(this),
                            productID = $element.attr('data-product_id'),
                            ajax_data = {
                                product_id: productID,
                                action: 'add_paywall_product'
                            }
                        $element.find('.fa-spinner').show();
                        $element.find('span').hide();
                        if (base.xhr !== null) {
                            base.xhr.abort()
                        }
                        base.paywall_ajax(ajax_data)
                    })
                }

                base.container.find('.woocommerce-MyAccount-paymentMethods .stripepaywall .delete').off('click').on('click', function (e) {
                    e.preventDefault()
                    e.stopPropagation()
                    var $element = $(this)
                    var sourceID = $element.attr('data-source_id'),
                        ajax_data = {
                            source_id: sourceID,
                            action: 'delete_source_handler'
                        }
                    $element.find('.fa-spinner').show();
                    $element.find('span').hide();
                    if (base.xhr !== null) {
                        base.xhr.abort()
                    }
                    base.paywall_ajax(ajax_data)
                })

                base.container.find('.woocommerce-MyAccount-paymentMethods .stripepaywall .default').off('click').on('click', function (e) {
                    e.preventDefault()
                    e.stopPropagation()
                    var $element = $(this)
                    var sourceID = $element.attr('data-source_id'),
                        ajax_data = {
                            source_id: sourceID,
                            action: 'default_source_handler'
                        }
                    $element.find('.fa-spinner').show();
                    $element.find('span').hide();
                    if (base.xhr !== null) {
                        base.xhr.abort()
                    }
                    base.paywall_ajax(ajax_data)
                })
            },

            paywall_ajax: function (ajaxdata) {
                var base = this
                base.xhr = $.ajax({
                    url: jnews_ajax_url,
                    type: 'post',
                    dataType: 'json',
                    data: ajaxdata,
                }).done(function (data) {
                    if (data.redirect) {
                        window.location.href = data.redirect
                    } else {
                        location.reload()
                    }
                })
            },

            open_form: function (e, popup_id) {
                e.preventDefault()

                $.magnificPopup.open({
                    removalDelay: 500,
                    midClick: true,
                    mainClass: 'mfp-zoom-out',
                    type: 'inline',
                    items: {
                        src: popup_id
                    }
                })
            },

            open_form_login: function (popuplink) {
                window.jnews.loginregister.show_popup(popuplink);
                window.jnews.loginregister.hook_form();
            }
        }

        jnews.paywall.init()
    })
})(jQuery)