<?php
$pageTitle = "Letchworth State Park";
include("inc/header.php");
require_once("inc/images.php");
$images = getImagesinFolder($_SERVER["DOCUMENT_ROOT"]."/RIT-VSA/img/Letchworth");
?>
<div class="container">
  <div class="page-header">
    <h3>Letchworth State Park</h3>
  </div>
  <ul class="breadcrumb">
    <li><a href="index.php">Home</a></li>
    <li><a href="gallery.php">Photo Gallery</a></li>
    <li><a class="active" href="letchworth.php">Letchworth State Park</a></li>
  </ul>
  <div class="row">
    <?php
    foreach($images as $image){
      echo "<div class='col-md-3'>
            <a href='img/Letchworth/".$image."' data-lightbox='gallery' class='thumbnail'><img src='img/Letchworth/".$image."'></a>
            </div>";
    }
    ?>
  </div>
</div>
<script src="js/lightbox.js"></script>
<?php
include("inc/footer.php");
 ?>
