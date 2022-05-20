<?php
session_start();
if(!isset($_SESSION['username']))
{
		 echo "<script>window.location.assign('userlogin.php');</script>";
}

$conn=mysqli_connect('localhost','root','','onlineclassses');


 $query="SELECT * FROM `users`";
 $res=mysqli_query($conn,$query);
 while($row=(mysqli_fetch_assoc($res)))
 {
	 if($row['email']==$_SESSION['username'])
	 {
		 $userid=$row['id'];
		 $username=$row['username'];
		 $email=$row['email'];
	 }
 }
 $idofproduct=$_POST['coursename'];
 $message=$_POST['message'];

 $query2="SELECT * FROM `items`";
 $res2=mysqli_query($conn,$query2);
 while($row4=(mysqli_fetch_assoc($res2)))
 {
	 $idd=$row4['name'];
	 if($idd==$idofproduct)
	 {
		 
		 $teacherusername=$row4['teacher'];
	 }
 }
 
  $query6="SELECT * FROM `teachers`";
 $res4=mysqli_query($conn,$query6);
 while($row5=(mysqli_fetch_assoc($res4)))
 {
	 $tusername=$row5['username'];
	 if($teacherusername==$tusername)
	 {
		 $teacheremail=$row5['email'];
		 $teacherid=$row5['id'];
	 }
 }
 


$q="INSERT INTO `query`( `course`,`studentid`, `username`,email,teacherid,teacherusername,teacheremail,message
) VALUES ('$idofproduct','$userid',' $username','$email','$teacherid','$teacherusername','$teacheremail','$message')";
 $res=mysqli_query($conn,$q);
if ($conn->query($q) === TRUE) {
  echo "<script>window.location.assign('myquery.php');</script>";
} else {
  echo "Error: " . $q . "<br>" . $conn->error;
}

?>