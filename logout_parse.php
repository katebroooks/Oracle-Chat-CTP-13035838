<?php
// If this script is initiated, destroy session and
// return to signin page
session_start();
session_destroy();
header("Location: signin2.php");
?>
