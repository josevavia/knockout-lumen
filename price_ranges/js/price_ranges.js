function PriceRangesViewModel() {
    var self = this;

    self.price_ranges = ko.observableArray();

    self.currentUser = ko.observable();

    self.init = function() {
        self.checkUser();
        self.getPriceRanges();
    }

    // check connected price_range
    self.checkUser = function() {
        var user = JSON.parse(sessionStorage.getItem('user'));
        if (!user) {
            location.href = '../index.html';
            return null;
        }
        self.currentUser(user);
    }

    self.logout = function() {
        var api = new Sumbroker();
        api.logout(function() {
            location.href = '../index.html';
        });
    };

    self.getPriceRanges = function() {
        var api = new Sumbroker();
        api.getPriceRanges({}, function(r) {
            self.price_ranges(r);
        });
    }

    self.showDeletePriceRange = function(price_range) {
        if (confirm('Are you sure?')) {
            self.deletePriceRange(price_range);
        }
    }

    self.deletePriceRange = function(price_range) {
        var api = new Sumbroker();
        api.deletePriceRange(price_range.id, function() {
            self.getPriceRanges();
        });
    }

    self.currentUserId = function() {
        return JSON.parse(sessionStorage.getItem('user')).id;
    }

    self.init();
}

// Activates knockout.js
ko.applyBindings(new PriceRangesViewModel());
