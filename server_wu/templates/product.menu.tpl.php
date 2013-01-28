
	<?php 
	foreach($categories as $category){ 
	  extract($category);
	  
	 	print('<li><a class="menuitem" data-id="' . $categoryName . '">' . $categoryName . '</a></li>');
	} ?>
