<?php
$host = "localhost"; //UWE: Stocks
$username = "root"; // UWE: fet13035838
$password = "root"; // ********
$db = "forumseries"; // fet13035838

//UWE server: Stocks
// UWE username: fet13035838
// UWE password: ********
// UWE Database:fet13035838

//Stores all of the database information

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
