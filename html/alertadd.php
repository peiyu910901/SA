<?php
$comment_id=$_GET["comment_id"];
$email=$_GET["email"];
$alertreason=$_POST["alertreason"];
$detail=$_POST["detail"];




    $link=mysqli_connect('localhost','root','12345678','sa');
    $sql="insert into alertcomment (comment_id , alertreason , detail , email) values ($comment_id,'$alertreason','$detail','$email')";
    
    if(mysqli_query($link,$sql)){
        ?>   <script>
        alert("檢舉成功!");
        location.href="allcomment.php";
        </script><?php

    
    }
   
?>


