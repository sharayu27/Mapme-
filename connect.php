
<?php
$username = "root";
$password = "";
$hostname = "127.0.0.1"; 
$db="mapme";
//connection to the database
$dbhandle = mysqli_connect($hostname, $username, $password) 
  or die("Unable to connect to MySQL");
//mysqli_select_db($db);
mysqli_select_db($dbhandle, $db);
//mysql_select_db($dbhandle,'mapme');
echo "Connected to MySQL<br>";
?>