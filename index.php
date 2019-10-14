<?php include "includes/header.php"; ?>
    <title>Καλώς Ήρθατε</title>
  </head>
  <body>
<!-- Είναι το κύριως σώμα της σελίδας index-->
<!--Περιέχει μία background εικόνα η οποία εισάγεται μέσω της css καθώς και ένα video,-->
 <!--το οποίο εμφανίζεται και εκτελείται όταν ο χρήστης πατήσει το κουμπί-->
  <div class="container bg-image">
  	<div>
  		<video id="into-video">
  			<source src="images/story%20telling%20video.mp4" type="video/mp4">
  		</video>
		<button class="btn btn-info button" onclick="playVid()" id="playStopButton" type="button">Play</button>
 	</div>	
  </div>
  
	   
<?php include "includes/footer.php"; ?>