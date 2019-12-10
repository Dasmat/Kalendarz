<?php
include("connect.php");



$sql = "TRUNCATE `H9O8Tw789T`.`wydarzenia`";
 
 if(!mysqli_query($con,$sql))
 {
	 echo 'Nie można wyczyścić tabeli';
 }
 else
 {
	 echo 'Tabela została wyczyszczona.';
 }
 
 header("refresh:2; url=index.html");
 
 ?>