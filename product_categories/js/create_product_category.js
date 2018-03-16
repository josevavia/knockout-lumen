function CreateProductCategoryViewModel() {
    var self = this;

    self.name = ko.observable();

    self.currentUser = ko.observable();

    self.init = function() {
        self.checkUser();
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

    self.createProductCategory = function() {
        var api = new Sumbroker();
        var params = {
            name: self.name(),
        };
        api.createProductCategory(params, function(r) {
            location.href = 'product_categories.php';
        });
    }

    self.currentUserId = function() {
        return JSON.parse(sessionStorage.getItem('user')).id;
    }

    self.init();
}

// Activates knockout.js
ko.applyBindings(new CreateProductCategoryViewModel());
