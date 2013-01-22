<?php

class ProdmenuModel extends BaseModel{

  private $menuData;

  protected function getProductMenuData(){
    return array("products"=>$this->db->get("SELECT productName FROM product"));
  }

  public function getProductMenu(){
    if(count($this->menuData)<1){
      $this->menuData = $this->getProductMenuData();
    }
    
    return $this->menuData;
  }

}