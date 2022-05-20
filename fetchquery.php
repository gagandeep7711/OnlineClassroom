<html>
	<head>
	
	<style>
		
		</style>
	</head>
	<body>
	

<?php
session_start();
if(isset($_SESSION['username'])){
 $username=$_SESSION['username'];
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
     <th>Teacher Name</th>
     <th>Message</th>
     <th>Teacher Reply</th>
    </tr>
 ';
 while($row = mysqli_fetch_array($result))
 {
	 if($row["email"]==$username)
	 {
  $output .= '
   <tr>
    <td>'.$row["teacherusername"].'</td>
    <td>'.$row["message"].'</td>
    <td>'.$row["reply"].'</td>
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
