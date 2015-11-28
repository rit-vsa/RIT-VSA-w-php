<meta charset='utf-8' />

<!-- JQuery -->
<script src="jquery-1.11.3.min.js"></script>

<!-- Bootstrap -->
<link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.css">
<script src="../assets/bootstrap/js/bootstrap.js"></script>


<!-- Other -->
<link rel="stylesheet" href="css/lightbox.css">

<?php if($pageTitle == "Event"){ ?>
<!-- Event Calendar -->
<link href="../assets/other/fullcalendar-2.4.0/fullcalendar.css" rel="stylesheet" />
<link href="../assets/other/fullcalendar-2.4.0/fullcalendar.print.css" rel="stylesheet" media="print" />
<script src="../assets/other/fullcalendar-2.4.0/lib/moment.min.js"></script>
<script src="../assets/other/fullcalendar-2.4.0/lib/jquery.min.js"></script>
<script src="../assets/other/fullcalendar-2.4.0/fullcalendar.min.js"></script>
<?php } ?>


<!-- Custom -->
<link rel="stylesheet" href="../assets/custom/css/event.css">
<script src="../assets/custom/js/event.js"></script>


<!-- set title of current page -->
<title><?php echo $pageTitle ?></title>
