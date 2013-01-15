<?php

class PageController extends BaseController{

  protected $map = array(
    'home' => 
      array('pageHome' => 
        array(
        )
    ),
    'products' => 
      array('pageProducts' => 
        array(
        )
    )
  );

  public function pageHome(){
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

  public function pageProducts(){
    $this->setToResponse(
      'product.list', 
        array(
          'selector' => '#content',
          'html' => '<h1>Luke.... phaaaa... Choose your products!</h1>
        
        <div id="left">
          <ul>
            <li><a href="#">Samlarfigurer</a></li>
            <li><a href="#">Böcker och tidningar</a></li>
            <li><a href="#">Utrustning</a></li>
            <li><a href="#">Planscher och Konst</a></li>
            <li><a href="#">Spel</a></li>
            <li><a href="#">Kläder och Accessoarer</a></li>
            <li><a href="#">Leksaker</a></li>
          </ul>
        </div>

        <div id="right">
          <div class="prodBox">
            <img src="../images/lordvader.jpeg" width="150px;" height="150px;"/>

            <ul class="prodBoxInfo">
              <form method="post" action="">
                <input type="hidden" name="item_desc" value="Darth Vader">
                <input type="hidden" name="item_price" value="1235">
                <input type="hidden" name="item_id" value="DV-01">
                <li name="prodName"><strong>Darth Vader</strong></li>
                <li><a href="#">Samlarfigurer</a></li>
                <li name="prodPrice">Pris: 1235:-</li>
                <input type="submit" name="buySubmit" class="buy-btn" value="Köp">
              </form>
            </ul>

            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper.</p>

            <button class="more-info-btn">Mer info</button>
          </div>

          <div class="prodBox">
            <img src="../images/Lordstewie.jpg" width="150px;" height="150px;"/>

            <ul class="prodBoxInfo">
              <form method="post" action="">
                <input type="hidden" name="item_desc" value="Lord Stewie">
                <input type="hidden" name="item_price" value="1795">
                <input type="hidden" name="item_id" value="LS-01">
                <li name="prodName"><strong>Lord Stewie</strong></li>
                <li><a href="#">Samlarfigurer</a></li>
                <li name="prodPrice">Pris: 1795:-</li>
                <input type="submit" name="buySubmit" class="buy-btn" value="Köp">
              </form>
            </ul>

            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper.</p>

            <button class="more-info-btn">Mer info</button>
          </div>

          <div class="prodBox">
            <img src="../images/img.jpg" width="150px;" height="150px;"/>

            <ul class="prodBoxInfo">
              <form method="post" action="">
                <input type="hidden" name="item_desc" value="Darth Vader">
                <input type="hidden" name="item_price" value="1235">
                <input type="hidden" name="item_id" value="DV-02">
                <li name="prodName"><strong>Darth Vader</strong></li>
                <li><a href="#">Figurer</a></li>
                <li name="prodPrice">Pris: 1235:-</li>
                <input type="submit" name="buySubmit" class="buy-btn" value="Köp">
              </form>
            </ul>

            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper.</p>

            <button class="more-info-btn">Mer info</button>
          </div>
        </div>'
        )
    );
  }

}