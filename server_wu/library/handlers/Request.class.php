<?php

class Request {

  private $path = '';
  private $siteRootDir = '';
  private $controllerName = '';
  private $controllerPath = '';
  private $args = array();
  private $idToClassMap = array();

  function Request($uri, $siteRootDir = '', array $idToClassMap){
    $this->siteRootDir = $siteRootDir;
    $this->path = $uri;
    $this->idToClassMap = $idToClassMap;
    $tokens = $this->resolvePathToTokens();
    // first token is controller elements
    $controllerEls = array_shift($tokens);
    // remaining tokens are arguments
    $this->args = $tokens; 
    $els = explode('.', $controllerEls);
    // first part of controller elements is controller name
    $this->controllerName = $this->idToClassMap[array_shift($els)];
    // the rest is controller method path
    $this->controllerPath = implode('.', $els);
  }

  private function resolvePathToTokens(){
    $path = end(explode($this->siteRootDir, $this->path));
    $path = trim($path,'/');
    return explode('/', $path);
  }
  
  public function getControllerPath(){
    return $this->controllerPath;
  }

  public function getControllerName(){
    return $this->controllerName;
  }

  public function getArgs(){
    return $this->args;
  }

}