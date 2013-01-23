<?php

class AboutController extends BaseController{

   protected $map = array(
    'list' => 
      array('showList' => 
        array(
        )
    ) 
  );

  protected function getModel(){
    if(!$this->model){
      $this->model = new AboutModel;
    }
    return $this->model;
  }

  public function showList(){
    $model = $this->getModel();
    $data = $model->getAbout();
    $this->setToResponse(
      'about.list', 
        array(
          'selector' => '#content',
          'html' => $this->dressDataWithTemplate('about.list', $data)
        )
    );
  }


}