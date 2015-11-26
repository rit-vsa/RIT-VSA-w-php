<?php
$pageTitle = "Photo Gallery";
include("inc/header.php");
?>
<div class="container">
  <div class="page-header">
    <h3>Photo Gallery</h3>
  </div>
  <div class="row">
    <?php
    $photo_count = 8;
      for($i = 1;$i <= $photo_count;$i++){
        echo "<div class='col-md-3'>
              <a href='images/img".$i.".jpg' data-lightbox='gallery' class='thumbnail'><img src='images/img".$i.".jpg'></a>
              </div>";
      }
    ?>
  </div>
</div>
<script src="js/lightbox.js"></script>
<?php
include("inc/footer.php");
 ?>
