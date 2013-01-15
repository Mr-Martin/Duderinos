<?php

class ProductController extends BaseController{

  protected $map = array(
    'show' => 
      array('showProduct' => 
        array(
          'i' => 0
        )
    ),
    'list' => 
      array('showList' => 
        array(
        )
    )
  );

  protected function getModel(){
    if(!$this->model){
      $this->model = new ProductModel;
    }
    return $this->model;
  }

  public function showProduct($i){
    $model = $this->getModel();
    $product = $model->getProduct($i);
    $this->setToResponse(
      'product.show', 
        array(
          //'selector' => '#productList',
          'html' => $product->html
        )
    );
  }

  public function showList(){
    $model = $this->getModel();
    $list = $model->getProductList();
    $this->setToResponse(
      'product.list', 
        array(
          'selector' => '#productList',
          'html' => $list->html
        )
    );
  }

}