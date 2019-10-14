<!--Εισάγουμε το αρχείο process.php το οποίο είναι υπεύθυνο -->
<!--για την μεταφορά των δεδομένων του χρήστη στην σελίδα sigkrish.php-->
<!--και την επεξεργσία τους-->
<?php include "includes/process.php"; ?>

<?php include "includes/header.php" ?>
    <title>Σύγκριση</title>
  </head>
<!--Με το που φορτώσει η σελίδα καλείται η μέθοδος init() στο js-->
<!-- για να κρατήσουμε σε μία js μεταβλητή την πρόβλεψη του χρήστη-->
  <body onload="init()">
 
  <div class=" container-fluid">
  	<div class="row">
  		<div class="col-md-6">
    	<!-- Πίνακας προβλέψεων -->
    		<h3><strong>ΠΙΝΑΚΑΣ ΠΡΟΒΛΕΨΕΩΝ</strong></h3>
    		<table class="table" id="predict-table">
  				<thead>
					<tr>
					  <th scope="col">Αστυνομικός</th>
					  <th scope="col">Πελάτης</th>
					  <th scope="col">Σερβιτόρος</th>
					</tr>
  				</thead>
				<tbody>
					<!--Γεμίζουμε τον πίνακα με τα δεδομένα του array της php-->
				    <?php
					   for($row = 0; $row < 4; $row++){
						   echo "<tr>";
						   for($col = 0; $col < 3; $col++){
							   echo "<td>" . $user_prediction[$row][$col] . "</td>";
						   }
						   echo "</tr>";
					   }
					?>
		  		</tbody>
			</table>
		
				<h5><strong>Ποιος πιστεύεται πως είναι ο δολοφόνος?</strong></h5>
				<p><strong><?php echo $merderer_prediction ?></strong></p>

  		</div>
  		<div class="col-md-6" >
		<!--Κουμπί το οποίο εμφανίζει τον πίνακα των αποτελεσμάτων-->
  		  	<div>
				<a class="btn btn-info" id="compare_button" onclick="appearTable()" data-toggle="collapse" href="#results_array" role="button" aria-expanded="false" aria-controls="results_array">
   				<strong> Σύγκρινε</strong></a>
  			</div>	
    	<!-- Πίνακας Απαντήσεων Ανάκρισης -->
    		<div class="collapse" id="results_array">
    		  <h3><strong>ΠΙΝΑΚΑΣ ΑΠΑΝΤΗΣΕΩΝ ΑΝΑΚΡΙΣΗΣ</strong></h3>
    		  <table class="table">
  				<thead>
					<tr>
					  <th scope="col">Αστυνομικός</th>
					  <th scope="col">Πελάτης</th>
					  <th scope="col">Σερβιτόρος</th>
					</tr>
  				</thead>
				<tbody>
				<!--Η μέθοδος αυτή δημιουργεί τον πίνακα απαντήσεων της ανάκρησης με τυχαίο τρίόπο-->
					<?php
					create_interogation_results();	
					?>
		  		</tbody>
			  </table>
			
			<div>
			  <div class="side-bar">
				<h5><strong>Πιστεύεις πως ο δολοφόνος είναι ο <span id="merderer"></span></strong></h5>
				<div id="actions">
				<!--Σε περίπτωση που ο χρήστης μείνει στην αρχική του απόφαση και πατήσει το ΝΑΙ-->
				<!--Τότε καλείται η view_merderer() js μέθοδος η οποία οδηγεί τον χρήστη στην επόμενη σελίδα-->
					<a id="myAnchor" class="btn btn-info" onclick="view_merderer()"><strong>NAI</strong></a>
					<!--Σε περίπτωση που ο χρήστης θέλει να αλλάξει την απόφασή του πατάει το κουμπί-->
					<!--και εμφανίζεαι το πεδίο με id change_criminal-->
					<a class="btn btn-info" id="change_button" onclick="appearTable()" data-toggle="collapse" href="#change_criminal" role="button" aria-expanded="false" aria-controls="change_criminal"><strong>OXI</strong></a>			
				</div>
				<!--Το τμήμα αυτό εμφανίζεται μόνο αν ο χρήστης θέλει να αλλάξει την απόφασή του-->
				<!--σχετικά με τον δολοφόνο-->
				<div class="collapse" id="change_criminal">
						<form class="form form-change">
							<div class="form-group more">
      							<label for="change_prediction"><strong>Ποιος πιστεύετε πως είναι ο δολοφόνος?</strong></label>
								<select class="form-control" id="change_prediction">
									<option value="ΑΣΤΥΝΟΜΙΚΟΣ" selected>Αστυνομικός</option>
									<option value="ΠΕΛΑΤΗΣ">Πελάτης</option>
									<option value="ΣΕΡΒΙΤΟΡΟΣ">Σερβιτόρος</option>
								</select> 
		  					</div>
						</form>
						<!--Mε το κουμπί αυτό ο χρήστης καταχωρεί την αλλαγή που έκανε στην απόφασή του-->
						<button class="btn btn-info" onclick="change_merderer()" type="button" id="change_criminal_button"><strong>Αλλαγή Πρόβλεψης</strong></button> 
					</div>
			  </div>
			</div>
			
    	</div>
    		
  		</div>
	</div>
  </div>
  
	   
    
   <script>
	   //Αποθηκεύει ττην αρχική πρόβλεψη του χρήστη σε μία js μεταβλητή
	   function init(){
		   var criminal = "<?php echo $GLOBALS['user_criminal'];?>"; 
		   document.getElementById("merderer").innerHTML = criminal;
	   }
	   //Σε περίπτωση που ο χρήστης αλλάξει γνώμη, ενημερώνουμε την μεταβλητή criminal 
	   //και το href μέσω του οποίο γίνεται ένα request στην σελίδα conclusion στην οποία περνάμε
	   //τόσο τον δολοφόνο όσο και την επιλογή του χρήστη
	   function change_merderer(){
			var criminal = document.getElementById("change_prediction").value;
		    document.getElementById("merderer").innerHTML = criminal;
		      document.getElementById("myAnchor").setAttribute("href", "conclusion.php?criminal=<?php echo  $GLOBALS['criminal'];?>&&user_criminal="+criminal); 
	   }
	   //Εκτελείται σε περίπτωση που χρήστης μείνει στην αρχική του πρόβλεψη
	   function view_merderer(){
		 var criminal = "<?php echo $GLOBALS['user_criminal'];?>"; 
		 document.getElementById("merderer").innerHTML = criminal; 
		 window.location.href = "conclusion.php?criminal=<?php echo  $GLOBALS['criminal'];?>&&user_criminal="+criminal;
	   }
 </script> 
 
 <?php include "includes/footer.php"; ?>	