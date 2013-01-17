<?php

class MenuModel extends BaseModel{

  private $menuData = array(
    'items' => array(
      array(
        'href' => '#news',
        'text' => 'what\'s going on'
      ),
      array(
        'href' => '#movies/family',
        'text' => 'family movies'
      ),
      array(
        'href' => '#movies/action',
        'text' => 'action movies'
      ),
      array(
        'href' => '#contact',
        'text' => 'contact'
      )
    )
  );

  public function getMenuData(){
    return $this->menuData;
  }

}