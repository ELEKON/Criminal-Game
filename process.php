<?php
//Mε το που γίνει submit η φόρμα των προβλέψεων
   if(isset($_POST['submit'])){
	   //παίρνουμε τις απαντήσεις του χρήστη για τον αστυνομικό
	   $police_first_question = $_POST['police_first'];
	   $police_second_question = $_POST['police_second'];
	   $police_third_question = $_POST['police_third'];
	   $police_fourth_question = $_POST['police_fourth'];   
	   
	   //παίρνουμε τις απαντήσεις του χρήστη για τον πελάτη
	   $client_first_question = $_POST['client_first'];
	   $client_second_question = $_POST['client_second'];
	   $client_third_question = $_POST['client_third'];
	   $client_fourth_question = $_POST['client_fourth'];   
	   
	   //παίρνουμε τις απαντήσεις του χρήστη για τον αστυνομικό
	   $waiter_first_question = $_POST['waiter_first'];
	   $waiter_second_question = $_POST['waiter_second'];
	   $waiter_third_question = $_POST['waiter_third'];
	   $waiter_fourth_question = $_POST['waiter_fourth']; 
	   
	   //παίρνουμε την πρόβλεψη για τον δολοφόνο που έδωσε ο πελάτης
	   $merderer_prediction = $_POST['prediction'];
	   
	   //Αποθηκεύουμε την πρόβλεψη του χρήστη σε μία global μεταβλητή
	   $GLOBALS['user_criminal'] = "$merderer_prediction";
	      
	   //απόθηκεύουμε τις επροβλέψεις του χρήστη σε έναν πίανακα php 
	   $user_prediction = array(
	   		array($police_first_question, $client_first_question, $waiter_first_question),
		    array($police_second_question, $client_second_question, $waiter_second_question),
		    array($police_third_question, $client_third_question, $waiter_third_question),
		    array($police_fourth_question, $client_fourth_question, $waiter_fourth_question)
	   );
	   
   }

?>



<?php 
//Η function αυτή παίρνει τα δεδομένα από τον πίνακα προβλέψων που έδωσε ο χρήστης 
// και τα τροποποηεί ώστε κάθε φορά ο παραγόμενος πίνακας να έχει μία, δύο ή τρεις διαφορές
   function create_interogation_results(){
	   global $user_prediction; 
	   //Αντιγράφουμε τις προβλέψεις του χρήστη στον πίνακα integoration_results
	   for($row = 0; $row < 4; $row++){
	      for($col = 0; $col < 3; $col++){
	         $interogation_results[$row][$col] =$user_prediction[$row][$col];
		  }	   
		}
	   
	   $number_of_changes = 1;
	   $count = 3;
	   $columns = array(-1,-1,-1);
	   while($count > 0){
		   //Επιλέγουμε μία διαφορετική στήλη κάθε φορά
		   do{
			   
			   $col = mt_rand(0,2);
			   
		   }while($columns[$col] != -1);
		   //Σημειώνουμε τη στήλη που διαλέξαμε ώστε να μην χρησιμοποιηθεί ξανά
		   $columns[$col] = 1;
		   //αρχικοποιούμε τον πίνακα των σημειωμένων γραμμών 
		   $rows = array(-1,-1,-1,-1);
		   //Κάνουμε τις αλλαγές ξεκινόντας από μία αλλαγή 
		   for($i = 1; $i <= $number_of_changes; $i++){
			   //Επιλέγουμε γραμμή την οποία δεν έχουμε τροποποιήσει
			   do{
				   $row = mt_rand(0,3);
			
			   }while($rows[$row] != -1);
			   
			   //Σημειώνουμε τη γραμμή ώστε να μην την χρησιμοποιήσουμε για τη συγκεκριμένη στήλη
			   $rows[$row] = 1;
			   
			   //Κάνουμε swap 
			   if($interogation_results[$row][$col] == "YES")
				   $interogation_results[$row][$col] = "NO";
			   else if($interogation_results[$row][$col] == "NO")
				   $interogation_results[$row][$col] = "YES";
		  }
		   //Τροποποιούμε τους μετρητές
		   $number_of_changes++;
		   $count--;
	   }
	   
	   //Βρήσκουμε τις διαφορές ανάμεσα στους δύο πίνακες
	   //Μετράμε τις διαφορές που έχουν κατά στήλη οι δύο πίνακες και αποθηκεύουμε αυτό το νούμερο
	   //στον πίνακα results
	   for($col = 0; $col <3; $col++){
		   $counter = 0;
		   for($row = 0; $row <4; $row++){
			   if($user_prediction[$row][$col] != $interogation_results[$row][$col])
				   $counter++;
		   }
		   $results[$col] = $counter;
	   }
	   
	   //Στον πίνακα results η θέση 
	   //$results[0] αντιστοιχεί στον αστυνομικό
	   //$results[1] αντιστοιχεί στον πελάτη
	   //$results[2] αντιστοιχεί στον σερβιτόρο
	   for($i = 0; $i<= 2; $i++){
		   if($results[$i] == 3)
			   $criminal_index = $i;
	   }
	   
	   if($criminal_index == 0)
		  $GLOBALS['criminal'] = "ΑΣΤΥΝΟΜΙΚΟΣ";
	   if($criminal_index == 1)
		    $GLOBALS['criminal'] = "ΠΕΛΑΤΗΣ";
	   if($criminal_index == 2)
		    $GLOBALS['criminal']= "ΣΕΡΒΙΤΟΡΟΣ";
	   	
	  
	   
	   //Εμφανίζουμε τα αποτελέσματα στον πίνακα απαντήσεων ανάκρισης
	   for($row = 0; $row < 4; $row++){
		   echo "<tr>";
		   for($col = 0; $col < 3; $col++){
			   echo "<td>" .  $interogation_results[$row][$col] . "</td>";
		   }
		   echo "</tr>";
	   }
	    
   }
?>
