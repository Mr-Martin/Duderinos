<?php

class ContactController extends BaseController{

   protected $map = array(
    'list' => 
      array('showList' => 
        array(
        )
    ) 
  );

  protected function getModel(){
    if(!$this->model){
      $this->model = new ContactModel;
    }
    return $this->model;
  }

  public function showList(){
    $model = $this->getModel();
    $data = $model->getContact();
    $this->setToResponse(
      'about.list', 
        array(
          'selector' => '#content',
          'html' => $this->dressDataWithTemplate('contact.list', $data)
        )
    );
  }
}