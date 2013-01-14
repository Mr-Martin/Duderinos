<?php
class dbConnect {
  public $mysql;
  	protected $db_host = 'localhost';
  	protected $db_username = 'root';
  	protected $db_password = 'root';
  	protected $db_name = 'starwars_db';
}




class getID extends dbConnect{

//  	Kolla om GET finns - om inte skicka felmeddelande
// 		Om GET finns - hämta productID

public function getID(){
  	if(!$_GET){
  		echo "Get saknas";
  	}
  	else {
  		$productID = $_GET['ID'];
  		return $productID;
  	}
  }
}




class getInfo extends getID{
	//		Använd productID som argument till funktionen och sätt in i en mySQL-query
	// 		Så här skrev Benji: $info = $this->db->get("SELECT sql queryn")

public function getInfo($productID){
	
  	$db = mysqli_connect(
		$this->db_host, //db
		$this->db_username, //username
		$this->db_password, //password
		$this->db_name //dbname
		);

	$sql ="SELECT * FROM product WHERE productId=$productID";
	
	$res = mysqli_query($db, $sql);

//		Sätt MySQL-svaren i variabler	
	while ($row = mysqli_fetch_assoc($res))
		{
			$name = $row['productName'];
			$manufactur = $row['productManufactur'];
			$price = $row['productPrice'];
			$stock = $row['productStock'];
			$info = $row['productInfo'];
		}
	}
}

$dbConnect = new dbConnect();

$getID = new getID();
$productID = $getID->getID();

$getInfo = new getInfo();
$productInfo = $getInfo->getInfo($productID);

echo $productID;
?>


<html>
	<head>
		<title></title>
	</head>
	<body>

		<h1>	<?php echo $name . "<br><br>"; ?> </h1>

<!-- START OF PAYMENT -->
		<form id="buy-form" method="post" action="">
        	
        	<p class="form-label">First Name:</p>
        	<input class="text" id="first-name" name="firstname" spellcheck="false"></input>
	        
	        <p class="form-label">Last Name:</p>
	        <input class="text" id="last-name" name="lastname" spellcheck="false"></input>
	       	
	       	<p class="form-label">Email Address:</p>
	       	<input class="text" id="email" name="email" spellcheck="false"></input>
	       
	        <p class="form-label">Credit Card Number:</p>
	        <input class="text" id="card-number" name="cardnumber" autocomplete="off"></input>
	        
	        <p class="form-label">Expiration Date:</p>
		        <select id="expiration-month" name="expirationmonth">
		        <option value="1">January</option>
		        <option value="2">February</option>
		        <option value="3">March</option>
		        <option value="4">April</option>
		        <option value="5">May</option>
		        <option value="6">June</option>
		        <option value="7">July</option>
		        <option value="8">August</option>
		        <option value="9">September</option>
		        <option value="10">October</option>
		        <option value="11">November</option>
		        <option value="12">December</option>
	        </select>
	        
	        <select id="expiration-year" name="expirationyear">
	            <?php
	            	// automatically populates our expiration-year field with the next 20 years
	               $yearRange = 20;
	               $thisYear = date('Y');
	               $startYear = ($thisYear + $yearRange);
	               foreach (range($thisYear, $startYear) as $year)
	               {
	                  if ( $year == $thisYear) {
	                     print '<option value="'.$year.'" selected="selected">' . $year . '</option>';
	                  } else {
	                     print '<option value="'.$year.'">' . $year . '</option>';
	                  }
	               }
	            ?>
	        </select>
        	
        	<p class="form-label">CVC:</p>
        	<input class="text" id="card-security-code" name="cardsecuritycode" autocomplete="off"></input>
        	
        	<input id="buy-submit-button" type="submit" name="submit" value="Place This Order »"></input>
    	</form>

<!-- END OF PAYMENT -->

	</body>
</html>