<html>

<?php include "../common/header.php"?>

<body class="text-center">

	<h1>PriceRanges</h1>
	<table class="table" data-bind="visible: price_ranges().length > 0">
		<thead>
		<tr>
			<td>Id</td>
			<td>Name</td>
			<td>Description</td>
		</tr>
		</thead>
		<tbody data-bind="foreach: price_ranges">
			<tr>
				<td><span data-bind="text: id"></span></td>
				<td>
					<a data-bind="attr: {href : 'price_range.php?idPriceRange='+id}">
						<span data-bind="text: name"></span>
					</a>
				</td>
				<td><span data-bind="text: description"></span></td>
				<td>
					<a class="btn btn-primary" data-bind="attr: {href : 'editPriceRange.php?idPriceRange='+id}">
						<span class="glyphicon glyphicon-pencil"></span> Edit
					</a>
					<button class="btn btn-danger" data-bind="click : $parent.showDeletePriceRange">
						<span class="glyphicon glyphicon-trash"></span> Delete
					</button>
				</td>
			</tr>
		</tbody>
	</table>

	<a href="createPriceRange.php" class="btn btn-primary">New price_range</a>
	<?php include "../common/menu.php"?>
</body>

<?php include "../common/footer.php"?>
<script type="text/javascript" src="js/price_ranges.js"></script>

</html>

