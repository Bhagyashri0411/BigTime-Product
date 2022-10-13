<?php

$databaseHost = 'localhost';
$databaseName = 'BigtimeDatabase';
$databaseUsername = 'BigtimeDatabase';
$databasePassword = 'roots';

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 
if(!$mysqli){
    echo "Connection!" . mysqli_connect_error();
}
?>