<?php

function isLocalhost() {
	$whitelist = array('127.0.0.1', '::1');
	return in_array($_SERVER['REMOTE_ADDR'], $whitelist);
}

function base_url() {
	if (isLocalhost()) {
		return 'http://localhost/testapi/';
	}
	return 'http://espacio.josevavia.es/';
}
