function PolicyViewModel() {
    var self = this;

    self.policy = ko.observable();

    self.currentUser = ko.observable();

    self.init = function() {
        self.checkUser();
        self.getPolicy();
    };

    // check connected user
    self.checkUser = function() {
        var user = JSON.parse(sessionStorage.getItem('user'));
        if (!user) {
            location.href = '../index.php';
            return null;
        }
        self.currentUser(user);
    };

    self.logout = function() {
        var api = new Sumbroker();
        api.logout(function() {
            location.href = '../index.php';
        });
    };

    self.getPolicy = function() {
        var api = new Sumbroker();
        var policy_id = (new URLSearchParams(window.location.search)).get('id');
        api.getPolicy(policy_id, function(r) {
            self.policy(r);
        });
    };

    self.payPayment = function(policy_id, payment_id) {
        console.log('pasando!');
        console.log(policy_id);
        console.log(payment_id);
        var api = new Sumbroker();
        api.payPayment(policy_id, payment_id, [], function(r) {
            console.log(r);
            self.policy(r);
        });
    };

    self.currentUserId = function() {
        return JSON.parse(sessionStorage.getItem('user')).id;
    };

    self.init();
}

// Activates knockout.js
ko.applyBindings(new PolicyViewModel());
