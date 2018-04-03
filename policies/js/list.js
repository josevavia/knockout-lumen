function PoliciesViewModel() {
    var self = this;

    self.policies = ko.observableArray();

    self.init = function() {
        self.getPolicies();
    }

    self.getPolicies = function() {
        var api = new Sumbroker();
        api.getPolicies({}, function(r) {
            self.policies(r);
        });
    }

    self.init();
}

// Activates knockout.js
ko.applyBindings(new PoliciesViewModel(), document.getElementById('content'));
