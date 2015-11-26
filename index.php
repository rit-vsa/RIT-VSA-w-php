<?php
$pageTitle = "Home";
$photo_count = 8;
include("inc/header.php");
 ?>
   <div class="container">
     <div class="row">
       <div class="col-md-8 col-md-offset-2">
         <div class="carousel slide" data-ride="carousel" id="slider">
           <div class="carousel-inner">
             <?php
             for($i = 1;$i <= $photo_count;$i++){
               if($i == 1){
                 echo "<div class='item active'><img src='images/img".$i.".jpg'></div>";
               }
               else{
                 echo "<div class='item'><img src='images/img".$i.".jpg'></div>";
               }
             }
             ?>
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
