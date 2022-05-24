<?php

session_start();
$name= $_POST["email"];
$pass=$_POST["password"] ;




$conn=mysqli_connect('localhost','root','','onlineclassses');
 if($conn)
 {
 
 $query = "SELECT adminname, pass FROM admin WHERE adminname='$name' 
AND pass='$pass'";

$result = mysqli_query($conn,$query)or die(mysqli_error());
$num_row = mysqli_num_rows($result);
$row=mysqli_fetch_array($result);
if( $num_row ==1 )
     {
 $_SESSION['adminname']=$row['adminname'];
 
		echo "<script>window.location.assign('main.php'); </script>";
	}
 else
     {
 echo "<script>window.location.assign('userloginerror.php'); </script>";
  }
	
	
	
}
  else
     {
 echo "<script>window.location.assign('userloginerror.php'); </script>";
  }
	
	
?>