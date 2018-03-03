function UsersViewModel() {
    var self = this;

    self.users = ko.observableArray();

    self.name = ko.observable();
    self.username = ko.observable();
    self.email = ko.observable();
    self.password = ko.observable();

    self.currentUser = ko.observable();
    self.creatingUser = ko.observable(false);
    self.updatingUser = ko.observable(false);

    self.init = function() {
        self.checkUser();
        self.getUsers();
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
        users_api.logout();
    };

    self.createUser = function() {
        var params = {
            name: self.name(),
            username: self.username(),
            email: self.email(),
            password: self.password(),
        };
        users_api.createUser(params, function(r) {
            self.getUsers();
            self.cancelEdition();
        });
    }

    self.getUsers = function() {
        users_api.getUsers({}, function(r) {
            self.users(r);
        })
    }

    self.updateUser = function() {
        var params = {
            name: self.name(),
            username: self.username(),
            email: self.email(),
            password: self.password(),
        };
        users_api.updateUser(self.updatingUser().id, params, function() {
            self.getUsers();
            self.cancelEdition();
        });
    }

    self.deleteUser = function(user) {
        users_api.deleteUser(user.id, function() {
            self.getUsers();
        });
    }

    self.showCreateUser = function() {
        self.name(null);
        self.username(null);
        self.email(null);
        self.password(null);
        self.creatingUser(true);
    }

    self.showEditUser = function(user) {
        self.name(user.name);
        self.username(user.username);
        self.email(user.email);
        self.password(user.password);
        self.updatingUser(user);
    }

    self.cancelEdition = function() {
        self.name(null);
        self.username(null);
        self.email(null);
        self.password(null);
        self.creatingUser(false);
        self.updatingUser(false);
    }

    self.saveUser = function() {
        if (self.updatingUser()) {
            self.updateUser();
        } else {
            self.createUser();
        }
    }

    self.showDeleteUser = function(user) {
        if (confirm('Are you sure?')) {
            self.deleteUser(user);
        }
    }

    self.currentUserId = function() {
        return JSON.parse(sessionStorage.getItem('user')).id;
    }

    self.init();
}

// Activates knockout.js
ko.applyBindings(new UsersViewModel());
