function EditUserViewModel() {
    var self = this;

    self.id = ko.observable();
    self.name = ko.observable();
    self.username = ko.observable();
    self.email = ko.observable();

    self.currentUser = ko.observable();

    self.init = function() {
        self.checkUser();
        self.getUser();
    }

    // check connected user
    self.checkUser = function() {
        var user = JSON.parse(sessionStorage.getItem('user'));
        if (!user) {
            location.href = '../index.html';
            return null;
        }
        self.currentUser(user);
    }

    self.logout = function() {
        var api = new Sumbroker();
        api.logout(function() {
            location.href = '../index.html';
        });
    };

    self.getUser = function() {
        var api = new Sumbroker();
        var user_id = (new URLSearchParams(window.location.search)).get('idUser');
        api.getUser(user_id, function(r) {
            self.id(r.id);
            self.name(r.name);
            self.username(r.username);
            self.email(r.email);
        });
    }

    self.updateUser = function() {
        var api = new Sumbroker();
        var params = {
            name: self.name(),
            username: self.username(),
            email: self.email(),
        };
        api.updateUser(self.id(), params, function() {
            location.href = 'users.html';
        });
    }

    self.currentUserId = function() {
        return JSON.parse(sessionStorage.getItem('user')).id;
    }

    self.init();
}

// Activates knockout.js
ko.applyBindings(new EditUserViewModel());
