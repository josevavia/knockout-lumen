function LoginViewModel() {
    var self = this;

    self.username = ko.observable("admin");
    self.password = ko.observable("1234");

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
}

// Activates knockout.js
ko.applyBindings(new LoginViewModel());