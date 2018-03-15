<html>

<?php include "../common/header.php"?>

<body class="text-center">
	<h1>Create new price_range</h1>
	<form data-bind="submit: createPriceRange">
		<input type="text" id="name" class="form-control" placeholder="Name" required autofocus data-bind="value: name">
		<input type="text" id="description" class="form-control" placeholder="Description" required autofocus data-bind="value: description">

		<br />
		<a href="price_ranges.php" class="btn btn-primary">Cancel</a>
		<button class="btn btn-primary" type="submit">Save</button>
	</form>
	<?php include "../common/menu.php"?>
</body>

<?php include "../common/footer.php"?>
<script type="text/javascript" src="js/createPriceRange.js"></script>

</html>

