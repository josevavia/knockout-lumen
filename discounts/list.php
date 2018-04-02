<html>

<?php include "../common/header.php"?>

<body class="text-center">

	<h1>Discounts</h1>
	<table class="table" data-bind="visible: discounts().length > 0">
		<thead>
		<tr>
			<td>Id</td>
			<td>Discount</td>
			<td>Code</td>
		</tr>
		</thead>
		<tbody data-bind="foreach: discounts">
			<tr>
				<td>
                    <span data-bind="text: id"></span>
                </td>
				<td><span data-bind="text: discount_percentage"></span></td>
				<td>
					<a data-bind="attr: {href : 'detail.php?idDiscount='+id}">
						<span data-bind="text: discount_code"></span>
					</a>
				</td>
			</tr>
		</tbody>
	</table>

	<?php include "../common/menu.php"?>
</body>

<?php include "../common/footer.php"?>
<script type="text/javascript" src="js/list.js"></script>

</html>

