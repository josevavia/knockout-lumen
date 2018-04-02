<html>

<?php include "../common/header.php"?>

<body class="text-center">
	<h1>Create new user</h1>
	<form data-bind="submit: createUser">
		<input type="email" id="email" class="form-control" placeholder="Email / login" required autofocus data-bind="value: email">
		<input type="password" id="password" class="form-control" placeholder="Password" required data-bind="value: password">

		<br />
		<a href="list.php" class="btn btn-primary">Cancel</a>
		<button class="btn btn-primary" type="submit">Save</button>
	</form>
	<?php include "../common/menu.php"?>
</body>

<?php include "../common/footer.php"?>
<script type="text/javascript" src="js/create.js"></script>

</html>

