<?php
$course_id=$_GET["course_id"];
$email=$_GET["email"];





    $link=mysqli_connect('localhost','root','12345678','sa');
    $sql_origin="select * from comment where course_id='$course_id'";
    
    $rs_origin=mysqli_query($link,$sql_origin);
    $record=mysqli_fetch_row($rs_origin);

    $college=$record[1];
    $department=$record[2];
    $course=$record[3];
    $choose=$record[4];
    $teacher=$record[5];
   
    

   
    $sql="insert into collect (course_id,collect_college,collect_dept,collect_course,collect_choose,collect_teacher,collect_email) values ('$course_id','$college','$department','$course','$choose','$teacher','$email')";
    
    
    if(mysqli_query($link,$sql)){
     ?>   <script>
         alert("收藏成功!");
         location.href="usercollect.php";
         </script><?php
       
    }
    
   