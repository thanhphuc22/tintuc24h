(function ($) {

  'use strict'

  $(function() {
    window.jnews.paywall = window.jnews.paywall || {}
    
    window.jnews.paywall = {
      init: function (container) {
        var base = this

        if (container === undefined) {
          base.container = $('body')
        } else {
          base.container = container
        }

        /**
         * Cancel Subscription
         */
        base.container.find('.jpw_manage_status .subscription').off('click').on('click', function (e) {
          if (confirm('Are you sure want to cancel subscription?')) {
            var ajax_data = {
              cancel_subscription: 'yes',
              action: 'cancel_subs_handler',
            }

            base.admin_ajax(ajax_data)
          }
        })
      },

      admin_ajax: function (ajaxdata) {
        $.ajax({
          url: ajaxurl,
          type: 'post',
          dataType: 'json',
          data: ajaxdata,
        }).done(function (data) {
          location.reload()
        })
      },
    }

    jnews.paywall.init()
  })

})(jQuery)