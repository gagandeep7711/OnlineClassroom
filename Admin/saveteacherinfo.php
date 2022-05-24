<?php
$id=$_POST['id'];

$email=$_POST['email'];
$status=$_POST['status'];


$conn=mysqli_connect('localhost','root','','onlineclassses');
 if($conn)
 {
	 
$qur="UPDATE `teachers` SET `email`='$email',date='$status' WHERE `id` = '$id' ";
$res=mysqli_query($conn,$qur);
			if($res)
			{
					echo"<script>window.location.assign('main.php'); </script>";
			}
			else
			{
			//    echo $id;
				echo "<script>window.location.assign('404.html'); </script>";
			}
			
 }?>