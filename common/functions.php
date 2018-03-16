<?php

function isLocalhost() {
	$whitelist = array('127.0.0.1', '::1');
	return in_array($_SERVER['REMOTE_ADDR'], $whitelist);
}

function base_url($atRoot=true, $atCore=true, $parse=false) {
	$hostname = $_SERVER['HTTP_HOST'];
	$http = isset($_SERVER['HTTPS']) && strtolower($_SERVER['HTTPS']) !== 'off' ? 'https' : 'http';
	return $http.'://'.$hostname.'/testapi/';
}
