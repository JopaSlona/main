<?php
class Config{
  //cashe для сайта
  public static $cashe = [];

  public static function style_setings($name,$key){
    //если в массиве cashe нету массива layout, то мы добавляем его туда
    if (!in_array($name, array_keys($cashe))) {
      $cashe[$name]= include "config/$name.php";
    }
    //возвращем записанное значение из cashe
    return $cashe[$name][$key];
  }
}
?>
