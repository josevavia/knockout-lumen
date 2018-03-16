<html>

<?php include "../common/header.php"?>

<body class="text-center">
	<h1>Edit user</h1>
	<form data-bind="submit: updateUser">
		<input type="email" id="username" class="form-control" placeholder="User name" required autofocus data-bind="value: username">

		<br />
		<a href="users.php" class="btn btn-primary">Cancel</a>
		<button class="btn btn-primary" type="submit">Save</button>
	</form>
	<?php include "../common/menu.php"?>
</body>

<?php include "../common/footer.php"?>
<script type="text/javascript" src="js/edit_user.js"></script>

</html>

