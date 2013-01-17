<?php

// client name space to class
$idToClassMap = array(
  'auth' => 'AuthenticateController',
  'news' => 'NewsController',
  'menu' => 'MenuController',
  'chrome' => 'ChromeController',
  'profile' => 'ProfileController'
);

// relative server path 
define('BASE_PATH','RESTful_client_server/server_wu/');

// which directories have classes?
define('CLASS_DIRS','library/db, library/handlers, controllers, models');
