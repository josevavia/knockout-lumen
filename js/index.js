function LoginViewModel() {
    var self = this;

    self.username = ko.observable("admin");
    self.password = ko.observable("1234");

    self.init = function() {
    }

    self.doLogin = function() {

        var api = new Sumbroker();
        var params = {
            username: self.username(),
            password: self.password()
        }
        api.login(params, function(r) {
            location.href = 'users/users.html';
        });
    }

    self.logout = function() {
        var api = new Sumbroker();
        api.logout(function() {
            location.href = 'index.html';
        });
    };

    self.currentUserId = function() {
        let item = JSON.parse(sessionStorage.getItem('user'));
        if (item) {
            return item.id;
        }
        return null;
    }

    self.init();
}

// Activates knockout.js
ko.applyBindings(new LoginViewModel());