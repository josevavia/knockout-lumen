<html>

<?php include "../common/header.php"?>

<body class="text-center">

	<p>ID: <span data-bind="text: id"></span></p>
	<p>NAME: <span data-bind="text: name"></span></p>
	<p>USERNAME: <span data-bind="text: username"></span></p>
	<p>EMAIL: <span data-bind="text: email"></span></p>

	<a class="btn btn-primary" href="users.php">Cancel</a>
	<a class="btn btn-primary" data-bind="attr: {href : 'editUser.php?idUser='+id()}">Edit user</a>
	<?php include "../common/menu.php"?>
</body>

<?php include "../common/footer.php"?>
<script type="text/javascript" src="js/user.js"></script>

</html>

