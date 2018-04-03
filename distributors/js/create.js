function CreateDistributorViewModel() {
    var self = this;

    self.name = ko.observable();
    self.alias = ko.observable();
    self.email = ko.observable();
    self.password = ko.observable();

    self.init = function() {
    }

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

    self.init();
}

// Activates knockout.js
ko.applyBindings(new CreateDistributorViewModel(), document.getElementById('content'));
