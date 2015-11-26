<?php
$root = $_SERVER['DOCUMENT_ROOT'];
$path = $root."/RIT VSA/img/";
$filenames = scandir($path);
$names = array();
$i = 0;
foreach($filenames as $name){
  $found = stripos($name, ".jpg");
  if($found){
    $names[$i] = $name;
    $i++;
  }
}
 ?>
