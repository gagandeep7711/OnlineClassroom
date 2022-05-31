<?php
session_start();
if(isset($_SESSION['username']))
{
		 echo "<script>window.location.assign('index.php');</script>";
}


?>
<html>
<head>
<title>stone-palaces |SignUp</title>
   <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<style>
:root {
  --active-color: rgba(0,0,0,0.65);
}

.card-signup {
  border: 1px solid #dadce0;
  border-radius: .5rem;
}

.card-signup .card-body {
  padding: 48px 40px 36px;
}

.logo {
  width: 75px;
  height: auto;
  margin-bottom: 1rem;
}

.slogan {
  color: #3c4043;
  font-weight: 500;
  font-size: .875rem;
}

.btn[class*=btn-outline-] {
  border-width: 1px !important;
  box-shadow: none;
  padding-top: .525rem;
  padding-right: 1.4375rem;
  padding-bottom: .525rem;
  padding-left: 1.4375rem;
  font-weight: 500;
  font-size: .785rem;
  border-radius: .25rem;
}

.btn.btn-outline-primary {
 border-color: #dadce0 !important; 
}

.card-signup .btn.btn-outline-primary:hover {
  background-color: #f6f9fe !important;
  border-color: #d2e3fc !important;
  box-shadow: none !important;
}

.card-signup .btn.btn-outline-primary:focus,
.card-signup .btn.btn-outline-primary:active {
  background-color: #e4eefd !important;
  border-color: #d2e3fc !important;
  box-shadow: none !important;
}

.md-form.mat-2 input[type=text],
.md-form.mat-2 input[type=password],
.md-form.mat-2 input[type=email] {
  border-width: 1px !important;
  border-style: solid;
  border-color: #ced4da;
  border-radius: 5px;
  padding-top: .5rem;
  padding-left: 8px;
  padding-right: 8px;
  padding-bottom: .3rem;
  font-size: .875rem;
  line-height: 1.5;
  box-sizing: border-box;
}

.md-form.mat-2 input[type=text]:focus,
.md-form.mat-2 input[type=password]:focus,
.md-form.mat-2 input[type=email]:focus {
  border-color: #4285f4;
  box-shadow: inset 0px 0px 0px 1px #4285f4;
}

.md-form.mat-2 label {
  top: .5rem;
  left: 8px;
  font-size: .875rem;
}

.md-form.mat-2 label.active {
  background: #fff;
  font-weight: 500;
  padding-right: 5px;
  padding-left: 5px;
  font-size: 11px;
  top: 1rem;
  left: 8px;
}

.btn-toggle-pass {
  border: none;
  position: absolute;
  top: 6px;
  background: transparent;
  right: 0;
}

.btn-toggle-pass.active {
  color: var(--active-color);
}
</style>
</head>
<body><div class="container">
  <div class="row">
    <div class="col-md-5 mx-auto my-4">
      <div class="card card-signup z-depth-0">
        <div class="card-body text-center">
        <h2 style="border-bottom:1px solid black;">  stone-palaces</h2>
          <h3 class="card-title">Create an account</h3>
          <form action="savesignup.php" method="POST" id="signup">
          <div class="md-form mat-2" style="margin-top:10px;">
        	<label for="username">Username</label>
        	<input type="text" id="username" class="form-control" name="name"> 
      	  </div>
            
          <div class="md-form mat-2" style="margin-top:10px;">
        	<label for="email">E-mail</label>
			<small  style="color:red;display:block;">*Email already registered!</small>
        	<input type="email" id="email" class="form-control" name="email">
      	  </div>
            
          <div class="md-form mat-2" style="margin-top:10px;">
        	<label for="password">Password</label>
			<small id="errorpass" style="color:red;display:none;">*password must be more than 8 characters.</small>
        	<input type="password" id="password" class="form-control" name="pass">
      	  </div>
            
          <div class="md-form mat-2" style="margin-top:10px;">
		  
        	<label for="password2">Password confirmation</label>
			<small id="errorconf" style="color:red;display:none;">*password doesnot match</small>
        	<input type="password" id="password2" class="form-control">
      	  </div>
          </form>
          <div class="card-foter text-right" style="margin-top:20px;">
  		    <button type="button" class="btn btn-success" style="width:140px;" onclick="check()">Sign up</button>
          </div>
		  <div class="card-foter"  style="margin-top:20px;border-top:1px solid aqua;font-size:large">
  		    <a href="userlogin">Already have account?</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
function check()
{
	var pass=document.getElementById("password").value;
	
	var pass2=document.getElementById("password2").value;
	$chk1="0";
	$chk2="0";
	
	if((pass.length)<=7)
	{
		document.getElementById("errorpass").style.display="block";
	}
	else
	{
		document.getElementById("errorpass").style.display="none";
		$chk1="1";
		
	}
	if(pass==pass2)
	{
		
		document.getElementById("errorconf").style.display="none";
		$chk2="1";
	}
	else
	{
		document.getElementById("errorconf").style.display="block";
	}
	if($chk1=="1"&&$chk2=="1")
	{
		document.getElementById("signup").submit();
	}
	
}
</script>
</body>
</html>
