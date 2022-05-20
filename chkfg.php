<?php

$conn=mysqli_connect('localhost','root','','onlineclassses');
$query="SELECT * FROM `users`";
$email = $_POST['name'];
$pwd = $_POST['pwd'];
$res=mysqli_query($conn,$query);

while($row=(mysqli_fetch_assoc($res)))
 {
	 if($row['email']==$_POST['name'])
	 {
		$query="UPDATE `users` SET `pass` = '$pwd' WHERE `email` = '$email' ";
        $res=mysqli_query($conn,$query);
		if($res){
		echo "<script>window.location.assign('userlogin.php');</script>";
		}
		else{
			echo "<script>window.location.assign(forgot-password.php);</script>";			
		}
	 }
     else{
         echo "<script>window.location.assign(forgot-password.php);</script>";
     }
 }