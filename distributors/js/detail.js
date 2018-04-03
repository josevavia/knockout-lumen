function DistributorViewModel() {
    var self = this;

    self.distributor = ko.observable();

    self.init = function() {
        self.getDistributor();
    }

    self.getDistributor = function() {
        var api = new Sumbroker();
        var id = (new URLSearchParams(window.location.search)).get('id');
        api.getDistributor(id, function(r) {
            self.distributor(r);
        });
    }

    self.init();
}

// Activates knockout.js
ko.applyBindings(new DistributorViewModel(), document.getElementById('content'));
