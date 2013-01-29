<?php

class MenuModel extends BaseModel{

  private $menuData = array(
    'items' => array(
      array(
        'href' => '#home',
        'text' => 'Home'
      ),
      array(
        'href' => '#about',
        'text' => 'About'
      ),
      array(
        'href' => '#product.list',
        'text' => 'Products'
      ),
      array(
        'href' => '#contact',
        'text' => 'Contact'
      ),
      array(
        'href' => '#profile',
        'text' => 'My profile'
      )
    )
  );

  public function getMenuData(){
    return $this->menuData;
  }

}