

<h1><?php print($title); ?></h1>

<div id="left">
	<ul>
		<li><a href="#">Samlarfigurer</a></li>
		<li><a href="#">Böcker och tidningar</a></li>
		<li><a href="#">Utrustning</a></li>
		<li><a href="#">Planscher och Konst</a></li>
		<li><a href="#">Spel</a></li>
		<li><a href="#">Kläder och Accessoarer</a></li>
		<li><a href="#">Leksaker</a></li>
	</ul>
</div>

<div id="right">
	<?php 
foreach($products as $prodItems){ 
  extract($prodItems);
  ?>
	<div class="prodBox">
		<img src="images/<?php print($image); ?>" alt="<?php print($title); ?>" width="150px;" height="150px;"/>

		<ul class="prodBoxInfo">
			<form>
				<input type="hidden" name="item_desc" value="Darth Vader">
				<input type="hidden" name="item_price" value="1235">
				<input type="hidden" name="item_id" value="DV-01">
				<li name="prodName"><strong><?php print($productName); ?></strong></li>
				<li><a href="#"><?php print($prodCat); ?></a></li>
				<li name="prodPrice">Pris: <?php print($prodPrice); ?>:-</li>
				<input type="submit" name="buySubmit" class="buy-btn" value="Köp">
			</form>
		</ul>

		<p><?php print($text); ?></p>

		<button class="more-info-btn">Mer info</button>
	</div>
	
	<?php } ?>
</div>
