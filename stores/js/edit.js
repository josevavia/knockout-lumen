function EditUserViewModel() {
    var self = this;

    self.id = ko.observable();
    self.name = ko.observable();
    self.alias = ko.observable();
    self.email = ko.observable();

    self.currentUser = ko.observable();

    self.init = function() {
        self.checkUser();
        self.getStore();
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

    self.getStore = function() {
        var api = new Sumbroker();
        var id = (new URLSearchParams(window.location.search)).get('id');
        api.getStore(id, function(r) {
            self.id(r.id);
            self.name(r.name);
            self.alias(r.alias);
            self.email(r.user.email);
        });
    }

    self.save = function() {
        var api = new Sumbroker();
        var params = {
            name: self.name(),
            alias: self.alias(),
        };
        api.updateStore(self.id(), params, function() {
            location.href = 'list.php';
        });
    }

    self.currentUserId = function() {
        return JSON.parse(sessionStorage.getItem('user')).id;
    }

    self.init();
}

// Activates knockout.js
ko.applyBindings(new EditUserViewModel());
