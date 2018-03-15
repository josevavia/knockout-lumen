<html>

<?php include "../common/header.php"?>

<body class="text-center">
	<h1>Create new user</h1>
	<form data-bind="submit: createUser">
		<input type="text" id="name" class="form-control" placeholder="Name" required autofocus data-bind="value: name">
		<input type="text" id="username" class="form-control" placeholder="User name" required autofocus data-bind="value: username">
		<input type="email" id="email" class="form-control" placeholder="Email" required data-bind="value: email">
		<input type="password" id="password" class="form-control" placeholder="Password" required data-bind="value: password">

		<br />
		<a href="users.php" class="btn btn-primary">Cancel</a>
		<button class="btn btn-primary" type="submit">Save</button>
	</form>
	<?php include "../common/menu.php"?>
</body>

<?php include "../common/footer.php"?>
<script type="text/javascript" src="js/createUser.js"></script>

</html>

