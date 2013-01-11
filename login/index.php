<?php
	// include the class
	include_once('UserService.php');

	// if button submit then check if user is in database and login
	if(isset($_POST['submit'])) {
		$username = $_POST['username'];
		$password = $_POST['password'];

		$object = new User();
		$object -> login($username, $password);
	}
?>

<html>
	<head>
		<meta charset="utf-8">
		<title>Membership</title>
	</head>
	<body>
		<form method="post" action="">
			Username: <input type="text" name="username" />
			Password: <input type="text" name="password" />
			<input type="submit" name="submit" value="Login" />
		</form>
	</body>
</html>