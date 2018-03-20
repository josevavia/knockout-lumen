<html>

<?php include "../common/header.php"?>

<body class="text-center">
	<h1>Create new policy</h1>
	<form data-bind="submit: createPolicy">

        <select class="form-control" data-bind="value: product_id,
                                                options: products,
                                                optionsValue: 'id',
                                                optionsText: 'name',
                                                optionsCaption: 'Select product...',
                                                event: {change: selectProduct}">
        </select>
        <select class="form-control" data-bind="value: product_config_id,
                                                options: categories,
                                                optionsValue: function(item) { return item.pivot.id; },
                                                optionsText: 'name',
                                                optionsCaption: 'Select category...',
                                                event: {change: selectCategory},
                                                enable: product_id() != null">
        </select>
        <input type="text" id="name" class="form-control" required placeholder="NAME" data-bind="value: name" />
        <input type="text" id="email" class="form-control" required placeholder="EMAIL" data-bind="value: email" />
        <input type="text" id="phone_number" class="form-control" required placeholder="PHONE_NUMBER" data-bind="value: phone_number" />
        <input type="text" id="id_number" class="form-control" required placeholder="ID_NUMBER" data-bind="value: id_number" />
        <input type="text" id="periodicity" class="form-control" required placeholder="PERIODICITY" data-bind="value: periodicity" />
        <input type="text" id="imei" class="form-control" required placeholder="IMEI" data-bind="value: imei" />
        <input type="text" id="purchase_date" class="form-control" required placeholder="PURCHASE_DATE" data-bind="value: purchase_date" />
        <input type="text" id="brand" class="form-control" required placeholder="BRAND" data-bind="value: brand" />
        <input type="text" id="model" class="form-control" required placeholder="MODEL" data-bind="value: model" />

        <input type="text" id="discount_code" class="form-control" placeholder="DISCOUNT_CODE" data-bind="value: discount_code" />

		<br />

        <div data-bind="visible: price() != null">
		    <br />
            Price: <div data-bind="text: price"></div>
        </div>

		<a href="policies.php" class="btn btn-primary">Cancel</a>
		<button class="btn btn-primary" type="submit">Save</button>
	</form>
	<?php include "../common/menu.php"?>
</body>

<?php include "../common/footer.php"?>
<script type="text/javascript" src="js/create_policy.js"></script>

</html>

