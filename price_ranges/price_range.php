<html>

<?php include "../common/header.php"?>

<body class="text-center">

	<p>ID: <span data-bind="text: id"></span></p>
	<p>NAME: <span data-bind="text: name"></span></p>
	<p>DESCRIPTION: <span data-bind="text: description"></span></p>

	<a class="btn btn-primary" href="price_ranges.php">Cancel</a>
	<a class="btn btn-primary" data-bind="attr: {href : 'editPriceRange.php?idPriceRange='+id()}">Edit price_range</a>
	<?php include "../common/menu.php"?>
</body>

<?php include "../common/footer.php"?>
<script type="text/javascript" src="js/price_range.js"></script>

</html>

