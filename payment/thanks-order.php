<?php

include('connection.php');

class setAmount {
//		Använd productID som argument till funktionen och sätt in i en mySQL-query
// 		Så här skrev Benji: $info = $this->db->get("SELECT sql queryn")

private $db;

// do connection to database
public function __construct() {
	$this->db = new Connection();
	$this->db = $this->db->dbConnect();
}

	public function setAmount(){

		$productID = $_POST['ID'];
		$productAmount = $_POST['amount'];
		$productName = $_POST['name'];
		$productPrice = $_POST['price'];
		$productStock = $_POST['stock'];
		
		//Räkna ut hur många produkter som finns kvar
		$productStock = $productStock - $productAmount;

?>
<div class="buyBox">			
	<p><strong>Orderdetails:</strong></p>
	<p><?php echo $productName . ", " . $productStock; ?> st<br />
		Totalprice: <?php echo $productPrice ?> kr</p>
	<p><strong>Sent to:</strong><br />
		Test Testsson<br />
		Stora vägen 99, Storstaden</p>
	<p>Copy on the order is sent to: email@email.se</p>
</div>	
<?php

// Justera antalet som är kvar
//	$sql="INSERT INTO product (productStock) VALUES ($_POST['amount']-)";
//	$res = mysqli_query($db, $sql);

		echo $productAmount;
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
<?php $setAmount = new setAmount(); ?>
			</div>
			</div>
		</div>
		<div id="footer">
			<p>&copy Duderinos</p>
		</div>
	</body>
</html>