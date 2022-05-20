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
	 }
 }

 
$cardnumber=$_POST['trans_id'];
$exdate=$_POST['exdate'];
$cvv=$_POST['cvv'];
 
if(isset($_SESSION['username'])){
 $username=$_SESSION['username'];
}
$query = "SELECT card_number,ex_date,cvv FROM users where email='$username'";
$result= mysqli_query($conn, $query);
while($row = mysqli_fetch_array($result))
 {	
	 $cardnumber1=$row["card_number"];
	 $exdate1=$row["ex_date"];
	 $cvv1=$row["cvv"];	 
 }
if($cardnumber=$cardnumber1 and $exdate==$exdate1 and $cvv==$cvv1)
{
	//echo $userid;
	
	 $query1="SELECT * FROM `cart` where user_id='$userid' and ordered='no'";
 $res1=mysqli_query($conn,$query1);
 while($row=mysqli_fetch_assoc($res1))
 {
	 $course_name=$row["item_id"];
		 $q="INSERT INTO `orderitem`(username,course_name) VALUES ('$username','$course_name')";
 $res=mysqli_query($conn,$q);
if ($conn->query($q) === TRUE) {
  echo "New record created successfully";

$qur="UPDATE `cart` SET `ordered`='Yes' WHERE user_id='$userid'";
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
   echo "<script>window.location.assign('courses.php');</script>";

}
else {
  echo "Error: " . $q . "<br>" . $conn->error;
}
}
}
else {
  echo "<script>window.location.assign('cart.php');</script>";
}
?>