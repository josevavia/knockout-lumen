<?php ob_start(); ?>

<h1>ProductCategories</h1>
<table class="table" data-bind="visible: product_categories().length > 0">
    <thead>
    <tr>
        <td>Id</td>
        <td>Name</td>
    </tr>
    </thead>
    <tbody data-bind="foreach: product_categories">
        <tr>
            <td><span data-bind="text: id"></span></td>
            <td>
                <a data-bind="attr: {href : 'detail.php?idProductCategory='+id}">
                    <span data-bind="text: name"></span>
                </a>
            </td>
            <td>
                <a class="btn btn-primary" data-bind="attr: {href : 'edit.php?idProductCategory='+id}">
                    <span class="glyphicon glyphicon-pencil"></span> Edit
                </a>
                <button class="btn btn-danger" data-bind="click : $parent.showDeleteProductCategory">
                    <span class="glyphicon glyphicon-trash"></span> Delete
                </button>
            </td>
        </tr>
    </tbody>
</table>

<a href="create.php" class="btn btn-primary">New product_category</a>

<?php require "../layout.php"?>

<script type="text/javascript" src="js/list.js"></script>

