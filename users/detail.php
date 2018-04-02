<html>

<?php include "../common/header.php"?>

<body class="text-center">

    <div data-bind="with: user">
        <p>ID: <span data-bind="text: id"></span></p>
        <p>EMAIL: <span data-bind="text: email"></span></p>
        <p>APITOKEN: <span data-bind="text: api_token"></span></p>

        <a class="btn btn-primary" href="list.php">Cancel</a>
        <a class="btn btn-primary" data-bind="attr: {href : 'edit.php?idUser='+id}">Edit user</a>
    </div>

	<?php include "../common/menu.php"?>
</body>

<?php include "../common/footer.php"?>
<script type="text/javascript" src="js/detail.js"></script>

</html>

