<?php 
require_once('admin/db.php');
$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];

$query="INSERT INTO users (username,email,password) VALUES ('".$username."','".$email."','".$password."')";
$result=mysqli_query($connection,$query);
if($result){
    header("Location:login.php?msg=Sign up success");
}else{
    header("Location:signin.php?msg=Sign up failed");
}
?>