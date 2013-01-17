<?php 
foreach($items as $item){ 
  extract($item);
  ?>
  <div class="box">
    <p>
      <h1>
        <?php print($title); ?>
      </h1>
      <p>
        <img src="images/<?php print($image); ?>" alt="<?php print($title); ?>" width="202" /> 
        <?php print($text); ?>
        <br class="break" />
      </p>
    </p>
  </div>
<?php } ?>