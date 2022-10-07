<?php
//including the database connection file
session_start();
include_once("./dbcon.php");

// if(isset($_POST['ContactSubmit'])) {	
	$comname = mysqli_real_escape_string($mysqli, $_POST['comname']);
	$comemail = mysqli_real_escape_string($mysqli, $_POST['comemail']);
	$comnumber = mysqli_real_escape_string($mysqli, $_POST['comnumber']);
	$droproject = $_POST['droproject'];
		
	// checking empty fields
	if(empty($comname) || empty($comnumber) || empty($comemail)  || empty($droproject) ) {
				
		echo "Please Fill the follwing infomation";
		} else { 
		// if all the fields are filled (not empty) 
			
		//insert data to database	
		$resultconn = mysqli_query($mysqli, "INSERT INTO startaproject(comname,comemail,comnumber,droproject) VALUES('$comname','$comemail','$comnumber','$droproject')");
		
		//display success message
		echo "Your Information is Successfully added.";
		// echo "<br/><a href='./../../Dashboard/Dashboard.php'>View Result</a>";
	}
// }
?>
