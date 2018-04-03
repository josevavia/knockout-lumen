<?php ob_start(); ?>

<h1>Edit distributor</h1>
<form data-bind="submit: save">
    <input type="text" id="name" class="form-control" placeholder="Name" required data-bind="value: name">
    <input type="text" id="alias" class="form-control" placeholder="Alias" required data-bind="value: alias">
    <input type="email" id="email" class="form-control" placeholder="Email" required data-bind="value: email" readonly disabled>

    <br />
    <button class="btn btn-primary" type="submit">Save</button>
</form>

<?php require "../layout.php"?>

<script type="text/javascript" src="js/edit.js"></script>


