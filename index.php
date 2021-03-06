<!DOCTYPE html>
<html lang="en">
  
<?php 
session_start();
require('header.php'); ?>

<body>

	<!-- LOAD PAGE -->
	<div class="animationload">
		<div class="loader"></div>
	</div>
	
	<!-- BACK TO TOP SECTION -->
	<a href="#0" class="cd-top cd-is-visible cd-fade-out">Top</a>

	<!-- HEADER -->
    <div class="header header-1">
    	<!-- TOPBAR -->
    	<div class="topbar">
			<div class="container">
				<div class="row">
					<div class="col-sm-7 col-md-6">
						<p><em>Some text here</em></p>
					</div>
					<div class="col-sm-5 col-md-6">
						<div class="sosmed-icon pull-right">
							<a href="#"><i class="fa fa-facebook"></i></a> 
							<a href="#"><i class="fa fa-twitter"></i></a> 
							<a href="#"><i class="fa fa-instagram"></i></a> 
							<a href="#"><i class="fa fa-pinterest"></i></a> 
						</div>
					</div>
				</div>
			</div>
		</div>

    	<!-- MIDDLE BAR -->
		<div class="middlebar">
			<div class="container">
				
				
				<div class="contact-info">
					<!-- INFO 1 -->
					<div class="box-icon-1">
						<div class="icon">
							<div class="fa fa-envelope-o"></div>
						</div>
						<div class="body-content">
							<div class="heading">Mail :</div>
							info@mssp.com
						</div>
					</div>
					<!-- INFO 2 -->
					<div class="box-icon-1">
						<div class="icon">
							<div class="fa fa-phone"></div>
						</div>
						<div class="body-content">
							<div class="heading">Call Us :</div>
							+91 0000000000
						</div>
					</div>
					<!-- INFO 3 -->
<?php
    if(!isset($_SESSION['loggedin'])){


    ?>
					<div class="box-act">
						<a href="register.php" class="btn btn-lg btn-primary">Login/Register</a>
					</div>
					<?php } 

					else{


					 ?>
					 <div class="box-act">
						<a href="logout.php" class="btn btn-lg btn-primary">Logout</a>
					</div>
					<?php } ?>

				</div>
			</div>
		</div>

		<!-- NAVBAR SECTION -->
		<div class="navbar-main">
			<div class="container">
			    <nav class="navbar navbar-expand-lg">
			        <a class="navbar-brand" href="index.php">
						<img src="images/logo.png" width="70px" height="5px" alt="" />
					</a>
			        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
			            <span class="navbar-toggler-icon"></span>
			        </button>
			        <div class="collapse navbar-collapse" id="navbarNavDropdown">
			            <ul class="navbar-nav">
			                <li class="nav-item dropdown">
			                    <a class="nav-link dropdown-toggle" href="index.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						          HOME
						        </a>
			                    
			                </li>
			                <li class="nav-item dropdown">
			                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						          ABOUT
						        </a>
			                   
			                </li>
			                <li class="nav-item dropdown">
			                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						          CAUSES
						        </a>
			                   
			                </li>
			                
			                <li class="nav-item dropdown">
			                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						          EVENTS
						        </a>
			                    
			                </li>
			                <li class="nav-item">
			                    <a class="nav-link" href="contact.html">CONTACT US</a>
			                </li>
			            </ul>
			        </div>
			    </nav> <!-- -->

			</div>
		</div>

    </div>
 
	<!-- BANNER -->
	<div id="oc-fullslider" class="banner owl-carousel">
        <div class="owl-slide">
        	<div class="item">
	            <img src="images/home01.jpg" alt="Slider">
	            <div class="slider-pos">
		            <div class="container">
		            	<div class="wrap-caption">
			                <h1 class="caption-heading bg"><span>#EndViolence</span> For Every Woman</h1>
			                <p class="bg">Remipsum dolor sit amet consectetur adipisicing</p>
			                <a href="#" class="btn btn-primary">DONATE NOW</a>
			            </div>  
		            </div>
	            </div>
        	</div>
        </div>
        <div class="owl-slide">
        	<div class="item">
	            <img src="images/home02.jpg" alt="Slider">
	            <div class="slider-pos">
	            <div class="container">
	            	<div class="wrap-caption center">
		                <h1 class="caption-heading bg"><span>#EndViolence</span> For Every Woman</h1>
		                <p class="bg">remipsum dolor sit amet consectetur adipisicing</p>
		                <a href="#" class="btn btn-primary">DONATE NOW</a>
		            </div>  
	            </div>  
	            </div>  
            </div>  
        </div>
        <div class="owl-slide">
        	<div class="item">
	            <img src="images/home03.jpg" alt="Slider">
	            <div class="slider-pos">
	            <div class="container">
	            	<div class="wrap-caption right">
		                <h1 class="caption-heading bg"><span>#EndViolence</span> For Every Woman</h1>
		                <p class="bg">remipsum dolor sit amet consectetur adipisicing</p>
		                <a href="#" class="btn btn-primary">DONATE NOW</a>
		            </div>  
	            </div>  
	            </div>  
            </div>  
        </div>
    </div>

	<div class="clearfix"></div>
	 
	<!-- WE NEED YOUR HELP -->
	<div class="section services">
		<div class="content-wrap">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 col-md-12">
						<h2 class="section-heading center">
							We <span>Need</span> Your Help
						</h2>
						<p class="subheading text-center">Lorem ipsum dolor sit amet, onsectetur adipiscing cons ectetur nulla. Sed at ullamcorper risus.</p>
					</div>
					<div class="clearfix"></div>
					<!-- Item 1 -->
					<div class="col-sm-4 col-md-4">
			            <div class="box-fundraising">
		              		<div class="media">
		                		<img src="images/cause-img-1.jpg" alt="">
		              		</div>
		              		<div class="body-content">
		              			<p class="title"><a href="cause-single.html">EDUCATION FOR SYRIAN CHILD</a></p>
		              			<div class="text">Teritatis et quasi architecto. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dolore mque laudantium, totam rem aperiam, eaque ipsa quae ab illo invent.</div>
		              			
		              		</div>
			            </div>
			        </div>
			        <!-- Item 2 -->
					<div class="col-sm-4 col-md-4">
			            <div class="box-fundraising">
		              		<div class="media">
		                		<img src="images/cause-img-2.jpg" alt="">
		              		</div>
		              		<div class="body-content">
		              			<p class="title"><a href="cause-single.html">HOME FOR KAMPAR'S CHILD</a></p>
		              			<div class="text">Teritatis et quasi architecto. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dolore mque laudantium, totam rem aperiam, eaque ipsa quae ab illo invent.</div>
		              			
		              		</div>
			            </div>
			        </div>
			        <!-- Item 3 -->
					<div class="col-sm-4 col-md-4">
			            <div class="box-fundraising">
		              		<div class="media">
		                		<img src="images/cause-img-3.jpg" alt="">
		              		</div>
		              		<div class="body-content">
		              			<p class="title"><a href="cause-single.html">CLEAN WATER FOR SOUTH SUDAN'S</a></p>
		              			<div class="text">Teritatis et quasi architecto. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dolore mque laudantium, totam rem aperiam, eaque ipsa quae ab illo invent.</div>
		              			
		              		</div>
			            </div>
			        </div>

					<div class="col-sm-12 col-md-12">
						<div class="spacer-50"></div>
						<div class="text-center">
							<a href="#" class="btn btn-primary">SEE ALL CAUSE</a>
						</div>

					</div>

				</div>
			</div>
		</div>
	</div>

	<!-- URGENT CAUSE -->
	<div class="section" data-background="images/bg-cause.jpg">
		<div class="content-wrap">
			<div class="container">
				<div class="row">
					<div class="col-sm-6 col-md-6">
						<h2 class="section-heading light">
							Urgent <span>Cause</span>
						</h2>

						<h2 class="color-white"><span class="color-primary">#Fund</span> for Disaster </h2>
						<p>Teritatis et quasi architecto. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dolore mque laudantium, totam rem aperiam, eaque ipsa quae ab illo invent. Sed ut perspiciatis unde omnis iste natus error sit .</p>

						


					</div>

					<div class="col-sm-6 col-md-6">
						<div class="img-button">
							<img src="images/cause-img.jpg" alt="">
							<div class="btn-overlay">
								
							<a href="#" class="btn btn-primary">DONATE NOW</a>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
	 
	<!-- HOW TO HELP US -->
	<div class="section">
		<div class="content-wrap-top">
			<div class="container">
				<div class="row align-items-end">

					<div class="col-sm-6 col-md-6">
						<img src="images/help-people.jpg" alt="" class="img-fluid">
					</div>

					<div class="col-sm-6 col-md-6">
						<h2 class="section-heading">
							How To <span>Help</span> Us
						</h2>
						<div class="section-subheading">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dolore mque laudantium, totam rem aperiam, eaque ipsa quae ab illo invent.</div> 
						<div class="margin-bottom-50"></div>
						<dl class="hiw">
							<dt><span class="fa fa-gift"></span></dt>
							<dd><div class="no">01</div><h3>Send Donation</h3>Teritatis et quasi architecto. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dolore mque laudantium, totam rem aperiam, eaque ipsa quae ab illo invent.</dd>
							<dt><span class="fa fa-male"></span></dt>
							<dd><div class="no">02</div><h3>Become Volunteer</h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</dd>
							<dt><span class="fa fa-bullhorn"></span></dt>
							<dd><div class="no">03</div><h3>Share Media</h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</dd>
							
						</dl>
						<div class="spacer-70"></div>
					</div>

				</div>
			</div>
		</div>
	</div>

	<!-- WE HELP MANY PEOPLE -->
	<div class="section" data-background="images/bg-map-dot.jpg">
		<div class="content-wrap">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 col-md-12">
						<div class="cta-info color-white">
							<h1 class="section-heading light no-after">
								<span>We Help Many</span> People
							</h1>
							<h3 class="color-primary">Want to Become a Volunteer</h3>

							<div class="spacer-10"></div>
							<p>Teritatis et quasi architecto. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dolore mque laudantium, totam rem aperiam, eaque ipsa quae ab illo invent. Sed ut perspiciatis unde omnis iste natus error sit .</p>

							<a href="#" class="btn btn-light margin-btn">LEARN MORE</a> <a href="#" class="btn btn-primary margin-btn">JOIN US NOW</a>	
						</div>

					</div>

				</div>
			</div>
		</div>
	</div>

	<!-- OUR VOLUUNTER SAYS -->
	<div class="section">
		<div class="content-wrap">
			<div class="container">
				<div class="row">

					<div class="col-sm-12 col-md-12">
						<h2 class="section-heading center">
							Our <span>Volunteers</span> Says
						</h2>
						<p class="subheading text-center">Lorem ipsum dolor sit amet, onsectetur adipiscing cons ectetur nulla. Sed at ullamcorper risus.</p>
					</div>

					<div class="col-sm-6 col-md-6">
						<div class="testimonial-1">
		              		<div class="media">
	              				<img src="images/volunteer-1.jpg" alt="" class="img-fluid">
	              			</div>
			              	<div class="body">
			                	<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry orem Ipsum has been. Mauris ornare tortor in eleifend blanditullam ut ligula et neque. Nulla interdum dapibus erat nec elementum. </p>
			                	<div class="title">John Doel</div>
			                	<div class="company">Businessman</div>
			              	</div>
			            </div>
					</div>

					<div class="col-sm-6 col-md-6">
						<div class="testimonial-1">
		              		<div class="media">
	              				<img src="images/volunteer-2.jpg" alt="" class="img-fluid">
	              			</div>
			              	<div class="body">
			                	<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry orem Ipsum has been. Mauris ornare tortor in eleifend blanditullam ut ligula et neque. Nulla interdum dapibus erat nec elementum. </p>
			                	<div class="title">Raisa Doel</div>
			                	<div class="company">House Keeper</div>
			              	</div>
			            </div>
					</div>

					<div class="col-sm-6 col-md-6">
						<div class="testimonial-1">
		              		<div class="media">
	              				<img src="images/volunteer-3.jpg" alt="" class="img-fluid">
	              			</div>
			              	<div class="body">
			                	<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry orem Ipsum has been. Mauris ornare tortor in eleifend blanditullam ut ligula et neque. Nulla interdum dapibus erat nec elementum. </p>
			                	<div class="title">Josh Doel</div>
			                	<div class="company">Contractor</div>
			              	</div>
			            </div>
					</div>

					<div class="col-sm-6 col-md-6">
						<div class="testimonial-1">
		              		<div class="media">
	              				<img src="images/volunteer-4.jpg" alt="" class="img-fluid">
	              			</div>
			              	<div class="body">
			                	<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry orem Ipsum has been. Mauris ornare tortor in eleifend blanditullam ut ligula et neque. Nulla interdum dapibus erat nec elementum. </p>
			                	<div class="title">Sasha Doel</div>
			                	<div class="company">Freelance</div>
			              	</div>
			            </div>
					</div>

				</div>
			</div>
		</div>
	</div>

	<!-- OUR GALLERY -->
	<div class="section" data-background="images/bg-gallery.png">
		<div class="content-wrap">
			<div class="container">
				<div class="row">

					<div class="col-sm-12 col-md-12">
						<h2 class="section-heading center">
							Our <span>Gallery</span>
						</h2>
						<p class="subheading text-center">Lorem ipsum dolor sit amet, onsectetur adipiscing cons ectetur nulla. Sed at ullamcorper risus.</p>
					</div>

					<div class="row popup-gallery gutter-5">
						<div class="col-xs-12 col-md-4">
							<div class="box-gallery">
								<a href="images/gallery-1.jpg" title="Gallery #1">
									<img src="images/gallery-1.jpg" alt="" class="img-fluid">
									<div class="project-info">
										<div class="project-icon">
											<span class="fa fa-search"></span>
										</div>
									</div>
								</a>
							</div>
						</div>
						<div class="col-xs-12 col-md-4">
							<div class="box-gallery">
								<a href="images/gallery-2.jpg" title="Gallery #2">
									<img src="images/gallery-2.jpg" alt="" class="img-fluid">
									<div class="project-info">
										<div class="project-icon">
											<span class="fa fa-search"></span>
										</div>
									</div>
								</a>
							</div>
						</div>
						<div class="col-xs-12 col-md-4">
							<div class="box-gallery">
								<a href="images/gallery-3.jpg" title="Gallery #3">
									<img src="images/gallery-3.jpg" alt="" class="img-fluid">
									<div class="project-info">
										<div class="project-icon">
											<span class="fa fa-search"></span>
										</div>
									</div>
								</a>
							</div>
						</div>
						<div class="col-xs-12 col-md-4">
							<div class="box-gallery">
								<a href="images/gallery-4.jpg" title="Gallery #4">
									<img src="images/gallery-4.jpg" alt="" class="img-fluid">
									<div class="project-info">
										<div class="project-icon">
											<span class="fa fa-search"></span>
										</div>
									</div>
								</a>
							</div>
						</div>
						<div class="col-xs-12 col-md-4">
							<div class="box-gallery">
								<a href="images/gallery-5.jpg" title="Gallery #5">
									<img src="images/gallery-5.jpg" alt="" class="img-fluid">
									<div class="project-info">
										<div class="project-icon">
											<span class="fa fa-search"></span>
										</div>
									</div>
								</a>
							</div>
						</div>
						<div class="col-xs-12 col-md-4">
							<div class="box-gallery">
								<a href="images/gallery-6.jpg" title="Gallery #6">
									<img src="images/gallery-6.jpg" alt="" class="img-fluid">
									<div class="project-info">
										<div class="project-icon">
											<span class="fa fa-search"></span>
										</div>
									</div>
								</a>
							</div>
						</div>
						
					</div>

				</div>
			</div>
		</div>
	</div>

	<!-- EVENTS -->
	<div class="section" data-background="images/bg-events.jpg">
		<div class="content-wrap">
			<div class="container">
				<div class="row">
					<div class="col-sm-6 col-md-6">

						<div class="event-pin">
							<h1 class="color-white">#Events</h1>
							<h3><a href="#">Meet Ocu Deyen</a></h3>
							<p>Sad ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dolore mque laudantium, totam rem aperiam, eaque ipsa quae ab illo invent.</p>
							<a href="#" class="read-more">Read More...</a>
							<div class="more-event"><a href="#"><i class="fa fa-long-arrow-left"></i></a></div>
						</div>

					</div>

					<div class="col-sm-6 col-md-5 col-md-offset-1">
						<h2 class="section-heading light">
							<span>Upcoming</span> Events
						</h2>
						<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dolore mque laudantium.</p>
											
						<div class="list-events">
							<div class="box-event">
								<div class="meta-date">
									<div class="date">10</div>
									<div class="month">AUG</div>
								</div>
								<div class="body-content">
									<h4><a href="events-detail.html">Gathering books for children</a></h4>
									<div class="meta">
										<span class="date"><i class="fa fa-clock-o"></i>  12:00 am - 5:00 pm</span>
										<span class="location"><i class="fa fa-map-marker"></i> Montreal, Canada</span>
									</div>
									<p>Teritatis et quasi architecto. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dolore mque laudantium, totam rem aperiam, eaque ipsa quae ab illo invent.</p>
								</div>
							</div>
							<div class="box-event">
								<div class="meta-date">
									<div class="date">24</div>
									<div class="month">AUG</div>
								</div>
								<div class="body-content">
									<h4><a href="events-detail.html">Meet & greet volunteer ny</a></h4>
									<div class="meta">
										<span class="date"><i class="fa fa-clock-o"></i>  12:00 am - 5:00 pm</span>
										<span class="location"><i class="fa fa-map-marker"></i> London, UK</span>
									</div>
									<p>Teritatis et quasi architecto. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dolore mque laudantium, totam rem aperiam, eaque ipsa quae ab illo invent.</p>
								</div>
							</div>
						</div>
						
					</div>

				</div>


			</div>
		</div>
	</div>



	<!-- CTA -->
	<div class="section cta">
		<div class="content-wrap-20">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 col-md-12">
						<div class="cta-1">
			              	<div class="body-text">
			                	<h3>Join your hand with us for a better life and beautiful future.</h3>
			              	</div>
			              	<div class="body-action">
			                	<a href="#" class="btn btn-secondary">DONATE NOW</a>
			              	</div>
			            </div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- FOOTER SECTION -->
	<div class="footer" data-background="images/bg-map-dot.jpg">
		<div class="content-wrap">
			<div class="container">
				
				<div class="row">
					<div class="col-sm-3 col-md-3">
						<div class="footer-item">
							<img src="images/logo.png" width="200px" height="200px" alt="logo bottom" class="logo-bottom">
							<div class="spacer-30"></div>
							<p>About MSSP</p>
							<a href="#"><i class="fa fa-angle-right"></i> Read More</a>
						</div>
					</div>

					<div class="col-sm-3 col-md-3">
						<div class="footer-item">
							<div class="footer-title">
								WHO WE ARE
							</div>
							
							<div class="row">
								<div class="col-sm-6 col-md-6">
									<ul class="list">
										<li><a href="#" title="About us">About us</a></li>
										<li><a href="#" title="Couses">Couses</a></li>
										<li><a href="#" title="Testimonials">Testimonials</a></li>
										<li><a href="#" title="Gallery">Gallery</a></li>
										<li><a href="#" title="Faq">Faq</a></li>
									</ul>
								</div>
								<div class="col-sm-6 col-md-6">
									<ul class="list">
										<li><a href="#" title="Our Team">Our Team</a></li>
										<li><a href="#" title="Events">Events</a></li>
										<li><a href="#" title="Contact Us">Contact Us</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>

					<div class="col-sm-3 col-md-3">
						<div class="footer-item">
							<div class="footer-title">
								WHERE WE WORK
							</div>
							<ul class="list-info">
								<li>
									<div class="info-icon">
										<span class="fa fa-map-marker"></span>
									</div>
									<div class="info-text">Pune AKurdi </div> </li>
								<li>
									<div class="info-icon">
										<span class="fa fa-phone"></span>
									</div>
									<div class="info-text">9999999999</div>
								</li>
								<li>
									<div class="info-icon">
										<span class="fa fa-envelope"></span>
									</div>
									<div class="info-text">info@mssp.com</div>
								</li>
								
							</ul>

						</div>
					</div>
					
					<div class="col-sm-3 col-md-3">
						<div class="footer-item">
							<div class="footer-title">
								FOLLOW US
							</div>
							<p>Lit sed The Best in dolor sit amet consectetur adipisicing elit sedconsectetur adipisicing</p>
							<div class="sosmed-icon primary">
								<a href="#"><i class="fa fa-facebook"></i></a> 
								<a href="#"><i class="fa fa-twitter"></i></a> 
								<a href="#"><i class="fa fa-instagram"></i></a> 
								<a href="#"><i class="fa fa-pinterest"></i></a> 
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="fcopy">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 col-md-12">
						<p class="ftex">Copyright 2019 &copy; <span class="color-primary">MSSP</span>. Designed by <span class="color-primary">MSSP.</span></p> 
					</div>
				</div>
			</div>
		</div>
		
	</div>
	
	<!-- JS VENDOR -->
	<script src="js/vendor/jquery.min.js"></script>
	<script src="js/vendor/bootstrap.min.js"></script>
	<script src="js/vendor/owl.carousel.js"></script>
	<script src="js/vendor/jquery.magnific-popup.min.js"></script>

	<!-- SENDMAIL -->
	<script src="js/vendor/validator.min.js"></script>
	<script src="js/vendor/form-scripts.js"></script>

	<script src="js/script.js"></script>

</body>


</html>