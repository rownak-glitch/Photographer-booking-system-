<?php
$conn=mysqli_connect('localhost','root', '','booking');
//mysqli_connect_db($conn,'booking');
$username=$_POST['username'];
$password=$_POST['password'];
$s ="select * from client where username = '$username' && password = '$password'";
$result = mysqli_query($conn,$s);
$num= mysqli_num_rows($result);
if($num >0){
	header('location:home.html');

}
else{

	header('location:index.html');

}
?> 