function CreateUsersViewModel() {
    var self = this;

    self.name = ko.observable();
    self.username = ko.observable();
    self.email = ko.observable();
    self.password = ko.observable();

    self.currentUser = ko.observable();

    self.init = function() {
        self.checkUser();
    }

    // check connected user
    self.checkUser = function() {
        var user = JSON.parse(sessionStorage.getItem('user'));
        if (!user) {
            location.href = 'index.html';
            return null;
        }
        self.currentUser(user);
    }

    self.logout = function() {
        var api = new Sumbroker();
        api.logout(function() {
            location.href = 'index.html';
        });
    };

    self.createUser = function() {
        var api = new Sumbroker();
        var params = {
            name: self.name(),
            username: self.username(),
            email: self.email(),
            password: self.password(),
        };
        api.createUser(params, function(r) {
            location.href = 'users.html';
        });
    }

    self.currentUserId = function() {
        return JSON.parse(sessionStorage.getItem('user')).id;
    }

    self.init();
}

// Activates knockout.js
ko.applyBindings(new CreateUsersViewModel());
