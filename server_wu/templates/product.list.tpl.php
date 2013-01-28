<?php 
	foreach($products as $prodItems){ 
  extract($prodItems);
  ?>
	<div class="prodBox">
		<img src="images/<?php print($productImage); ?>" alt="<?php print($productName); ?>" width="150px;" height="150px;"/>

		<ul class="prodBoxInfo">
			<form>
				<input type="hidden" name="item_desc" value="<?php print($productName); ?>">
				<input type="hidden" name="item_price" value="<?php print($productPrice); ?>">
				<input type="hidden" name="item_id" value="<?php print($productID); ?>">
				<li name="prodName"><strong><?php print($productName); ?></strong></li>
				<li name="catName"><a href="#"><?php print($categoryName); ?></a></li>
				<li name="prodPrice">Pris: <?php print($productPrice); ?>:-</li>
				<input type="submit" name="buySubmit" class="buy-btn" value="Köp">
			</form>
		</ul>

		<p><?php print($text); ?></p>

		<button class="more-info-btn" data-id="<?php print($productID); ?>">Mer info</button>
	</div>
	
	<?php } ?>
</div>
