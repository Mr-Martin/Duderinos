<?php

class ProfileModel extends BaseModel{

  private $listData;

  protected function getProfileListData($user){
    $rows = $this->db->get("SELECT userName, userimage, fullName, status, age, nationality, about FROM user WHERE userName = 'Duderino'");
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