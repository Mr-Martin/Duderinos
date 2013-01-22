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
			private $max = 100000000000000;

			// if username and password is not empty then search for username and password and login.
			if(!empty($username) && !empty($password)) {
				$st = $this->db->prepare("SELECT * FROM user WHERE userName=? AND password=?");
				$st->bindParam(1, $username);
				$st->bindParam(2, $password);
				$st->execute();

				if($st->rowCount() == 1) {
					// if correct login, set unic session cookie and goto
					for($unicid=1; $unicid < $max; $unicid++) {
						$hashid = md5($unicid);
						return $hashid;
					}

					session_start();
					$_SESSION['sess_id'] = $hashid;
					$_SESSION['sess_user'] = $username;
					$_SESSION['date'] = date("y-m-d"); 
					// change to correct path
					header("Location: #profile");
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

	class createUser {
		private $db;

		// create db connection
		public function __construct() {
			$this->db = new Connection();
			$this->db = $this->db->dbConnect();
		}

		public function create($username, $password, $name, $email, $userimage) {

			$object = new error();
  			$object->checkErrors($username, $password, $name, $email);

  			$object = new checkUser();
  			$object->check($username);

			if(!empty($username) && !empty($password) && !empty($name) && !empty($email)) {
					$register = $this->db->prepare("INSERT INTO user(username, password, name, email, userimage) VALUES('?', '?', '?', '?', '?')");
					$register->bindParam(1, $username);
					$register->bindParam(2, $password);
					$register->bindParam(3, $name);
					$register->bindParam(4, $email);
					$register->bindParam(5, $userimage);
					$register->execute();

					// if correct creation, set unic session cookie and login new user
					for($unicnewid=1; $unicnewid <> 9999999; $unicnewid++) {
						$hashnewid = md5($unicnewid);
						return $hashnewid;
					}
					$_SESSION['sess_id'] = $hashnewid;
					$_SESSION['sess_user'] = $username; 
					setcookie("user", $username);
					// change to correct path
					header("Location: profile.php");
			}
		}
	}

	class checkUser extends createUser {
		private $db;

		// create db connection
		public function __construct() {
			$this->db = new Connection();
			$this->db = $this->db->dbConnect();
		}

		protected function check($username) {

			// Check if username is taken
			$checkUserName = $this->db->prepare("SELECT COUNT(*) FROM user WHERE username=?");
			$checkUserName->bindParam(1, $username);
			$checkUserName->execute();

			if ($reg_error->rowCount($checkUserName, 0) > 0) {
				$reg_error[] = 1;
			}

		}

	}

	class error extends createUser {

		protected function checkErrors() {

			// Check if any blank fields
			if (empty($username) || empty($password) || empty($name) || empty($email)) { 
			    $reg_error[] = 0; 
			} 
	  		
	  		// Check if emailaddress seems to be ok 
			if (!preg_match('/^[-A-Za-z0-9_.]+[@][A-Za-z0-9_-]+([.][A-Za-z0-9_-]+)*[.][A-Za-z]{2,6}$/', $email)) { 
				$reg_error[] = 2;    
			}

			// Sätt variabler för tomt formulär 
			for ($i=0; $i<4; $i++) { 
				$back[$i] = ""; 
			} 
		}
	}
?>