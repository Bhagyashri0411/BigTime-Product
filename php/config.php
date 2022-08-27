<?php

$databaseHost = 'localhost';
$databaseName = 'mysql';
$databaseUsername = 'root';
$databasePassword = '';

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 
if(!$mysqli){
    echo "Connection!" . mysqli_connect_error();
}
?>
