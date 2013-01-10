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
			if(!empty($username) && !empty($password)) {
				$st = $this->db->prepare("SELECT * FROM users WHERE username=? AND password=?");
				$st->bindParam(1, $username);
				$st->bindParam(2, $password);
				$st->execute();

				if($st->rowCount() == 1) {
					
				} else {
					echo 'Incorrect username or password';
				}

			} else {
				echo 'Please enter a username and password';
			}
		}
	}
?>