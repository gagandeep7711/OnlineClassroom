<?php

session_start();
$name= $_POST["email"];
$pass=$_POST["password"] ;




$conn=mysqli_connect('localhost','root','','onlineclassses');

 $query="SELECT * FROM `teachers`";
 $res=mysqli_query($conn,$query);
 while($row=(mysqli_fetch_assoc($res)))
 {
	if(($row['email']==$name)&&($row['pass']==$pass) &&  ($row['date']=='Active'))
	 {
		 $_SESSION['adminname']=$row['email'];
		 echo "<script>window.location.assign('main.php');</script>";
	 }
	if(($row['email']==$name)&&($row['pass']==$pass) &&  ($row['date']=='Blocked'))
	 {
		 echo "<script>window.location.assign('blockuser.php');</script>";
	 }
 }
   echo "<script>window.location.assign('userloginerror.php');</script>";

	
	
?>