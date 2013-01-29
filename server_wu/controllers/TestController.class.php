<?php

class testController extends BaseController{

  protected $map = array(
    'detail' => 
      array('allDetail' => 
        array(
          'category' => 'home',
          'color' => 'blue'
        )
    ),
    'detail.category' =>
      array('detailCategory' =>
        array(
          'category' => 'home'
        )
    ),
    'detail.color' =>
      array('detailColor' =>
        array(
          'color' => 'pink'
        )
    ) 
  );

  public function allDetail($category, $color){
    $this->setToResponse(
      'test.category', 
        array(
          'selector' => '.testMe',
          'html' => '<h1>' . $category . '</h1>'
        )
    );
    $this->setToResponse(
      'test.color', 
        array(
          'selector' => '#testColor',
          'html' => '<h1>' . $color . '</h1>'
        )
    );
  }

  public function detailCategory($category){
    $this->setToResponse(
      'test.category', 
        array(
          'html' => '<h1>' . $category . '</h1>'
        )
    );
  }

  public function detailColor($color){
    $this->setToResponse(
      'test.color', 
        array(
          'html' => '<h1>' . $color . '</h1>'
        )
    );
  }

}