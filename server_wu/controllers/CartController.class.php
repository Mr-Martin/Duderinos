<?php

class CartController extends BaseController{

  protected $map = array(
    'get' => 
      array('getCart' => 
        array(
        )
    )
  );

  protected function getModel(){
    if(!$this->model){
      $this->model = new CartModel;
    }
    return $this->model;
  }

  public function getCart(){
    $model = $this->getModel();
    $data = $model->getCartData();
    $html = $this->dressDataWithTemplate('cart.list', $data);
    $this->setToResponse(
      'cart', 
        array(
          'selector' => '#cartbasket',
          'html' => $this->dressDataWithTemplate('cart.list', $data)
        )
    );
  }

}