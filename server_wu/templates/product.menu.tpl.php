
	<?php 
	foreach($categories as $category){ 
	  extract($category);
	  
	 	print('<li><a class="menuitem" >' . $categoryName . '</a></li>');
	} ?>
