<?php

class NewsController extends BaseController{

  protected $map = array(
    'list' => 
      array('showList' => 
        array(
        )
    ) 
  );

  protected function getModel(){
    if(!$this->model){
      $this->model = new NewsModel;
    }
    return $this->model;
  }

  public function showList(){
    $model = $this->getModel();
    $data = $model->getNewsList();
    $this->setToResponse(
      'news.list', 
        array(
          'selector' => '#content',
          'html' => $this->dressDataWithTemplate('news.list', $data)
        )
    );
  }

}