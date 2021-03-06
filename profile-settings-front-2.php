<?php
   session_start();
?>


<!DOCTYPE html> 
<html lang="en">
	
<head>
		<meta charset="utf-8">
		<title>Gap Book</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
		
		<!-- Favicons -->
		<link href="assets/img/favicon.png" rel="icon">
		
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">
		
		<!-- Fontawesome CSS -->
		<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
		<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">
		
		<!-- Main CSS -->
		<link rel="stylesheet" href="assets/css/style.css">
		<script
			src="https://code.jquery.com/jquery-3.4.1.min.js"
			integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
			crossorigin="anonymous">
	    </script>
	
	
	</head>
	<body>

		<!-- Main Wrapper -->
		<div class="main-wrapper">
		
			<!-- Header -->
			<header class="header">
				<nav class="navbar navbar-expand-lg header-nav">
					<div class="navbar-header">
						<a id="mobile_btn" href="javascript:void(0);">
							<span class="bar-icon">
								<span></span>
								<span></span>
								<span></span>
							</span>
						</a>
						<a href="http://localhost/AppointmentApp/index.php" class="navbar-brand logo">
							<span style="font-size:1.6rem;color: #09dca4;">GAP BOOK</span>
						</a>
					</div>
					<div class="main-menu-wrapper">
						<div class="menu-header">
							<a href="http://localhost/AppointmentApp/index.php" class="menu-logo">
								<span style="font-size:1.6rem;color: #09dca4;">GAP BOOK</span>
							</a>
							<a id="menu_close" class="menu-close" href="javascript:void(0);">
								<i class="fas fa-times"></i>
							</a>
						</div>
						<ul class="main-nav">
							<li>
								<a href="http://localhost/AppointmentApp/index.php">Home</a>
							</li>
							<li class="has-submenu active">
								<li class="has-submenu active">
									<a href="#">Service Provider<i class="fas fa-chevron-down"></i></a>
									<ul class="submenu">
										<li><a href="#">Booking</a></li>
										<li><a href="#">Checkout</a></li>
										<li><a href="#">Booking Success</a></li>
										<li><a href="http://localhost/AppointmentApp/service-dashboard.php">My Dashboard</a></li>
										<li>
											<a href="http://localhost/AppointmentApp/profile-settings-front-2.php">Profile Settings</a>
										</li>
										<li><a href="http://localhost/AppointmentApp/change-password-2.html">Change Password</a></li>
									</ul>
								</li>	
							</li>	
						</ul>	 
					</div>		 
					<ul class="nav header-navbar-rht">
						<li class="nav-item contact-item">
							<div class="header-contact-img">
								<i class="far fa-hospital"></i>							
							</div>
							<div class="header-contact-detail">
								<p class="contact-header">Contact</p>
								<p class="contact-info-header"> +92 310 525 9270</p>
							</div>
						</li>
						
						<!-- User Menu -->
						<li class="nav-item dropdown has-arrow logged-item">
							<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
								<span class="user-img">
									<img class="rounded-circle" src="assets/img/doctors/doctor-thumb-02.jpg" width="31" alt="Darren Elder">
								</span>
							</a>
							<div class="dropdown-menu dropdown-menu-right">
								<div class="user-header">
									<div class="avatar avatar-sm">
										<img src="assets/img/doctors/doctor-thumb-02.jpg" alt="User Image" class="avatar-img rounded-circle">
									</div>
									<div class="user-text">
										<h6 id="name"></h6>
									</div>
								</div>
								<a class="dropdown-item" href="http://localhost/AppointmentApp/service-dashboard.php">Dashboard</a>
								<a class="dropdown-item" href="http://localhost/AppointmentApp/profile-settings-front-2.php">Profile Settings</a>
								<a class="dropdown-item" href="http://localhost/AppointmentApp/logout.php">Logout</a>
							</div>
						</li>
						<!-- /User Menu -->
						
					</ul>
				</nav>
			</header>
			<!-- /Header -->
			
			<!-- Breadcrumb -->
			<div class="breadcrumb-bar">
				<div class="container-fluid">
					<div class="row align-items-center">
						<div class="col-md-12 col-12">
							<nav aria-label="breadcrumb" class="page-breadcrumb">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="http://localhost/AppointmentApp/index.php">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Dashboard</li>
								</ol>
							</nav>
							<h2 class="breadcrumb-title">Dashboard</h2>
						</div>
					</div>
				</div>
			</div>
			<!-- /Breadcrumb -->
			
			
			<!-- Page Content -->
			<div class="content">
				<div class="container-fluid">

					<div class="row">
						<div class="col-md-5 col-lg-4 col-xl-3 theiaStickySidebar">
							
							<!-- Profile Sidebar -->
							<div class="profile-sidebar">
								<div class="widget-profile pro-widget-content">
									<div class="profile-info-widget">
										<a href="#" class="booking-doc-img">
											<img src="assets/img/doctors/doctor-thumb-02.jpg" alt="User Image">
										</a>
										<div class="profile-det-info">
											<h3></h3>
											
											<div class="patient-details">
												<h5 class="mb-0"></h5>
											</div>
										</div>
									</div>
								</div>
								<div class="dashboard-widget">
									<nav class="dashboard-menu">
										<ul>
											<li class="active">
												<a href="http://localhost/AppointmentApp/service-dashboard.php">
													<i class="fas fa-columns"></i>
													<span>Dashboard</span>
												</a>
											</li>
											<li>
												<a href="#">
													<i class="fas fa-calendar-check"></i>
													<span>Appointments</span>
												</a>
											</li>
											<li>
												<a href="#">
													<i class="fas fa-hourglass-start"></i>
													<span>Schedule Timings</span>
												</a>
											</li>
											<li>
												<a href="invoices.html">
													<i class="fas fa-file-invoice"></i>
													<span>Invoices</span>
												</a>
											</li>
											<li>
											<li>
												<a href="http://localhost/AppointmentApp/profile-settings-front-2.php">
													<i class="fas fa-user-cog"></i>
													<span>Profile Settings</span>
												</a>
											</li>
											<li>
												<a href="http://localhost/AppointmentApp/change-password-2.html">
													<i class="fas fa-lock"></i>
													<span>Change Password</span>
												</a>
											</li>
											<li>
												<a href="http://localhost/AppointmentApp/logout.php">
													<i class="fas fa-sign-out-alt"></i>
													<span>Logout</span>
												</a>
											</li>
										</ul>
									</nav>
								</div>
                            </div>
						</div>
							<!-- /Profile Sidebar -->
						
						<div class="col-md-7 col-lg-8 col-xl-9">
							<div class="card">
								<div class="card-body">
									
									<!-- Profile Settings Form -->
									<form method="POST" enctype="multipart/form-data">
										<div class="row form-row">
											<div class="col-12 col-md-12">
												<div class="form-group">
													<div class="change-avatar">
														<div class="profile-img">
															<img src="assets/img/doctors/doctor-thumb-02.jpg" alt="User Image">
														</div>
														<div class="upload-img">
															<div class="change-photo-btn">
																<span><i class="fa fa-upload"></i> Upload Photo</span>
																<input type="file" class="upload" name="file">
															</div>
															
														</div>
													</div>
												</div>
											</div>
											<div class="col-12 col-md-6">
												<div class="form-group">
													<label>Name</label>
													<input type="text" class="form-control" name="name">
												</div>
                                            </div>
                                            <div class="col-12 col-md-6">
												<div class="form-group">
                                                    <label>Category</label>
                                                    <select type="text"  class="form-control" name="category">
                                                        <option class="myText"></option>
                                                        <option value="1" name="medical">Medical</option>
                                                        <option value="2" name="computer">Computer Science</option>
                                                        <option value="3" name="marketing">Marketing</option>
                                                        <option value="4" name="mana">Management</option>
                                                        <option value="5" name="lawyer">Lawyer</option>
                                                    </select>
												</div>
                                            </div>
											<div class="col-12 col-md-6">
												<div class="form-group">
													<label>Date of Birth</label>
													<div class="cal-icon">
														<input type="text" class="form-control datetimepicker"  name="dob">
													</div>
												</div>
											</div>
											<div class="col-12 col-md-6">
												<div class="form-group">
													<label>Gender</label>
													<select name="gender" class="form-control" type="text">
														<option>Male</option>
														<option>Female</option>
														<option>Other</option>
													</select>
												</div>
											</div>
											<div class="col-12 col-md-6">
												<div class="form-group">
													<label>Email ID</label>
													<input type="email" class="form-control" name="email" disabled>
												</div>
											</div>
											<div class="col-12 col-md-6">
												<div class="form-group">
													<label>Mobile</label>
													<input type="text"  class="form-control" name="mobileNumber">
												</div>
                                            </div>
                                            <div class="col-12">
												<div class="form-group">
                                                    <label>Description</label>
                                                     <textarea rows="10" name="aboutMe" class="form-control" type="text"></textarea>
												</div>
											</div>
											<div class="col-12">
												<div class="form-group">
												<label>Country</label>
													<input type="text" class="form-control"  name="country">
												</div>
											</div>
											<div class="col-12 col-md-6">
												<div class="form-group">
													<label>City</label>
													<input type="text" class="form-control" name="city">
												</div>
											</div>
											<div class="col-12 col-md-6">
												<div class="form-group">
													<label>Postal Code</label>
													<input type="text" class="form-control" name="postalCode">
												</div>
											</div>
										</div>
										<div class="submit-section">
											<button type="submit" onclick="dataSaver()" class="btn btn-primary submit-btn">Save Changes</button>
										</div>
									</form>
									<!-- /Profile Settings Form -->

									<script>
										function dataSaver()
										{
											var name=document.getElementsByName("name")[0].value;
                                            var category=document.getElementsByName("category")[0].value;
                                            var aboutMe=document.getElementsByName("aboutMe")[0].value;
											var dob=document.getElementsByName("dob")[0].value;
											var gender=document.getElementsByName("gender")[0].value;
											var mobileNumber=document.getElementsByName("mobileNumber")[0].value;
											var country=document.getElementsByName("country")[0].value;
											var city=document.getElementsByName("city")[0].value;
											var postalCode=document.getElementsByName("postalCode")[0].value;

											var formData="name="+name+"&dob="+dob+"&gender="+gender+"&category="+category+"&aboutMe="+aboutMe
											    +"&mobileNumber="+mobileNumber+"&country="+country+"&city="+city+"&postalCode="+
												postalCode;

                                            console.log(formData);

											var xhttp = new XMLHttpRequest();
					                        xhttp.open("POST", "http://localhost/AppointmentApp/backend/profile-settings-updateData.php",true);
					                        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
					                        xhttp.onreadystatechange = function() {
						                        	if (this.readyState == 4 && this.status == 200) {
														  console.log(this.responseText);
														  if(this.responseText==1)
														  {
															  alert("Data Updated Sucessfully");
														  }
														  else if(this.responseText==-1)
														  {
															  alert("Data Updation Failed");
														  }
							                    }
                                            };		
					                        xhttp.send(formData);
										}
										
									</script>									
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>		
							
                        <!-- Footer -->
			<footer class="footer">
				
				<!-- Footer Top -->
				<div class="footer-top">
					<div class="container-fluid">
						<div class="row">
							<div class="col-lg-3 col-md-6">
							
								<!-- Footer Widget -->
								<div class="footer-widget footer-about">
									<div class="footer-logo">
										<span style="font-size:1.6rem;color:white;">GAP BOOK</span>
									</div>
									<div class="footer-about-content">
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
										<div class="social-icon">
											<ul>
												<li>
													<a href="#" target="_blank"><i class="fab fa-facebook-f"></i> </a>
												</li>
												<li>
													<a href="#" target="_blank"><i class="fab fa-twitter"></i> </a>
												</li>
												<li>
													<a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a>
												</li>
												<li>
													<a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
												</li>
												<li>
													<a href="#" target="_blank"><i class="fab fa-dribbble"></i> </a>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<!-- /Footer Widget -->
								
							</div>
							
							
							
							<div class="col-lg-3 col-md-6">
							
								<!-- Footer Widget -->
								<div class="footer-widget footer-contact">
									<h2 class="footer-title">Contact Us</h2>
									<div class="footer-contact-info">
										<div class="footer-address">
											<span><i class="fas fa-map-marker-alt"></i></span>
											<p> 3556  Beech Street, Bahria Town,<br> Islamabad,Pakistan </p>
										</div>
										<p>
											<i class="fas fa-phone-alt"></i>
											+92 310 525 9270
										</p>
										<p class="mb-0">
											<i class="fas fa-envelope"></i>
											edge29861@gmail.com
										</p>
									</div>
								</div>
								<!-- /Footer Widget -->
								
							</div>
							
						</div>
					</div>
				</div>
				<!-- /Footer Top -->
				
				<!-- Footer Bottom -->
                <div class="footer-bottom">
					<div class="container-fluid">
					
						<!-- Copyright -->
						<div class="copyright">
							<div class="row">
								<div class="col-md-6 col-lg-6">
								
									<!-- Copyright Menu -->
									<div class="copyright-menu">
										<ul class="policy-menu">
											<li><a href="term-condition.html">Terms and Conditions</a></li>
											<li><a href="privacy-policy.html">Policy</a></li>
										</ul>
									</div>
									<!-- /Copyright Menu -->
									
								</div>
							</div>
						</div>
						<!-- /Copyright -->
						
					</div>
				</div>
				<!-- /Footer Bottom -->
				
			</footer>
			<!-- /Footer -->
		   
        </div>
        <script>
                 function showData()
				 {
					var xhttp = new XMLHttpRequest();
					xhttp.open("GET", "http://localhost/AppointmentApp/backend/profile-settings-getData.php",false);
					xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
					xhttp.onreadystatechange = function() {
							if (this.readyState == 4 && this.status == 200) {
									var myObj = JSON.parse(this.responseText);
									document.getElementsByName('email')[0].value=myObj.email;
									document.getElementsByName('name')[0].value=myObj.name;
                                    if(myObj.category=="1")
                                    {
                                        document.getElementsByClassName('myText')[0].innerHTML="Medical";
                                    }
                                    else if(myObj.category=="2")
                                    {
                                        document.getElementsByClassName('myText')[0].innerHTML="Computer Sciences";
                                    }
                                    else if(myObj.category=="3")
                                    {
                                        document.getElementsByClassName('myText')[0].innerHTML="Marketing";
                                    }
                                    else if(myObj.Category=="4")
                                    {
                                        document.getElementsByClassName('myText')[0].innerHTML="Management";
                                    }
                                    else if(myObj.category=="5")
                                    {
                                        document.getElementsByClassName('myText')[0].innerHTML="Lawyer";
                                    }
                                    document.getElementsByName('aboutMe')[0].value=myObj.aboutMe;
									document.getElementsByName('gender')[0].value=myObj.gender;
									document.getElementsByName('dob')[0].value=myObj.dob;
									document.getElementsByName('mobileNumber')[0].value=myObj.mobileNumber;
									document.getElementsByName('country')[0].value=myObj.country;
									document.getElementsByName('city')[0].value=myObj.city;
									document.getElementsByName('postalCode')[0].value=myObj.postalCode;
							}
                        };		
					xhttp.send();
				 }
			</script>
			<script>		       
					$(document).ready(function(){
						    showData();
					});
		     </script>
		   
		<!-- /Main Wrapper -->
	  
		<!-- jQuery -->
		<script src="assets/js/jquery.min.js"></script>
		
		<!-- Bootstrap Core JS -->
		<script src="assets/js/popper.min.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>
		
		<!-- Sticky Sidebar JS -->
        <script src="assets/plugins/theia-sticky-sidebar/ResizeSensor.js"></script>
        <script src="assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js"></script>
	
		
	</body>
</html>