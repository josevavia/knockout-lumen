function LoginViewModel() {
    var self = this;

    self.username = ko.observable("admin@sumbroker.es");
    self.password = ko.observable("1234");

    self.init = function() {
    }

    self.doLogin = function() {

        var api = new Sumbroker();
        var params = {
            email: self.username(),
            password: self.password()
        }
        api.login(params, function(r) {
            location.href = 'policies/list.php';
        }, function(r) {
            console.log(r);
        });
    }

    self.init();
}

// Activates knockout.js
ko.applyBindings(new LoginViewModel(), document.getElementById('content'));