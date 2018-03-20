function PolicyViewModel() {
    var self = this;

    self.policy = ko.observableArray();
    self.id = ko.observable();
    self.username = ko.observable();
    self.api_token = ko.observable();

    self.currentUser = ko.observable();

    self.init = function() {
        self.checkUser();
        self.getPolicy();
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

    self.getPolicy = function() {
        var api = new Sumbroker();
        var policy_id = (new URLSearchParams(window.location.search)).get('idPolicy');
        api.getPolicy(policy_id, function(r) {
            self.policy([r]);
            self.id(r.id);
            self.username(r.username);
            self.api_token(r.api_token);
        });
    }

    self.currentUserId = function() {
        return JSON.parse(sessionStorage.getItem('user')).id;
    }

    self.init();
}

// Activates knockout.js
ko.applyBindings(new PolicyViewModel());
