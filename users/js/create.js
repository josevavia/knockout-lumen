function CreateUserViewModel() {
    var self = this;

    self.email = ko.observable();
    self.password = ko.observable();

    self.init = function() {
    }

    self.createUser = function() {
        var api = new Sumbroker();
        var params = {
            email: self.email(),
            password: self.password(),
        };
        api.createUser(params, function(r) {
            location.href = 'list.php';
        });
    }

    self.init();
}

// Activates knockout.js
ko.applyBindings(new CreateUserViewModel(), document.getElementById('content'));
