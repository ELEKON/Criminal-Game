//H συνάρτηση αυτή χρησιμοποιείται για αποθηκεύσει στον 
//browser τα δεδομένα που εισάγει ο χρήστης στην φόρμα προβλέψεων
//ώστε να μην τα χάσει αν θελήσει να επισκεφθεί την σελίδα των καταθέσεων.
function store_form_data(){
	//τραβάμε τα δεδομένα από τα radio buttons
   var police_first = document.querySelector('input[name="police_first"]:checked').value;  
   var police_second = document.querySelector('input[name="police_second"]:checked').value; 
   var police_third = document.querySelector('input[name="police_third"]:checked').value; 
   var police_fourth = document.querySelector('input[name="police_fourth"]:checked').value; 
	
   var client_first = document.querySelector('input[name="client_first"]:checked').value;  
   var client_second = document.querySelector('input[name="client_second"]:checked').value; 
   var client_third = document.querySelector('input[name="client_third"]:checked').value; 
   var client_fourth = document.querySelector('input[name="client_fourth"]:checked').value; 
	
   var waiter_first = document.querySelector('input[name="waiter_first"]:checked').value;  
   var waiter_second = document.querySelector('input[name="waiter_second"]:checked').value; 
   var waiter_third = document.querySelector('input[name="waiter_third"]:checked').value; 
   var waiter_fourth = document.querySelector('input[name="waiter_fourth"]:checked').value; 

   var user_prediction = document.getElementById("prediction").value;

	//Tα αποθηκεύουμε στον browser
	
	localStorage.setItem("police_first",police_first);
	localStorage.setItem("police_second",police_second);
	localStorage.setItem("police_third",police_third);
	localStorage.setItem("police_fourth",police_fourth);

	
	localStorage.setItem("client_first",client_first);	
	localStorage.setItem("client_second",client_second);
	localStorage.setItem("client_third",client_third);
	localStorage.setItem("client_fourth",client_fourth);
	
	localStorage.setItem("waiter_first",waiter_first);	
	localStorage.setItem("waiter_second",waiter_second);
	localStorage.setItem("waiter_third",waiter_third);
	localStorage.setItem("waiter_fourth",waiter_fourth);
	
	localStorage.setItem("user_prediction",user_prediction);

}

//H συνάρτηση αυτή χρησιμοποιείται για να εμφανίσει τα δεδομένα
//που είχε επιλέξει ο χρήστης στην φόρμα

function restore_form_values(){

	//παίρνουμε τα δεδομένα της φόρμας που τα έχουμε αποθηκεύσει στον browser

	var police_one = localStorage.getItem("police_first");
	var police_two = localStorage.getItem("police_second");
	var police_three = localStorage.getItem("police_third");
	var police_four = localStorage.getItem("police_fourth");
	
	var client_one = localStorage.getItem("client_first");
	var client_two = localStorage.getItem("client_second");
	var client_three = localStorage.getItem("client_third");
	var client_four = localStorage.getItem("client_fourth");
	
	var waiter_one = localStorage.getItem("waiter_first");
	var waiter_two = localStorage.getItem("waiter_second");
	var waiter_three = localStorage.getItem("waiter_third");
	var waiter_four = localStorage.getItem("waiter_fourth");
	
	var user_prediction = localStorage.getItem("user_prediction");
	console.log(user_prediction);
	
	//κάνουμε check τα radio buttons που είχαμε επιλέξει
	if(police_one == "YES")
       document.forms["make_predictions"]["p_one_yes"].checked=true;
	else if(police_one == "NO")
	    document.forms["make_predictions"]["p_one_no"].checked=true;

	if(police_two == "YES")
       document.forms["make_predictions"]["p_two_yes"].checked=true;
	else if(police_two == "NO")
	    document.forms["make_predictions"]["p_two_no"].checked=true;

	if(police_three == "YES")
       document.forms["make_predictions"]["p_three_yes"].checked=true;
	else if(police_three == "NO")
	    document.forms["make_predictions"]["p_three_no"].checked=true;	
	 
	if(police_four == "YES")
       document.forms["make_predictions"]["p_four_yes"].checked=true;
	else if(police_four == "NO")
	    document.forms["make_predictions"]["p_four_no"].checked=true;
	
	//Για τον πελάτη
	
	if(client_one == "YES")
       document.forms["make_predictions"]["c_one_yes"].checked=true;
	else if(client_one == "NO")
	    document.forms["make_predictions"]["c_one_no"].checked=true;

	if(client_two == "YES")
       document.forms["make_predictions"]["c_two_yes"].checked=true;
	else if(client_two == "NO")
	    document.forms["make_predictions"]["c_two_no"].checked=true;

	if(client_three == "YES")
       document.forms["make_predictions"]["c_three_yes"].checked=true;
	else if(client_three == "NO")
	    document.forms["make_predictions"]["c_three_no"].checked=true;	
	 
	if(client_four == "YES")
       document.forms["make_predictions"]["c_four_yes"].checked=true;
	else if(client_four == "NO")
	    document.forms["make_predictions"]["c_four_no"].checked=true;	
	
	//Για τον σερβιτόρο
	
	if(waiter_one == "YES")
       document.forms["make_predictions"]["w_one_yes"].checked=true;
	else if(waiter_one == "NO")
	    document.forms["make_predictions"]["w_one_no"].checked=true;

	if(waiter_two == "YES")
       document.forms["make_predictions"]["w_two_yes"].checked=true;
	else if(waiter_two == "NO")
	    document.forms["make_predictions"]["w_two_no"].checked=true;

	if(waiter_three == "YES")
       document.forms["make_predictions"]["w_three_yes"].checked=true;
	else if(waiter_three == "NO")
	    document.forms["make_predictions"]["w_three_no"].checked=true;	
	 
	if(waiter_four == "YES")
       document.forms["make_predictions"]["w_four_yes"].checked=true;
	else if(waiter_four == "NO")
	    document.forms["make_predictions"]["w_four_no"].checked=true;	
	
	//Πρόβλεψη χρήστη
	if(user_prediction == "ΑΣΤΥΝΟΜΙΚΟΣ")
		document.getElementById("prediction").value = "ΑΣΤΥΝΟΜΙΚΟΣ";
	if(user_prediction == "ΠΕΛΑΤΗΣ")
		document.getElementById("prediction").value = "ΠΕΛΑΤΗΣ";
	if(user_prediction == "ΣΕΡΒΙΤΟΡΟΣ")
		document.getElementById("prediction").value = "ΣΕΡΒΙΤΟΡΟΣ";
	
	
	//Καθαρίζουμε τη localStore 
	localStorage.clear();
}

//Η συνάρτηση αυτή χρησιμοποιείται για να εμφανίσει και στην συνέχεια να 
//να αναπαραγάγει το video. Έπειτα, ο χρήστης οδηγείται στην σελίδα katathesis.php
function playVid() {
	document.getElementById("into-video").style.visibility ="visible";
	var video = document.getElementById("into-video");
	video.play();
    video.addEventListener('ended',function(){
		window.location = "katathesis.php";
	});
	
	
	document.getElementById("playStopButton").style.visibility = "hidden";

		
}
//Εμφανίζουμε τον πίνακα των απαντήσεων της ανάκρισης και ταυτόχρονα 
//αποκρύπτουμαι το κουμπί 
	   function appearTable(){
	document.getElementById("compare_button").style.display = "none";
	document.getElementById("results_table").style.display = "block";

}





