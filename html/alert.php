<?php
$comment_id=$_GET["comment_id"];




    $link=mysqli_connect('localhost','root','12345678','sa');
    $sql_origin="select * from comment where comment_id=$comment_id";
    
    $rs_origin=mysqli_query($link,$sql_origin);
    $record=mysqli_fetch_row($rs_origin);

    $college_name=$record[1];

    $department=$record[2];
    $course=$record[3];

    $teacher=$record[5];

    $evaluation=$record[7];
    $reason=$record[8];
    $content=$record[9];

    $homework=$record[11];
    $examway=$record[12];
    $description=$record[13];
    

   
    $sql="insert into alertcomment (comment_id,comment_college,comment_dept,comment_course,comment_teacher,comment_evaluation,comment_reason,comment_content,comment_homework,comment_examway,comment_description) values ($comment_id ,'$college_name' , '$department' , '$course' , '$teacher' , $evaluation ,'$reason' , $content , $homework ,'$examway','$description')";
    
    
    if(mysqli_query($link,$sql)){
     ?>  <script>
         alert("檢舉成功!");
         location.href="allcomment.php";
         </script><?php
       
    }
    
   

?>

