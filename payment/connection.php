<?php
	// database connection
	class Connection {
		public function dbConnect() {
			try {
				$string = new PDO("mysql:host=localhost; dbname=starwars_db", "root", "");
				$string->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			}
			catch(PDOException $e) {
			    echo 'ERROR: ' . $e->getMessage();
			}
		return $string;
		}
	}
?>