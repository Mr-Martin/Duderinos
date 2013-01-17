<?php
// extension av mysqli
class Db extends mysqli {
  
  public function get($q){
    // egen version av "fetch_all"
    // returnerar en numerisk array
    // där varje item i sin tur är en associativ array
    // med keyvärden som motsvarar field name i MySQL
    $result = $this -> query($q);
    $resultArray = array();
    while($row = $result->fetch_assoc()){
      $resultArray[] =  $row;
    }
    return $resultArray;
  }

  public function json($x){
    return json_encode($this -> get($x));
  }
}
