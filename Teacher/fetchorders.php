<html>
	<head>
	
	<style>
		.hide{
			display:none;
		}
		</style>
	</head>
	<body>
	

<?php
$connect=mysqli_connect('localhost','root','','onlineclassses');
session_start();
if(isset($_SESSION['adminname'])){
$teacherr=$_SESSION['adminname'];
}
$qur4= "SELECT * FROM `teachers` where email='$teacherr'";
$res4=mysqli_query($connect,$qur4);
if($res4)
		{
			while($row=mysqli_fetch_assoc($res4))
			{
			$username5=$row['username'];
		//	echo $username5;
			}
		}
$output = '';
 $query = "SELECT * FROM `items` where teacher='$username5'";
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
 $output .= '
  <div class="table-responsive">
   <table class="table table bordered">
    <tr>
     <th>Name</th>
     <th>Price</th>
	 
    </tr>
 ';
 while($row = mysqli_fetch_array($result))
 {
	 $p1=$row["name"];
  $output .= '
   <tr>
    <td>'.$p1.'</td>
    <td>'.$row['price'].'$</td>
    <td><form action="edit.php" method="POST">
	</form></td>
   </tr>
  ';
 }
 echo $output;
}
else
{
 echo 'Data Not Found';
}
?>

</body>
</html>
