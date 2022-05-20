<?php
session_start();
if(!isset($_SESSION['username']))
{
		 echo "<script>window.location.assign('userlogin.php');</script>";
}

$conn=mysqli_connect('localhost','root','','onlineclassses');
 $email=$_SESSION['username'];
$pass=$_POST['password'];
$cardnumber=$_POST['trans_id'];
$exdate=$_POST['exdate'];
$cvv=$_POST['cvv'];
 if($conn)
 {
	 
$qur="UPDATE `users` SET `pass`='$pass',card_number='$cardnumber',ex_date='$exdate',cvv='$cvv' WHERE `email` = '$email' ";
$res=mysqli_query($conn,$qur);
			if($res)
			{
					echo"<script>window.location.assign('index.php'); </script>";
			}
			else
			{
			//    echo $id;
			 echo "Error: " . $qur . "<br>" . $conn->error;
				//echo "<script>window.location.assign('404.html'); </script>";
			}
			
 }
?>