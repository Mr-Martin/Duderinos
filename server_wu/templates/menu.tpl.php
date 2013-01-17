
<div id="menuspacer"></div>
<?php 
foreach($items as $item){ 
  print('<li><a class="menuitem" href="' . $item['href'] . '">' . $item['text'] . '</a></li>');
} 
?>
