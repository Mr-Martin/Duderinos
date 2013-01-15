<?php

// SETTINGS

// client name space to class
$idToClassMap = array(
  'auth' => 'AuthenticateController',
  'product' => 'ProductController',
  'page' => 'PageController',
  'menu' => 'MenuController',
  'chrome' => 'ChromeController'
);

// relative server path 
$basePath = 'Duderinos/server/';

// include class autoloader
include('classAutoloader.php');


// SERVER APP PROCEDURE

// run restful server
$request = new Request($_SERVER['REQUEST_URI'], $basePath, $idToClassMap);
$response = new Response();
$route = new Route($request->getControllerName(), $request->getControllerPath(), $request->getArgs(), $response);
// send response
$response->send();

