<?php
      
    $host = "remotemysql.com";
    $db_user = "H9O8Tw789T";
    $db_password = "pKJlRJlsXf";
    $db_name = "H9O8Tw789T";
      
    $con = mysqli_connect($host, $db_user, $db_password, $db_name);
    
	if ($con->connect_error) {
    die("Connection failed: " . $link->connect_error);
}
// echo "Connected successfully"; //potrzebne do testowania
  
?>