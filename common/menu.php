<hr />
<br />
<div>
    <a class="btn btn-default" href="<?=base_url()?>index.php">Index</a>
    <a class="btn btn-default" href="<?=base_url()?>distributors/list.php">Distributors</a>
    <a class="btn btn-default" href="<?=base_url()?>stores/list.php">Stores</a>
    <a class="btn btn-default" href="<?=base_url()?>policies/list.php">Policies</a>
	<?php /*
    <a class="btn btn-default" href="<?=base_url()?>users/list.php">Users</a>
    <a class="btn btn-default" href="<?=base_url()?>product_categories/list.php">Product Categories</a>
    <a class="btn btn-default" href="<?=base_url()?>products/list.php">Products</a>
    <a class="btn btn-default" href="<?=base_url()?>discounts/list.php">Discounts</a>
    */ ?>
    <br />
    <button class="btn btn-link" data-bind="click: logout, visible: currentUserId() > 0">Logout</button>
</div>
<hr />

