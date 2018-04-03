<?php

require "common/functions.php"

?>

<html>
<?php require "common/header.php"?>

<body class="text-center">
	<form class="form-signin" data-bind="submit: doLogin">
		<h1 class="h3 mb-3 font-weight-normal">Welcome!</h1>

		<input type="text" id="username" class="form-control" placeholder="User name" required autofocus data-bind="value: username">

		<input type="password" id="password" class="form-control" placeholder="Password" required data-bind="value: password">
		<button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
	</form>
</body>

<?php require "common/footer.php"?>
<script type="text/javascript" src="js/index.js"></script>

</html>

