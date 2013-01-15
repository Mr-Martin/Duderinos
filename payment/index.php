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
					You are logged in as, <strong>Darth Vader</strong> <button>Logout</button>!
				</p>
			</div>

			<div id="content">
				<h1>Payment - Checkout</h1>

				<div id="buyLeft">
					<img src="<?php echo $image; ?>" width="150px;" height="150px;"/>
					<ul>
						<li><strong>Darth Vader</strong></li>
						<li>Price:</li>
						<select id="buyAmount" name="buyamount">
					        <option value="1">1 st</option>
					        <option value="2">2 st</option>
					        <option value="3">3 st</option>
					        <option value="4">4 st</option>
					        <option value="5">5 st</option>
				        </select> 
						<button>Update</button>
					</ul>
					<span>
					<ul id="showCart">
						<li><strong>Cart</strong></li>
						<li>Item #1</li>
						<li>Price á: 1235 kr</li>
						<li>Amount: 1 st</li>
						<li>Total: 1235kr</li>
					</ul>
				</span>
				</div>

				<div id="buyRight">
					<div class="buyBox">
						
			<!-- START OF PAYMENT -->
					<form id="buy-form" method="post" action="">
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