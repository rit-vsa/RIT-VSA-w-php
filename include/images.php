<?php
$filenames = scandir("images/");
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
