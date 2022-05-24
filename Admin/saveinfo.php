<?php
$id=$_POST['id'];
$name=$_POST['name'];
$desc=$_POST['description'];
$cost=$_POST['cost'];
$stock=$_POST['stock'];
$teacher=$_POST['teacher'];


$conn=mysqli_connect('localhost','root','','onlineclassses');
 if($conn)
 {
$qur="UPDATE items SET name='$name',description='$desc',stock='$stock',teacher='$teacher',price='$cost' WHERE `id` = '$id' ";
$res=mysqli_query($conn,$qur);
			if($res)
			{
					echo"<script>window.location.assign('main.php'); </script>";
			}
			else
			{
			//    echo $id;
			 echo "Error: " . $qur . "<br>" . mysqli_error($conn);
			//	echo "<script>window.location.assign('405.html'); </script>";
				 
			}
			
 }?>