function DistributorsViewModel() {
    var self = this;

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

    self.getDistributors = function() {
        var api = new Sumbroker();
        api.getDistributors({}, function(r) {
            self.distributors(r);
        });
    }

    self.showDeleteDistributor = function(user) {
        if (confirm('Are you sure?')) {
            self.deleteDistributor(user);
        }
    }

    self.deleteDistributor = function(user) {
        var api = new Sumbroker();
        api.deleteDistributor(user.id, function() {
            self.getDistributors();
        });
    }

    self.currentUserId = function() {
        return JSON.parse(sessionStorage.getItem('user')).id;
    }

    self.init();
}

// Activates knockout.js
ko.applyBindings(new DistributorsViewModel());
