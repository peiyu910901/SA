<?php
session_start();
      $conn = mysqli_connect("localhost","root","12345678","sa");

if(!$conn){
  echo "連接失敗" . mysqli_connect_error();
}

$Email=$_POST["Email"];
$Password = $_POST["Password"];


mysqli_query($conn);

$sql = "select * from User where Email = '$Email'";
$result = mysqli_query($conn, $sql);
echo $sql;
if($row = mysqli_fetch_array($result)){
  if($row["Password"] == $Password){
    $_SESSION["Email"] = $row["Email"];
    $_SESSION["Ismanager"] = $row["Ismanager"];
   

    if($_SESSION["Ismanager"]=='Y'){
    header("Location:mindex.php");
    }else{
    header("Location:index.php");
  }
}
}
if(mysqli_num_rows($result) == 0){
  $error = "<p><font color='red'>此帳號未註冊</font></p>";
}else{
  $error = "<p><font color='red'>密碼錯誤</font></p>";
}
mysqli_close($conn);
    ?>