<?php

class BaseController{

  protected $response;
  protected $args = array();

  function BaseController(&$response, $controllerPath, $args){
    $this->response = $response;
    $this->args = $args;
    $this->callWithMap($controllerPath);
  }

  protected function callWithMap($controllerPath) {

    if($this->map[$controllerPath]){
      $method = key($this->map[$controllerPath]);
      $args = $this->map[$controllerPath][$method];
      $i = 0;
      foreach($args as $key => $val){
        if($this->args[$i]){
          $args[$key] = $this->args[$i];
        }
        $i++;
      }
      if(method_exists($this, $method)){
        call_user_func_array(array($this, $method), $args);
      }
    }
  }

  protected function setToResponse($id, $val){
    $this->response->set($id, $val);
  }

  protected function dressDataWithTemplate($templateName, array $data = array()){
    extract($data);
    ob_start();
    require('templates/' . $templateName . '.tpl.php');
    return ob_get_clean();
  }

}