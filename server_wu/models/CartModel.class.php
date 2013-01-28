<?php

class CartModel extends BaseModel{

  private $cartData = htmlspecialchars(array(
    'items' => array(
      array(
        'productName' => $_GET['item_desc'],
        'productPrice' => $_GET['item_price'],
        'productID' => $_GET['item_id']
      )
    )
  ));

  public function getCartList(){
    return $this->cartData;
  }

}