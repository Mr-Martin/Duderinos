<?php

class ChromeController extends BaseController{

  protected $map = array(
    'inital' => 
      array('getDefaultChrome' => 
        array(
        )
    )
  );

  public function getDefaultChrome(){
    $this->setToResponse(
      'chrome.inital', 
        array(
          'selector' => 'body',
          'html' => $this->dressDataWithTemplate('chrome.initial')
        )
    );
  }

}