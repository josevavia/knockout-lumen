function EditUserViewModel() {
    var self = this;

    self.id = ko.observable();
    self.name = ko.observable();

    self.init = function() {
        self.getUser();
    }

    self.getUser = function() {
        var api = new Sumbroker();
        var user_id = (new URLSearchParams(window.location.search)).get('idUser');
        api.getUser(user_id, function(r) {
            self.id(r.id);
            self.name(r.name);
        });
    }

    self.updateUser = function() {
        var api = new Sumbroker();
        var params = {
            name: self.name(),
        };
        api.updateUser(self.id(), params, function() {
            location.href = 'list.php';
        });
    }

    self.init();
}

// Activates knockout.js
ko.applyBindings(new EditUserViewModel(), document.getElementById('content'));
