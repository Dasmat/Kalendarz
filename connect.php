<?php
      
    $host = "remotemysql.com";
    $db_user = "H9O8Tw789T";
    $db_password = "foKoH3v5KA";
    $db_name = "H9O8Tw789T";
      
    $con = mysqli_connect($host, $db_user, $db_password, $db_name);
    
	if ($con->connect_error) {
    die("Connection failed: " . $link->connect_error);
}
// echo "Połączono pomyślnie"; //potrzebne do testowania
  
?>
