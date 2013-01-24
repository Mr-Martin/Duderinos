<?php

class ProductModel extends BaseModel{

  private $listData;
  private $menuListData;
  protected $productname;

  protected function getProductListData($productname){
    return array("products"=>$this->db->get("SELECT * FROM product"));
  }

  public function getProductList(){
    if(!$this->listData){
      $this->listData = $this->getProductListData();
    }
    
    return $this->listData;
  }



  protected function getProductMenuData(){
    return array("categories"=>$this->db->get("SELECT categoryName FROM category"));
  }

  public function getProductMenu(){
    if(!$this->menuListData){
      $this->menuListData = $this->getProductMenuData();
    }
    
    return $this->menuListData;
  }


}