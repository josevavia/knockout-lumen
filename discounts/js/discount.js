function DiscountViewModel() {
    var self = this;

    self.discount = ko.observable();

    self.currentUser = ko.observable();

    self.init = function() {
        self.checkUser();
        self.getDiscount();
    }

    // check connected user
    self.checkUser = function() {
        var user = JSON.parse(sessionStorage.getItem('user'));
        if (!user) {
            location.href = '../index.php';
            return null;
        }
        self.currentUser(user);
    }

    self.logout = function() {
        var api = new Sumbroker();
        api.logout(function() {
            location.href = '../index.php';
        });
    };

    self.getDiscount = function() {
        var api = new Sumbroker();
        var discount_id = (new URLSearchParams(window.location.search)).get('idDiscount');
        api.getDiscount(discount_id, function(r) {
            self.discount(r);
        });
    }

    self.currentUserId = function() {
        return JSON.parse(sessionStorage.getItem('user')).id;
    }

    self.init();
}

// Activates knockout.js
ko.applyBindings(new DiscountViewModel());
