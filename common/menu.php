<hr />
<br />
<div>
    <a class="btn btn-default" href="<?=base_url()?>index.php">Index</a>
    <a class="btn btn-default" href="<?=base_url()?>users/users.php">Users</a>
    <a class="btn btn-default" href="<?=base_url()?>product_categories/product_categories.php">Product Categories</a>
    <a class="btn btn-default" href="<?=base_url()?>policies/policies.php">Policies</a>
    <br />
    <button class="btn btn-link" data-bind="click: logout, visible: currentUserId() > 0">Logout</button>
</div>
<hr />

