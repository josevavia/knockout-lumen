function UserViewModel() {
    var self = this;

    self.user = ko.observable();

    self.init = function() {
        self.getUser();
    }

    self.getUser = function() {
        var api = new Sumbroker();
        var user_id = (new URLSearchParams(window.location.search)).get('idUser');
        api.getUser(user_id, function(r) {
            self.user(r);
        });
    }

    self.init();
}

// Activates knockout.js
ko.applyBindings(new UserViewModel(), document.getElementById('content'));
