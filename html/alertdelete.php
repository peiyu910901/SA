<?php

    $comment_id=$_GET["comment_id"];    
   
    $link = mysqli_connect("localhost","root","12345678","sa");
   
   
    $sql = "delete from alertcomment where comment_id = '$comment_id'";
    $sql_comment = "delete from comment where comment_id = '$comment_id'";

    
    if(mysqli_query($link,$sql))
    {
        mysqli_query($link,$sql_comment);
        ?>
        <script>
            alert("刪除成功");
            location.href="alertcomment.php?";
        </script>
      <?php  
    }
   

 ?>
