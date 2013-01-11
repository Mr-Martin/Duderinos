<?php
session_start();

// To fill with content for profile or everything that should show then login
echo '<html>
	<head>
		<title>$title</title>
	</head>
	<body>
		<h1>Profile</h1>
		<p>$content</p>
	</body>
</html>';
?>
