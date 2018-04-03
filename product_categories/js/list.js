function ProductCategoriesViewModel() {
    var self = this;

    self.product_categories = ko.observableArray();

    self.init = function() {
        self.getProductCategories();
    }

    self.getProductCategories = function() {
        var api = new Sumbroker();
        api.getProductCategories({}, function(r) {
            self.product_categories(r);
        });
    }

    self.showDeleteProductCategory = function(product_category) {
        if (confirm('Are you sure?')) {
            self.deleteProductCategory(product_category);
        }
    }

    self.deleteProductCategory = function(product_category) {
        var api = new Sumbroker();
        api.deleteProductCategory(product_category.id, function() {
            self.getProductCategories();
        });
    }

    self.init();
}

// Activates knockout.js
ko.applyBindings(new ProductCategoriesViewModel(), document.getElementById('content'));
