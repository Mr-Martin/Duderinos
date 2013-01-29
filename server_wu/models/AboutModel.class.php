<?php

class AboutModel extends BaseModel{

  private $data = array(
	'title' => "About us",
	'text' => "We are a Starwars collector company.."
  );

  public function getAbout(){
    return $this->data;
  }

}