<?php
error_reporting(0);


// client name space to class
$idToClassMap = array(
  'auth' => 'AuthenticateController',
  'home' => 'HomeController',
  'product' => 'ProductController',
  'menu' => 'MenuController',
  'chrome' => 'ChromeController',
  'profile' => 'ProfileController',
  'about' => 'AboutController',
  'contact' => 'ContactController'
);

// relative server path 
define('BASE_PATH','Duderinos/server_wu/');

// which directories have classes?
define('CLASS_DIRS','library/db, library/handlers, controllers, models');
