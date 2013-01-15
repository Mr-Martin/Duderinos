<?php

class AuthenticateModel extends BaseModel{

  protected $user;

  public function getUser(){
    if(isset($_SESSION['user'])){
      $this->user = $_SESSION['user'];
    }
    return $this->user;
  }

  public function loginUser($username, $password){
    $r = $this->db->get("SELECT level, firstname, lastname, email FROM users WHERE username = '" . $username . "' AND password = '" . $password . "'");
    $user = new stdClass();
    $user->level = 0;
    if(count($r) > 0){
      $user->username = $username;
      $user->level = $r[0]['level'];
      $user->firstname = $r[0]['firstname'];
      $user->lastname = $r[0]['lastname'];
      $user->email = $r[0]['email'];
    }
    $this->user = $user;
    $_SESSION['user'] = $user;
    return $this->user;
  }

  public function logoutUser(){
    unset($this->user);
    $this->pruneSession();
    return true;
  }

}