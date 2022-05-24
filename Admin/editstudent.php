<?php
	
		$id=$_POST['id'];
		
$conn=mysqli_connect('localhost','root','','onlineclassses');
		if($conn)
			{
				$qur= "SELECT * FROM `users`";
				$res=mysqli_query($conn,$qur);
				
			//	$qurcat= "SELECT * FROM `maincategory`";
			//	$rescat=mysqli_query($conn,$qurcat);
					while($row=mysqli_fetch_assoc($res))
					{
						if($row['id']==$id)
						{
							$id=$row['id'];
							$name=$row['username'];
							$email=$row['email'];
							$date=$row['date'];
						}
					}
			}
									
									

?>
<html>
	<head>
						<meta name='viewport' content='width=device-width, initial-scale=1'>
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>All products</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

	</head>
<body>
 <nav class="navbar navbar-expand navbar-dark" style="background-color:#3E065F;">
       

        <div class="collapse navbar-collapse" id="navbarCollapse1">
            <h4 style="float:right;margin-left:3%; color:white; ">Online  Classes</h4>
        </div>
    </nav>
<form class="form" action="savestudentinfo.php" method="POST">
<input type="text" style="display:none;" name="id" value="<?php echo $id;?>" />
<div class="container"  style="border:1px solid; border-radius:10px;margin-top:10px;margin-bottom:5px;padding:10px;">
		<div class="card mb-3" style="max-width: 100%;">
  <div class="row no-gutters" style="color: red;">
   
    
      <div class="card-body"   >
       
		
		<div class="card border-dark mb-3" style="width: 50%";display: block;
  margin-left: 35%;
  margin-right: auto;
  ">
  <div class="card-header" style="float:left;"><h5 style="text-align:center;">Username</h5> <h3  style="float:right;display:inline-block;"><input disabled name="name" style="width:100%" value="<?php echo $name; ?>"></h3></div>
</div style="margin-top:10px;">
		</div>
	
		
   </div>
   
    <div class="card-body">
  <div class="card border-dark mb-3" style="max-width: 50%">
  <div class="card-header" style="float:left;"><h5 style="text-align:center;">Email</h5> <h3  style="float:right;display:inline-block;"><input name="email" style="width:100%" value="<?php echo $email; ?>"></h3></div>
</div style="margin-top:10px;">
		</div> 
		 <div class="card-body">
	<div class="card border-dark mb-3" style="max-width: 50%">
  <div class="card-header" style="float:left;"><h5 style="text-align:center;">Status</h5> <h3  style="float:right;display:inline-block;"><input name="status" style="width:100%" value="<?php echo $date; ?>"></h3></div>
</div style="margin-top:10px;">
		</div>
			
<div class="" style="width: 100%;padding-bottom:2%;float:right;display:block">
  <div  style="float:right;width:100%;"><input style="float:right;" name="done" type="submit" value="save current info" class="btn btn-success" >
  
  <input style="float:left;display:inline-block;width:auto; background-color:#3E065F;color:#ffffff;" type="button" class="btn "  data-toggle="modal" data-target=".bd-example-modal-lg" value="Delete" ></div>
  </div>
  </div>
</div>
</div>




 
</form>
		

		<div class="modal fade bd-example-modal-lg" id="modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-lg">
				<div class="modal-content" style="display:inline-block;padding:20px;">
					<form  action="delete.php" method="POST">
					<input type="text" name="id" value="<?php echo $id; ?>" style="display:none;" />
					<h4 style="color:#000000;text-align:center;display:block;padding-bottom:5px;border-bottom:1px solid #000000;">Are you sure !!!</h4>
					<button class="btn border-dark" data-dismiss="modal" type="button" style="float:left;width:40%;display:inline-block;" >NO</button>
					<input type="submit" style="float:right;width:40%;display:inline-block;" class="pic btn btn-outline-dark" value="Yes" >
					</form>
				</div>
			</div>
		</div>
<!-- Frame Modal Bottom -->
  

</div>
</div>
</body>
</html>