function DistributorsViewModel() {
    var self = this;

    self.distributors = ko.observableArray();

    self.init = function() {
        self.getDistributors();
    }

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

    self.init();
}

// Activates knockout.js
ko.applyBindings(new DistributorsViewModel(), document.getElementById('content'));
