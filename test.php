<?php
$root = $_SERVER['DOCUMENT_ROOT'];
$path = $root."/RIT-VSA/Anh VSA/";
$filenames = scandir($path);
$names = array();
$i = 0;
foreach($filenames as $name){
  if(strlen($name) > 2){
    $names[$i] = $name;
    $i++;
  }
}
echo "<pre>";
var_dump($names);
 ?>
