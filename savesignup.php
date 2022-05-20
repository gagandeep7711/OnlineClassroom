<?php

session_start();
$name= $_POST['name'];
$email= $_POST['email'];
$pass= $_POST['pass'];
$cardnumber= $_POST['cardnumber'];
$exdate= $_POST['exdate'];
$cvv= $_POST['cvv'];

$conn=mysqli_connect('localhost','root','','onlineclassses');
 

$date =('j/m/Y');
$chk=0;
 $query="SELECT * FROM `users`";
 $res=mysqli_query($conn,$query);
 while($row=(mysqli_fetch_assoc($res)))
 {
	 if($row['email']==$email)
	 {
		 echo "<script>window.location.assign('useremailerror.php');</script>";
		 $chk++;
	 }
 }
 if($chk==0)
 {
 $insert="INSERT INTO `users`(`username`, `email`, `pass`,card_number,ex_date,cvv) VALUES ('$name','$email','$pass','$cardnumber','$exdate','$cvv')";
 $res=mysqli_query($conn,$insert);

			$_SESSION["username"] = $email;
			$_SESSION["name"] = $name;

if ($conn->query($insert) === TRUE) {
  echo "New record created successfully";
  echo "<script>window.location.assign('index.php');</script>";
} else {
  echo "Error: " . $insert . "<br>" . $conn->error;
}
		
		
		 
 }
?>