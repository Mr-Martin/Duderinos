<?php
	foreach($products as $prodItems){ 
  	extract($prodItems);
  ?>
	<div class="prodBox">
		<img src="images/<?php print($productImage); ?>" alt="<?php print($productName); ?>" width="150px;" height="150px;"/>

		<ul class="prodBoxInfo">
			<form>
				<input type="hidden" name="item_desc" value="Darth Vader">
				<input type="hidden" name="item_price" value="1235">
				<input type="hidden" name="item_id" value="DV-01">
				<li name="prodName"><strong><?php print($productName); ?></strong></li>
				<li><a href="#"><?php print($productManufactur); ?></a></li>
				<li name="prodPrice">Pris: <?php print($productPrice); ?>:-</li>
				<input type="submit" name="buySubmit" class="buy-btn" value="Köp">
			</form>
		</ul>

		<p><?php print($text); ?></p>

		<button class="more-info-btn">Mer info</button>
	</div>
<?php } ?>

