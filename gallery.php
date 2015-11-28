<?php
$pageTitle = "Photo Gallery";
include("inc/header.php");
require_once("inc/images.php");
$images = getImagesinFolder($_SERVER["DOCUMENT_ROOT"]."/RIT-VSA/img");
?>
<div class="container">
  <div class="page-header">
    <h3>Photo Gallery</h3>
  </div>
  <ul class="breadcrumb">
    <li><a href="index.php">Home</a></li>
    <li><a class="active" href="gallery.php">Photo Gallery</a></li>
  </ul>
  <div class="col-md-3">
    <a href="durand photos.php"><img width=100% class="thumbnail" src="img/Durand.jpg"></a>
    <p class="text-center">Durand Eastman Park</p>
  </div>
  <div class="col-md-3">
    <a href="letchworth.php"><img class="thumbnail" src="img/Letchworth.jpg" width=100%></a>
    <p class="text-center">Letchworth State Park</p>
  </div>
  <div class="col-md-3">
    <a href="syracuse.php"><img class="thumbnail" src="img/Syracuse.jpg" width=100%></a>
    <p class="text-center">Syracuse State Fair</p>
  </div>
  <div class="col-md-3">
    <a href="bao birthday.php"><img class="thumbnail" src="img/Bao's Birth Day.jpg" width=100%></a>
    <p class="text-center">Bảo&apos;s Birth Day</p>
  </div>

</div>
<script src="js/lightbox.js"></script>
<?php
include("inc/footer.php");
 ?>
