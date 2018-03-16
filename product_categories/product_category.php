<html>

<?php include "../common/header.php"?>

<body class="text-center">

	<p>ID: <span data-bind="text: id"></span></p>
	<p>NAME: <span data-bind="text: name"></span></p>

	<a class="btn btn-primary" href="product_categories.php">Cancel</a>
	<a class="btn btn-primary" data-bind="attr: {href : 'edit_product_category.php?idProductCategory='+id()}">Edit product_category</a>
	<?php include "../common/menu.php"?>
</body>

<?php include "../common/footer.php"?>
<script type="text/javascript" src="js/product_category.js"></script>

</html>

