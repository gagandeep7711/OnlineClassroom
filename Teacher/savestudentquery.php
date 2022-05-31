<?php
$id=$_POST['id'];
$reply=$_POST['reply'];

$conn=mysqli_connect('localhost','root','','onlineclassses');
 if($conn)
 {
			 
$qur="UPDATE `query` SET `reply`='$reply' WHERE `id` = '$id' ";
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