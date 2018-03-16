<html>

<?php include "../common/header.php"?>

<body class="text-center">

	<p>ID: <span data-bind="text: id"></span></p>
	<p>USERNAME: <span data-bind="text: username"></span></p>
	<p>APITOKEN: <span data-bind="text: api_token"></span></p>

	<a class="btn btn-primary" href="users.php">Cancel</a>
	<a class="btn btn-primary" data-bind="attr: {href : 'edit_user.php?idUser='+id()}">Edit user</a>
	<?php include "../common/menu.php"?>
</body>

<?php include "../common/footer.php"?>
<script type="text/javascript" src="js/user.js"></script>

</html>

