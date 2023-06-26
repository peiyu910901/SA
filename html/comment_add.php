<?php
$comment_id=$_GET["comment_id"];
$college_name=$_GET["college_name"];
$department=$_GET["department"];
$course=$_GET["course"];
$choose=$_GET["choose"];
$teacher=$_GET["teacher"];
$semester=$_GET["semester"];
$evaluation=$_GET["evaluation"];
$reason=$_GET["reason"];
$content=$_GET["content"];
$attend=$_GET["attend"];
$homework=$_GET["homework"];
$examway=$_GET["examway"];
$description=$_GET["description"];




    $link=mysqli_connect('localhost','root','12345678','sa');
    $sql_course="select course_id from course where course_name='$course' and course_teacher='$teacher'";
    $rs_id=mysqli_query($link,$sql_course);
    $record_id=mysqli_fetch_row($rs_id);

    $sql="insert into comment (comment_id,comment_college,comment_dept,comment_course,comment_choose,comment_teacher,comment_semester,comment_evaluation,comment_reason,comment_content,comment_attend,comment_homework,comment_examway,comment_description,course_id) values ('$comment_id','$college_name','$department','$course','$choose','$teacher','$semester',$evaluation,'$reason',$content,'$attend',$homework,'$examway','$description','$record_id[0]')";
    echo $sql;

   
    
    if(mysqli_query($link,$sql)){
        header('location:allcomment.php');
    
    }
   
?>


