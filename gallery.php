<?php
$pageTitle = "Photo Gallery";
include("inc/header.php");
require_once("inc/images.php");
?>
<div class="container">
  <div class="page-header">
    <h3>Photo Gallery</h3>
  </div>
  <div class="row">
    <?php
    foreach($names as $name){
      echo "<div class='col-md-3'>
            <a href='img/".$name."' data-lightbox='gallery' class='thumbnail'><img src='img/".$name."'></a>
            </div>";
    }
    ?>
  </div>
</div>
<script src="js/lightbox.js"></script>
<?php
include("inc/footer.php");
 ?>
