<?php
//including the database connection file
session_start();
include_once("./../../php/config.php");

// if(isset($_POST['ContactSubmit'])) {	
	$comname = mysqli_real_escape_string($mysqli, $_POST['comname']);
	$comemail = mysqli_real_escape_string($mysqli, $_POST['comemail']);
	$comnumber = mysqli_real_escape_string($mysqli, $_POST['comnumber']);
	$projectname = mysqli_real_escape_string($mysqli, $_POST['projectname']);
    $projectdetails = mysqli_real_escape_string($mysqli, $_POST['projectdetails']);
		
	// checking empty fields
	if(empty($comname) || empty($comnumber) || empty($comemail)  || empty($projectname) || empty($projectdetails)) {
				
		if(empty($comname)) {
			echo "<font color='red'>Company Name field is empty.</font><br/>";
		}
		
		if(empty($comnumber)) {
			echo "<font color='red'>Company Number field is empty.</font><br/>";
		}
		
		if(empty($comemail)) {
			echo "<font color='red'>Company Email field is empty.</font><br/>";
		}

		if(empty($projectname)) {
			echo "<font color='red'>Project Name field is empty.</font><br/>";
		}

        if(empty($projectdetails)) {
			echo "<font color='red'>Project Details field is empty.</font><br/>";
		}
		
		//link to the previous page
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
		// if all the fields are filled (not empty) 
			
		//insert data to database	
		$resultconn = mysqli_query($mysqli, "INSERT INTO startaproject(comname,comemail,comnumber,projectname,projectdetails) VALUES('$comname','$comemail','$comnumber','$projectname','$projectdetails')");
		
		//display success message
		echo "Your Information is Successfully added.";
		// echo "<br/><a href='./../../Dashboard/Dashboard.php'>View Result</a>";
	}
// }
?>
