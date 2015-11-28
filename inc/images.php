<?php
function getImagesinFolder($path){
  $files = scandir($path);
  $images = array();
  $i = 0;
  foreach($files as $image){
    $found = stripos($image, ".jpg");
    if($found){
      $images[$i] = $image;
      $i++;
    }
  }
  return $images;
}
 ?>
