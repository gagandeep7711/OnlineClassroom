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
  WHERE name LIKE '%".$search."%'
  OR id LIKE '%".$search."%' 
 ";
}
else
{
 $query = "
  SELECT * FROM users 
 ";
}
$result2 = mysqli_query($connect, $query);
if(mysqli_num_rows($result2) > 0)
{
 $output .= '
  <div class="table-responsive">
   <table class="table table bordered">
    <tr>
     <th>Id</th>
     <th>Name</th>
      <th>Email</th>
    </tr>
 ';
 while($row = mysqli_fetch_array($result2))
 {
  $output .= '
   <tr>
    <td>'.$row["id"].'</td>
    <td>'.$row["username"].'</td>
    <td>'.$row["email"].'</td>
    <td><form action="deleteUser.php" method="POST"><input type="text" class="hide" name="id" value='.$row["id"].'> <input type="submit" value="/\/"></form></td>
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
