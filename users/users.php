<html>

<?php include "../common/header.php"?>

<body class="text-center">

	<h1>Users</h1>
	<table class="table" data-bind="visible: users().length > 0">
		<thead>
		<tr>
			<td>Id</td>
			<td>Name</td>
			<td>Username</td>
			<td>Email</td>
			<td>Created at</td>
			<td>Updated at</td>
			<td>Operations</td>
		</tr>
		</thead>
		<tbody data-bind="foreach: users">
			<tr>
				<td>
					<span class="glyphicon" data-bind="
						css: {
							'glyphicon-ok-circle' : id == $parent.currentUser().id,
							'glyphicon-remove-circle' : id != $parent.currentUser().id
						}"></span>
					<span data-bind="text: id"></span>
				</td>
				<td>
					<a data-bind="attr: {href : 'user.php?idUser='+id}">
						<span data-bind="text: name"></span>
					</a>
				</td>
				<td><span data-bind="text: username"></span></td>
				<td><span data-bind="text: email"></span></td>
				<td><span data-bind="text: created_at"></span></td>
				<td><span data-bind="text: updated_at"></span></td>
				<td>
					<a class="btn btn-primary" data-bind="attr: {href : 'editUser.php?idUser='+id}">
						<span class="glyphicon glyphicon-pencil"></span> Edit
					</a>
					<button class="btn btn-danger" data-bind="click : $parent.showDeleteUser, visible: id != $parent.currentUser().id">
						<span class="glyphicon glyphicon-trash"></span> Delete
					</button>
				</td>
			</tr>
		</tbody>
	</table>

	<a href="createUser.php" class="btn btn-primary">New user</a>

	<?php include "../common/menu.php"?>
</body>

<?php include "../common/footer.php"?>
<script type="text/javascript" src="js/users.js"></script>

</html>
