<?php
include("connect.php");
$sql = "SELECT * FROM wydarzenia";
 
$records = mysqli_query($con,$sql);
 if(!mysqli_query($con,$sql))
 {
	 echo 'Nie udało się nic wyświetlić.';
 }
 else
 {
	// echo 'Wyświetlono.'; // do testowania
 }
 while($row = mysqli_fetch_array($records))
 {
	 echo "<tr>";
	 echo "<td>".$row['name']."</td>";
	 echo "<td>".$row['description']."</td>";
	 echo "<td>".$row['date']."</td>";	 
 }
 ?>
