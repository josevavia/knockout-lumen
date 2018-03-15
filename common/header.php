<?php
function base_url($atRoot=true, $atCore=true, $parse=false) {
	if (isset($_SERVER['HTTP_HOST'])) {
		$http = isset($_SERVER['HTTPS']) && strtolower($_SERVER['HTTPS']) !== 'off' ? 'https' : 'http';
		$hostname = $_SERVER['HTTP_HOST'];
		$dir = str_replace(basename($_SERVER['SCRIPT_NAME']), '', $_SERVER['SCRIPT_NAME']);

		$core = preg_split('@/@', str_replace($_SERVER['DOCUMENT_ROOT'], '', realpath(dirname(__FILE__))), NULL, PREG_SPLIT_NO_EMPTY);
		$core = $core[0];

		$tmplt = $atRoot ? ($atCore ? "%s://%s/%s/" : "%s://%s/") : ($atCore ? "%s://%s/%s/" : "%s://%s%s");
		$end = $atRoot ? ($atCore ? $core : $hostname) : ($atCore ? $core : $dir);
		$base_url = sprintf($tmplt, $http, $hostname, $end);
	} else $base_url = 'http://localhost/';

	if ($parse) {
		$base_url = parse_url($base_url);
		if (isset($base_url['path'])) if ($base_url['path'] == '/') $base_url['path'] = '';
	}

	return $base_url;
}
?>
<head>
	<title>Test API</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/knockout/3.4.2/knockout-min.js"></script>
</head>