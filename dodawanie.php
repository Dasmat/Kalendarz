<?php
include("connect.php");

$Name = $_POST['name'];
$Time= $_POST['time'];
$Date = $_POST['date'];
$Location= $_POST['location'];
$Description = $_POST['description'];

$sql = "INSERT INTO wydarzenia (name,time,date,location,description) VALUES ('$Name','$Time','$Date', '$Location', '$Description')";
 
 if(!mysqli_query($con,$sql))
 {
	 echo 'Nie dodano';
 }
 else
 {
	 echo 'Dodano, za chwilę nastąpi przekierowanie';
 }
 
 header("refresh:2; url=index.html");
 
 ?>
