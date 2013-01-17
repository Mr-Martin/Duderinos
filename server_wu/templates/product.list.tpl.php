<?php 
foreach($items as $item){ 
  extract($item);
  ?>

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
	<div class="prodBox">
		<img src="images/<?php print($image); ?>" alt="<?php print($title); ?>" width="150px;" height="150px;"/>

		<ul class="prodBoxInfo">
			<form>
				<input type="hidden" name="item_desc" value="Darth Vader">
				<input type="hidden" name="item_price" value="1235">
				<input type="hidden" name="item_id" value="DV-01">
				<li name="prodName"><strong><?php print($prodName); ?></strong></li>
				<li><a href="#"><?php print($prodCat); ?></a></li>
				<li name="prodPrice">Pris: <?php print($prodPrice); ?>:-</li>
				<input type="submit" name="buySubmit" class="buy-btn" value="Köp">
			</form>
		</ul>

		<p><?php print($text); ?></p>

		<button class="more-info-btn">Mer info</button>
	</div>

	<div class="prodBox">
		<img src="../images/Lordstewie.jpg" width="150px;" height="150px;"/>

		<ul class="prodBoxInfo">
			<form method="post" action="">
				<input type="hidden" name="item_desc" value="Lord Stewie">
				<input type="hidden" name="item_price" value="1795">
				<input type="hidden" name="item_id" value="LS-01">
				<li name="prodName"><strong>Lord Stewie</strong></li>
				<li><a href="#">Samlarfigurer</a></li>
				<li name="prodPrice">Pris: 1795:-</li>
				<input type="submit" name="buySubmit" class="buy-btn" value="Köp">
			</form>
		</ul>

		<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper.</p>

		<button class="more-info-btn">Mer info</button>
	</div>

	<div class="prodBox">
		<img src="../images/img.jpg" width="150px;" height="150px;"/>

		<ul class="prodBoxInfo">
			<form method="post" action="">
				<input type="hidden" name="item_desc" value="Darth Vader">
				<input type="hidden" name="item_price" value="1235">
				<input type="hidden" name="item_id" value="DV-02">
				<li name="prodName"><strong>Darth Vader</strong></li>
				<li><a href="#">Figurer</a></li>
				<li name="prodPrice">Pris: 1235:-</li>
				<input type="submit" name="buySubmit" class="buy-btn" value="Köp">
			</form>
		</ul>

		<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper.</p>

		<button class="more-info-btn">Mer info</button>
	</div>
</div>
<?php } ?>