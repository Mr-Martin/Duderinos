<?php

class ProfileModel extends BaseModel{

  private $listData = array(
        'nickName' => "Darth Vader",
        'profileName' => "Simon Quick",
        'profileDesc' => "Happy guy, 25 years young. Likes computers, joltcola and Star Wars. My favourite is Han Solo because he's so handsome... eh I mean ... hes so cool.",
        'profileImage' => "img.jpg",
        'nickStatus' => "Bronze",
        'nickGender' => "Male",
        'nickNat' => "Swedish",
        'nickAge' => "95"
  );

  public function getProfileList(){
    return $this->listData;
  }

}