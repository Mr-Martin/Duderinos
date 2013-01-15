<?php
class dbConnect {
	//Denna class ska bytas ut mot en class som används på alla sidor
	public $mysql;
  	protected $db_host = 'localhost';
  	protected $db_username = 'root';
  	protected $db_password = 'root';
  	protected $db_name = 'starwars_db';
}

class setAmount extends dbConnect{
//		Använd productID som argument till funktionen och sätt in i en mySQL-query
// 		Så här skrev Benji: $info = $this->db->get("SELECT sql queryn") <- Jag har inte kollat på den strängen, men vad jag förstår så ersätter den allt som står nedan till //**//

	public function setAmount(){
		
	  	$db = mysqli_connect(
			$this->db_host, //db
			$this->db_username, //username
			$this->db_password, //password
			$this->db_name //dbname
			);
//**//

//		Innehållet i POST kommer från payment/index.php
		$productID = $_POST['ID'];
		$productAmount = $_POST['amount'];
		$productName = $_POST['name'];
		$productPrice = $_POST['price'];
		$productStock = $_POST['stock'];

//		Räkna ut hur många produkter som finns kvar
		$productStock = $productStock - $productAmount;
		
// Här nere skriver vi ut alla HTML taggar som sen innehåller dynamiskt PHP-innehåll. ?>
	<p><strong>Orderdetails:</strong></p>
	<p><?php echo $productName . ", " . $productStock; ?> st<br />
		Totalprice: <?php echo $productPrice ?> kr</p>	
<?php

// Justera antalet som är kvar i databasen. Detta är inte klart - här ska det göras en UPDATE i databasen så att rätt antal visas.
	//	$sql="INSERT INTO product (productStock) VALUES ($_POST['amount']-)";
	//	$res = mysqli_query($db, $sql);
	//echo $productAmount;
	}

public function getUserData(){

//	User information
	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$address = $_POST['address'];
	$city = $_POST['city'];
	$email = $_POST['email'];
?>

<p><strong>Sent to:</strong><br />
		<?php echo $firstName." ".$lastName; ?><br />
		<?php echo $address . ", " . $city; ?></p>
	<p>Copy on the order is sent to: <?php echo $email; ?></p>

<?php
	}


}
 

?>
<html>
	<head>
		<title>Produkter - Varukorg</title>
		<link href="../html-mallar/style.css" type="text/css" rel="stylesheet" />
		<meta charset="UTF-8" />
	</head>
	<body>
		<div id="wrapper">
			<div id="header">
				<div class="logo">
					<img src="../images/logo.jpg" />
				</div>
				<ul class="menu">
					<li><a href="../html-mallar/index.html">Hem</a></li>
					<li><a href="../html-mallar/about.html">Om oss</a></li>
					<li><a href="../html-mallar/products.html">Produkter</a></li>
					<li><a href="../html-mallar/contact.html">Kontakt</a></li>
					<li><a href="../html-mallar/profiles.html">Profilsida</a></li>
				</ul>
				<p class="login">
					You are logged in as, <strong>Darth Vader</strong>! <button>Logout</button>
				</p>
			</div>

			<div id="content">
				<h1>Thanks for ordering</h1>

				<div id="buyLeft">
					We are pleased to say that your order has been sent. At the right you can see a shorty of your order.
				</div>

				<div id="buyRight">
					<div class="buyBox">			
						<?php $setAmount = new setAmount(); ?>
						<?php $getUserData = $setAmount->getUserData(); ?>
					</div>
				</div>
			</div>
		</div>
		<div id="footer">
			<p>&copy Duderinos</p>
		</div>
	</body>
</html>