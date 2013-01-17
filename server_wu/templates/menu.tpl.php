
<div id="menuspacer"></div>
<?php 
foreach($items as $item){ 
  print('<a class="menuitem" href="' . $item['href'] . '">' . $item['text'] . '</a>');
} 
?>
