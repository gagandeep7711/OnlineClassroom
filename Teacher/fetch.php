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
session_start();
if(isset($_SESSION['adminname'])){
 $adminname=$_SESSION['adminname'];
}

$connect=mysqli_connect('localhost','root','','onlineclassses');
$query = "SELECT username FROM teachers where email='$adminname'";
$result= mysqli_query($connect, $query);
while($row = mysqli_fetch_array($result))
 {	
	 $teachername=$row["username"];
 }
	 
$output = '';
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($connect, $_POST["query"]);
 $query = "
  SELECT * FROM items 
  WHERE name LIKE '%".$search."%'
  OR date LIKE '%".$search."%' 
  OR price LIKE '%".$search."%' 
 ";
}
else
{
 $query = "
  SELECT * FROM items where teacher='$teachername'" ;
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
	 <th>Edit</th>
	 
    </tr>
 ';
 while($row = mysqli_fetch_array($result))
 {
  $output .= '
   <tr>
    <td>'.$row["name"].'</td>
    <td>'.$row["price"].'$</td>
    <td><form action="edit.php" method="POST"><input type="text" class="hide" name="id" value='.$row["id"].'> <input id='.$row["id"].' type="submit" value="/\/"></form></td>
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
