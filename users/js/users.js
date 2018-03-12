function UsersViewModel() {
    var self = this;

    self.users = ko.observableArray();

    self.currentUser = ko.observable();

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
        var api = new Sumbroker();
        api.logout(function() {
            location.href = 'index.html';
        });
    };

    self.getUsers = function() {
        var api = new Sumbroker();
        api.getUsers({}, function(r) {
            self.users(r);
        });
    }

    self.showDeleteUser = function(user) {
        if (confirm('Are you sure?')) {
            self.deleteUser(user);
        }
    }

    self.deleteUser = function(user) {
        var api = new Sumbroker();
        api.deleteUser(user.id, function() {
            self.getUsers();
        });
    }

    self.currentUserId = function() {
        return JSON.parse(sessionStorage.getItem('user')).id;
    }

    self.init();
}

// Activates knockout.js
ko.applyBindings(new UsersViewModel());
