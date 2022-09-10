<?php
//including the database connection file
session_start();
include_once("./../../php/config.php");

// if(isset($_POST['AddSubmit'])) {	
	$username = mysqli_real_escape_string($mysqli, $_POST['username']);

	$usermail = mysqli_real_escape_string($mysqli, $_POST['usermail']);
	$usermobile = mysqli_real_escape_string($mysqli, $_POST['usermobile']);
	$usermessage = mysqli_real_escape_string($mysqli, $_POST['usermessage']);
		
	// checking empty fields
	if(empty($username) || empty($usermobile) || empty($usermail)  || empty($usermessage)) {
				
	
			echo "Please Fill the follwing infomation";

			} else { 
		// if all the fields are filled (not empty) 
			
		//insert data to database	
		$result = mysqli_query($mysqli, "INSERT INTO inquiry(username,usermobile,usermail,usermessage) VALUES('$username','$usermobile','$usermail', '$usermessage')");
		
		//display success message
		echo "Data added successfully.";
		// echo "<br/><a href='./../../Dashboard/Dashboard.php'>View Result</a>";
	}
// }
?>