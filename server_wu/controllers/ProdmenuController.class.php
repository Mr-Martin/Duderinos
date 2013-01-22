<?php

class ProdmenuController extends BaseController{

  protected $map = array(
    'menu' => 
      array('showMenu' => 
        array(
        )
    ) 
  );

  protected function getModel(){
    if(!$this->model){
      $this->model = new ProdmenuModel;
    }
    return $this->model;
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

}