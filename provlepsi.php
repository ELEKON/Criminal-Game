<?php include "includes/header.php"; ?>
    <title>Πρόβλεψη</title>
  </head>
<!--Με το φορτωθεί η σελίδα καλείται η μέθοδος restore_form_values έτσι ώστε-->
<!--Οι προβλέψεις που έχει ήδη δώσει ο χρήστης να μην χαθούν και να εμφανιστούν στην φόρμα-->
  <body onload="restore_form_values()">
 
  <div class="container">
 	  <h3 class="header"><strong>Κάνε μία Πρόβλεψη</strong></h3>
	  <!--Φόρμα υποβολής των προβλέψεων του χρήστη-->
  	  <form action="sigkrish.php" class="" onsubmit="return validateForm()" id="make_predictions" method="post">
		<!--Προβλέψεις για τον αστυνομικό-->
  		<h4><strong>Ερωτήσεις για τον Αστυνομικό:</strong></h4>
		<div class="form-group">
			<label for="police_first" class="question">Είχες σχέση με τον ιδιοκτήτη?</label>			
			<label class="radio-inline"><input type="radio" name="police_first" value="YES" id="p_one_yes" required checked>ΝΑΙ</label>
			<label class="radio-inline"><input type="radio" name="police_first" value="NO" id="p_one_no">ΟΧΙ</label>	
			<span name="fault_message" id="police_first_fault"></span>
		</div>   
		<div class="form-group">
			<label for="police_second" class="question">Είχες μαζί σου υπηρεσιακό όπλο?</label>
			<label class="radio-inline"><input type="radio" name="police_second" id="p_two_yes" value="YES" required checked>ΝΑΙ</label>
			<label class="radio-inline"><input type="radio" name="police_second" id="p_two_no" value="NO">ΟΧΙ</label>
			<span name="fault_message" id="police_second_fault"></span>	
		</div>     
		<div class="form-group">
			<label for="police_third" class="question">Έφυγες καθόλου από τη μπάρα?</label>
			<label class="radio-inline"><input type="radio" name="police_third" value="YES" id="p_three_yes" required checked>ΝΑΙ</label>
			<label class="radio-inline"><input type="radio" name="police_third" value="NO" id="p_three_no">ΟΧΙ</label>	
			<span name="fault_message" id="police_third_fault"></span>
		</div>    
		<div class="form-group">
			<label for="police_fourth" class="question">Έβγαλες καθόλου το μπουφάν?</label>
			<label class="radio-inline"><input type="radio" name="police_fourth" value="YES" id="p_four_yes" required checked>ΝΑΙ</label>
			<label class="radio-inline"><input type="radio" name="police_fourth" value="NO" id="p_four_no">ΟΧΙ</label>
			<span name="fault_message" id="police_fourth_fault"></span>	
		</div>      
		<!--Προβλέψεις για τον πελάτη-->	
		<h4><strong>Ερωτήσεις για τον Πελάτη:</strong></h4>
		<div class="form-group">
			<label for="client_first" class="question">Είχες πολύ δύσκολη μέρα στη δουλειά?</label>
			<label class="radio-inline"><input type="radio" name="client_first" value="YES" id="c_one_yes" required  checked>ΝΑΙ</label>
			<label class="radio-inline"><input type="radio" name="client_first" value="NO" id="c_one_no">ΟΧΙ</label>	
		</div>   
		<div class="form-group">
			<label for="client_second" class="question">Είχες κανονίσει να κάνεις κάτι στις 21:00?</label>
			<label class="radio-inline"><input type="radio" name="client_second" value="YES" id="c_two_yes" required checked>ΝΑΙ</label>
			<label class="radio-inline"><input type="radio" name="client_second" value="NO" id="c_two_no">ΟΧΙ</label>	
		</div>     
		<div class="form-group">
			<label for="client_third" class="question">Όταν βγήκες από την τουαλέτα, η πόρτα του ιδιοκτήτη ήταν ανοιχτή?</label>
			<label class="radio-inline"><input type="radio" name="client_third" value="YES" id="c_three_yes" required checked>ΝΑΙ</label>
			<label class="radio-inline"><input type="radio" name="client_third" id="c_three_no" value="NO">ΟΧΙ</label>	
		</div>    
		<div class="form-group">
			<label for="client_fourth" class="question">Ο κύριος που συζητούσε με τον barman ήταν ο αστυνομικός?</label>
			<label class="radio-inline"><input type="radio" name="client_fourth" value="YES" id="c_four_yes" required checked>ΝΑΙ</label>
			<label class="radio-inline"><input type="radio" name="client_fourth" id="c_four_no" value="NO">ΟΧΙ</label>	
		</div>    
		<!--Προβλέψεις για τον σερβιτόρο-->  
		<h4><strong>Ερωτήσεις για τον Σερβιτόρο:</strong></h4>
		<div class="form-group">
			<label for="waiter_first" class="question">Σου ανέθεσε ο αστυνομικός να δώσεις κάποιο δέμα στον ιδιοκτήτη?</label>
			<label class="radio-inline"><input type="radio" name="waiter_first" value="YES" id="w_one_yes" required checked>ΝΑΙ</label>
			<label class="radio-inline"><input type="radio" name="waiter_first" value="NO" id="w_one_no" >ΟΧΙ</label>	
		</div>   
		<div class="form-group">
			<label for="waiter_second" class="question">Εξυπηρέτησες άλλον πελάτη όταν ο τελευταίος είχε πάει τουαλέτα?</label>
			<label class="radio-inline"><input type="radio" name="waiter_second" value="YES" id="w_two_yes"  required checked>ΝΑΙ</label>
			<label class="radio-inline"><input type="radio" name="waiter_second" value="NO" id="w_two_no" >ΟΧΙ</label>	
		</div>     
		<div class="form-group">
			<label for="waiter_third" class="question">Είχες καλή σχέση με τον εργοδότη σου?</label>
			<label class="radio-inline"><input type="radio" name="waiter_third" value="YES" id="w_three_yes"  required checked>ΝΑΙ</label>
			<label class="radio-inline"><input type="radio" name="waiter_third" value="NO" id="w_three_no" >ΟΧΙ</label>	
		</div>    
		<div class="form-group">
			<label for="waiter_fourth" class="question">Ήσουν κοντά στην μπάρα του μαγαιού την ώρα του πυροβολισμού?</label>
			<label class="radio-inline"><input type="radio"  name="waiter_fourth" value="YES" id="w_four_yes"  required checked>ΝΑΙ</label>
			<label class="radio-inline"><input type="radio"  name="waiter_fourth" value="NO" id="w_four_no" >ΟΧΙ</label>	
		</div>  
	    <!--Προβλέψη για το ποιος είναι ο δολοφόνος-->
 	    <div class="form-group">
      		<label for="prediction" id="predict"><strong>Ποιος πιστεύετε πως είναι ο δολοφόνος?</strong></label>
      			<select class="form-control" id="prediction" name="prediction" required>
        			<option value="ΑΣΤΥΝΟΜΙΚΟΣ" selected>Αστυνομικός</option>
        			<option value="ΠΕΛΑΤΗΣ">Πελάτης</option>
        			<option value="ΣΕΡΒΙΤΟΡΟΣ">Σερβιτόρος</option>
      			</select> 
		  </div> 
		  
		  <div class="row">
		  	<a href="katathesis.php" class="btn btn-info" onclick="store_form_data()" id="go_back">Δες καταθέσεις</a>
		   	<button class="btn btn-info" name="submit" type="submit">Υποβολή προβλέψεων</button>	
		   </div>	
  	  </form>	  	
  </div>
  
 <?php include "includes/footer.php"; ?>	   
    
