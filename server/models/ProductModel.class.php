<?php

class ProductModel extends BaseModel{

  private $tempHtml = array(
    '<div class="prodBox">
            <img src="../images/lordvader.jpeg" width="150px;" height="150px;">

            <ul class="prodBoxInfo">
              <li><strong>Darth Vader</strong></li>
              <li><a href="#">Samlarfigurer</a></li>
              <li>Pris: 1235:-</li>
              <button class="buy-btn">Köp</button>
            </ul>

            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper.</p>

            <button class="more-info-btn">Mer info</button>
          </div>',
    '<div class="prodBox">
            <img src="../images/Lordstewie.jpg" width="150px;" height="150px;">

            <ul class="prodBoxInfo">
              <li><strong>Lord Stewie</strong></li>
              <li><a href="#">Samlarfigurer</a></li>
              <li>Pris: 1795:-</li>
              <button class="buy-btn">Köp</button>
            </ul>

            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper.</p>

            <button class="more-info-btn">Mer info</button>
          </div>',
      '<div class="prodBox">
            <img src="../images/img.jpg" width="150px;" height="150px;">

            <ul class="prodBoxInfo">
              <li><strong>Darth Vader</strong></li>
              <li><a href="#">Figurer</a></li>
              <li>Pris: 1235:-</li>
              <button class="buy-btn">Köp</button>
            </ul>

            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper.</p>

            <button class="more-info-btn">Mer info</button>
          </div>'
  );

  public function getProduct($i){
    $product = new stdClass();
    $product->html = $this->tempHtml[$i];
    return $product;
  }

  public function getProductList(){
    $list = new stdClass();
    $list->html = implode(' ', $this->tempHtml);
    return $list;
  }

}