<?php

class Response{

  private $errors = array();
  public $response = array();
  public $type = 'json';

  public function set($id, $val){
    $this->response[$id] = $val;
  }

  public function send(){
    if(count($this->errors) > 0){
      $this->set('errors', $this->errors);
    }
    if(count($this->response) < 1){
      header("HTTP/1.0 404 Not Found");
      return;
    }
    switch($this->type){
      case 'json':
        header('Content-type: application/json; charset=UTF-8');
        $json = json_encode($this->response);
        print($json);
      break;
    }
  }

  public function addError(array $error){
    $this->errors[] = $error;
  }

}
