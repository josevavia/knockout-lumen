function StoresViewModel() {
    var self = this;

    self.stores = ko.observableArray();

    self.init = function() {
        self.getStores();
    }

    self.getStores = function() {
        var api = new Sumbroker();
        api.getStores({}, function(r) {
            self.stores(r);
        });
    }

    self.showDeleteStore = function(user) {
        if (confirm('Are you sure?')) {
            self.deleteStore(user);
        }
    }

    self.deleteStore = function(user) {
        var api = new Sumbroker();
        api.deleteStore(user.id, function() {
            self.getStores();
        });
    }

    self.init();
}

// Activates knockout.js
ko.applyBindings(new StoresViewModel(), document.getElementById('content'));
