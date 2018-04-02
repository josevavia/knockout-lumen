<html>

<?php include "../common/header.php"?>

<body class="text-center">
	<h1>Edit distributor</h1>
	<form data-bind="submit: save">
		<input type="text" id="name" class="form-control" placeholder="Name" required data-bind="value: name">
		<input type="text" id="alias" class="form-control" placeholder="Alias" required data-bind="value: alias">
        <input type="email" id="email" class="form-control" placeholder="Email" required data-bind="value: email" readonly disabled>

        <br />
		<a href="list.php" class="btn btn-primary">Cancel</a>
		<button class="btn btn-primary" type="submit">Save</button>
	</form>
	<?php include "../common/menu.php"?>
</body>

<?php include "../common/footer.php"?>
<script type="text/javascript" src="js/edit.js"></script>

</html>

