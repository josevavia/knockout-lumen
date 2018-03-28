<html>

<?php include "../common/header.php"?>

<body class="text-center">

    <div data-bind="foreach: policy">
        <p>NUMBER: <span data-bind="text: number"></span></p>
        <p>NAME: <span data-bind="text: name"></span></p>
        <p>EMAIL: <span data-bind="text: email"></span></p>
        <p>PHONE_NUMBER: <span data-bind="text: phone_number"></span></p>
        <p>ID_NUMBER: <span data-bind="text: id_number"></span></p>
        <p>PRICE_TOTAL: <span data-bind="text: price_total"></span></p>
        <p>PRICE_CONSORTIUM: <span data-bind="text: price_consortium"></span></p>
        <p>PRICE_TAXES: <span data-bind="text: price_taxes"></span></p>
        <p>PRICE_TAX_PERCENTAGE: <span data-bind="text: price_tax_percentage"></span></p>
        <p>PRICE_NET: <span data-bind="text: price_net"></span></p>
        <p>PRICE_PER_PAYMENT: <span data-bind="text: price_per_payment"></span></p>
        <p>PERIODICITY: <span data-bind="text: periodicity"></span></p>
        <p>DAY_OF_PAYMENT: <span data-bind="text: day_of_payment"></span></p>
        <div data-bind="foreach: mobile_terminals">
            <hr />
            <p>IMEI: <span data-bind="text: imei"></span></p>
            <p>PURCHASE_DATE: <span data-bind="text: purchase_date"></span></p>
            <p>BRAND: <span data-bind="text: brand"></span></p>
            <p>MODEL: <span data-bind="text: model"></span></p>
        </div>
        <div data-bind="foreach: policy_payments">
            <hr />
            <p>PAYMENT IDENTIFIER: <span data-bind="text: identifier"></span></p>
            <p>PRICE: <span data-bind="text: price"></span></p>
            <p>ACTIVATION_DATE: <span data-bind="text: activation_date"></span></p>
            <p>START_DATE: <span data-bind="text: start_date"></span></p>
            <p>END_DATE: <span data-bind="text: end_date"></span></p>
            <p>PAYMENT_DATE: <span data-bind="text: payment_date"></span></p>
            <p>IS_RENEWAL: <span data-bind="text: is_renewal"></span></p>
        </div>

        <a class="btn btn-default" data-bind="attr: {href : contract_link}" target="_blank">CONTRACT LINK</a>
        <br />
        <br />
    </div>

	<a class="btn btn-primary" href="policies.php">Cancel</a>
	<?php include "../common/menu.php"?>
</body>

<?php include "../common/footer.php"?>
<script type="text/javascript" src="js/policy.js"></script>

</html>

