<html>
<head>
<meta http-equiv="Content-Type" content="text/html" charset="utf-8" />
</head>
<body>

<table action="wyswietlanie.php">
	<tr>
		<th>Nazwa:</th>
		<th>Opis:</th>
		<th>Data:</th>
	
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
	 echo 'Wyświetlono.';
 }
 while($row = mysqli_fetch_array($records))
 {
	 echo "<tr>";
	 echo "<td>".$row['name']."</td>";
	 echo "<td>".$row['description']."</td>";
	 echo "<td>".$row['date']."</td>";	 
 }
 ?>
</tr>
</table>


</body>
</html>