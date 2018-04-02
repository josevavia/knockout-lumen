<html>

<?php include "../common/header.php"?>

<body class="text-center">
	<h1>Edit product_category</h1>
	<form data-bind="submit: updateProductCategory">
		<input type="text" id="name" class="form-control" placeholder="Name" required autofocus data-bind="value: name">

		<br />
		<a href="list.php" class="btn btn-primary">Cancel</a>
		<button class="btn btn-primary" type="submit">Save</button>
	</form>
	<?php include "../common/menu.php"?>
</body>

<?php include "../common/footer.php"?>
<script type="text/javascript" src="js/edit.js"></script>

</html>

