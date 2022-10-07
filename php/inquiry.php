<?php

include_once('./../php/dbcon.php');

    $username = $_POST['name'];
    $userphone = $_POST['email'];
    $useremail = $_POST['phone'];
    $userserviceCat = $_POST['servicetype'];
    $investservice = $_POST['servicename'];
    $investLimit = $_POST['investLimit'];
    
    $res = mysqli_query($mysqli, "INSERT INTO investinquiry(name, email, phone, servicetype,servicename, investLimit) VALUES('$username', '$userphone', '$useremail', '$userserviceCat', '$investservice', '$investLimit')");
    echo "warning";

    $username = $_POST['name'];
    $userphone = $_POST['email'];
    $useremail = $_POST['phone'];
    $userserviceCat = $_POST['servicetype'];
    $loanService = $_POST['servicename'];
    $loanMsg = $_POST['investLimit'];
    
    $res = mysqli_query($mysqli, "INSERT INTO logininquiry(name, email, phone, servicetype,logincat, loginmsg) VALUES('$username', '$userphone', '$useremail', '$userserviceCat', '$loanService', '$loanMsg')");
    echo "warning1";



?>