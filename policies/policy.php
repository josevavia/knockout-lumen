<html>

<?php include "../common/header.php"?>

<body class="text-center">

    <div data-bind="foreach: policy">
        <p>NUMBER: <span data-bind="text: number"></span></p>
        <p>NAME: <span data-bind="text: name"></span></p>
        <p>EMAIL: <span data-bind="text: email"></span></p>
        <p>PHONE_NUMBER: <span data-bind="text: phone_number"></span></p>
        <p>ID_NUMBER: <span data-bind="text: id_number"></span></p>
        <p>PRICE: <span data-bind="text: price"></span></p>
        <p>PERIODICITY: <span data-bind="text: periodicity"></span></p>
        <p>DISCOUNT_CODE: <span data-bind="text: discount_code"></span></p>
        <div data-bind="foreach: mobile_terminals">
            <p>IMEI: <span data-bind="text: imei"></span></p>
            <p>PURCHASE_DATE: <span data-bind="text: purchase_date"></span></p>
            <p>BRAND: <span data-bind="text: brand"></span></p>
            <p>MODEL: <span data-bind="text: model"></span></p>
        </div>
    </div>

	<a class="btn btn-primary" href="policies.php">Cancel</a>
	<a class="btn btn-primary" data-bind="attr: {href : 'edit_policy.php?idPolicy='+id()}">Edit policy</a>
	<?php include "../common/menu.php"?>
</body>

<?php include "../common/footer.php"?>
<script type="text/javascript" src="js/policy.js"></script>

</html>

