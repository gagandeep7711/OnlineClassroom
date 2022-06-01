<?php
$id=$_POST['id'];
$name=$_POST['name'];
$des=$_POST['description'];
$cost=$_POST['cost'];
$stock=$_POST['stock'];
$weight=$_POST['weight'];


$conn=mysqli_connect('localhost','root','','onlineclassses');
 if($conn)
 {
	 
$qur="UPDATE `maincategory` SET `name`='$name' WHERE `id` = '$id' ";
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