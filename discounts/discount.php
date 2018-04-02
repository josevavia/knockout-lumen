<html>

<?php include "../common/header.php"?>

<body class="text-center" data-bind="with: discount">

	<p>ID: <span data-bind="text: id"></span></p>
	<p>IDENTIFIER: <span data-bind="text: identifier"></span></p>
	<p>DISCOUNT_CODE: <span data-bind="text: discount_code"></span></p>
	<p>DISCOUNT_PERCENTAGE: <span data-bind="text: discount_percentage"></span></p>
    <p>Usages:</p>
    <!-- ko foreach: usages -->
    <p>
        <span data-bind="text: moment(created_at).format('YYYY-MM-DD')"></span>:
        <a data-bind="attr: {href : '../policies/policy.php?idPolicy='+identifier}"><span data-bind="text: number"></span></a>
    </p>
    <!-- /ko -->

	<a class="btn btn-primary" href="discounts.php">Cancel</a>
	<?php include "../common/menu.php"?>
</body>

<?php include "../common/footer.php"?>
<script type="text/javascript" src="js/discount.js"></script>

</html>

