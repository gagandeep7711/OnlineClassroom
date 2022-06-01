<?php
	
		$id=$_POST['id'];
$conn=mysqli_connect('localhost','root','','onlineclassses');
		if($conn)
			{
				$qur= "SELECT * FROM `maincategory`";
				$res=mysqli_query($conn,$qur);
				
				$rescat=mysqli_query($conn,$qur);
					while($row=mysqli_fetch_assoc($res))
					{
						if($row['id']==$id)
						{
							$id=$row['id'];
							$name=$row['name'];
							
							
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
            <h4 style="float:right;margin-left:3%; color:white; ">Online classes</h4>
        </div>
    </nav>
<form class="form" action="saveinfo2.php" method="POST">
<input type="text" style="display:none;" name="id" value="<?php echo $id;?>" />
<div class="container"  style="border:1px solid; border-radius:10px;margin-top:10px;margin-bottom:5px;padding:10px;">
		<div class="card mb-3" style="max-width: 100%;">
  <div class="row no-gutters">
    
    <div class="col-md-8">
      
  <div class="card-header" style="float:left;"><h5 style="text-align:center;">ID</h5> <h3  style="float:right;display:inline-block;"><input name="id" style="width:100%" value="<?php echo $id; ?>"></h3></div>
</div style="margin-top:10px;">

<div class="card border-dark mb-3" style="max-width: 50%;float:right;">
  <div class="card-header" style="float:left;"><h5 style="text-align:center;">Name</h5> <h3  style="float:right;display:inline-block;"><input name="name" style="width:100%" value="<?php echo $name; ?>"></h3></div>
</div>
<div name="delete" class="" style="width: 100%;padding-bottom:2%;float:right;display:block">
  <div  style="float:right;width:100%;"><input style="float:right;" name="done" type="submit" value="save current info" class="btn btn-success" >
  
  </div>
 
 



</form>
<form  action="deletecategory.php" method="POST">
					<input type="text" name="id" value="<?php echo $id; ?>" style="display:none;" />
	<div  style="float:right;width:100%;"><input style="float:left;" name="delete" type="submit" value="Delete" class="btn btn-success" >
 	</form>
				</div>
			</div>
		</div>	
	</div>
  </div>
</div>
</div>
		
		
<!-- Frame Modal Bottom -->
  

</div>
</div>
</body>
</html>