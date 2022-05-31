<?php
$conn=mysqli_connect('localhost','root','','onlineclassses');
session_start();
if(!isset($_SESSION['adminname'])){
echo" <script>window.location.href = 'index.php'</script>";
}
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
}




$date =('j/m/Y');
$i=0;
$lastdate;
$i1=0;
 if($conn)
 {
	 $qur= "SELECT * FROM `users`";
		$res=mysqli_query($conn,$qur);
		if($res)
		{
			while($row=mysqli_fetch_assoc($res))
			{
				$i++;
				$lastdate=$row['username'];
			}
			$lastdate =(int)$date;
			
			while($row=mysqli_fetch_assoc($res))
			{
				
				$chk=$row['date'];
				$chk =(int)$chk;
				if($chk==($lastdate-1)||$chk==$lastdate)
				{
					$i1++;
				}
			}
		}
		$i2=0;
		$qur="SELECT * FROM `maincategory`";
		$res=mysqli_query($conn,$qur);
		if($res)
		{
		
			while($row=mysqli_fetch_assoc($res))
			{
				$i2++;
				
			}
		}
	
		$qur="SELECT * FROM `items` where teacher='$username5'";
		$res=mysqli_query($conn,$qur);
		if($res)
		{
				$i3=0;
			while($row=mysqli_fetch_assoc($res))
			{
				$i3++;
				
			}
		}
 }
 else
 {
	 echo" <script>window.location.href = '404.html';</script>";
 }



?>
<!DOCTYPE HTML>
<html>

<head>
<style>
.areasunder
{
	margin-bottom:10px;
}
</style>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script src="jquery.min.js"></script>  
		<script src="bootstrap.min.js"></script>
		<script src="croppie.js"></script>
		<link rel="stylesheet" href="bootstrap.min.css" />
		<link rel="stylesheet" href="croppie.css" />
<title>Teacher Panel-Online classes Website</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<!--js-->
<script src="js/jquery-2.1.1.min.js"></script> 
<!--icons-css-->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!--Google Fonts-->
<link href='http://fonts.googleapis.com/css?family=Carrois+Gothic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Work+Sans:400,500,600' rel='stylesheet' type='text/css'>
<!--static chart-->
<script src="js/Chart.min.js"></script>
<script src="js/skycons.js"></script>
<!--//skycons-icons-->
</head>
<body>
<script src='../../../../../ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script><script src="../../../../../m.servedby-buysellads.com/monetization.js" type="text/javascript"></script>

<script src="../../../../../codefund.io/properties/441/funder.js" async="async"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->	
<!-- Demo bar start -->
	
<div class="page-container">	
   <div class="left-content">
	   <div class="mother-grid-inner">
            <!--header start here-->
				<div class="header-main">
					<div class="header">
							<div class="logo-name">
									 <a href="main.php"> <h1>Online Classes :: Teacher Panel </h1> 
									
								  </a> 								
							</div>
							<!--search-box-->
						 </div>
						 <div class="header-right">
							
							<!--notification menu end -->
							
							<div class="clearfix"> </div>				
						</div>
				     <div class="clearfix"> </div>	
				</div>
<!--heder end here-->
<!-- script-for sticky-nav -->
		<script>
		$(document).ready(function() {
			 var navoffeset=$(".header-main").offset().top;
			 $(window).scroll(function(){
				var scrollpos=$(window).scrollTop(); 
				if(scrollpos >=navoffeset){
					$(".header-main").addClass("fixed");
				}else{
					$(".header-main").removeClass("fixed");
				}
			 });
			 
		});
		</script>
		<!-- /script-for sticky-nav -->
<!--inner block start here-->
<div class="inner-block col-md-12" >
<!--market updates updates-->
<div id='dashboard' style='display:block;' >
	 <div class="market-updates">
			<div class="col-md-4 market-update-gd">
				<div class="market-update-block clr-block-1">
					
					<div class="col-md-8 market-update-left">
						<h3><?php echo $i; ?></h3>
						<h4>Registered Users</h4>
						<p>total</p>
					</div>
	</a>
					<div class="col-md-4 market-update-right">
						<i class="fa fa-file-text-o"> </i>
					</div>
				  <div class="clearfix"> </div>
				</div>
			</div>
			<div class="col-md-4 market-update-gd" onclick="">
				<div class="market-update-block clr-block-3">
					<div  class="col-md-8 market-update-left">
						<h3><?php  echo $i2 ; ?></h3>
						<h4>Categories </h4>
						<p>total</p>
					</div>
					<div class="col-md-4 market-update-right">
						<i class="fa fa-envelope-o"> </i>
					</div>
				  <div class="clearfix"> </div>
				</div>
					   <div class="clearfix"> </div>
			</div>
	
		   <div class="col-md-4 market-update-gd" onclick="">
				<div class="market-update-block clr-block-3">
					<div class="col-md-8 market-update-left">
						<h3><?php  echo $i3 ; ?></h3>
						<h4>Total </h4>
						<p>Courses</p>
					</div>
					<div class="col-md-4 market-update-right">
						<i class="fa fa-envelope-o"> </i>
					</div>
				  <div class="clearfix"> </div>
				</div>
			
		   <div class="clearfix"> </div>
		   </div>
		   
		</div>

</div>

<div class="col-md-12" id='newproduct' style='display :none;width:100%;'>

  <div class="card-header" >
   
  <!-- <h2 style="align:center">Search your product</h2><br />-->
   <div class="form-group">
    <div class="input-group">
  <!--   <span class="input-group-addon">Search</span>
    <input type="text" name="search_text" id="search_text" placeholder="Search by Customer Details" class="form-control" />-->
    </div>
   </div>
   <br />
   <div class="well" id="result"></div>
  </div>
  
</div>

<script>
$(document).ready(function(){

 load_data();

 function load_data(query)
 {
  $.ajax({
   url:"fetch.php",
   method:"POST",
   data:{query:query},
   success:function(data)
   {
    $('#result').html(data);
   }
  });
 }
 $('#search_text').keyup(function(){
  var search = $(this).val();
  if(search != '')
  {
   load_data(search);
  }
  else
  {
   load_data();
  }
 });
});
</script>


<div class="col-md-12" id='managestudent' style='display :none;width:100%;'>

  <div class="card-header" >
   
  <!-- <h2 style="align:center">Search your product</h2><br />-->
   <div class="form-group">
    <div class="input-group">
  <!--   <span class="input-group-addon">Search</span>
    <input type="text" name="search_text" id="search_text" placeholder="Search by Customer Details" class="form-control" />-->
    </div>
   </div>
   <br />
   <div class="well" id="result1"></div>
  </div>
  
</div>

<script>
$(document).ready(function(){

 load_data();

 function load_data(query)
 {
  $.ajax({
   url:"fetchstudent.php",
   method:"POST",
   data:{query:query},
   success:function(data)
   {
    $('#result1').html(data);
   }
  });
 }
 $('#search_text').keyup(function(){
  var search = $(this).val();
  if(search != '')
  {
   load_data(search);
  }
  else
  {
   load_data();
  }
 });
});
</script>


<div class="col-md-12" id='replystudent' style='display :none;width:100%;'>

  <div class="card-header" >
   
  <!-- <h2 style="align:center">Search your product</h2><br />-->
   <div class="form-group">
    <div class="input-group">
  <!--   <span class="input-group-addon">Search</span>
    <input type="text" name="search_text" id="search_text" placeholder="Search by Customer Details" class="form-control" />-->
    </div>
   </div>
   <br />
   <div class="well" id="result8"></div>
  </div>
  
</div>

<script>
$(document).ready(function(){

 load_data();

 function load_data(query)
 {
  $.ajax({
   url:"studentquery.php",
   method:"POST",
   data:{query:query},
   success:function(data)
   {
    $('#result8').html(data);
   }
  });
 }
 $('#search_text').keyup(function(){
  var search = $(this).val();
  if(search != '')
  {
   load_data(search);
  }
  else
  {
   load_data();
  }
 });
});
</script>


<div class="col-md-12" id='managecourses' style='display :none;width:100%;'>

<div class="card-body">
<h5 style="text-align:center">Add</h5>
					
				<div style="width:100%;margin-top:5px;" class="well"><h3 style="text-align:center;"> Course</h3>
									 		<div class=""  style="border:1px solid aqua;border-radius:10px;margin-top:10px;margin-bottom:5px;padding:10px;">
												<div class="" >
										  <div class="no-gutters justify-content-center " style="padding:10px;">
										 		<form id="fromid" action="addproduct.php" method="post" enctype="multipart/form-data">
									
													<div class="form-group " >
													  
													  <textarea id="product_name" name="product_name" placeholder="Course NAME" class="form-control input-md areasunder" required="" type="text" required></textarea>
													<textarea id="product_description" name="product_description" placeholder="Course DESCRIPTION" class="form-control input-md areasunder" required="" type="text"></textarea>
													  <input id="PRICE" name="PRICE" placeholder="Course PRICE " class="form-control input-md areasunder" required="" type="number" min="0">
													 
													 <input disabled id="product_weight" name="product_weight" value="<?php echo $username5; ?>" class="form-control input-md areasunder" required>
														<input class="form-control areasunder" id="product_stock" name="product_stock" placeholder="Rating" type="number" min="1" required >
													  
  
	   <label class="" >Upload Cover Image </label>
  <div class="custom-file areasunder">
  
      <input type="file" id="file" name="file">
	   </div>
	   
	  <textarea id="videos" name="videos" placeholder="Video link" class="form-control input-md areasunder" required="" type="text"></textarea>
													

													<!-- File Button -->
													<select name="cat" class="form-control areasunder" style="margin-top:10px;">
																 <?php
																			$qury= 'SELECT * FROM `maincategory`';
																			$reslt=mysqli_query($conn,$qury);
																						while($row=mysqli_fetch_assoc($reslt))
																						{
																							$name= $row['name'];
																							$id=$row['id'];
																							echo '<option value="'.$id.'">'.$name.'</option>
																							';
																						}
																						?>
																						
													</select>

													</div>
													<input type="submit" id="additt" class="btn btn-primary" style="float:right;margin:5px;padding:10px;text-align:center;margin-top:20px;" value=" + add it " />


													</form>
										  
										
										  </div>
										</div>
										</div>
									</div>
									<br>
				
</div>
</div>

<div class="col-md-12" id='addmaincategory' style='display :none;width:100%;'>
<h4 style="text-align:center;">Add main category only.</h4>

<form class="form" action="savemaincategory.php" method="POST">
<div class=""  style="border:1px solid aqua;border-radius:10px;margin-top:10px;margin-bottom:5px;padding:10px;">
		<div class="card mb-3" >
  <div class="no-gutters">
  
<input type="text" class="form-control" name="name" placeholder="Enter new main category name..."  required>
<input type="submit" class="btn btn-primary" style="float:right;margin:5px;" value=" + add it " />
   
   
  </div>
</div>
</div>
</form>


<div class="well">
<h5 style="text-align:center">Already created categories.</h5>
					<?php
					$qury= 'SELECT * FROM `maincategory`';
					$reslt=mysqli_query($conn,$qury);
								while($row=mysqli_fetch_assoc($reslt))
								{
									$name= $row['name'];
										
									echo '<div style="width:100%;margin-top:5px;" class="card-header"><h3>'; echo $name; echo'</h3></div><br>';												
											
								}
								
							
				?>
				
</div>
</div>

<div class="col-md-12" id='addsubcategory' style='display :none;width:100%;'>
<div class="card-body">
<h1 style="text-align:center">Manage categories.</h1>
					
				<div style="width:100%;margin-top:5px;" class="well">
									 		<div class=""  style="border:1px solid aqua;border-radius:10px;margin-top:10px;margin-bottom:5px;padding:10px;">
												<div class="" >
										  <div class="no-gutters justify-content-center " style="padding:10px;">
										 		<form id="fromid" action="managecategory.php" method="post" enctype="multipart/form-data">
									
													<div class="form-group " >
													  
													
													
<?php
					$qury= 'SELECT * FROM `maincategory`';
					$reslt=mysqli_query($conn,$qury);
								while($row=mysqli_fetch_assoc($reslt))
								{
									$id= $row['id'];
									$name= $row['name'];
										
									echo '<div style="width:100%;margin-top:5px;" class="card-header"><h3>'; echo $name; echo'</h3></div>';		
									
									echo '<td><form action="managecategory.php" method="POST"><input type="text" class="hide" name="id" value='.$row["id"].'> <input type="submit" value="/\/"></form></td>';			
								}			
				?>					
													</div>
						

													</form>
										  
										
										  </div>
										</div>
										</div>
									</div>
									<br>
				
</div>
</div>

<div id="orders" >

<div class="col-md-12"  style='width:100%;'>

  <div class="card-header" >
   
   <div class="form-group">
    <div class="input-group">

    </div>
   </div>
   <br />
   <div class="well" id="result2"></div>
  </div>
  
</div>

<script>
$(document).ready(function(){

 load_data();

 function load_data(query)
 {
  $.ajax({
   url:"fetchorders.php",
   method:"POST",
   data:{query:query},
   success:function(data)
   {
    $('#result2').html(data);
   }
  });
 }
 $('#search_text2').keyup(function(){
  var search2 = $(this).val();
  if(search2 != '')
  {
   load_data(search2);
  }
  else
  {
   load_data();
  }
 });
});
</script>

</div>

<!--------------------end orderss-->
</div>
<script>
	function goproduct()
	{
		var a=document.getElementById('newproduct');
		var b=document.getElementById('dashboard');
		var c=document.getElementById('addmaincategory');
		var d=document.getElementById('addsubcategory');
		var e=document.getElementById('orders');
		var g=document.getElementById('managestudent');
		var f=document.getElementById('managecourses');
		var h=document.getElementById('replystudent');
		
		if(b.style.display!='none')
		{
			b.style.display='none';
			a.style.display='block';
			c.style.display='none';
			d.style.display='none';
			e.style.display='none';
			f.style.display='none';
			g.style.display='none';
			h.style.display='none';
			
		}
		else
		{
		b.style.display='none';
			a.style.display='block';
			c.style.display='none';
			d.style.display='none';
			e.style.display='none';
			g.style.display='none';
			f.style.display='none';
				h.style.display='none';
		}
		
	}
	function gostudent()
	{
		var a=document.getElementById('newproduct');
		var b=document.getElementById('dashboard');
		var c=document.getElementById('addmaincategory');
		var d=document.getElementById('addsubcategory');
		var e=document.getElementById('orders');
		var g=document.getElementById('managestudent');
		var f=document.getElementById('managecourses');
		var h=document.getElementById('replystudent');
		if(b.style.display!='none')
		{
			b.style.display='none';
			a.style.display='none';
			c.style.display='none';
			d.style.display='none';
			e.style.display='none';
			//f.style.display='none';
			g.style.display='block';
			f.style.display='none';
				h.style.display='none';
		}
		else
		{
		b.style.display='none';
			a.style.display='none';
			c.style.display='none';
			d.style.display='none';
			e.style.display='none';
			//f.style.display='none';
			g.style.display='block';
			f.style.display='none';
				h.style.display='none';
		}
		
	}
	
	function studentquery()
	{
		var a=document.getElementById('newproduct');
		var b=document.getElementById('dashboard');
		var c=document.getElementById('addmaincategory');
		var d=document.getElementById('addsubcategory');
		var e=document.getElementById('orders');
		var g=document.getElementById('managestudent');
		var f=document.getElementById('managecourses');
		var h=document.getElementById('replystudent');
		if(b.style.display!='none')
		{
			b.style.display='none';
			a.style.display='none';
			c.style.display='none';
			d.style.display='none';
			e.style.display='none';
			//f.style.display='none';
			g.style.display='none';
			f.style.display='none';
		h.style.display='block';
		
		}
		else
		{
		b.style.display='none';
			a.style.display='none';
			c.style.display='none';
			d.style.display='none';
			e.style.display='none';
			//f.style.display='none';
			g.style.display='none';
			f.style.display='none';
			h.style.display='block';
		}
		
	}
	
	function gomaincategory()
	{
		var a=document.getElementById('newproduct');
		var b=document.getElementById('dashboard');
		var c=document.getElementById('addmaincategory');
		var g=document.getElementById('managestudent');
		var d=document.getElementById('addsubcategory');
		var e=document.getElementById('orders');
		var f=document.getElementById('managecourses');
		var h=document.getElementById('replystudent');
		if(b.style.display!='none')
		{
			b.style.display='none';
			a.style.display='none';
			c.style.display='block';
			d.style.display='none';
			e.style.display='none';
			g.style.display='none';
	h.style.display='none';		
		f.style.display='none';
		
		}
		else
		{
		b.style.display='none';
			a.style.display='none';
			c.style.display='block';
			d.style.display='none';
			e.style.display='none';
			g.style.display='none';
			f.style.display='none';
			h.style.display='none';
		}
	}
	function gosubcategory()
	{
		var a=document.getElementById('newproduct');
		var b=document.getElementById('dashboard');
		var c=document.getElementById('addmaincategory');
		var g=document.getElementById('managestudent');
		var d=document.getElementById('addsubcategory');
		var e=document.getElementById('orders');
		var f=document.getElementById('managecourses');
		var h=document.getElementById('replystudent');
		if(b.style.display!='none')
		{
			b.style.display='none';
			a.style.display='none';
			d.style.display='block';
			c.style.display='none';
			e.style.display='none';
			g.style.display='none';
			f.style.display='none';
				h.style.display='none';
		}
		else
		{
		b.style.display='none';
			a.style.display='none';
			d.style.display='block';
			c.style.display='none';
			e.style.display='none';
			g.style.display='none';
			f.style.display='none';
				h.style.display='none';
		}
	}
	function makeorders()
	{
		var a=document.getElementById('newproduct');
		var b=document.getElementById('dashboard');
		var c=document.getElementById('addmaincategory');
		var g=document.getElementById('managestudent');
		var d=document.getElementById('addsubcategory');
		var e=document.getElementById('orders');
		var f=document.getElementById('managecourses');
		var h=document.getElementById('replystudent');
		if(b.style.display!='none')
		{
			b.style.display='none';
			a.style.display='none';
			d.style.display='none';
			c.style.display='none';
			e.style.display='block';
			g.style.display='none';
			f.style.display='none';
				h.style.display='none';
		}
		else
		{
		b.style.display='none';
			a.style.display='none';
			d.style.display='none';
			c.style.display='none';
			e.style.display='block';
			g.style.display='none';
			f.style.display='none';
				h.style.display='none';
		}
	}
		function goteacher()
	{
		var a=document.getElementById('newproduct');
		var b=document.getElementById('dashboard');
		var c=document.getElementById('addmaincategory');
		var g=document.getElementById('managestudent');
		var d=document.getElementById('addsubcategory');
		var e=document.getElementById('orders');
		var f=document.getElementById('managecourses');
		var h=document.getElementById('replystudent');
		if(b.style.display!='none')
		{
			b.style.display='none';
			a.style.display='none';
			d.style.display='none';
			c.style.display='none';
			e.style.display='none';
			g.style.display='none';
			f.style.display='block';
				h.style.display='none';
		}
		else
		{
		b.style.display='none';
			a.style.display='none';
			d.style.display='none';
			c.style.display='none';
			e.style.display='none';
			g.style.display='none';
			f.style.display='block';
			h.style.display='none';
		}
	}
		function gocourses()
	{
		var a=document.getElementById('newproduct');
		var b=document.getElementById('dashboard');
		var c=document.getElementById('addmaincategory');
		var g=document.getElementById('managestudent');
		var d=document.getElementById('addsubcategory');
		var e=document.getElementById('orders');
		var f=document.getElementById('managecourses');
		var h=document.getElementById('replystudent');
		if(b.style.display!='none')
		{
			b.style.display='none';
			a.style.display='none';
			d.style.display='none';
			c.style.display='none';
			e.style.display='none';
			g.style.display='none';
			f.style.display='block';
				h.style.display='none';
		}
		else
		{
		b.style.display='none';
			a.style.display='none';
			d.style.display='none';
			c.style.display='none';
			e.style.display='none';
			g.style.display='none';
			f.style.display='block';
			h.style.display='none';
		}
	}
	
</script>

</div>
</div>


<!--slider menu-->
    <div class="sidebar-menu" style="height:100%;">
		  	<div class="logo"> <a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> <a href="#"> <span id="logo" ></span> 
			      <!--<img id="logo" src="" alt="Logo"/>--> 
			  </a> </div>		  
		    <div class="menu">
		      <ul id="menu" >
		        <li id="menu-home" ><a href="main.php" ><i id="dashboard" class="fa fa-tachometer"></i><span>Dashboard</span></a></li>
		         <li><a href="#" onclick="gocourses()"><i id="addcourse" class="fa fa-plus-square-o"></i><span>Add Courses</span></a></li>
		         <li><a href="#" onclick="goproduct()"><i id="managecours"  class="fa fa-shopping-cart"></i><span>Manage Courses</span></a></li>
		         <li><a href="#" onclick="gostudent()"><i id="managestuden" class="fa fa-shopping-cart"></i><span>Manage Student</span></a></li>
		         <li><a href="#" onclick="studentquery()"><i id="studentquer" class="fa fa-shopping-cart"></i><span>Student Queries</span></a></li>
		         <li><a href="logout.php"><i id="logoutt" class="fa fa-sign-out"></i><span>Logout</span></a></li>
		      </ul>
		    </div>
	 </div>
	<div class="clearfix"> </div>
</div>
<!--slide bar menu end here-->
<script>
var toggle = true;
            
$(".sidebar-icon").click(function() {                
  if (toggle)
  {
    $(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
    $("#menu span").css({"position":"absolute"});
  }
  else
  {
    $(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
    setTimeout(function() {
      $("#menu span").css({"position":"relative"});
    }, 400);
  }               
                toggle = !toggle;
            });
</script>
<!--scrolling js-->
		<script src="js/jquery.nicescroll.js"></script>
		<script src="js/scripts.js"></script>
		<!--//scrolling js-->
<script src="js/bootstrap.js"> </script>
<!-- mother grid end here-->
<!--copy rights start here-->

</body>

</html>                     

	