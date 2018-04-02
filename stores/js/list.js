function StoresViewModel() {
    var self = this;

    self.stores = ko.observableArray();

    self.currentUser = ko.observable();

    self.init = function() {
        self.checkUser();
        self.getStores();
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

    self.getStores = function() {
        var api = new Sumbroker();
        api.getStores({}, function(r) {
            self.stores(r);
        });
    }

    self.showDeleteStore = function(user) {
        if (confirm('Are you sure?')) {
            self.deleteStore(user);
        }
    }

    self.deleteStore = function(user) {
        var api = new Sumbroker();
        api.deleteStore(user.id, function() {
            self.getStores();
        });
    }

    self.currentUserId = function() {
        return JSON.parse(sessionStorage.getItem('user')).id;
    }

    self.init();
}

// Activates knockout.js
ko.applyBindings(new StoresViewModel());
