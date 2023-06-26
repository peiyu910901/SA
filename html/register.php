<?php
 $conn = mysqli_connect("localhost","root","12345678","sa");

if(!$conn){
  echo "連接失敗" . mysqli_connect_error();
}

$Email=$_POST["Email"];
$Password = $_POST["Password"];


mysqli_query($conn,"");

$sql="insert into user (U_id,Email, Password , Ismanager) values ('','$Email','$Password','N')";
echo $sql;
if(mysqli_query($conn, $sql)){
    header("location:login-basic.php");
}else{
    echo "87";
}
    mysqli_close($conn);
    ?>