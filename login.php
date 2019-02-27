<!DOCTYPE html>
<html lang="en">
<body>
	<?php 
          session_start();

	      include('header.php'); 
          include('includes/database.php');

      


  
          if(isset($_POST['submit'])){


          $username = $_POST['uname'];
         
          $pass = $_POST['password'];
         

          //Pass Validator

        
        


          

 
  $conn = mysqli_connect(dbserver, dbuser, dbpass,dbname);

 
        //DATA SANITIZE 

           $username = $conn->real_escape_string($username);
          
           $pass = $conn->real_escape_string($pass);
         
           //Key for verification

           $pass = md5($pass);
          

           //SELECT

            $select = $conn->query("SELECT * FROM user WHERE username = '$username' AND password = '$pass' LIMIT 1 ");


        if($select->num_rows !=0){
        	//Login
        	$row = $select->fetch_assoc();
        	$verified = $row['verified'];

        	if($verified == 1){
                   $_SESSION['loggedin'] = true;
                   $_SESSION['user'] = $username;
                    header('Location:index.php');

        	}
        	else{
                 echo "<script>alert('This Account has not been verified');</script>";
        	}
        	


        }
        else{
        	echo "<script>alert('Login Failed');</script>";
        }


           }
	?>
  <?php 

    if(!isset($_SESSION['loggedin'])){


    ?>
	<!-- BANNER -->
	<div class="section banner-page" data-background="images/banner-single.jpg">
		<div class="content-wrap pos-relative">
			<div class="d-flex justify-content-center bd-highlight mb-3">
				<div class="title-page">Login Page</div>
			</div>
			<div class="d-flex justify-content-center bd-highlight mb-3">
			    <nav aria-label="breadcrumb">
				  <ol class="breadcrumb ">
				    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
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
						 Login
						</h2>
						
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
											<input type="password" class="form-control" name="password" id="password" placeholder="Enter password">
											<div class="help-block with-errors"></div>
										</div>
									</div>
								
									
								</div>
								<div class="form-group">
									<div id="success"></div>
									<button type="submit" name="submit" class="btn btn-primary">Login</button>
								</div>
							</form>
							<div class="margin-bottom-50"></div>
							<p><em>Note: If you forgot ur password. Please mail us at mssp@mssp.com.</em></p>
						 </div>
					</div>

				</div>
				
			</div>
		</div>
	</div>	

 
<?php 

  include('footer.php');
}

 else{
 	header('Location:index.php');
 } 
?>


	
