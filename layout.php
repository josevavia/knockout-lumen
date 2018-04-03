<?php
$content = ob_get_contents();
ob_end_clean();

require "common/functions.php"

?>
<html>

<?php require "common/header.php"?>

<body>

    <div class="row">

        <div class="col-md-2">
            <a class="btn btn-default btn-block" href="<?=base_url()?>policies/list.php">Policies</a>
            <a class="btn btn-default btn-block" href="<?=base_url()?>stores/list.php">Stores</a>
            <a class="btn btn-default btn-block" href="<?=base_url()?>distributors/list.php">Distributors</a>
			<?php /*
            <a class="btn btn-default btn-block" href="<?=base_url()?>users/list.php">Users</a>
            <a class="btn btn-default btn-block" href="<?=base_url()?>product_categories/list.php">Product Categories</a>
            <a class="btn btn-default btn-block" href="<?=base_url()?>products/list.php">Products</a>
            <a class="btn btn-default btn-block" href="<?=base_url()?>discounts/list.php">Discounts</a>
            */ ?>
            <hr />
            <button class="btn btn-default btn-block" data-bind="click: logout, visible: currentUserId() > 0">Logout</button>
        </div>

        <div class="col-md-10">
            <?=$content?>
        </div>

    </div>

</body>

<?php require "common/footer.php"?>

</html>

