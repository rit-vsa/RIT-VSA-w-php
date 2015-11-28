<?php
$pageTitle = "Durand Eastman Park";
include("inc/header.php");
require_once("inc/images.php");
$images = getImagesinFolder($_SERVER["DOCUMENT_ROOT"]."/RIT-VSA/img/Durand");
?>
<div class="container">
  <div class="page-header">
    <h3>Durand Eastman Park</h3>
  </div>
  <ul class="breadcrumb">
    <li><a href="index.php">Home</a></li>
    <li><a href="gallery.php">Photo Gallery</a></li>
    <li><a class="active" href="durand photos.php">Durand Eastman Park</a></li>
  </ul>
  <div class="row">
    <?php
    foreach($images as $image){
      echo "<div class='col-md-3'>
            <a href='img/Durand/".$image."' data-lightbox='gallery' class='thumbnail'><img src='img/Durand/".$image."'></a>
            </div>";
    }
    ?>
  </div>
</div>
<script src="js/lightbox.js"></script>
<?php
include("inc/footer.php");
 ?>
