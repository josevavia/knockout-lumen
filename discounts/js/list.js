function DiscountsViewModel() {
    var self = this;

    self.discounts = ko.observableArray();

    self.init = function() {
        self.getDiscounts();
    }

    self.getDiscounts = function() {
        var api = new Sumbroker();
        api.getDiscounts({}, function(r) {
            self.discounts(r);
        });
    }

    self.init();
}

// Activates knockout.js
ko.applyBindings(new DiscountsViewModel(), document.getElementById('content'));
