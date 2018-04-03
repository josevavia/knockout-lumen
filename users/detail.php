<?php ob_start(); ?>

<div data-bind="with: user">
    <p>ID: <span data-bind="text: id"></span></p>
    <p>EMAIL: <span data-bind="text: email"></span></p>
    <p>APITOKEN: <span data-bind="text: api_token"></span></p>

    <a class="btn btn-primary" data-bind="attr: {href : 'edit.php?idUser='+id}">Edit user</a>
</div>

<?php require "../layout.php"?>

<script type="text/javascript" src="js/detail.js"></script>


