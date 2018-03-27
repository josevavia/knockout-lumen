<html>

<?php include "../common/header.php"?>

<body class="text-center">

	<h1>Users</h1>
	<table class="table" data-bind="visible: users().length > 0">
		<thead>
		<tr>
			<td>Id</td>
			<td>Username</td>
			<td>Api token</td>
			<td>Created at</td>
			<td>Updated at</td>
			<td>Operations</td>
		</tr>
		</thead>
		<tbody data-bind="foreach: users">
			<tr>
				<td>
					<span data-bind="text: id"></span>
				</td>
				<td>
					<a data-bind="attr: {href : 'user.php?idUser='+id}">
						<span data-bind="text: email"></span>
					</a>
				</td>
				<td><span data-bind="text: api_token"></span></td>
				<td><span data-bind="text: created_at"></span></td>
				<td><span data-bind="text: updated_at"></span></td>
				<td>
					<a class="btn btn-primary" data-bind="attr: {href : 'edit_user.php?idUser='+id}">
						<span class="glyphicon glyphicon-pencil"></span> Edit
					</a>
					<button class="btn btn-danger" data-bind="click : $parent.showDeleteUser">
						<span class="glyphicon glyphicon-trash"></span> Delete
					</button>
				</td>
			</tr>
		</tbody>
	</table>

	<a href="create_user.php" class="btn btn-primary">New user</a>

	<?php include "../common/menu.php"?>
</body>

<?php include "../common/footer.php"?>
<script type="text/javascript" src="js/users.js"></script>

</html>

