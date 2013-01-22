<?php

class ProductModel extends BaseModel{

  private $listData;

  protected function getProductListData(){
    return array("products"=>$this->db->get("SELECT productName FROM product"));
  }

  public function getProductList(){
    if(count($this->listData)<1){
      $this->listData = $this->getProductListData();
    }
    
    return $this->listData;
  }

}