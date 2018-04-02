function CreateDistributorViewModel() {
    var self = this;

    self.name = ko.observable();
    self.alias = ko.observable();
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

    self.save = function() {
        var api = new Sumbroker();
        var params = {
            name: self.name(),
            alias: self.alias(),
            email: self.email(),
            password: self.password(),
        };
        api.createDistributor(params, function(r) {
            location.href = 'detail.php?id='+r.id;
        });
    }

    self.currentUserId = function() {
        return JSON.parse(sessionStorage.getItem('user')).id;
    }

    self.init();
}

// Activates knockout.js
ko.applyBindings(new CreateDistributorViewModel());
