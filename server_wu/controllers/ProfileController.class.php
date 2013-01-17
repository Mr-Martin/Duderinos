<?php

class ProfileController extends BaseController{

  protected $map = array(
    'form' => 
      array('getForm' => 
        array(
        )
    ),
    'submit' => 
      array('submitForm' =>
        array(
        )
    )
  );

  public function getForm(){
    $this->setToResponse(
      'profile.form', 
        array(
          'selector' => '#profileForm',
          'html' => $this->dressDataWithTemplate('profile.form')
        )
    );
  }

  public function submitForm(){
    $this->setToResponse(
      'profile.submit',
        array(
          'postData' => $_POST
        )
    );
  }

}