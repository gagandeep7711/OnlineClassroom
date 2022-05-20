<?php
session_start();
if(!isset($_SESSION['username']))
{
		 echo "<script>window.location.assign('userlogin.php');</script>";
}

$conn=mysqli_connect('localhost','root','','onlineclassses');
 
$removecourse=$_POST['removecourse'];
$username=$_SESSION['username'];
echo $removecourse;
echo $username;

 if($conn)
 {
	 
$qur="DELETE FROM `orderitem` WHERE course_name='$removecourse' and username='$username'";
$res=mysqli_query($conn,$qur);
			if($res)
			{
					echo"<script>window.location.assign('courses.php'); </script>";
			}
			else
			{
			//    echo $id;
				echo "<script>window.location.assign('404.html'); </script>";
			}
			
 }
?>