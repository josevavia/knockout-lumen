function PriceRangeViewModel() {
    var self = this;

    self.id = ko.observable();
    self.name = ko.observable();
    self.description = ko.observable();

    self.currentUser = ko.observable();

    self.init = function() {
        self.checkUser();
        self.getPriceRange();
    }

    // check connected price_range
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

    self.getPriceRange = function() {
        var api = new Sumbroker();
        var price_range_id = (new URLSearchParams(window.location.search)).get('idPriceRange');
        api.getPriceRange(price_range_id, function(r) {
            self.id(r.id);
            self.name(r.name);
            self.description(r.description);
        });
    }

    self.currentUserId = function() {
        return JSON.parse(sessionStorage.getItem('user')).id;
    }

    self.init();
}

// Activates knockout.js
ko.applyBindings(new PriceRangeViewModel());
