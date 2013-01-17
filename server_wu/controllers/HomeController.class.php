<?php

class HomeController extends BaseController{

  protected $map = array(
    'list' => 
      array('showList' => 
        array(
        )
    ) 
  );

  protected function getModel(){
    if(!$this->model){
      $this->model = new HomeModel;
    }
    return $this->model;
  }

  public function showList(){
    $model = $this->getModel();
    $data = $model->getHomeList();
    $this->setToResponse(
      'home.list', 
        array(
          'selector' => '#content',
          'html' => $this->dressDataWithTemplate('home.list', $data)
        )
    );
  }

}