function LoginViewModel() {
    var self = this;

    self.username = ko.observable("esmeralda");
    self.password = ko.observable("esmeralda");

    self.doLogin = function() {

        var api = new Sumbroker();
        var params = {
            username: self.username(),
            password: self.password()
        }
        api.login(params, function(r) {
            location.href = 'users.html';
        });
    }
}

// Activates knockout.js
ko.applyBindings(new LoginViewModel());