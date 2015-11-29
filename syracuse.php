<!DOCTYPE html>
<html>

<head>
  <?php
  $pageTitle = "Syracuse State Fair";
  include("inc/head.php");
  require_once("inc/images.php");
  $images = getImagesinFolder($_SERVER["DOCUMENT_ROOT"]."/RIT-VSA/assets/custom/img/Syracuse");
   ?>
</head>

<body>
  <?php include("inc/header.php"); ?>
  <div class="container">
    <div class="page-header">
      <h3>Syracuse State Fair</h3>
    </div>
    <ul class="breadcrumb">
      <li><a href="index.php">Home</a></li>
      <li><a href="gallery.php">Photo Gallery</a></li>
      <li><a class="active" href="syracuse.php">Syracuse State Fair</a></li>
    </ul>
    <div class="row">
      <?php
      foreach($images as $image){
        echo "<div class='col-md-3'>
              <a href='assets/custom/img/Syracuse/".$image."' data-lightbox='gallery' class='thumbnail'><img src='assets/custom/img/Syracuse/".$image."'></a>
              </div>";
      }
       ?>
    </div>
  </div>
</body>
<script src="assets/other/lightbox/lightbox.js"></script>

</html>