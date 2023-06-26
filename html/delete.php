<?php

    $comment_id=$_GET["comment_id"];
    $course_id=$_GET["course_id"];        
   
    $link = mysqli_connect("localhost","root","12345678","sa");
    $sql = "delete from comment where comment_id = $comment_id";
    $sql_alert_id = "select * from alertcomment where comment_id = $comment_id";
  

    $alert_record = mysqli_query($link,$sql_alert_id);
    $record=mysqli_fetch_row($alert_record);
    
    $sql_alert = " delete from alertcomment where alert_id = $record[0]";


    if((mysqli_query($link,$sql) and mysqli_query($link,$sql_alert)) or mysqli_query($link,$sql))
    { 
      ?>
    <script>
       alert("刪除成功");
       location.href="managecourse.php?course_id=<?php echo $course_id?>";
    </script>
  <?php  }
   

 ?>
