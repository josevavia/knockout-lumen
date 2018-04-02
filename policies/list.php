<html>

<?php include "../common/header.php"?>

<body class="text-center">

	<h1>Policies</h1>
	<table class="table" data-bind="visible: policies().length > 0">
		<thead>
		<tr>
			<td>Id</td>
			<td>Number</td>
			<td>Store</td>
			<td>Name</td>
			<td>Email</td>
			<td>Product</td>
			<td>Price</td>
			<td>Periodicity</td>
			<td>Status</td>
			<td>Created at</td>
			<td>Updated at</td>
		</tr>
		</thead>
		<tbody data-bind="foreach: policies">
			<tr>
				<td><span data-bind="text: identifier"></span></td>
				<td>
					<a data-bind="attr: {href : 'detail.php?id='+identifier}">
						<span data-bind="text: number"></span>
					</a>
				</td>
				<td><span data-bind="text: store.name"></span></td>
				<td><span data-bind="text: name"></span></td>
				<td><span data-bind="text: email"></span></td>
				<td><span data-bind="text: product.name"></span></td>
				<td><span data-bind="text: price_total"></span></td>
				<td><span data-bind="text: periodicity"></span></td>
				<td><span data-bind="text: status"></span></td>
				<td><span data-bind="text: created_at"></span></td>
				<td><span data-bind="text: updated_at"></span></td>
			</tr>
		</tbody>
	</table>

	<a href="create.php" class="btn btn-primary">New policy</a>

	<?php include "../common/menu.php"?>
</body>

<?php include "../common/footer.php"?>
<script type="text/javascript" src="js/list.js"></script>

</html>

