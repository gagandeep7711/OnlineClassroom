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
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($connect, $_POST["query"]);
 $query = "
  SELECT * FROM users 
    
 ";
}
else
{
 $query = "
  SELECT * FROM users ORDER BY id
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
     <th>Price</th>
     <th>Date</th>
	 <th>Edit</th>
	 
    </tr>
 ';
 while($row = mysqli_fetch_array($result))
 {
  $output .= '
   <tr>
    <td>'.$row["username"].'</td>
    <td>'.$row["email"].'</td>
    <td>'.$row["date"].'</td>
    <td><form action="editstudent.php" method="POST"><input type="text" class="hide" name="id" value='.$row["id"].'> <input id='.$row["id"].' type="submit" value="/\/"></form></td>
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
