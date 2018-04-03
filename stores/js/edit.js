function EditUserViewModel() {
    var self = this;

    self.id = ko.observable();
    self.name = ko.observable();
    self.alias = ko.observable();
    self.email = ko.observable();

    self.init = function() {
        self.getStore();
    }

    self.getStore = function() {
        var api = new Sumbroker();
        var id = (new URLSearchParams(window.location.search)).get('id');
        api.getStore(id, function(r) {
            self.id(r.id);
            self.name(r.name);
            self.alias(r.alias);
            self.email(r.user.email);
        });
    }

    self.save = function() {
        var api = new Sumbroker();
        var params = {
            name: self.name(),
            alias: self.alias(),
        };
        api.updateStore(self.id(), params, function() {
            location.href = 'list.php';
        });
    }

    self.init();
}

// Activates knockout.js
ko.applyBindings(new EditUserViewModel(), document.getElementById('content'));
