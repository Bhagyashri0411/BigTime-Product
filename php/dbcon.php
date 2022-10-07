<?php

$databaseHost = 'localhost';
$dataBaseName = 'bigtimedatabase';
$databasepass ='';
$databaseusername = 'root';

$mysqli = mysqli_connect($databaseHost, $databaseusername, $databasepass, $dataBaseName);
if (!$mysqli) {
   echo "Not connected";
}
?>