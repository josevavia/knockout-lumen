<?php ob_start(); ?>

<div data-bind="with: distributor">
    <p>ID: <span data-bind="text: id"></span></p>
    <p>NAME: <span data-bind="text: name"></span></p>
    <p>ALIAS: <span data-bind="text: alias"></span></p>
    <p>IDENTIFIER: <span data-bind="text: identifier"></span></p>
    <p>EMAIL: <span data-bind="text: user.email"></span></p>
    <a class="btn btn-primary" data-bind="attr: {href : 'edit.php?id='+identifier}">Edit</a>

    <h2>Stores</h2>
    <table class="table" data-bind="visible: stores.length > 0">
        <thead>
        <tr>
            <td>Id</td>
            <td>Name</td>
            <td>Alias</td>
            <td>Identifier</td>
            <td>Created at</td>
            <td>Updated at</td>
        </tr>hp
        </thead>
        <tbody data-bind="foreach: stores">
        <tr>
            <td>
                <span data-bind="text: identifier"></span>
            </td>
            <td>
                <a data-bind="attr: {href : '../stores/detail.php?id='+identifier}">
                    <span data-bind="text: name"></span>
                </a>
            </td>
            <td><span data-bind="text: alias"></span></td>
            <td><span data-bind="text: identifier"></span></td>
            <td><span data-bind="text: created_at"></span></td>
            <td><span data-bind="text: updated_at"></span></td>
            <td>
                <a class="btn btn-primary" data-bind="attr: {href : '../stores/edit.php?id='+identifier}">
                    <span class="glyphicon glyphicon-pencil"></span> Edit
                </a>
            </td>
        </tr>
        </tbody>
    </table>
    <a class="btn btn-primary" data-bind="attr: {href : '../stores/create.php?idDistributor='+identifier}">New store</a>

    <h2>Policies</h2>
    <table class="table" data-bind="visible: policies.length > 0">
        <thead>
        <tr>
            <td>Id</td>
            <td>Number</td>
            <td>Name</td>
            <td>Email</td>
            <td>Product</td>
            <td>Price</td>
            <td>Periodicity</td>
            <td>Status</td>
            <td>Created at</td>
            <td>Updated at</td>
        </tr>
        </thead>
        <tbody data-bind="foreach: policies">
        <tr>
            <td><span data-bind="text: identifier"></span></td>
            <td>
                <a data-bind="attr: {href : '../policies/detail.php?id='+identifier}">
                    <span data-bind="text: number"></span>
                </a>
            </td>
            <td><span data-bind="text: name"></span></td>
            <td><span data-bind="text: email"></span></td>
            <td><span data-bind="text: product.name"></span></td>
            <td><span data-bind="text: price_total"></span></td>
            <td><span data-bind="text: periodicity"></span></td>
            <td><span data-bind="text: status"></span></td>
            <td><span data-bind="text: created_at"></span></td>
            <td><span data-bind="text: updated_at"></span></td>
        </tr>
        </tbody>
    </table>
</div>

<?php require "../layout.php"?>

<script type="text/javascript" src="js/detail.js"></script>

