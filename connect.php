<?php
$host = "localhost";
$username = "root";
$password = "root";
$db = "forumseries";

//$connect_error = ("Cannot connect due to error");
//mysql_connect($host, $username, $password) or die (mysql_error());
//mysql_select_db($db);

$con = mysqli_connect('localhost', 'root', 'root', 'forumseries');
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  mysqli_select_db($con,$db);
  if (!mysqli_select_db($con, $db)) {
    echo("Uh oh, couldn't select database $db");
}
?>
