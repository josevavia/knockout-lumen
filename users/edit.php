<?php ob_start(); ?>

<h1>Edit user</h1>
<form data-bind="submit: updateUser">
    <input type="text" id="name" class="form-control" placeholder="Name" required autofocus data-bind="value: name">

    <br />
    <button class="btn btn-primary" type="submit">Save</button>
</form>

<?php require "../layout.php"?>

<script type="text/javascript" src="js/edit.js"></script>

