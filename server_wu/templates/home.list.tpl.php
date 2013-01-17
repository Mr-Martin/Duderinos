<?php 
foreach($items as $item){ 
  extract($item);
  ?>
  <h1><?php print($title); ?></h1>

  <img src="images/<?php print($image); ?>" alt="<?php print($title); ?>" />

  <p>         
    <?php print($text); ?>
    <br class="break" />
  </p>
<?php } ?>