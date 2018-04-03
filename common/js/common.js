function MenuViewModel() {
    var self = this;

    self.user = ko.observable();

    self.init = function() {
        self.getUser();
    }

    self.logout = function() {
        var api = new Sumbroker();
        api.logout(function() {
            location.href = '../index.php';
        });
    };

    self.getUser = function() {
        var item = JSON.parse(sessionStorage.getItem('user'));
        if (!item) {
            // location.href = '../index.php';
        }
        self.user(item);
    }

    self.init();
}

// Activates knockout.js
var menu = document.getElementById('menu');
if (menu) {
    ko.applyBindings(new MenuViewModel(), menu);
}