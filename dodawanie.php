<?php
include("connect.php");

$Name = $_POST['name'];
$Description = $_POST['description'];
$Date = $_POST['date'];

$sql = "INSERT INTO wydarzenia (name,description,date) VALUES ('$Name','$Description','$Date')";
 
 if(!mysqli_query($con,$sql))
 {
	 echo 'Nie dodano';
 }
 else
 {
	 echo 'Dodano';
 }
 ?>