<?php

/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$mysqli = new mysqli("localhost", "root", "", "sellingEyeglasses");
mysqli_set_charset($mysqli, 'UTF8');

// Check connection
if($mysqli === false){
   die("ERROR: Could not connect. " . $mysqli->connect_error);
}

?>