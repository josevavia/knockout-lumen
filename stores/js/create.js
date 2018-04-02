function CreateStoreViewModel() {
    var self = this;

    self.name = ko.observable();
    self.alias = ko.observable();
    self.email = ko.observable();
    self.password = ko.observable();

    self.distributor_id = ko.observable();
    self.distributors = ko.observableArray();

    self.currentUser = ko.observable();

    self.init = function() {
        self.checkUser();
        self.getDistributors();
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

    self.parseParams = function() {
        var idDistributor = (new URLSearchParams(window.location.search)).get('idDistributor');
        if (idDistributor) {
            self.distributor_id(idDistributor);
        }
    }

    self.getDistributors = function() {
        var api = new Sumbroker();
        api.getDistributors({}, function(r) {
            self.distributors(r);
            self.parseParams();
        });
    }

    self.save = function() {
        var api = new Sumbroker();
        var params = {
            name: self.name(),
            alias: self.alias(),
            email: self.email(),
            password: self.password(),
            distributor_id: self.distributor_id(),
        };
        api.createStore(params, function(r) {
            location.href = 'detail.php?id='+r.id;
        });
    }

    self.currentUserId = function() {
        return JSON.parse(sessionStorage.getItem('user')).id;
    }

    self.init();
}

// Activates knockout.js
ko.applyBindings(new CreateStoreViewModel());
