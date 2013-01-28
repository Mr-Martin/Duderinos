<?php

class CartModel extends BaseModel{

  private $cartData = array(
    'items' => array(
      array(
        'productID' => "Item#1",
        'productName' => "",
        'productPrice' => ""
      )
    )
  );

  public function getCartList(){
    return $this->cartData;
  }

}