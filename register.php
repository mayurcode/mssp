<!DOCTYPE html>
<html lang="en">
<body>
	<?php
           session_start();
	       include('header.php'); 
          include('includes/database.php');

      


  
          if(isset($_POST['submit'])){


          $username = $_POST['uname'];
          $email = $_POST['email'];
          $name = $_POST['name'];
          $pass = $_POST['password'];
          $cpass = $_POST['cpassword'];
          $phone = $_POST['phone'];
          $address = $_POST['address'];

          //Pass Validator

          if($pass != $cpass) {
          	 $error = "Password Does not match";
          	 echo "<script>alert('pass not match')";
          }
          else
          {


          

 
  $conn = mysqli_connect(dbserver, dbuser, dbpass,dbname);

  if($conn->connect_error){
  	die("NOT SUCCESS");

  }
  else{
  	echo "Connected";
  }
        //DATA SANITIZE 

           $username = $conn->real_escape_string($username);
           $email = $conn->real_escape_string($email);
           $name = $conn->real_escape_string($name);
           $pass = $conn->real_escape_string($pass);
           $phone = $conn->real_escape_string($phone);
           $address = $conn->real_escape_string($address);

           //Key for verification

           $vkey = md5(time().$username);
           $pass = md5($pass);
           echo $vkey;

           //INSERT

            $insert = $conn->query("INSERT INTO user(username,email,name,password,phone,address,vkey) VALUES ('$username','$email','$name','$pass','$phone','$address','$vkey') ");

        if($insert){
        	//Emmail Verify 
        	$to  = $email;
        	$subject = "Email Verification Mail";
        	$message = "<a href='http://localhost/verify.php?vkey=$vkey'>Verify Account</a>";
        	$headers = "From: punecyberworld@gmail.com \r\n";
        	$headers .= "MIME-Version: 1.0" . "\r\n";
        	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
            mail($to,$subject,$message,$headers);
            header('Location:thankyou.php');


        }
        else{
        	echo "<script>alert('Registration Failed');</script>";
        }


           }
 }
	?>

	<!-- BANNER -->
	<div class="section banner-page" data-background="images/banner-single.jpg">
		<div class="content-wrap pos-relative">
			<div class="d-flex justify-content-center bd-highlight mb-3">
				<div class="title-page">User Login/Registration</div>
			</div>
			<div class="d-flex justify-content-center bd-highlight mb-3">
			    <nav aria-label="breadcrumb">
				  <ol class="breadcrumb ">
				    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
				    <li class="breadcrumb-item active" aria-current="page">user</li>
				  </ol>
				</nav>
		  	</div>
		</div>
	</div>

	<!-- CONTENT -->
	<div class="section">
		<div class="content-wrap">
			<div class="container">
				<div class="row">


					<div class="clearfix"></div>
					
					<div class="col-sm-12 col-md-12">
						<h2 class="section-heading">
						 Register
						</h2>
						 <div class="box-act">
						<a href="login.php" class="btn btn-lg btn-primary">Already Have Account? Login</a>
					     </div>
						<div class="margin-bottom-50"></div>

						<div class="content">
							<form action="" method="POST" class="form-contact" id="RegisterForm" data-toggle="validator" novalidate="true">
								<div class="row">
									<div class="col-sm-6 col-md-6">
										<div class="form-group">
											<input type="text" class="form-control" name="uname" id="uname" placeholder="Username" required="">
											<div class="help-block with-errors"></div>
										</div>
									</div>
									<div class="col-sm-6 col-md-6">
										<div class="form-group">
											<input type="email" class="form-control" name="email" id="email" placeholder="Enter Email" required="">
											<div class="help-block with-errors"></div>
										</div>
									</div>
									<div class="col-sm-6 col-md-6">
										<div class="form-group">
											<input type="text" class="form-control" name="name" id="name" placeholder="Enter Name">
											<div class="help-block with-errors"></div>
										</div>
									</div>
									<div class="col-sm-6 col-md-6">
										<div class="form-group">
											<input type="password" class="form-control" name="password" id="password" placeholder="Enter password">
											<div class="help-block with-errors"></div>
										</div>
									</div>
									<div class="col-sm-6 col-md-6">
										<div class="form-group">
											<input type="password" class="form-control" name="cpassword" id="cpassword" placeholder="Confirm password">
											<div class="help-block with-errors"></div>
										</div>
									</div>
									<div class="col-sm-6 col-md-6">
										<div class="form-group">
											<input type="text" class="form-control" id="phone" name="phone" placeholder="Enter Phone No">
											<div class="help-block with-errors"></div>
										</div>
									</div>
								</div>
								<div class="form-group">
									 <textarea id="address" name="address" class="form-control" rows="6" placeholder="Enter Your Address"></textarea>
									<div class="help-block with-errors"></div>
								</div>
								<div class="form-group">
									<div id="success"></div>
									<button type="submit" name="submit" class="btn btn-primary">Register</button>
								</div>
							</form>
							<div class="margin-bottom-50"></div>
							<p><em>Note: Password should be 8 or more characters.</em></p>
						 </div>
					</div>

				</div>
				
			</div>
		</div>
	</div>	

 



	