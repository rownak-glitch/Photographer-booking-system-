<?php 
include("conn.php");
header('location:login.html');
$username= $_POST['username'];
$email= $_POST['email'];
$password= $_POST['password'];
$passwordRepeat= $_POST['passwordRepeat'];
$phonenumber = $_POST['phonenumber'];
$cardNumber = $_POST['cardNumber'];

$query="INSERT INTO client VALUES('$username','$email','$password','$passwordRepeat','$phonenumber','$cardNumber')";
$data=mysqli_query($conn,$query);
if($data)
{

  echo"Successfull";
}
?>