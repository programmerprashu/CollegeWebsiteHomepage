<?php
session_start();

$email=$_POST['em'];
$pass=$_POST['pass'];
include("connection.php");
$check="select *from student where email='$email' and password='$pass'";
$res=mysqli_query($con, $check);
if($row=mysqli_fetch_array($res)){
    header("location:profile.php");
}else{
    header("location:login.php");
}
?>