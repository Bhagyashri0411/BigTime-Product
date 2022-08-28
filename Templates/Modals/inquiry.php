<html>
<head>
	<title>Add Data</title>
</head>

<body>
<?php
//including the database connection file
include_once("./../../php/config.php");

if(isset($_POST['AddSubmit'])) {	
	$username = mysqli_real_escape_string($mysqli, $_POST['username']);

	$usermail = mysqli_real_escape_string($mysqli, $_POST['usermail']);
	$usermobile = mysqli_real_escape_string($mysqli, $_POST['usermobile']);
	$usermessage = mysqli_real_escape_string($mysqli, $_POST['usermessage']);
		
	// checking empty fields
	if(empty($username) || empty($usermobile) || empty($usermail)  || empty($usermessage)) {
				
		if(empty($username)) {
			echo "<font color='red'>username field is empty.</font><br/>";
		}
		
		if(empty($usermobile)) {
			echo "<font color='red'>Age field is empty.</font><br/>";
		}
		
		if(empty($usermail)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}

		if(empty($usermessage)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}
		
		//link to the previous page
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
		// if all the fields are filled (not empty) 
			
		//insert data to database	
		$result = mysqli_query($mysqli, "INSERT INTO inquiry(username,usermobile,usermail,usermessage) VALUES('$username','$usermobile','$usermail', '$usermessage')");
		
		//display success message
		echo "<font color='green'>Data added successfully.";
		// echo "<br/><a href='./../../Dashboard/Dashboard.php'>View Result</a>";
	}
}
?>
</body>
</html>
