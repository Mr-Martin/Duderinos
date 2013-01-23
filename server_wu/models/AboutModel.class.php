<?php

class AboutModel extends BaseModel{

  private $data = array(
	'title' => "About us",
	'text' => "<strong> eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus."
  );

  public function getAbout(){
    return $this->data;
  }

}