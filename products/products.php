<html>

<?php include "../common/header.php"?>

<body class="text-center">

	<h1>Products</h1>
	<table class="table" data-bind="visible: products().length > 0">
		<thead>
		<tr>
			<td>Id</td>
			<td>Active</td>
			<td>Product</td>
		</tr>
		</thead>
		<tbody data-bind="foreach: products">
			<tr>
				<td>
                    <a data-bind="attr: {href : 'product.php?idProduct='+id}">
                        <span data-bind="text: id"></span>
                    </a>
                </td>
				<td><span data-bind="text: active"></span></td>
				<td>
					<a data-bind="attr: {href : 'product.php?idProduct='+id}">
						<span data-bind="text: name"></span>
					</a>
				</td>
			</tr>
		</tbody>
	</table>

	<?php include "../common/menu.php"?>
</body>

<?php include "../common/footer.php"?>
<script type="text/javascript" src="js/products.js"></script>

</html>

