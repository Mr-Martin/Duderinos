<?php
	// database connection
	class Connection {
		public function dbConnect() {
			return new PDO("mysql:host=localhost; dbname=membership", "root", "");
		}
	}
?>