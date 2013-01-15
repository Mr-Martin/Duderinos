<?php

function class_autoloader($class) {
  $classDirs = array('db', 'handlers', 'controllers', 'models');
  foreach($classDirs as $dir){
    $path = $dir . '/' . $class . '.class.php';
    if(file_exists($path)){
      include($path);
    }
  }
}

spl_autoload_register('class_autoloader');
