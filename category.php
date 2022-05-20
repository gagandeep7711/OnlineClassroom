<?php

session_start();
$idforcategory= $_POST['idofcat'];
$_SESSION["cato"] = $_POST['idofcat'];
$conn=mysqli_connect('localhost','root','','onlineclassses');
	
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family:Arial Black;
  roboto,sans-serif;
  background-color:#e8dbdb82;
}carousel-item img{
	position:relative;
}
#carouselExampleControls{
	position:relative;
}

.sidenav {
	
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #fff;
  color:#01111;
  border-radius:4px;
  box-shadow:1px 3px 2px #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 0px 8px 8px 20px;
  text-decoration: none;
  font-size: 21px;
  color: #818181;
  display: block;
  transition: 0.3s;
  display:block;
}

.sidenav a:hover {
  color: #000;
}


.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}


.fa {
  padding: 10px;
  font-size: 15px;
  width: 30px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
  border-radius: 50%;
}
.fa-facebook {
  background: #3B5998;
  color: white;
}

.fa-twitter {
  background: #55ACEE;
  color: white;
}

.fa-google {
  background: #dd4b39;
  color: white;
}

.fa-linkedin {
  background: #007bb5;
  color: white;
}

.fa-youtube {
  background: #bb0000;
  color: white;
}

.fa-instagram {
  background: #125688;
  color: white;
}

.fa-pinterest {
  background: #cb2027;
  color: white;
}

.fa-snapchat-ghost {
  background: #fffc00;
  color: white;
  text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
}
.card-header{
	text-align:center;
}

.mybtn{
	display:block;
	padding:10px;
	margin-left:30px;
	color:#818181;
	background:inherit;
	border:0px;
	
}
.mybtn:hover{
	
	color:#000;
	border-bottom:1px solid black;
	
}
.col-md-3,col-md-12{
	margin-bottom:2px;
}
</style>
</head><body>
<div class="top " style="background-color:#fff;font-family:Eras Bold ITC;width:100%;text-align:center;background:#f14f78;color:#fff">
</div>
 <nav class="navbar navbar-expand-md navbar-dark" style="width:100%;background:#3E065F;">
        <a href="#" class="navbar-brand">
           <h3 style="font-family:Trajan"><b><span style="font-size:30px;cursor:pointer;margin-right:2%;margin-left:2%" onclick="openNav()">&#9776;</span>
		   <span onclick="window.location.assign('index.php')">Online Classes Website</span>

</b></h3>
        </a>
      

        <div class="collapse navbar-collapse" id="navbarCollapse">
            
            <div class="navbar-nav ml-auto">
<?php
  if(!isset($_SESSION["username"]))
{
  ?>
               
						   
 <?php 
}
	?>
            </div>
        </div>
    </nav>

<div id="mySidenav" class="sidenav" >
  <a style="font-size:large;" href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <?php
  if(!isset($_SESSION["username"]))
{
  ?>
    <a href="userlogin.php" style="font-size:large;" ><h5><i class="fa fa-sign-in" aria-hidden="true"></i> Sign In </h5></a>
    <a href="usersignup.php" style="font-size:large;" ><h5><i class="fa fa-user" aria-hidden="true"></i> Sign Up </h5></a>
	<a href="Teacher/index.php" style="font-size:large;" ><h5><i class="fa fa-search" aria-hidden="true"></i>Login-Teacher </h5></a>
	<a href="Admin/index.php" style="font-size:large;" ><h5><i class="fa fa-search" aria-hidden="true"></i>Login-Admin </h5></a>
  <a style="font-size:large;" href="about.php"><i class="fa fa-address-card"></i> About</a>
	<?php 
}
else
{
	?>
	<p style="width:80%;padding:20px;text-align:center;">Logged in as<small style="color:blue"> <?php echo $_SESSION["username"]; ?>
</small></p>
    <a href="courses.php" style="font-size:large;" ><h5><i class="fa fa-check"></i> My Courses </h5></a>
    <a href="profile.php" style="font-size:large;" ><h5><i class="fa fa-check"></i> My Profile </h5></a>
    <a href="cart.php" style="font-size:large;" ><h5><i class="fa fa-shopping-cart" aria-hidden="true"></i> My Cart </h5></a>
    <a href="userlogout.php" style="font-size:large;" ><h5><i class="fa fa-sign-in" aria-hidden="true"></i> Logout </h5></a>
	<?php
}
	?>
  <hr>
  <h6 style="padding:5px;text-align:center;">Categories</h6>

   <?php
																			$qury= 'SELECT * FROM `maincategory`';
																			$reslt=mysqli_query($conn,$qury);
																		
																						while($row=mysqli_fetch_assoc($reslt))
																						{
																							$name= $row['name'];
																							$id=$row['id'];
																							if($id==$idforcategory)
																							{
																								$categoryname=$name;
																							}
																							echo '
																							<form action="category.php" method="POST" style="display:block;">
																							<input type="text" value="'.$id.'" style="display:none;" name="idofcat">
																							<input type="submit" value="'.$name.'" style="background:inherit" class="mybtn">
																							</form>
																							
																							';
																									
																						}
																						?>
  
  
</div>

<h4 style="text-align:center;width:100%;border-top:1px solid;border-bottom:1px solid;" class="card-header" >Categories / <?php echo $categoryname; ?> Collection</h4>
<form action="sort_price.php" method="POST" style="display:block;">
	<input type="text" value="<?php $idforcategory ?>" style="display:none;" name="idforcat">
	<input type="submit" class="btn"   value="sort by price" style="width:100%;text-align:center; color:white; background-color:#3E065F;" >
</form>
<form action="sort_stock.php" method="POST" style="display:block;">
	<input type="text" value="<?php $idforcategory ?>" style="display:none;" name="idforcat">
	<input type="submit" class="btn"   value="sort by Rating" style="width:100%;text-align:center; color:white; background-color:#3E065F;" >
</form>
<div class="col-md-12"  style="font-family:Bauhaus">
<div class="row justify-content-center" style="margin-top:10px;">
	<?php
																			$qury= 'SELECT * FROM `maincategory`';
																			$reslt=mysqli_query($conn,$qury);
																				
																			$query= 'SELECT * FROM `items`';
																			$count=0;
																			$result=mysqli_query($conn,$query);
																						while($row=mysqli_fetch_assoc($result))
																						{
																							$name= $row['name'];
																							$id=$row['id'];
																							$stock=$row['stock'];
																							$price=$row['price'];
																							$cat=$row['category'];
																							$teacher=$row['teacher'];
																							$image=$row['image'];
																							
																			$reslt=mysqli_query($conn,$qury);
																						while($row2=mysqli_fetch_assoc($reslt))
																						{
																							$name2= $row2['name'];
																							$id2=$row2['id'];
																							if($row2['id']==$row['category'])
																							{
																								if($idforcategory==$row2['id'])
																								{
																									$query2= "SELECT date FROM `teachers` where date='Active' and username='$teacher'";
																
																			$result2=mysqli_query($conn,$query2);
																						while($row5=mysqli_fetch_assoc($result2))
																						{
																							$status= $row5['date'];
																							if($status="Active");
																							{																							
																									$count++;
																								$categ=$name2;
																								echo '
																								<div class="col-md-3">
																								<div class="card">
																									
																							<div class="card-body">
																										 <img class="d-block w-100" height="200px;" src="Teacher/'.$image.'" alt="'.$categ.'">
																							  <div class="well">
																							  <h5>'.$name.'</h5>
																							
																								<p style="width:100%;"> <span style="float:right">By '.$teacher.'</span></p><br>
																									<p style="width:100%;"> <span style="float:right">Rating '.$stock.'</span></p>
																								<br><p style="width:100%;color:black; background color: #3E065F;font-family:verdana;font-size:x-large"> <span style="float:right">Price '.$price.' <small >$ CAD</small></span></p>
																									</div>	
																							<form action="detailitems.php" method="POST" style="display:block;">
																							<input type="text" value="'.$id.'" style="display:none;" name="id">
																							<input type="submit" class="btn"   value="Enroll now" style="width:100%;text-align:center; color:white; background-color:#3E065F;" >
																							</form>	
																							
																									</div>
																								</div>
																								</div>
																							
																							';
																						}
																						}
																								}
																							}
																						}
																							
																					}
																					if($count==0)
																					{
																						echo '<h4 style="text-align:center">No items in this category!</h4>';
																					}
																						
?>

</div>
</div>






<footer style="background:#3E065F;color:#ddd;margin-top:20px;"> 
<div class="card-footer" style="">

<div class="container">

<div class="col-md-12" >
<div class="row justify-content-center" style="padding-top:10px;">
<div class="col-md-3">
<div >
	<h6 style="color:#fff;">Address</h6>
		<small style="color:#ffffff">Online classes Website<br>
		Montreal<br>
		Canada</small>
	</div>
</div>
	<div class="col-md-3" > 
	
		<h6 style="color:#fff;">Social Links</h6>
<a href="#" class="fa fa-facebook btn" style="background-color:#8E05C2; color:#ffffff;"></a>
<a href="#" class="fa fa-twitter btn" style="background-color:#8E05C2; color:#ffffff;"></a>
	</div>
<div class="col-md-3">
<div >
	<h6 ><a href="#" style="color:#fff;">Contacts</a></h6>
	<small style="color:#ffffff">T: +1<br>
		Email: studywithus@gmail.com<br>
		</small>
	</div>
</div>
</div>
<div class="row " style="margin-top:30px;margin-bottom:30px;background:#8E05C2;width:100%;">
	<div class="col-md-12 ">
		<h2 style="text-align:center;"><img src='logo.jpg' height="90px" width="200px"></h2>
	</div>
</div>
</div>
</div>
</footer>
<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>
   
</body>
</html> 
