function CreatePolicyViewModel() {
    var self = this;

    self.products = ko.observableArray();
    self.product_id = ko.observable();
    self.product = ko.observable();

    self.product_categories = ko.observableArray();
    self.product_category_id = ko.observable();
    self.category = ko.observable();

    self.price = ko.observable(null);

    self.name = ko.observable("Jose");
    self.email = ko.observable("jose.vazquez.viader@gmail.com");
    self.phone_number = ko.observable("657454038");
    self.id_number = ko.observable("47372094Y");
    self.periodicity = ko.observable("12");
    self.discount_code = ko.observable();
    self.imei = ko.observable("123456789");
    self.purchase_date = ko.observable("2017-05-01");
    self.purchase_price = ko.observable("559.75");
    self.model = ko.observable("Google Nexus ||| 5X");

    self.pan = ko.observable("5540500001000004");
    self.expiration = ko.observable("201812");
    self.cvv2 = ko.observable("989");

    self.currentUser = ko.observable();

    self.init = function() {
        self.checkUser();
        self.getProducts();
        self.getCategories();
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
        });
    }

    self.getCategories = function() {
        var api = new Sumbroker();
        api.getProductCategories({}, function(r) {
            self.product_categories(r);
        });
    }

    self.createPolicy = function() {
        var api = new Sumbroker();
        var params = {
            store_id: 1,
            product_id: self.product_id(),
            product_category_id: self.product_category_id(),
            name: self.name(),
            email: self.email(),
            phone_number: self.phone_number(),
            id_number: self.id_number(),
            periodicity: self.periodicity(),
            discount_code: self.discount_code(),
            imei: self.imei(),
            purchase_date: self.purchase_date(),
            purchase_price: self.purchase_price(),
            model: self.model(),
            pan: self.pan(),
            expiration: self.expiration(),
            cvv2: self.cvv2(),
        };
        api.createPolicy(params, function(r) {
            $('#divForm').html(r.form);
            // $('#formPolicyPayment').submit();
            // location.href = 'policies.php';
        });
    }

    self.updatePrice = function() {
        self.price(null);
        ko.utils.arrayForEach(self.products(), function(itemProduct) {
            if (itemProduct.id == self.product_id()) {
                ko.utils.arrayForEach(itemProduct.categories, function(itemCategory) {
                    if (itemCategory.id == self.product_category_id()) {
                        self.price(itemCategory.pivot.price);
                        return;
                    }
                });
            }
        });
    }

    self.currentUserId = function() {
        return JSON.parse(sessionStorage.getItem('user')).id;
    }

    self.init();
}

// Activates knockout.js
ko.applyBindings(new CreatePolicyViewModel());
