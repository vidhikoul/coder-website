<?php 
 session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
	<?php include 'style.css'?>
	</style>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<?php include 'stylelinks.php' ?>
    <link rel="stylesheet" type="text/css" href="signuplogin.css">
	
</head>
<body>
	<?php
		include 'dbconnection.php';
		if(isset($_POST['login'])){
			$email = $_POST['lemail'];
			$pass = $_POST['lpassword'];

			$isemail_exists = "select * from accountdetails where email= '$email' ";
			$qry = mysqli_query($connection,$isemail_exists);
			$eamil_count = mysqli_num_rows($qry);
			if($eamil_count>0){
				$email_pass = mysqli_fetch_assoc($qry);
				$dbpass = $email_pass['password'];
				$_SESSION['User'] = $email_pass['name'];
				$ispasscorrect = password_verify($pass, $dbpass);
				if($ispasscorrect){
					echo "<script> alert('login success') </script>";
					echo "<script> location.replace('index.php') </script>";
				}else{
					echo "<script> alert('email/pass incorrect') </script>";
				}
			}else{
				echo " <script> alert('email doesnot Exists') </script>";
			}

		}

	?>
	<div class="contain col-lg-6">
		<h1>Login Account</h1>
		<h6>Get started with your free account</h6>
		<button class="col-10 col-lg-7 bg-warning text-center p-2 m-1 rounded text-white">
			<i class="bi bi-google"></i> &nbsp Login vai Gmail
		</button>
		<button class="col-10 col-lg-7 bg-primary text-center p-2 m-1 rounded text-white">
		<i class="bi bi-facebook"></i> &nbsp Login vai Facebook
		</button>
		<div class="col-10 col-lg-7" >
			
		</div>
		<div>
			<form class=" row gx-3 gy-2 d-flex justify-content-center" method="POST"  action="">
			  <div class="col-10 col-lg-7 mt-3">
			    <label class="visually-hidden" for="specificSizeInputGroupUsername">Email</label>
			    <div class="input-group">
			      <div class="input-group-text"><i class="bi bi-envelope"></i></div>
			      <input type="text" class="form-control" id="specificSizeInputGroupUsername" placeholder="Email Address" required name='lemail'>
			    </div>
			  </div>
			    <div class="col-10 col-lg-7 mt-3">
			    <label class="visually-hidden" for="specificSizeInputGroupUsername">Enter Password</label>
			    <div class="input-group">
			      <div class="input-group-text"><i class="bi bi-lock"></i></div>
			      <input type="password" class="form-control" id="specificSizeInputGroupUsername" placeholder="Enter Correct Password" required name='lpassword'>
			    </div>
			  </div>
		     <div class="col-10 col-lg-7 mt-3">
			    <input type='submit' class="col-12 bg-primary text-center p-2 m-1 rounded text-white" value='Log in' name='login'>
						
		     </div>
          </form>
		</div>
		<p>Don't Have an Account? <a href="signup.php" class='loginlink'>Sign up </a>  </p>
	</div>
</body>
</html>