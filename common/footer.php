<?php
function isLocalhost() {
	$whitelist = array('127.0.0.1', '::1');
	return in_array($_SERVER['REMOTE_ADDR'], $whitelist);
}
?>

<?php if (isLocalhost()) { ?>
    <script type="text/javascript" src="http://127.0.0.1:9080/js/v1/api.js"></script>
<?php } else { ?>
    <script type="text/javascript" src="http://sumbroker.josevavia.es/js/v1/api.js"></script>
<?php } ?>

