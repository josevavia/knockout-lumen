function PolicyViewModel() {
    var self = this;

    self.policy = ko.observable();

    self.init = function() {
        self.getPolicy();
    };

    self.getPolicy = function() {
        var api = new Sumbroker();
        var policy_id = (new URLSearchParams(window.location.search)).get('id');
        api.getPolicy(policy_id, function(r) {
            self.policy(r);
        });
    };

    self.payPayment = function(policy_id, payment_id) {
        var api = new Sumbroker();
        api.payPayment(policy_id, payment_id, [], function(r) {
            self.policy(r);
        });
    };

    self.init();
}

// Activates knockout.js
ko.applyBindings(new PolicyViewModel(), document.getElementById('content'));
