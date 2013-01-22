<?php

class ProductController extends BaseController{

  protected $map = array(
    'list' => 
      array('showList' => 
        array(
        )
    ),
    'menu' => 
      array('showMenu' => 
        array(
        )
    ),
    'page' => 
      array('showPage' => 
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

  public function showList(){
    $model = $this->getModel();
    $data = $model->getProductList();
    $this->setToResponse(
      'product.list', 
        array(
          'selector' => '#right',
          'html' => $this->dressDataWithTemplate('product.list', $data)
        )
    );
  }

  public function showMenu(){
    $model = $this->getModel();
    $data = $model->getProductMenu();
    $this->setToResponse(
      'product.menu', 
        array(
          'selector' => '#left',
          'html' => $this->dressDataWithTemplate('product.menu', $data)
        )
    );
  }

  public function showPage(){
    $this->setToResponse(
      'product.page', 
        array(
          'selector' => '#content',
          'html' => $this->dressDataWithTemplate('product.page')
        )
    );
  }

}