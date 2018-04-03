<?php ob_start(); ?>

<h1>Create new user</h1>
<form data-bind="submit: createUser">
    <input type="email" id="email" class="form-control" placeholder="Email / login" required autofocus data-bind="value: email">
    <input type="password" id="password" class="form-control" placeholder="Password" required data-bind="value: password">

    <br />
    <button class="btn btn-primary" type="submit">Save</button>
</form>

<?php require "../layout.php"?>

<script type="text/javascript" src="js/create.js"></script>

