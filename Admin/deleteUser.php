
<?php

$iddel= $_POST["id"];
del($iddel);
function del($id)
{
$conn=mysqli_connect('localhost','root','','onlineclassses');
if($conn)
{

    $qur= "DELETE FROM `users` WHERE `id` = '$id'";
    $res=mysqli_query($conn,$qur);
    if($res)
    {         
        echo"<script>window.location.assign('user.php'); </script>";
    }
    else 
    {
echo"<script>window.location.assign('404.html'); </script>";		}
}
}
?>