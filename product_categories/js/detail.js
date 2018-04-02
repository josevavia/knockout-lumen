function ProductCategoryViewModel() {
    var self = this;

    self.id = ko.observable();
    self.name = ko.observable();

    self.currentUser = ko.observable();

    self.init = function() {
        self.checkUser();
        self.getProductCategory();
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

    self.getProductCategory = function() {
        var api = new Sumbroker();
        var product_category_id = (new URLSearchParams(window.location.search)).get('idProductCategory');
        api.getProductCategory(product_category_id, function(r) {
            self.id(r.id);
            self.name(r.name);
        });
    }

    self.currentUserId = function() {
        return JSON.parse(sessionStorage.getItem('user')).id;
    }

    self.init();
}

// Activates knockout.js
ko.applyBindings(new ProductCategoryViewModel());
