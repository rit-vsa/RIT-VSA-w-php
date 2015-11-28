<?php
$pageTitle = "Bao&apos;s Birth Day";
include("inc/header.php");
require_once("inc/images.php");
$images = getImagesinFolder($_SERVER["DOCUMENT_ROOT"]."/RIT-VSA/img/Bao's Birth Day");
?>
<div class="container">
  <div class="page-header">
    <h3>Durand Eastman Park</h3>
  </div>
  <ul class="breadcrumb">
    <li><a href="index.php">Home</a></li>
    <li><a href="gallery.php">Photo Gallery</a></li>
    <li><a class="active" href="bao birthday.php">Bao&apos;s Birth Day</a></li>
  </ul>
  <div class="row">
    <?php
    foreach($images as $image){
      echo "<div class='col-md-3'>
            <a href='img/Bao&apos;s Birth Day/".$image."' data-lightbox='gallery' class='thumbnail'><img src='img/Bao&apos;s Birth Day/".$image."'></a>
            </div>";
    }
    ?>
  </div>
</div>
<script src="js/lightbox.js"></script>
<?php
include("inc/footer.php");
 ?>
