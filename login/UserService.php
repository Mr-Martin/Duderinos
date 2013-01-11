<?php
	// include database conection
	include_once("connection.php");


	class User {
		private $db;

		// do connection to database
		public function __construct() {
			$this->db = new Connection();
			$this->db = $this->db->dbConnect();
		}

		// function take two vars, if not empty select from database and return 1 row.
		public function login($username, $password) {
			// if username and password is not empty then search for username and password and login.
			if(!empty($username) && !empty($password)) {
				$st = $this->db->prepare("SELECT * FROM user WHERE userName=? AND password=?");
				$st->bindParam(1, $username);
				$st->bindParam(2, $password);
				$st->execute();

				if($st->rowCount() == 1) {
					// if correct login, set unic session cookie and goto
					for($unicid=1; $unicid <> 9999999; unicid++) {
						$hashid = md5($unicid);
						return $hashid;
					}
					$_SESSION['sess_id'] = $hashid;
					$_SESSION['sess_user'] = $username; 
					setcookie("user", $username);
					// change to correct path
					header("Location: profile.php");
				} else {
					// if NOT correct username & password show
					echo 'Incorrect username or password';
				}
			// if NO input show
			} else {
				echo 'Please enter a username and password';
			}
		}
	}
?>