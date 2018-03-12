function EditPriceRangeViewModel() {
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

    self.getPriceRange = function() {
        var api = new Sumbroker();
        var price_range_id = (new URLSearchParams(window.location.search)).get('idPriceRange');
        api.getPriceRange(price_range_id, function(r) {
            self.id(r.id);
            self.name(r.name);
            self.description(r.description);
        });
    }

    self.updatePriceRange = function() {
        var api = new Sumbroker();
        var params = {
            name: self.name(),
            description: self.description(),
        };
        api.updatePriceRange(self.id(), params, function() {
            location.href = 'price_ranges.html';
        });
    }

    self.currentUserId = function() {
        return JSON.parse(sessionStorage.getItem('user')).id;
    }

    self.init();
}

// Activates knockout.js
ko.applyBindings(new EditPriceRangeViewModel());
