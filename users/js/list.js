function UsersViewModel() {
    var self = this;

    self.users = ko.observableArray();

    self.init = function() {
        self.getUsers();
    }

    self.getUsers = function() {
        var api = new Sumbroker();
        api.getUsers({}, function(r) {
            self.users(r);
        });
    }

    self.showDeleteUser = function(user) {
        if (confirm('Are you sure?')) {
            self.deleteUser(user);
        }
    }

    self.deleteUser = function(user) {
        var api = new Sumbroker();
        api.deleteUser(user.id, function() {
            self.getUsers();
        });
    }

    self.init();
}

// Activates knockout.js
ko.applyBindings(new UsersViewModel(), document.getElementById('content'));
