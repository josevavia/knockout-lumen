function StoreViewModel() {
    var self = this;

    self.store = ko.observable();

    self.init = function() {
        self.getStore();
    }

    self.getStore = function() {
        var api = new Sumbroker();
        var id = (new URLSearchParams(window.location.search)).get('id');
        api.getStore(id, function(r) {
            self.store(r);
        });
    }

    self.init();
}

// Activates knockout.js
ko.applyBindings(new StoreViewModel(), document.getElementById('content'));
