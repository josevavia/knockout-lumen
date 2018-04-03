function ProductViewModel() {
    var self = this;

    self.product = ko.observableArray();

    self.init = function() {
        self.getProduct();
    }

    self.getProduct = function() {
        var api = new Sumbroker();
        var product_id = (new URLSearchParams(window.location.search)).get('idProduct');
        api.getProduct(product_id, function(r) {
            self.product([r]);
        });
    }

    self.init();
}

// Activates knockout.js
ko.applyBindings(new ProductViewModel(), document.getElementById('content'));
