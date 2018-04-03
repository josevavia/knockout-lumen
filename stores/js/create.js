function CreateStoreViewModel() {
    var self = this;

    self.name = ko.observable();
    self.alias = ko.observable();
    self.email = ko.observable();
    self.password = ko.observable();

    self.distributor_id = ko.observable();
    self.distributors = ko.observableArray();

    self.init = function() {
        self.getDistributors();
    }

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
            location.href = 'detail.php?id='+r.identifier;
        });
    }

    self.init();
}

// Activates knockout.js
ko.applyBindings(new CreateStoreViewModel(), document.getElementById('content'));
