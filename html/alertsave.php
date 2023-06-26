<?php

    $comment_id=$_GET["comment_id"];    
   
    $link = mysqli_connect("localhost","root","12345678","sa");
   
   
    $sql = "delete from alertcomment where comment_id = '$comment_id'";

    if(mysqli_query($link,$sql))
    {?>
        <script>
            alert("保存成功");
            location.href="alertcomment.php";
        </script>
      <?php  
       
    }
    

 ?>
