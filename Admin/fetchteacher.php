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

$output = '';
$i4=0;

if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($connect, $_POST["query"]);
 $query = "
  SELECT * FROM teachers 
    
 ";
}
else
{
 $query = "
  SELECT * FROM teachers ORDER BY id
 ";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
	
 $output .= '
  <div class="table-responsive">
   <table class="table table bordered">
    <tr>
     <th>Name</th>
     <th>Email</th>
     <th>Status</th>
     <th>Number of courses</th>
	 <th>Edit</th>
	 
    </tr>
 ';
 while($row = mysqli_fetch_array($result))
 {
	 $id=$row["id"];
	 $username=$row["username"];
	 $email=$row["email"];
	 $status=$row["date"];
	 $qur2="SELECT * FROM items where teacher='$username'";
		$res=mysqli_query($connect,$qur2);
		if($res)
		{
			$i4=0;
			while($row=mysqli_fetch_assoc($res))
			{
				$i4++;
				
			}
		}
		else
		{
			echo "Error: " . $qur2 . "<br>" . mysqli_error($connect);
		}
  $output .= '
   <tr>
    <td>'.$username.'</td>
    <td>'.$email.'</td>
    <td>'.$status.'</td>
    <td> '.$i4.'</td>
    <td><form action="editteacher.php" method="POST"><input type="text" class="hide" name="id" value='.$id.'> <input id='.$id.' type="submit" value="/\/"></form></td>
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
