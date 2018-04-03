function ProductsViewModel() {
    var self = this;

    self.products = ko.observableArray();

    self.init = function() {
        self.getProducts();
    }

    self.getProducts = function() {
        var api = new Sumbroker();
        api.getProducts({}, function(r) {
            self.products(r);
        });
    }

    self.init();
}

// Activates knockout.js
ko.applyBindings(new ProductsViewModel(), document.getElementById('content'));
