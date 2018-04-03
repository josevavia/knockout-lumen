<?php ob_start(); ?>

<h1>Create new Store</h1>
<form data-bind="submit: save">

    <select class="form-control" data-bind="value: distributor_id,
                                            options: distributors,
                                            optionsValue: 'id',
                                            optionsText: 'name'">
    </select>

    <input type="text" id="name" class="form-control" placeholder="Name" required data-bind="value: name">
    <input type="text" id="alias" class="form-control" placeholder="Alias" required data-bind="value: alias">
    <input type="email" id="email" class="form-control" placeholder="Email" required data-bind="value: email">
    <input type="password" id="password" class="form-control" placeholder="Password" required data-bind="value: password">

    <br />
    <button class="btn btn-primary" type="submit">Save</button>
</form>

<?php require "../layout.php"?>

<script type="text/javascript" src="js/create.js"></script>

