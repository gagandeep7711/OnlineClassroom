<?php session_start(); 
$conn=mysqli_connect('localhost','root','','onlineclassses');
if(isset($_SESSION['adminname'])){
$teacherr=$_SESSION['adminname'];
$qur4= "SELECT * FROM `teachers` where email='$teacherr'";
$res4=mysqli_query($conn,$qur4);
if($res4)
		{
			while($row=mysqli_fetch_assoc($res4))
			{
			$username5=$row['username'];
		//	echo $username5;
			}
		}
}?>
<?php

$pname=$_POST['product_name'];
$pdescription=$_POST['product_description'];
$pstock=$_POST['product_stock'];
$pprice=$_POST['PRICE'];
$pcategorie=$_POST['cat'];
$pvideos=$_POST['videos'];

if($conn)
{
    $date = date("d/m/Y");
	  $filename = $_FILES['file']['name'] ;
    $filesize = $_FILES['file']['size'] ;
    $filetemploc = $_FILES['file']['tmp_name'];

    $fileerror = $_FILES['file']['error'] ;
    $filenamepart = explode('.',$filename);
    $fileext = strtolower(end($filenamepart));

    $allow = array('jpg','jpeg','png');
    if(in_array($fileext,$allow))
    {
    if($fileerror === 0){
    if($filesize<50000000000) {
		$filenewname=uniqid('',true).".".$fileext;
                              $filedes='uploads/' .$filenewname;
                              move_uploaded_file($filetemploc,$filedes);
			  $query="INSERT INTO items(name, description, date, image, stock, teacher, price, category,video) VALUES ('$pname','$pdescription', '$date', '$filedes' , '$pstock', '$username5', '$pprice','$pcategorie','$pvideos')";

                              if (mysqli_query($conn,$query)) {
			  echo "<script>window.location.href='main.php';</script>";
                              } else {
                                  echo "Error:   $query " . mysqli_error($conn);
                              }
							                 
              }
            }
          }
 
       }

else {
  echo "no connection";
}


?>
