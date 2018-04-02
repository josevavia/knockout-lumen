<html>

<?php include "../common/header.php"?>

<body class="text-center">

    <div data-bind="foreach: product">
        <p>ID: <span data-bind="text: id"></span></p>
        <p>NAME: <span data-bind="text: name"></span></p>

        <hr />
        Precios
        <div data-bind="foreach: prices">
            <p><span data-bind="text: name"></span>:  <span data-bind="text: pivot.price"></span>€</p>
        </div>

        <hr />
        Coberturas:
        <div data-bind="foreach: coverages">
            <p><span data-bind="text: name"></span></p>
        </div>
    </div>

	<a class="btn btn-primary" href="list.php">Cancel</a>
	<?php include "../common/menu.php"?>
</body>

<?php include "../common/footer.php"?>
<script type="text/javascript" src="js/detail.js"></script>

</html>

