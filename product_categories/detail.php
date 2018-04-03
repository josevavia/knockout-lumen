<?php ob_start(); ?>

<p>ID: <span data-bind="text: id"></span></p>
<p>NAME: <span data-bind="text: name"></span></p>

<a class="btn btn-primary" data-bind="attr: {href : 'edit.php?idProductCategory='+id()}">Edit product_category</a>

<?php require "../layout.php"?>

<script type="text/javascript" src="js/product_category.js"></script>

