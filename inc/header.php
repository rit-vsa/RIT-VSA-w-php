
<head>
  <!-- if this is event page, include fullcalendar library for generating event calendar-->
  <?php if($pageTitle == "Event"){ ?>
      <html>
      <head>
      <meta charset='utf-8' />
      <link rel="stylesheet" href="css/bootstrap.css">
      <link href='fullcalendar-2.4.0/fullcalendar.css' rel='stylesheet' />
      <link href='fullcalendar-2.4.0/fullcalendar.print.css' rel='stylesheet' media='print' />
      <script src='fullcalendar-2.4.0/lib/moment.min.js'></script>
      <script src='fullcalendar-2.4.0/lib/jquery.min.js'></script>
      <script src='fullcalendar-2.4.0/fullcalendar.min.js'></script>
      <script src="js/bootstrap.js"></script>
      <script>
      $(document).ready(function() {
    		$('#calendar').fullCalendar({
    			header: {
    				left: 'prev,next today',
    				center: 'title',
    				right: 'month,agendaWeek,agendaDay'
    			},
    			defaultDate: '2015-11-01',
    			businessHours: true, // display business hours
          eventLimit: true,
    			editable: false,
    			events: [
    				{
    					title: 'VSA Thanksgiving Dinner',
              start: '2015-11-26T19:00:00',
    					end: '2015-11-26T21:00:00',
    				},
            /*
    				{
    					title: 'Meeting',
    					start: '2015-02-13T11:00:00',
    					constraint: 'availableForMeeting', // defined below
    					color: '#257e4a'
    				},
    				// areas where "Meeting" must be dropped
    				{
    					id: 'availableForMeeting',
    					start: '2015-02-11T10:00:00',
    					end: '2015-02-11T16:00:00',
    					rendering: 'background'
    				},
    				{
    					id: 'availableForMeeting',
    					start: '2015-02-13T10:00:00',
    					end: '2015-02-13T16:00:00',
    					rendering: 'background'
    				},

    				// red areas where no events can be dropped
    				{
    					start: '2015-02-24',
    					end: '2015-02-28',
    					overlap: false,
    					rendering: 'background',
    					color: '#ff9f89'
    				},
    				{
    					start: '2015-02-06',
    					end: '2015-02-08',
    					overlap: false,
    					rendering: 'background',
    					color: '#ff9f89'
    				}
            */
    			]
    		});

    	});
    </script>
    <style>
    	body {
    		padding: 0;
    		font-family: "Lucida Grande",Helvetica,Arial,Verdana,sans-serif;
    		font-size: 14px;
    	}
    	#calendar {
    		max-width: 900px;
    		margin: 0 auto;
    	}
    </style>
    </head>
    <body>
      <!-- if it's not event page, include bootstrap, jquery, and lightbox-->
    <?php }  else { ?>
      <link rel="stylesheet" href="css/bootstrap.css">
      <link rel="stylesheet" href="css/lightbox.css">
      <script src="jquery-1.11.3.min.js"></script>
      <script src="js/bootstrap.js"></script>
      <?php } ?>
      <!-- set title of current page -->
    <title><?php echo $pageTitle ?></title>
</head>
<body>
    <!-- Collapsible navigation bar -->
    <nav class="navbar navbar-inverse">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#collap">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a href="index.php" class="navbar-brand"><strong>RIT VSA</strong></a>
        </div>
        <div class="collapse navbar-collapse" id="collap">
          <ul class="nav navbar-nav">
            <li><a href="shoutbox.php">Shout Box</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About Us</a></li>
            <li><a href="members.php">Members</a></li>
            <li><a href="event.php">Event</a></li>
            <li><a href="gallery.php">Gallery</a></li>
            <li><a href="contact.php">Contact</a></li>
          </ul>
        </div>
      </div>
    </nav>
