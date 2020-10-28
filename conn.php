<?php
$servername="localhost";
$username="root";
$password="";
$dbname="booking";
$conn=mysqli_connect($servername,$username,$password,$dbname);

if($conn)
{
  echo"";
}
else
{
  echo"connection faild";
}

  ?>