<hr />
<br />
<div>
    <a class="btn btn-default" href="<?=base_url()?>index.php">Index</a>
    <a class="btn btn-default" href="<?=base_url()?>users/users.php">Users</a>
    <a class="btn btn-default" href="<?=base_url()?>price_ranges/price_ranges.php">Price Ranges</a>
    <br />
    <button class="btn btn-link" data-bind="click: logout, visible: currentUserId() > 0">Logout</button>
</div>
<hr />

