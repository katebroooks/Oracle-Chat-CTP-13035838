<?php
session_start();
include_once("connect.php");

if (isset($_POST['username'])) {
	$username = mysqli_real_escape_string($con,$_POST['username']);
	$password = mysqli_real_escape_string($con,$_POST['password']);
	$sql = "SELECT * FROM users WHERE username='".$username."' AND password='".$password."' LIMIT 1";
	$res = mysqli_query($con,$sql) or die(mysqli_error($con));
	if (mysqli_num_rows($res) == 1) {
		$row = mysqli_fetch_assoc($res);
		$_SESSION['uid'] = $row['id'];
		$_SESSION['username'] = $row['username'];
		header("Location: signin2.php");
		exit();
		} else {
			echo "Invalid login information. Please return to previous page.";
			exit();
		}
}
?>
