<?php
	$pagetitle = 'Payment Checkout';
?>
<html>
	<head>
		<title><?php echo $pagetitle; ?></title>
	</head>
	<body>

<!-- START OF PAYMENT -->
		<form id="buy-form" method="post" action="">
        	
			<p>Product: <?php echo 'product'; ?></p>
			<p>Price: <?php echo 'price'; ?></p>

        	<p>First Name:</p>
        	<input class="text" id="first-name" name="firstname" spellcheck="false"></input>
	        
	        <p>Last Name:</p>
	        <input class="text" id="last-name" name="lastname" spellcheck="false"></input>
	       	
	       	<p>Email Address:</p>
	       	<input class="text" id="email" name="email" spellcheck="false"></input>
	       
	        <p>Credit Card Number:</p>
	        <input class="text" id="card-number" name="cardnumber" autocomplete="off"></input>
	        
	        <p>Expiration Date:</p>
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
        	
        	<p>CVC:</p>
        	<input id="card-security-code" name="cardsecuritycode" autocomplete="off"></input>
        	
        	<input id="buy-submit-button" type="submit" name="submit" value="Place This Order »"></input>
    	</form>

<!-- END OF PAYMENT -->

	</body>
</html>