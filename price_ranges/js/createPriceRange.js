function CreatePriceRangeViewModel() {
    var self = this;

    self.name = ko.observable();
    self.description = ko.observable();

    self.currentUser = ko.observable();

    self.init = function() {
        self.checkUser();
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

    self.createPriceRange = function() {
        var api = new Sumbroker();
        var params = {
            name: self.name(),
            description: self.description(),
        };
        api.createPriceRange(params, function(r) {
            location.href = 'price_ranges.html';
        });
    }

    self.currentUserId = function() {
        return JSON.parse(sessionStorage.getItem('user')).id;
    }

    self.init();
}

// Activates knockout.js
ko.applyBindings(new CreatePriceRangeViewModel());
