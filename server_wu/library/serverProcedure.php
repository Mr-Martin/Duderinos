<?php

$request = new Request($_SERVER['REQUEST_URI'], BASE_PATH, $idToClassMap);
$response = new Response();
$route = new Route($request->getControllerName(), $request->getControllerPath(), $request->getArgs(), $response);
// send response
$response->send();
