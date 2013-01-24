<?php

class ProfileController extends BaseController{

  protected $map = array(
    'list' => 
      array('showList' => 
        array(
          'user' => null
        )
    ) 
  );

  protected function getModel(){
    if(!$this->model){
      $this->model = new ProfileModel;
    }
    return $this->model;
  }

  public function showList($user){
    $model = $this->getModel();
    $data = $model->getProfileList($user);
    $this->setToResponse(
      'profile.list', 
        array(
          'selector' => '#content',
          'html' => $this->dressDataWithTemplate('profile.list', $data)
        )
    );
  }

}