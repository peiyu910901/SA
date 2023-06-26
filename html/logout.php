<?php session_start();
unset($_SESSION["Email"]);
unset($_SESSION["Ismanager"]);

header("location:index.php");
?>