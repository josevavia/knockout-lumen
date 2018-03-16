function ProductCategoriesViewModel() {
    var self = this;

    self.product_categories = ko.observableArray();

    self.currentUser = ko.observable();

    self.init = function() {
        self.checkUser();
        self.getProductCategories();
    }

    // check connected product_category
    self.checkUser = function() {
        var user = JSON.parse(sessionStorage.getItem('user'));
        if (!user) {
            location.href = '../index.php';
            return null;
        }
        self.currentUser(user);
    }

    self.logout = function() {
        var api = new Sumbroker();
        api.logout(function() {
            location.href = '../index.php';
        });
    };

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

    self.currentUserId = function() {
        return JSON.parse(sessionStorage.getItem('user')).id;
    }

    self.init();
}

// Activates knockout.js
ko.applyBindings(new ProductCategoriesViewModel());
