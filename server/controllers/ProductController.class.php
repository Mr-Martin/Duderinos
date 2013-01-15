<?php

class ProductController extends BaseController{

  protected $map = array(
    'show' => 
      array('showProduct' => 
        array(
          'i' => 0
        )
    ),
    'list' => 
      array('showList' => 
        array(
        )
    ),
    'home' => 
      array('showProd' => 
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

  public function showProduct($i){
    $model = $this->getModel();
    $product = $model->getProduct($i);
    $this->setToResponse(
      'product.show', 
        array(
          //'selector' => '#productList',
          'html' => $product->html
        )
    );
  }

  public function showList(){
    $model = $this->getModel();
    $list = $model->getProductList();
    $this->setToResponse(
      'product.list', 
        array(
          'selector' => '#productList',
          'html' => $list->html
        )
    );
  }

  public function showProd(){
    $this->setToResponse(
      'product.list', 
        array(
          'selector' => '#content',
          'html' => '<h1>Im your father Luke.... phaaaaa! Welcome... phaaaaaahhh</h1>

        <img src="../images/img.jpg" />

        <p><strong>Something something the Dark side</strong>, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi.
        </p>
        <p>Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus.</p>'
        )
    );
  }

}