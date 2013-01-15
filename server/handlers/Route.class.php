<?php

class Route{

  function Route($controllerName, $controllerPath, array $args, Response &$response){
    $this->getController($controllerName, $controllerPath, $args, $response);
  }

  private function getController($controllerName, $controllerPath, $args, &$response){
    if(class_exists($controllerName)){
      return new $controllerName($response, $controllerPath, $args);
    }
  }
  
}
