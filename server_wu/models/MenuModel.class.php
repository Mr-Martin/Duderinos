<?php

class MenuModel extends BaseModel{

  private $menuData = array(
    'items' => array(
      array(
        'href' => '#home',
        'text' => 'Hem'
      ),
      array(
        'href' => '#about',
        'text' => 'Om oss'
      ),
      array(
        'href' => '#product',
        'text' => 'Produkter'
      ),
      array(
        'href' => '#contact',
        'text' => 'Kontakt'
      )
    )
  );

  public function getMenuData(){
    return $this->menuData;
  }

}