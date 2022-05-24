<html>
	<head>
	
	<style>
		
		</style>
	</head>
	<body>
	

<?php
session_start();
if(isset($_SESSION['adminname'])){
 $username=$_SESSION['adminname'];
}

$connect=mysqli_connect('localhost','root','','onlineclassses');
$output = '';
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($connect, $_POST["query"]);
 $query = "
  SELECT * FROM query 
    
 ";
}
else
{
 $query = "
  SELECT * FROM query ORDER BY id
 ";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
	
 $output .= '
  <div class="table-responsive">
   <table class="table table bordered">
    <tr>
     <th>Student Name</th>
     <th>Message</th>
     <th>Your Reply</th>
     <th>Edit</th>
    </tr>
 ';
 while($row = mysqli_fetch_array($result))
 {
	 if($row["teacheremail"]==$username)
	 {
  $output .= '
   <tr>
    <td>'.$row["username"].'</td>
    <td>'.$row["message"].'</td>
    <td>'.$row["reply"].'</td>
	<td><form action="replystudent.php" method="POST"><input type="text" class="hide" name="id" value='.$row["id"].'> <input id='.$row["id"].' type="submit" value="/\/"></form></td>
  
     </tr>
  ';
 }
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
