<?php

class ContactModel extends BaseModel{

  private $data = array(
	'title' => "Contact us",
	'text' => "Our email address is.."
  );

  public function getAbout(){
    return $this->data;
  }

}