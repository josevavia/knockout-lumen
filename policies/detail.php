<html>

<?php include "../common/header.php"?>

<body class="text-center">

    <div data-bind="with: policy">
        <h1><span data-bind="text: number"></span></h1>
        <p>DISTRIBUTOR: <a data-bind="attr: {href: '../distributors/detail.php?id='+store.distributor.id}"><span data-bind="text: store.distributor.name"></span></a></p>
        <p>STORE: <a data-bind="attr: {href: '../stores/detail.php?id='+store.id}"><span data-bind="text: store.name"></span></a></p>
        <p>IDENTIFIER: <span data-bind="text: identifier"></span></p>
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
        <p>START: <span data-bind="text: validity_start ? moment(validity_start).format('YYYY-MM-DD') : '-'"></span></p>
        <p>END: <span data-bind="text: validity_end ? moment(validity_end).format('YYYY-MM-DD') : '-'"></span></p>

        <h2>Self discount code</h2>
        <div data-bind="with: self_discount">
            <p>CODE: <a data-bind="attr: {href : '../discounts/detail.php?idDiscount='+id}"><span data-bind="text: discount_code"></span></a></p>
            <!-- ko if: usages.length > 0 -->
                <p>Usages:</p>
                <!-- ko foreach: usages -->
                    <p>
                        <span data-bind="text: moment(created_at).format('YYYY-MM-DD')"></span>:
                        <a data-bind="attr: {href : 'detail.php?idPolicy='+identifier}"><span data-bind="text: number"></span></a>
                    </p>
                <!-- /ko -->
            <!-- /ko -->
        </div>

        <!-- ko if: policy_discounts.length > 0 -->
            <h2>Discounts</h2>
            <!-- ko foreach: policy_discounts -->
                <p>CODE: <a data-bind="attr: {href : '../discounts/detail.php?idDiscount='+discount.id}"><span data-bind="text: discount.discount_code"></span></a></p>
                <p>PERCENTAGE: <span data-bind="text: discount_percentage"></span></p>
                <p>POLICY: <a data-bind="attr: {href : 'detail.php?idPolicy='+discount.policy.identifier}"><span data-bind="text: discount.policy.number"></span></a></p>
                <p>START: <span data-bind="text: moment(validity_start).format('YYYY-MM-DD')"></span></p>
                <p>END: <span data-bind="text: moment(validity_end).format('YYYY-MM-DD')"></span></p>
                <hr />
            <!-- /ko -->
        <!-- /ko -->

        <h2>Mobile terminal</h2>
        <table class="table">
            <tr>
                <td>BRAND</td>
                <td>MODEL</td>
                <td>PURCHASE_PRICE</td>
                <td>PURCHASE_DATE</td>
                <td>IMEI</td>
            </tr>
            <!-- ko foreach: mobile_terminals -->
            <tr>
                <td><span data-bind="text: brand"></span></td>
                <td><span data-bind="text: model"></span></td>
                <td><span data-bind="text: purchase_price"></span></td>
                <td><span data-bind="text: moment(purchase_date).format('YYYY-MM-DD')"></span></td>
                <td><span data-bind="text: imei"></span></td>
            </tr>
            <!-- /ko -->
        </table>

        <h2>Periods</h2>
        <table class="table">
            <tr>
                <td>ID</td>
                <td>START_DATE</td>
                <td>END_DATE</td>
                <td>PRICE TOTAL</td>
                <td>PRICE WITHOUT DISCOUNT</td>
                <td>PRICE PER PAYMENT</td>
                <td>PERIODICITY</td>
            </tr>
            <!-- ko foreach: periods -->
            <tr>
                <td><span data-bind="text: id"></span></td>
                <td><span data-bind="text: moment(validity_start).format('YYYY-MM-DD')"></span></td>
                <td><span data-bind="text: moment(validity_end).format('YYYY-MM-DD')"></span></td>
                <td><span data-bind="text: price_total"></span></td>
                <td><span data-bind="text: price_without_discount"></span></td>
                <td><span data-bind="text: price_per_payment"></span></td>
                <td><span data-bind="text: periodicity"></span></td>
            </tr>
            <!-- /ko -->
        </table>

        <h2>Payments</h2>
        <table class="table">
            <tr>
                <td>PAYMENT_IDENTIFIER</td>
                <td>PRICE</td>
                <td>START_DATE</td>
                <td>END_DATE</td>
                <td>PAYMENT_DATE</td>
                <td>IS_RENEWAL</td>
                <td>PERIOD</td>
                <td>CECA_REFERENCE</td>
                <td>CECA_NUM_AUT</td>
                <td>CECA_CARD_TYPE</td>
                <td>CECA_CARD_FIRST_NUMBERS</td>
                <td>CECA_CARD_LAST_NUMBERS</td>
                <td>CECA_CARD_EXPIRATION</td>
                <td>CECA_CARD_TOKEN</td>
                <td></td>
            </tr>
            <!-- ko foreach: policy_payments -->
            <tr>
                <td><span data-bind="text: identifier"></span></td>
                <td><span data-bind="text: price"></span></td>
                <td><span data-bind="text: moment(start_date).format('YYYY-MM-DD')"></span></td>
                <td><span data-bind="text: moment(end_date).format('YYYY-MM-DD')"></span></td>
                <td><span data-bind="text: payment_date ? moment(payment_date).format('YYYY-MM-DD') : '-'"></span></td>
                <td><span data-bind="text: is_renewal"></span></td>
                <td><span data-bind="text: policy_period_id"></span></td>
                <td><span data-bind="text: ceca_reference"></span></td>
                <td><span data-bind="text: ceca_num_aut"></span></td>
                <td><span data-bind="text: ceca_card_type"></span></td>
                <td><span data-bind="text: ceca_card_first_numbers"></span></td>
                <td><span data-bind="text: ceca_card_last_numbers"></span></td>
                <td><span data-bind="text: ceca_card_expiration"></span></td>
                <td><span data-bind="text: ceca_card_token"></span></td>
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

	<a class="btn btn-primary" href="list.php">Cancel</a>
	<?php include "../common/menu.php"?>
</body>

<?php include "../common/footer.php"?>
<script type="text/javascript" src="js/detail.js"></script>

</html>

