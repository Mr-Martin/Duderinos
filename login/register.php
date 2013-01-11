<?php
	session_start(); // Alltid överst på sidan 

	// Kolla om inloggad = sessionen satt 
	if (!isset($_SESSION['sess_user'])){ 
		header("Location: index.php"); 
		exit; 
	}

	$pagetitle = 'Register new User';
	include('connection.php');

	if (isset($_POST['submit'])){ 
 		
		$username = htmlspecialchars($_POST['username']);
 		$password = htmlspecialchars($_POST['password']);
 		$name = htmlspecialchars($_POST['name']);
 		$email = $_POST['email'];
 		$userimage = '';

 		// Erase blanks infront and after
 		foreach($_POST as $key => $val){ 
    		$_POST[$key] = trim($val); 
  		}

  		$error_list[0] = "Not all fields where filled with info"; 
		$error_list[1] = "The username is taken, choose another"; 
		$error_list[2] = "Wrong emailaddress";

  		$object = new createUser();
		$object->create($username, $password, $name, $email, $userimage);

 	} 
 
?>

<html>
	<head>
		<title><?php echo $pagetitle; ?></title>
		<meta charset="utf-8">
	</head>
	<body>
		<h1><?php echo '$pagetitle'; ?></h1>
		<?php
			// Show error message if not all fields are filled in.
			if (isset($reg_error)){ 
			 
			  echo "Something went wrong:<br>\n"; 
			  echo "<ul>\n"; 
			  for ($i=0; $i<sizeof($reg_error); $i++) { 
			    echo "<li>{$error_list[$reg_error[$i]]}</li>\n"; 
			  } 
			  echo "</ul>\n"; 
			  
			  $back[0] = $_POST['username']; 
			  $back[1] = $_POST['password']; 
			  $back[2] = $_POST['name']; 
			  $back[3] = $_POST['email']; 
			 
			} 
		?>
		<form action="register.php" method="post"> 
		<p>New username:<br />
			<input name="username" type="text" value="<?=$back[0] ?>" size="35"></p>
		<p>New password:<br />
			<input name="password" type="text" value="<?=$back[1] ?>" size="35"></p>
		<p>Your name:<br />
			<input name="name" type="text" value="<?=$back[2] ?>" size="35"></p>
		<p>Your emailaddress:<br />
			<input name="email" type="text" value="<?=$back[3] ?>" size="35"></p>
		<p><input type="submit" name="submit" value="Become a member"></p>
		</form>
	</body>
</html>