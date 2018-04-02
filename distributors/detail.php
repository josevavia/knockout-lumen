<html>

<?php include "../common/header.php"?>

<body class="text-center">

    <div data-bind="with: distributor">
        <p>ID: <span data-bind="text: id"></span></p>
        <p>NAME: <span data-bind="text: name"></span></p>
        <p>ALIAS: <span data-bind="text: alias"></span></p>
        <p>IDENTIFIER: <span data-bind="text: identifier"></span></p>
        <p>EMAIL: <span data-bind="text: user.email"></span></p>

        <h2>Stores</h2>
        <!-- ko if: stores.length > 0 -->
        <table class="table">
            <tr>
                <td>ID</td>
                <td>NAME</td>
            </tr>
            <!-- ko foreach: stores -->
            <tr>
                <td><span data-bind="text: id"></span></td>
                <td>
                    <a data-bind="attr: {href : '../stores/detail.php?id='+id}">
                        <span data-bind="text: name"></span>
                    </a>
                </td>
            </tr>
            <!-- /ko -->
        </table>
        <!-- /ko -->
        <a class="btn btn-primary" data-bind="attr: {href : '../stores/create.php?idDistributor='+id}">Create store</a>
        <br />
        <br />
        <br />

        <a class="btn btn-primary" href="list.php">Cancel</a>
        <a class="btn btn-primary" data-bind="attr: {href : 'edit.php?id='+id}">Edit</a>
    </div>

	<?php include "../common/menu.php"?>
</body>

<?php include "../common/footer.php"?>
<script type="text/javascript" src="js/detail.js"></script>

</html>

