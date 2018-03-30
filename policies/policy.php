<html>

<?php include "../common/header.php"?>

<body class="text-center">

    <div data-bind="foreach: policy">
        <h1><span data-bind="text: number"></span></h1>
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

        <h2>Mobile terminal</h2>
        <table class="table">
            <tr>
                <td>IMEI</td>
                <td>PURCHASE_DATE</td>
                <td>BRAND</td>
                <td>MODEL</td>
            </tr>
            <!-- ko foreach: mobile_terminals -->
            <tr>
                <td><span data-bind="text: imei"></span></td>
                <td><span data-bind="text: purchase_date"></span></td>
                <td><span data-bind="text: brand"></span></td>
                <td><span data-bind="text: model"></span></td>
            </tr>
            <!-- /ko -->
        </table>

        <h2>Payments</h2>
        <table class="table">
            <tr>
                <td>PAYMENT_IDENTIFIER</td>
                <td>PRICE</td>
                <td>ACTIVATION_DATE</td>
                <td>START_DATE</td>
                <td>END_DATE</td>
                <td>PAYMENT_DATE</td>
                <td>IS_RENEWAL</td>
                <td></td>
            </tr>
            <!-- ko foreach: policy_payments -->
            <tr>
                <td><span data-bind="text: identifier"></span></td>
                <td><span data-bind="text: price"></span></td>
                <td><span data-bind="text: activation_date"></span></td>
                <td><span data-bind="text: start_date"></span></td>
                <td><span data-bind="text: end_date"></span></td>
                <td><span data-bind="text: payment_date"></span></td>
                <td><span data-bind="text: is_renewal"></span></td>
                <td>
                    <!-- ko if: !payment_date -->
                    <button class="btn btn-default" data-bind="click: function(data, event) { $parents[1].payPayment($parent.identifier, identifier, $parent.identifier, identifier) }">Mark as paid</button>
                    <!-- /ko -->
                </td>
            </tr>
            <!-- /ko -->
        </table>

        <span data-bind="if : contract_link">
            <a class="btn btn-default" data-bind="attr: {href : contract_link}" target="_blank">CONTRACT LINK</a>
        </span>
        <span data-bind="if : sign_link">
            <a class="btn btn-default" data-bind="attr: {href : sign_link}, if : sign_link" target="_blank">SIGN LINK</a>
        </span>
        <br />
        <br />
    </div>

	<a class="btn btn-primary" href="policies.php">Cancel</a>
	<?php include "../common/menu.php"?>
</body>

<?php include "../common/footer.php"?>
<script type="text/javascript" src="js/policy.js"></script>

</html>

