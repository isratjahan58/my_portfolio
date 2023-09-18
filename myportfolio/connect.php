<?php

$host = "localhost";
$user = "root";
$password = "";
$db="test";

// Create connection
$conn = mysqli_connect($host, $user, $password ,$db);

// Check connection
if (!$conn) {
  echo 'connection failed';
}
else {
    echo 'Connected successfully' ;  
}


?>