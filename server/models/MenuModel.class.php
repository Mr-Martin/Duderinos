<?php

class MenuModel extends BaseModel{

  protected $tempMenuHtml = array(
    'top' => '<ul id="topMenu">
          <li><a href="index.html">Hem</a></li>
          <li><a href="about.html">Om oss</a></li>
          <li><a href="#product.list">Produkter</a></li>
          <li><a href="contact.html">Kontakt</a></li>
          <li><a href="#auth.user">Profilsida</a></li>
        </ul>',
    'side' => '<ul id="sideMenu">
            <li><a href="#">Samlarfigurer</a></li>
            <li><a href="#">Böcker och tidningar</a></li>
            <li><a href="#">Utrustning</a></li>
            <li><a href="#">Planscher och Konst</a></li>
            <li><a href="#">Spel</a></li>
            <li><a href="#">Kläder och Accessoarer</a></li>
            <li><a href="#">Leksaker</a></li>
          </ul>'
  );

  public function getMenuContent($name){
    $menu = new stdClass();
    $menu->html = $this->tempMenuHtml[$name];
    return $menu;
  }

}