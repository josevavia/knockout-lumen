function CreatePolicyViewModel() {
    var self = this;

    self.products = ko.observableArray();
    self.product_id = ko.observable();
    self.product = ko.observable();

    self.categories = ko.observableArray();
    self.product_config_id = ko.observable();
    self.category = ko.observable();

    self.price = ko.observable(null);

    self.name = ko.observable();
    self.email = ko.observable();
    self.phone_number = ko.observable();
    self.id_number = ko.observable();
    self.periodicity = ko.observable();
    self.discount_code = ko.observable();
    self.imei = ko.observable();
    self.purchase_date = ko.observable();
    self.brand = ko.observable();
    self.model = ko.observable();

    self.currentUser = ko.observable();

    self.init = function() {
        self.checkUser();
        self.getProducts();
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

    self.getProducts = function() {
        var api = new Sumbroker();
        api.getProducts({}, function(r) {
            self.products(r);
            self.product_config_id(null);
            self.categories([]);
            self.price(null);
        });
    }

    self.createPolicy = function() {
        var api = new Sumbroker();
        var params = {
            store_id: 1,
            product_config_id: self.product_config_id(),
            name: self.name(),
            email: self.email(),
            phone_number: self.phone_number(),
            id_number: self.id_number(),
            periodicity: self.periodicity(),
            discount_code: self.discount_code(),
            imei: self.imei(),
            purchase_date: self.purchase_date(),
            brand: self.brand(),
            model: self.model(),
        };
        api.createPolicy(params, function(r) {
            $('body').append(r.form);
            $('#formPolicyPayment').submit();
            // location.href = 'policies.php';
        });
    }

    self.selectProduct = function() {
        console.log('change product');
        console.log(self.product_id());

        self.categories([]);
        self.product_config_id(null);

        ko.utils.arrayForEach(self.products(), function(item) {
            if (item.id == self.product_id()) {
                self.product(item);
                self.categories(item.categories);
            }
        });
    }

    self.selectCategory = function() {
        console.log('change category');
        console.log(self.product_config_id());

        self.price(null);

        if (self.product()) {
            ko.utils.arrayForEach(self.product().categories, function (item) {
                if (item.pivot.id == self.product_config_id()) {
                    self.category(item);
                    self.price(item.pivot.price);
                }
            });
        }
    }

    self.currentUserId = function() {
        return JSON.parse(sessionStorage.getItem('user')).id;
    }

    self.init();
}

// Activates knockout.js
ko.applyBindings(new CreatePolicyViewModel());
