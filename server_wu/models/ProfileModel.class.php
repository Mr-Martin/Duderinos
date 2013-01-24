<?php

class ProfileModel extends BaseModel{

  // get username from user session
  $_SESSION['user'] = $username;
  return $this->username;

  private $listData;

  // get profile from databse with right username
  protected function getProfileListData($user){
    $rows = $this->db->get("SELECT userName, userimage, fullName, status, age, nationality, about FROM user WHERE userName = '$username'");
    if(count($rows)>0){
      return $rows[0];
    }
    return array();
  }

  public function getProfileList($user){     
      if(!$this->listData){
        $this->listData = $this->getProfileListData($user);
      }
      return $this->listData;
    }

}