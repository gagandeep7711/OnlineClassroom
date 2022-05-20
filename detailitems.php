<?php
session_start();
$idforcategory= $_POST['id'];


$conn=mysqli_connect('localhost','root','','onlineclassses');
 

$date =('j/m/Y');

 	$query= 'SELECT * FROM `items`';
	
																			$result=mysqli_query($conn,$query);
																						while($row=mysqli_fetch_assoc($result))
																						{
																							if($idforcategory==$row['id'])
																							{
																							$id=$row['id'];
																							$name= $row['name'];
																							$stock=$row['stock'];
																							$price=$row['price'];
																							$cat=$row['category'];
																							$image=$row['image'];
																							break;
																							}
																						}
																						
																						$qury= 'SELECT * FROM `maincategory`';
																			$reslt=mysqli_query($conn,$qury);
																		
																						while($row=mysqli_fetch_assoc($reslt))
																						{
																							$name= $row['name'];
																							$id=$row['id'];
																							if($id==$cat)
																							{
																								$categoryname=$name;
																							}
																									
																						}

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
.col-md-4,col-md-12{
	margin-bottom:2px;
}

.catcard:hover #seebtn{
	margin-left:40%;
	text-align:center;
}
#valuebox{
	font-size:xx-large;
}
</style>
</head>
<body>
<div class="top " style="background-color:#fff;font-family:Eras Bold ITC;width:100%;text-align:center;background:#000000;color:#fff">
<div class="container"><b>

</b>
</div>
</div>
 <nav class="navbar navbar-expand-md navbar-dark" style="width:100%;background:#3E065F;">
        <a href="#" class="navbar-brand">
           <h3 style="font-family:Trajan"><b><span style="font-size:30px;cursor:pointer;margin-right:2%;margin-left:2%" onclick="openNav()">&#9776;</span>
		   <span onclick="window.location.assign('index.php')">Online classes Website </span>
</b></h3>
        </a>
      

        <div class="collapse navbar-collapse" id="navbarCollapse">
            
            <div class="navbar-nav ml-auto">
<?php
  if(!isset($_SESSION["username"]))
{
  ?>
                           <a href="userlogin.php" style="" class="nav-item nav-link"><h5><b>
						   Login
						   <i class="fa fa-sign-in" aria-hidden="true"></i></b></h5></a>
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
																							
																							echo '
																							<form action="category.php" method="POST" style="display:block;">
																							<input type="text" value="'.$id.'" style="display:none;" name="idofcat">
																							<input type="submit" value="'.$name.'" style="background:inherit" class="mybtn">
																							</form>
																							
																							';
																									
																						}
																						?>
  
  
</div>

<h6 style="text-align:center;width:100%;border-top:1px solid black;border-bottom:1px solid black;" class="card-header" >Categories / <?php echo $categoryname; ?> Collection</h6>
<div class="col-md-12"  style="font-family:Bauhaus">
<div class="row justify-content-center" style="margin-top:10px;">
	<div class="col-md-5">
		<div class="well">
		<?php
 	$query= 'SELECT * FROM `items`';
																					$result=mysqli_query($conn,$query);
																						while($row=mysqli_fetch_assoc($result))
																						{
																							if($idforcategory==$row['id'])
																							{
																								$image=$row['image'];
																								echo '<img class="d-block w-100"  src="Admin/'.$image.'" alt="image">';
																						
																							}
																						}
		?>
																						
		</div>
				</div>
					<div class="col-md-4">
					<?php
					
																					$query= 'SELECT * FROM `items`';
																					$result=mysqli_query($conn,$query);
																						while($row=mysqli_fetch_assoc($result))
																						{
																							if($idforcategory==$row['id'])
																							{
																								echo '<div class="">
																									<h2><style="font-size:small;font-family:verdana; color:#000000;">Title : '.$row["name"].'</h2>
																							<div class="card-body">
																							  <h5><small style="font-size:small;font-family:verdana; color:#000000;">By : </small>'.$row["teacher"].'</h5>
																							  <h5><small style="font-size:small;font-family:verdana; color:#000000;">Description : </small>'.$row["description"].'</h5>
																							  <p style="width:100%;text-align:end">In-Rating '.$row['stock'].'</p>
																							   <h2 style="width:100%;color:#000000;text-align:end"><small style="font-size:small;font-family:verdana; color:#000000;">Price : </small> '.$row['price'].'<small style="font-size:small;font-family:verdana">CAD</small></h2>
																									</div>	
																							<form action="addtocart.php" method="POST" style="display:block;">
																							<input type="text" value="'.$row['id'].'" style="display:none;" name="id">
						
		<input type="submit" class="btn btn-success" value="+ add to cart" style="width:100%;text-align:center;font-size:x-large;border-radius:0%;" >
																							</form>	
																							<br>
																							<form action="sendquery.php" method="POST" style="display:block;">
																							<input type="text" value="'.$row['id'].'" style="display:none;" name="id">
						
		<input type="submit" class="btn btn-success" value="Send Query" style="width:100%;text-align:center;font-size:x-large;border-radius:0%;" >
																							</form>	
																							
																								</div>';
																							}
																						}
					?>
					<script>
						function update_quantityplus()
						{
								document.getElementById("lesserror").style.display="none";
							var val=document.getElementById("valuebox");
							
							var r=val.value;
							
							r++;
							val.value=r;
						}
						function update_quantityminu()
						{
							var val=document.getElementById("valuebox");
							
							var r=val.value;
							if(r==1)
							{
								document.getElementById("lesserror").style.display="block";
							}
							else
							{
							
							r--;	
							}
							
							val.value=r;
						}
					</script>
																								
				</div>
					
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
		<small style="color:#ffffff"> Online Classes<br>
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
		Email: StudywithUs@gmail.com<br>
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
