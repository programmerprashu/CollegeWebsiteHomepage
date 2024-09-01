<?php
session_start();

$name=$_POST['n'];
$fname=$_POST['fn'];
$email=$_POST['em'];
$mobile=$_POST['num'];
$npass=$_POST['npass'];
$cpass=$_POST['cpass'];
$gender=$_POST['a'];
$branch=$_POST['branch'];
include("connection.php");

if($npass==$cpass){
   
    $check="select *from student where email='$email' and mobile='$mobile'";
    $res=mysqli_query($con,$check);
    


if($row=mysqli_fetch_array($res)){
    header("locaton:register.php");
    
}
else{
    $query="insert into student(sname , fname , email , mobile , password , gender , branch ,dor) 
    values('$name','$fname', '$email', '$mobile','$cpass', '$gender', '$branch', now())";
    mysqli_query($con, $query);
    header("location:login.php");
    

}
}
else{
    header("locaton:register.php");


}
?>