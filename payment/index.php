<?php
// database connection
include('connection.php');

class getID {
//  	Kolla om GET finns - om inte skicka felmeddelande
// 		Om GET finns - hämta productID
	public function getID(){
		if(!$_GET){
		print '<script type="text/javascript">';
		print 'alert("Du måste lägga något i varukorgen för att denna sidan ska funka. Prova Skriva ?ID=1 i URL-fältet")';
		print '</script>'; 
		}
		else {
			$productID = $_GET['ID'];
			return $productID;
		}
	}
}

class getInfo {
//		Använd productID som argument till funktionen och sätt in i en mySQL-query
// 		Så här skrev Benji: $info = $this->db->get("SELECT sql queryn")

public $name;
private $db;

// do connection to database
public function __construct() {
	$this->db = new Connection();
	$this->db = $this->db->dbConnect();
}

public function getInfo($productID){
	
	$res = $this->db->prepare("SELECT * FROM product WHERE productId=?");
	$res->bindParam(1, $productID);
	$res->execute();

//		Sätt MySQL-svaren i variabler	
	while ($row = $res->fetch(PDO::FETCH_ASSOC))
		{
			$name = $row['productName'];
			$manufactur = $row['productManufactur'];
			$price = $row['productPrice'];
			$stock = $row['productStock'];
			$info = $row['productInfo'];
			$amount = 1;
			$image = $row['productImage'];
		}
	?>	
	<div id="buyLeft">
	<img src="../images/<?php echo $image; ?>" width="150px;" height="150px;"/>
	<ul>
		<li><strong><?php echo $price; ?></strong></li>
		<li>Price:</li>
	</ul>
		<select id="buyAmount" name="buyamount">
	        <option value="1">1 st</option>
	        <option value="2">2 st</option>
	        <option value="3">3 st</option>
	        <option value="4">4 st</option>
	        <option value="5">5 st</option>
        </select> 
		<button>Update</button>
	<span>
		<ul id="showCart">
			<li><strong>Cart</strong></li>
			<li>Item #1</li>
			<?php
			echo $name . "<br/>";
			echo "<li>Price á: " . $price ." kr</li>";
			echo "<li>Amount: ".$amount. " st</li>";
			echo "<li>Total: ". $amount*$price ."kr</li>"; ?>
		</ul>
	</span>
</div>
<?php
	}
public function setForm($productID){

	$res = $this->db->prepare("SELECT * FROM product WHERE productId=?");
	$res->bindParam(1, $productID);
	$res->execute();

	//	Sätt MySQL-svaren i variabler	
	while ($row = $res->fetch(PDO::FETCH_ASSOC))
		{
			$name = $row['productName'];
			$manufactur = $row['productManufactur'];
			$price = $row['productPrice'];
			$stock = $row['productStock'];
			$info = $row['productInfo'];
			$amount = 1;
			$image = $row['productImage'];
		}
	?>
	<input id="ID" type="hidden" name="ID" value="<?php echo $productID ?>" autocomplete="off"></p>
	<input id="amount" type="hidden" name="amount" value="<?php echo $amount ?>" autocomplete="off"></p>
	<input id="name" type="hidden" name="name" value="<?php echo $name ?>" autocomplete="off"></p>
	<input id="price" type="hidden" name="price" value="<?php echo $price ?>" autocomplete="off"></p>
	<input id="stock" type="hidden" name="stock" value="<?php echo $stock ?>" autocomplete="off"></p>
	<?php
	}
}

$getID = new getID();
$productID = $getID->getID();

//$getInfo = new getInfo($productID);
//$productInfo = $getInfo->getInfo($productID);
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
					<li><a href="index.html">Hem</a></li>
					<li><a href="about.html">Om oss</a></li>
					<li><a href="products.html">Produkter</a></li>
					<li><a href="contact.html">Kontakt</a></li>
					<li><a href="profiles.html">Profilsida</a></li>
				</ul>
				<p class="login">
					You are logged in as, <strong>Darth Vader</strong>!
				</p>
			</div>

			<div id="content">
				<h1>Payment - Checkout</h1>

				<?php $getInfo = new getInfo($productID); ?>

				<div id="buyRight">
					<div class="buyBox">
						
			<!-- START OF PAYMENT -->
					<form id="buy-form" method="post" action="thanks-order.php">
						<table>
							<tr>
								<td>
									<p>First Name: <br />
			        				<input class="text" id="first-name" name="firstname" spellcheck="false"></p>
								</td>
								<td>
									<p>Last Name: <br />
				        			<input class="text" id="last-name" name="lastname" spellcheck="false"></p>
								</td>
							</tr>
			        		<tr>
								<td>
									<p>Street Address: <br />
				        			<input class="text" id="address" name="address" spellcheck="false"></p>
								</td>
								<td>
									<p>City: <br />
				        			<input class="text" id="city" name="city" spellcheck="false"></p>
								</td>
							</tr>
				        	<tr>
								<td>
									<p>Email Address:<br />
				       				<input class="text" id="email" name="email" spellcheck="false"></p>
								</td>
								<td>
									<p>Credit Card Number:<br />
				        			<input class="text" id="card-number" name="cardnumber" autocomplete="off"></p>
								</td>
							</tr>
							<tr>
								<td>
									<p>Expiration Date:<br />
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
							               $yearRange = 10;
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
				        			</p>
								</td>
								<td>
									<p>CVC:<br />
			        				<input id="card-security-code" name="cardsecuritycode" autocomplete="off"></p>
								</td>
							</tr>
							<tr>
								<td>
									
								</td>
								<td>
							
									<?php $productInfo = $getInfo->setForm($productID); ?>

									<p><input type="submit" name="submit" id="buy-submit-btn" value="Place order"></p>
								</td>
							</tr>
						</table>
			    	</form>

			<!-- END OF PAYMENT -->

					</div>	
				</div>
			</div>
		</div>
		<div id="footer">
			<p>&copy Duderinos</p>
		</div>
	</body>
</html>