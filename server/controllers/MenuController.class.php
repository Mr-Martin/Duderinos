<?php

class MenuController extends BaseController{

  protected $map = array(
    'get' => 
      array('getMenu' => 
        array(
          'name' => null
        )
    )
  );

  protected function getModel(){
    if(!$this->model){
      $this->model = new MenuModel;
    }
    return $this->model;
  }

  public function getMenu($name){
    $model = $this->getModel();
    $menu = $model->getMenuContent($name);
    $this->setToResponse(
      'menu.get', 
        array(
          'name' => $name,
          'html' => $menu->html
        )
    );
  }

}