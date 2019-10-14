<?php include "includes/find_criminal.php"; ?>

<?php include "includes/header.php"; ?>

    <title>Conclusion</title>
  </head>
  <body>
 
  <div class="container">
  	<div id="conclusion">
  		<h2><strong>Συμπεράσματα</strong></h2>
		<p><h5><strong><?php echo $msg; ?></strong></h5></p>
		<p><h5><strong>O δολοφόνος είναι ο <?php echo $criminal; ?></strong></h5></p>
  		<img src="images/<?php echo $image; ?>" alt="">
  		<p><strong><?php echo $reason; ?></strong></p>
  		</div>
  </div>
  
	   
<?php include "includes/footer.php"; ?>    
    
    
	

