function CreateProductCategoryViewModel() {
    var self = this;

    self.name = ko.observable();

    self.init = function() {
    }

    self.createProductCategory = function() {
        var api = new Sumbroker();
        var params = {
            name: self.name(),
        };
        api.createProductCategory(params, function(r) {
            location.href = 'list.php';
        });
    }

    self.init();
}

// Activates knockout.js
ko.applyBindings(new CreateProductCategoryViewModel(), document.getElementById('content'));
