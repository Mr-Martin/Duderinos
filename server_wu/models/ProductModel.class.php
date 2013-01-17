<?php

class ProductModel extends BaseModel{

  private $listData = array(
    'items' => array(
      array(
        'title' => "Luke.... phaaaa... Choose your products!",
        'text' => "Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper.",
        'image' => "lordvader.jpeg",
        'prodName' => "Darth Vader",
        'prodCat' => "Samlarfigurer",
        'prodPrice' => "1234"
        
      )
    )
  );

  public function getProductList(){
    return $this->listData;
  }

}