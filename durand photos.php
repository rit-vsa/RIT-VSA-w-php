
<!DOCTYPE html>
<html>

<head>  
  <?php
  $pageTitle = "Durand Eastman Park";
  include("inc/head.php");
  require_once("inc/images.php");
  $images = getImagesinFolder($_SERVER["DOCUMENT_ROOT"]."/RIT-VSA/assets/custom/img/Durand");
   ?>
</head>  

<body>
  <?php include("inc/header.php"); ?>
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
              <a href='assets/custom/img/Durand/".$image."' data-lightbox='gallery' class='thumbnail'><assets/custom/img src='assets/custom/img/Durand/".$image."'></a>
              </div>";
      }
      ?>
    </div>
  </div>
</body>
<script src="assets/other/lightbox/lightbox.js"></script>
  
</html>