function DiscountViewModel() {
    var self = this;

    self.discount = ko.observable();

    self.init = function() {
        self.getDiscount();
    }

    self.getDiscount = function() {
        var api = new Sumbroker();
        var discount_id = (new URLSearchParams(window.location.search)).get('idDiscount');
        api.getDiscount(discount_id, function(r) {
            self.discount(r);
        });
    }

    self.init();
}

// Activates knockout.js
ko.applyBindings(new DiscountViewModel(), document.getElementById('content'));
