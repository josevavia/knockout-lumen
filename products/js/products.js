function ProductsViewModel() {
    var self = this;

    self.products = ko.observableArray();

    self.currentUser = ko.observable();

    self.init = function() {
        self.checkUser();
        self.getProducts();
    }

    // check connected user
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

    self.getProducts = function() {
        var api = new Sumbroker();
        api.getProducts({}, function(r) {
            self.products(r);
        });
    }

    self.currentUserId = function() {
        return JSON.parse(sessionStorage.getItem('user')).id;
    }

    self.init();
}

// Activates knockout.js
ko.applyBindings(new ProductsViewModel());
