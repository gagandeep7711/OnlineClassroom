<?php
$id=$_POST['id'];
$name=$_POST['name'];
$des=$_POST['description'];
$cost=$_POST['cost'];
$stock=$_POST['stock'];


$conn=mysqli_connect('localhost','root','','onlineclassses');
 if($conn)
 {
	 
$qur="UPDATE `items` SET `name`='$name',`description`='$des',`stock`='$stock',`price`='$cost' WHERE `id` = '$id' ";
$res=mysqli_query($conn,$qur);
			if($res)
			{
					echo"<script>window.location.assign('main.php'); </script>";
			}
			else
			{
			//    echo $id;
			 echo "Error: " . $qur . "<br>" . $conn->error;
			//	echo "<script>.location.assign('404.html'); </script>";
			}
			
 }?>