<?php
 //"Πιάνουμε" το GET request και μαζί τα δεδομένα που φέρνει από τη σελίδα sigkrish.php
  if(isset($_GET['criminal'])){
	  $criminal = $_GET['criminal'];
	  $user_criminal = $_GET['user_criminal'];  
//Συγκρίνουμε τα αποτελέσματα του αλγορίθμου με αυτά του χρήστη	  
	if($criminal == $user_criminal){
		$msg = "Συγχαρητήρια Εξιχνίασες το Φόνο";
	}else{
		$msg = "Λυπάμαι δεν εξιχνίασες τον φόνο";
	}
  }
//Καθορίζουμε τους λόγους σε έναν πίνακα
  $reasons = array("Ο ουσιαστικός λόγος είναι το ξεπλήρωμα λογαριασμών της νύχτας. Ο ιδιοκτήτης, χρωστούσε χρήματα στον αστυνομικό, ο οποίος του είχε κάνει αρκετές εξυπηρετήσεις, πράγμα που τον οδήγησε σε αυτήν την πράξη", "Ο λόγος είναι ότι μόλις είχε απολυθεί μετά από μια πολύχρονη συνεργασία με μια ιδιωτική εταιρεία, η γυναία του και αυτός χρωστούσαν αρκετά χρήματα στις τράπεζες, μεαποτέλεσμα να μην το αντέξει ο ψυχισμός του και να προβεί σε αυτήν την απονενοημένη πράξη", "Ουσιαστικά η παράταση στην αποπληρωμή των δεδουλευμένων του, τον είχε εξοργήσει και σε συνδιασμό με το συνολικα κακό κλίμα στη δουλειά οδηγήθηκε σε αυτή την πράξη");
 
//Ανάλογα με τον δολοφόνο θέτουμε κατάλληλες τιμές στις μεταβλητές που χρησιμοποιούνται για την παρουσίαση
  if($criminal == "ΑΣΤΥΝΟΜΙΚΟΣ"){
	  $reason = $reasons[0];
	  $image = "astinomikos.jpg";
  }
	  
  if($criminal == "ΠΕΛΑΤΗΣ"){
	  $reason = $reasons[1];
	  $image = "pelaths.jpg";
  }
	  
  if($criminal == "ΣΕΡΒΙΤΟΡΟΣ"){
	  $reason = $reasons[2];
	  $image = "servitoros.jpg";
  }
	  
  

?>
