function ProductCategoryViewModel() {
    var self = this;

    self.id = ko.observable();
    self.name = ko.observable();

    self.init = function() {
        self.getProductCategory();
    }

    self.getProductCategory = function() {
        var api = new Sumbroker();
        var product_category_id = (new URLSearchParams(window.location.search)).get('idProductCategory');
        api.getProductCategory(product_category_id, function(r) {
            self.id(r.id);
            self.name(r.name);
        });
    }

    self.init();
}

// Activates knockout.js
ko.applyBindings(new ProductCategoryViewModel(), document.getElementById('content'));
