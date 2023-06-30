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
	<div class="contain col-lg-6">
		<h1>Create Account</h1>
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
			<form class=" row gx-3 gy-2 d-flex justify-content-center" method="POST"  action="<?php echo htmlentities($_SERVER["PHP_SELF"]);?>">
			  <div class="col-10 col-lg-7 mt-3">
			    <label class="visually-hidden" for="specificSizeInputGroupUsername">Fullname</label>
			    <div class="input-group">
			      <div class="input-group-text"><i class="bi bi-person"></i></div>
			      <input type="text" class="form-control" id="specificSizeInputGroupUsername" placeholder="Full Name" required name="fullname">
			    </div>
			  </div>
			  <div class="col-10 col-lg-7 mt-3">
			    <label class="visually-hidden" for="specificSizeInputGroupUsername">Email</label>
			    <div class="input-group">
			      <div class="input-group-text"><i class="bi bi-envelope"></i></div>
			      <input type="text" class="form-control" id="specificSizeInputGroupUsername" placeholder="Email Address" required name='email'>
			    </div>
			  </div>
			   <div class="col-10 col-lg-7 mt-3">
			    <label class="visually-hidden" for="specificSizeInputGroupUsername">Phone Number</label>
			    <div class="input-group">
			      <div class="input-group-text"><i class="bi bi-telephone"></i></div>
			      <input type="text" class="form-control" id="specificSizeInputGroupUsername" placeholder="Phone Number" required name='phonenumber'>
			    </div>
			  </div>
			    <div class="col-10 col-lg-7 mt-3">
			    <label class="visually-hidden" for="specificSizeInputGroupUsername">Create Password</label>
			    <div class="input-group">
			      <div class="input-group-text"><i class="bi bi-lock"></i></div>
			      <input type="password" class="form-control" id="specificSizeInputGroupUsername" placeholder="Create Password" required name='password'>
			    </div>
			  </div>
			 <div class="col-10 col-lg-7 mt-3">
			    <label class="visually-hidden" for="specificSizeInputGroupUsername">Repeat Password</label>
			    <div class="input-group">
			      <div class="input-group-text"><i class="bi bi-lock"></i></div>
			      <input type="password" class="form-control" id="specificSizeInputGroupUsername" placeholder="Repeat Password" required name='cpassword'>
			    </div>
		     </div>
		     <div class="col-10 col-lg-7 mt-3">
			    <input type='submit' class="col-12 bg-primary text-center p-2 m-1 rounded text-white" value='Create Account' name='submit'>		
		     </div>
          </form>
		</div>
		<p>Have an Account? <a href="login.php" class='loginlink'>Log In </a>  </p>
	</div>
	<?php 
	include 'dbconnection.php';
		if(isset($_POST['submit'])){
			$name = mysqli_real_escape_string($connection,$_POST['fullname']);
			$email = mysqli_real_escape_string($connection,$_POST['email']);
			$phonenumber = mysqli_real_escape_string($connection,$_POST['phonenumber']);
			$password = mysqli_real_escape_string($connection,$_POST['password']);
			$cpassword = mysqli_real_escape_string($connection,$_POST['cpassword']);

			$Enc_password = password_hash($password, PASSWORD_BCRYPT);
			$Enc_cpassword = password_hash($cpassword, PASSWORD_BCRYPT);
			$emailquery = " select * from accountdetails where email='$email' ";
			$emailcheckquery = mysqli_query($connection,$emailquery);
			$isemailexists = mysqli_num_rows($emailcheckquery);
			if($isemailexists>0){
				echo "<script>alert('email alredy exits')</script>";
			}else{
				if($password == $cpassword){
					$insertQuery = " insert into accountdetails(name, email, mobile, password, cpassword) values ('$name','$email', '$phonenumber', '$Enc_password','$Enc_cpassword')  ";
					$isinserted= mysqli_query($connection,$insertQuery);
					if($isinserted){
						echo "<script>alert('Data Inserted')</script>";
					}else{
						echo "<script>alert('Data Not Inserted')</script>";
					}

				}else{
					echo "<script>alert('password not matched')</script>";
					return ;
				}
			}
		}

	?>
</body>
</html>