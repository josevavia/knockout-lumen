<html>

<?php include "../common/header.php"?>

<body class="text-center">

    <div data-bind="with: store">
        <p>ID: <span data-bind="text: id"></span></p>
        <p>NAME: <span data-bind="text: name"></span></p>
        <p>ALIAS: <span data-bind="text: alias"></span></p>
        <p>IDENTIFIER: <span data-bind="text: identifier"></span></p>
        <p>EMAIL: <span data-bind="text: user.email"></span></p>

        <h2>Policies</h2>
        <!-- ko if: policies.length > 0 -->
        <table class="table">
            <tr>
                <td>ID</td>
                <td>NUMBER</td>
                <td>PRICE</td>
                <td>TYPE</td>
            </tr>
            <!-- ko foreach: policies -->
            <tr>
                <td><span data-bind="text: identifier"></span></td>
                <td>
                    <a data-bind="attr: {href : '../policies/detail.php?idPolicy='+identifier}">
                        <span data-bind="text: number"></span>
                    </a>
                </td>
                <td><span data-bind="text: price_total"></span></td>
                <td><span data-bind="text: product.name"></span></td>
            </tr>
            <!-- /ko -->
        </table>
        <!-- /ko -->
        <a class="btn btn-primary" data-bind="attr: {href : '../policies/create.php?idStore='+id}">Create policy</a>
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

