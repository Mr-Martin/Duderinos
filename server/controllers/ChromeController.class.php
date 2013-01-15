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
          'html' => '    
    <div id="main">
      <div id="header"></div>
      <hr/>
      <ul id="topMenu"></ul>
      <hr/>
      <ul id="sideMenu"></ul>
      <hr/>
      <div id="productList"></div>
    </div>
    '
        )
    );
  }

}