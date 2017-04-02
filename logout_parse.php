<?php
session_start();
session_destroy();
header("Location: signin2.php");
?>
