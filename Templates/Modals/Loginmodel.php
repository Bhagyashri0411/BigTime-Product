<?php 
session_start(); 
include_once("./../../php/config.php");

// if (isset($_POST['logname']) && isset($_POST['userpassword'])) {

	// function validate($data){
    //    $data = trim($data);
	//    $data = stripslashes($data);
	//    $data = htmlspecialchars($data);
	//    return $data;
	// }

	$logname = mysqli_real_escape_string($mysqli, $_POST['logname']);
	$pass = mysqli_real_escape_string($mysqli, $_POST['logpass']);
    // $name = mysqli_real_escape_string($mysqli, )

	if (empty($logname)) {
		echo "error=User Name is required";
	    // exit();
	}else if(empty($pass)){
        echo "error=userpassword is required";
	    // exit();
	}else{
		$sql = "SELECT * FROM logininformation WHERE username='$logname' AND userpassword='$pass'";

		$result = mysqli_query($mysqli, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['username'] === $logname && $row['userpassword'] === $pass) {
            	$_SESSION['username'] = $row['username'];
            $_SESSION['name'] = $row['name'];
            	echo "success";
            }
              
            else{
			echo "hii";
			}
		}else{
			echo "heelo";
		}
	}
	
// }else{
// echo "Failed";
// }