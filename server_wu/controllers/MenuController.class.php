<?php

class MenuController extends BaseController{

  protected $map = array(
    'get' => 
      array('getMenu' => 
        array(
        )
    )
  );

  protected function getModel(){
    if(!$this->model){
      $this->model = new MenuModel;
    }
    return $this->model;
  }

  public function getMenu(){
    $model = $this->getModel();
    $data = $model->getMenuData();
    $html = $this->dressDataWithTemplate('menu', $data);
    $this->setToResponse(
      'menu.get', 
        array(
          'html' => $html
        )
    );
  }

}