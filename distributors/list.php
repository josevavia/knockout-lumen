<html>

<?php include "../common/header.php"?>

<body class="text-center">

	<h1>Distributors</h1>
	<table class="table" data-bind="visible: distributors().length > 0">
		<thead>
		<tr>
			<td>Id</td>
			<td>Name</td>
			<td>Alias</td>
			<td>Identifier</td>
			<td>Created at</td>
			<td>Updated at</td>
			<td>Operations</td>
		</tr>
		</thead>
		<tbody data-bind="foreach: distributors">
			<tr>
				<td>
                    <span data-bind="text: id"></span>
				</td>
				<td>
					<a data-bind="attr: {href : 'detail.php?id='+id}">
                        <span data-bind="text: name"></span>
					</a>
                </td>
				<td><span data-bind="text: alias"></span></td>
				<td><span data-bind="text: identifier"></span></td>
				<td><span data-bind="text: created_at"></span></td>
				<td><span data-bind="text: updated_at"></span></td>
				<td>
					<a class="btn btn-primary" data-bind="attr: {href : 'edit.php?id='+id}">
						<span class="glyphicon glyphicon-pencil"></span> Edit
					</a>
					<button class="btn btn-danger" data-bind="click : $parent.showDeleteDistributor">
						<span class="glyphicon glyphicon-trash"></span> Delete
					</button>
				</td>
			</tr>
		</tbody>
	</table>

	<a href="create.php" class="btn btn-primary">New distributor</a>

	<?php include "../common/menu.php"?>
</body>

<?php include "../common/footer.php"?>
<script type="text/javascript" src="js/list.js"></script>

</html>
