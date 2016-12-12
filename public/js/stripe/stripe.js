(function(){
    var StripeBilling = {

        init: function () {
          this.form = $('#billing-form');
          this.submitButton = this.form.find('input[type=submit]');

            var stripeKey = $('meta[name="publishable_key"]').attr('content');

            Stripe.setPublishableKey(stripeKey);

            this.bindEvents();
        },

        bindEvents: function () {
            this.form.on('submit', $.proxy(this.sendTocken, this));
        },

        sendTocken: function (event) {
            this.submitButton.val('One moment');
            event.preventDefault();
        }
    };

    StripeBilling.init();
})();