<?php 
	foreach($products as $prodItems){ 
  extract($prodItems);
  ?>
	<div class="prodBox">
		<img src="images/<?php print($productImage); ?>" alt="<?php print($productName); ?>" width="150px;" height="150px;"/>

		<div class="singleProdBox">
			<ul class="prodBoxInfo">
				<form>
					<input type="hidden" name="item_desc" value="<?php print($productName); ?>">
					<input type="hidden" name="item_price" value="<?php print($productPrice); ?>">
					<input type="hidden" name="item_id" value="<?php print($productID); ?>">
					<li name="prodName"><strong><?php print($productName); ?></strong></li>
					<li name="catName"><a href="#"><?php print($categoryName); ?></a></li>
					<li name="prodPrice">Pris: <?php print($productPrice); ?>:-</li>
				</form>
			</ul>

			<?php print($productInfo); ?>

			<button class="back-btn" href="#product">Tillbaks</button>

			<form class="buy">
				<input type="hidden" name="item_desc" value="Darth Vader">
				<input type="hidden" name="item_price" value="1235">
				<input type="hidden" name="item_id" value="DV-01">
				<input type="submit" name="buySubmit" class="buy-btn" value="Köp">
			</form>
		</div>
	</div>
	
	<?php } ?>
</div>
