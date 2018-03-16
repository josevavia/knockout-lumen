function CreateUserViewModel() {
    var self = this;

    self.username = ko.observable();
    self.password = ko.observable();

    self.currentUser = ko.observable();

    self.init = function() {
        self.checkUser();
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

    self.createUser = function() {
        var api = new Sumbroker();
        var params = {
            username: self.username(),
            password: self.password(),
        };
        api.createUser(params, function(r) {
            location.href = 'users.php';
        });
    }

    self.currentUserId = function() {
        return JSON.parse(sessionStorage.getItem('user')).id;
    }

    self.init();
}

// Activates knockout.js
ko.applyBindings(new CreateUserViewModel());
