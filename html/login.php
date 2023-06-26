<?php
    session_start();
    if(isset($_POST["Email"]) && isset($_POST["Password"])){
      $id = $_POST["Email"];
      $password = $_POST["Password"];

    }
?>