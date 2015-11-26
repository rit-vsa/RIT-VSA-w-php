<?php
$pageTitle = "Home";
include("inc/header.php");
require_once("inc/images.php");
 ?>
 <!-- image gallery of all our photos -->
    <div class="container">
      <div class="row">
        <div class="col-md-10 col-md-offset-1">
         <div class="carousel slide" data-ride="carousel" id="slider">
           <div class="carousel-inner">
             <?php
             for($i = 0;$i < count($names);$i++){
               if($i == 0){
                 echo "<div class='item active'><img src='img/".$names[$i]."'></div>";
               }
               else{
                 echo "<div class='item'><img src='img/".$names[$i]."'></div>";
               }
             }
             ?>
            <!-- Next and Previous slide buttons -->
           <a href="#slider" data-slide="prev" class="left carousel-control">
             <span class="glyphicon glyphicon-chevron-left"></span>
           </a>
           <a href="#slider" data-slide="next" class="right carousel-control">
             <span class="glyphicon glyphicon-chevron-right"></span>
           </a>
         </div>
       </div>
     </div>
   </div>
 </div>

 <?php include("inc/footer.php"); ?>
