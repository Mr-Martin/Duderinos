<?php
error_reporting(E_ALL^E_NOTICE^E_WARNING^E_STRICT);


// client name space to class
$idToClassMap = array(
  'auth' => 'AuthenticateController',
  'home' => 'HomeController',
  'product' => 'ProductController',
  'menu' => 'MenuController',
  'chrome' => 'ChromeController',
  'profile' => 'ProfileController'
);

// relative server path 
define('BASE_PATH','Duderinos/server_wu/');

// which directories have classes?
define('CLASS_DIRS','library/db, library/handlers, controllers, models');
