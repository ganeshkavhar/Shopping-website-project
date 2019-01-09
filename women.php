<?php 

	include 'db.php';

	$select = "select * from product where category = 'Woman Fashion'";
	$run = mysqli_query($connection,$select);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Elite Shoppy</title>
	<link rel="stylesheet" type="text/css" href="men.css">
	<link rel="stylesheet" type="text/css" href="style.css">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

</head>
<body>

	<div class="topnav">
		<table style="width: 100%;height: 10px;background-color: black">
			<tr>
				<td>
					<h2 style="width: 320px;font-size: 20px;text-align: center;color: white;"><img src="img/signin.png" style="height: 20px"> Sign In
					</td>
					<td>
						<h2 style="width: 320px;font-size: 20px;text-align: center;color: white"><img src="img/signup.png" style="height: 20px">Sign Up
						</td>
						<td>
							<h2 style="width: 320px;font-size: 20px;text-align: center;color: white"><img src="img/call.png" style="height: 20px">Call : 8080808080
							</td>
							<td>
								<h2 style="width: 320px;font-size: 20px;text-align: center;color: white"><img src="img/mail.png" style="height: 20px">info@example.com
								</td>
							</tr>
						</table>
					</div>

					<table top>
						<tr>
							<td>
								<div class="SearchBar">
									<form>
										<input type="text" placeholder="Search here..." maxlength="200" id="search">
										<input type="submit" value="Go!" id="submit">
									</form>
								</div>
							</td>

							<td style="font-size: 50px;font-weight: 900;">
								Elite Shoppy
							</td>
						</table>


						<div class="Menu">
							<ul> <!-- NAV BAR -->
								<li><a 	href="index.php">HOME</a></li>
								<li><a  href="men.php">MEN</a></li>
								<li><a  href="women.php">WOMEN</a></li>
								<li><a  href="aboutus.php">ABOUT US</a></li>
							</ul>
						</div>
						<div class="abouth">
							<div class="ah">
								<h1><font color="white">Woman's FASHION<h1>	
								</div>
							</div>

							<div class="single-pro">
								<?php while ($data = mysqli_fetch_assoc($run)) {
								
								?>
								<div class="col-md-3 product-men">
									<div class="men-pro-item simpleCart_shelfItem">
										<div class="men-thumb-item">
											<img src="admin/product_img/<?php echo $data['photo_f']; ?>" alt="" class="pro-image-front">
											<img src="admin/product_img/<?php echo $data['photo_b']; ?>" alt="" class="pro-image-back">
								
											<span class="product-new-top">New</span>
											<br>
										</div>
										<div class="item-info-product ">
											<h4><a href="single.html"><?php echo $data['name']; ?></a></h4>
											<div class="info-product-price">
												<span class="item_price" style="color: #fff;">$<?php echo $data['actual_price']; ?></span>
												<del>$<?php echo $data['our_price']; ?></del>
											</div>
										</div>
									</div>
								</div>
								<?php } ?>

							</div>
						</div>
					</div>
					<!-- //footer -->
					<div class="footer">
						<div class="footer_agile_inner_info_w3l">
							<div class="col-md-3 footer-left">
								<h2><a href="index.html"><span>E</span>lite Shoppy </a></h2>
								<p>Lorem ipsum quia dolor
									sit amet, consectetur, adipisci velit, sed quia non 
								numquam eius modi tempora.</p>
								<ul class="social-nav model-3d-0 footer-social w3_agile_social two">
									<li><a href="#" class="facebook">
										<div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
										<div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div></a></li>
										<li><a href="#" class="twitter"> 
											<div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
											<div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div></a></li>
											<li><a href="#" class="instagram">
												<div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
												<div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div></a></li>
												<li><a href="#" class="pinterest">
													<div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
													<div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div></a></li>
												</ul>
											</div>
											<div class="col-md-9 footer-right">
												<div class="sign-grds">
													<div class="col-md-4 sign-gd">
														<h4>Our <span>Information</span> </h4>
														<ul>
															<li><a href="index.html">Home</a></li>
															<li><a href="mens.html">Men's Wear</a></li>
															<li><a href="womens.html">Women's wear</a></li>
															<li><a href="about.html">About</a></li>
															<li><a href="typography.html">Short Codes</a></li>
															<li><a href="contact.html">Contact</a></li>
														</ul>
													</div>

													<div class="col-md-5 sign-gd-two">
														<h4>Store <span>Information</span></h4>
														<div class="w3-address">
															<div class="w3-address-grid">
																<div class="w3-address-left">
																	<i class="fa fa-phone" aria-hidden="true"></i>
																</div>
																<div class="w3-address-right">
																	<h6>Phone Number</h6>
																	<p>+1 234 567 8901</p>
																</div>
																<div class="clearfix"> </div>
															</div>
															<div class="w3-address-grid">
																<div class="w3-address-left">
																	<i class="fa fa-envelope" aria-hidden="true"></i>
																</div>
																<div class="w3-address-right">
																	<h6>Email Address</h6>
																	<p>Email :<a href="mailto:example@email.com"> mail@example.com</a></p>
																</div>
																<div class="clearfix"> </div>
															</div>
															<div class="w3-address-grid">
																<div class="w3-address-left">
																	<i class="fa fa-map-marker" aria-hidden="true"></i>
																</div>
																<div class="w3-address-right">
																	<h6>Location</h6>
																	<p>Broome St, NY 10002,California, USA. 

																	</p>
																</div>
																<div class="clearfix"> </div>
															</div>
														</div>
													</div>
													<div class="col-md-3 sign-gd flickr-post">
														<h4>Flickr <span>Posts</span></h4>
														<ul>
															<li><a href="single.html"><img src="images/t1.jpg" alt=" " class="img-responsive" /></a></li>
															<li><a href="single.html"><img src="images/t2.jpg" alt=" " class="img-responsive" /></a></li>
															<li><a href="single.html"><img src="images/t3.jpg" alt=" " class="img-responsive" /></a></li>
															<li><a href="single.html"><img src="images/t4.jpg" alt=" " class="img-responsive" /></a></li>
															<li><a href="single.html"><img src="images/t1.jpg" alt=" " class="img-responsive" /></a></li>
															<li><a href="single.html"><img src="images/t2.jpg" alt=" " class="img-responsive" /></a></li>
															<li><a href="single.html"><img src="images/t3.jpg" alt=" " class="img-responsive" /></a></li>
															<li><a href="single.html"><img src="images/t2.jpg" alt=" " class="img-responsive" /></a></li>
															<li><a href="single.html"><img src="images/t4.jpg" alt=" " class="img-responsive" /></a></li>
														</ul>
													</div>
													<div class="clearfix"></div>
												</div>
											</div>
											<div class="clearfix"></div>
											<div class="agile_newsletter_footer">
												<div class="col-sm-6 newsleft">
													<h3>SIGN UP FOR NEWSLETTER !</h3>
												</div>
												<div class="col-sm-6 newsright">
													<form action="#" method="post">
														<input type="email" placeholder="Enter your email..." name="email" required="">
														<input type="submit" value="Submit">
													</form>
												</div>

												<div class="clearfix"></div>
											</div>
										</div>
									</div>
<!-- //footer -->