<?php
//including the database connection file
session_start();
include_once("./dbcon.php");

// if(isset($_POST['ContactSubmit'])) {	
	$comname = mysqli_real_escape_string($mysqli, $_POST['comname']);
	$comemail = mysqli_real_escape_string($mysqli, $_POST['comemail']);
	$comnumber = mysqli_real_escape_string($mysqli, $_POST['comnumber']);
	$usermessage = mysqli_real_escape_string($mysqli, $_POST['usermessage']);
	$droproject = $_POST['droproject'];
		
	// checking empty fields
	if(empty($comname) || empty($comnumber) ||empty($usermessage)  || empty($comemail)  || empty($droproject) ) {
				
		echo "Please Fill the follwing infomation";
		} else { 
		// if all the fields are filled (not empty) 
			
		//insert data to database	
		$resultconn = mysqli_query($mysqli, "INSERT INTO startaproject(comname,comemail,comnumber, usermessage, droproject) VALUES('$comname','$comemail','$comnumber','$usermessage','$droproject')");
		
		//display success message
		echo "Your Information is Successfully added.";
		header('Window-target: _blank');
		header("Location: ./../thank-you");
		exit();
		// echo "<br/><a href='./../../Dashboard/Dashboard.php'>View Result</a>";
	}
// }
?>
