<?php

class BaseModel{
  
  protected $db;
  protected $session;

  function BaseModel(){
    $this->handleSession();
    $this->db = new Db("localhost","root","","RESTexampleDB");
    if ($this->db->connect_errno) {
        printf("Connect failed: %s\n", $this->db->connect_error);
        exit();
    }
  }

  private function handleSession(){
    session_start();
  }

  protected function pruneSession(){
    foreach($_SESSION as $k => $v){
      unset($_SESSION[$k]);
    }
    return true;
  }

}