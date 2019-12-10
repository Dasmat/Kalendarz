<html>
<head>
<meta http-equiv="Content-Type" content="text/html" charset="utf-8" />
</head>
<body>
<center>
<table action="wyswietlanie.php">
	<tr>
		<th>Nazwa wydarzenia:</th>
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
<br>
	<form method="get" action="index.html">
	<button type="submit">Główna strona</button>
	</form>
</center>

</body>
</html>