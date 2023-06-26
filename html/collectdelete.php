<?php

    $collect_id=$_GET["collect_id"];    
   
    $link = mysqli_connect("localhost","root","12345678","sa");
   
   
    $sql = "delete from collect where collect_id = '$collect_id'";
    if(mysqli_query($link,$sql))
    {?>
    <script>
        alert("刪除成功");
        location.href="usercollect.php";
    </script>
  <?php  }
    

 ?>

    
    
    
