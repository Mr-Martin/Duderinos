<?php

class AuthenticateController extends BaseController{

  protected $map = array(
    'login' => 
      array('login' => 
        array(
          'username' => null,
          'password' => null
        )
    ),
    'logout' =>
      array('logout' =>
        array()
    ),
    'user' => 
      array('getUser' => 
        array()
    )
  );

  protected function getModel(){
    if(!$this->model){
      $this->model = new AuthenticateModel;
    }
    return $this->model;
  }

  public function login($username, $password){
    $model = $this->getModel();
    $user = $model->loginUser($username, $password);
    $this->setToResponse(
      'auth.login', 
        $user // this is really an object, but an assoc array or an object here is fine, json likes both and would have converted the assoc array into an object anyway
    );
  }

  public function logout(){
    $model = $this->getModel();
    $loggedOut = $model->logoutUser();
    $this->setToResponse(
      'auth.logout', 
        array(
          'loggedOut' => $loggedOut
        )
    );
  }

  public function getUser(){
    $model = $this->getModel();
    $user = $model->getUser();
    $this->setToResponse(
      'auth.user', 
        $user
    );
  }

}