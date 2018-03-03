function LoginViewModel() {
    var self = this;

    self.username = ko.observable("esmeralda");
    self.password = ko.observable("esmeralda");

    self.doLogin = function() {

        var params = {
            username: self.username(),
            password: self.password()
        }
        users_api.login(params, function(r) {
            location.href = 'users.html';
        });
    }
}

// Activates knockout.js
ko.applyBindings(new LoginViewModel());