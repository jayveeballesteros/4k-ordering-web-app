 
<?php 
  $db = mysqli_connect('localhost','root','','ordering');
  $query = "SELECT COUNT(*) AS count FROM `cart2`";
  $query_result = mysqli_query($db, $query);

 while($row = mysqli_fetch_assoc($query_result)) {
  	$totalcart = $row['count'];
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>4K Coffee Shop</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="utf-8" />
	<link type="image/x-icon" href="assets/images/fav-icon.png" rel="icon">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/animate.css">
	<link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
<!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-142494086-2"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'UA-142494086-2');
    </script>
</head>
<body>

	<header id="header">
		<div class="container">
			<div class="row m-0">
				<div class="col-xl-3 col-lg-2 col-md-4 col-3 p-0">
		            <div class="navbar-header">
			               	<a class="navbar-brand page-scroll" href="index.html">
			                	<img alt="4K Coffee Shop" src="assets/images/header-logo.png">
			                </a> 
		            </div>
			    </div>
			    <div class="col-xl-9 col-lg-10 col-md-8 col-9 p-0 text-right">
			        <div id="menu" class="navbar-collapse collapse" >
			      <ul class="nav navbar-nav">
				            <li class="level">
				                <a href="index.php" class="page-scroll">Home</a>
				            </li>
				            <li class="level dropdown set"> 
				                <a href="menu.php" class="page-scroll">Menu</a>   
				            </li>
				            
				            <li class="level dropdown set"> 
				                <a href="contact.php" class="page-scroll">Contact</a>
				            </li>
				            <li class="level set">
				                <a href="about.php" class="page-scroll">About Us</a>
				            </li>
			            </ul>
			        </div>
			        <div class=" header-right-link">
			            <ul>
			                <li class="call-icon">
			                	<a href="#">
			                		<span class="icon"></span>
			                		<div class="link-text">+91 123 456 789</div>
			                	</a>
			                </li>
			                <li class="cart-icon"> 
			                	<a href="#"> 
			                		<span class="icon"></span>
			                		<div class="link-text">0 items - <span>₱0.00</span></div>
			                	</a>
				                <div class="cart-dropdown header-link-dropdown">
				                    <ul class="cart-list link-dropdown-list">
				                      	<li> <a class="close-cart"><i class="fa fa-times-circle"></i></a>
				                        	<div class="media"> <a href="shop-detail.html" class="pull-left"> <img alt="4K Coffee Shop" src="assets/images/1.png"></a>
				                          	<div class="media-body"> <span><a href="shop-detail.html">margherita pizza</a></span>
					                            <p class="cart-price">₱14.99</p>
					                            <div class="product-qty">
					                              	<label>Qty:</label>
					                              	<div class="custom-qty">
					                                	<input type="text" name="qty" maxlength="8" value="1" title="Qty" class="input-text qty" disabled>
					                              	</div>
					                            </div>
				                          	</div>
				                        </div>
				                      	</li>
				                      	<li> <a class="close-cart"><i class="fa fa-times-circle"></i></a>
				                        	<div class="media"> <a class="pull-left"> <img alt="4K Coffee Shop" src="assets/images/2.png"></a>
					                          	<div class="media-body"> <span><a href="#">GREEK PIZZA</a></span>
					                            	<p class="cart-price">₱14.99</p>
					                            	<div class="product-qty">
						                              	<label>Qty:</label>
						                              	<div class="custom-qty">
						                                	<input type="text" name="qty" maxlength="8" value="1" title="Qty" class="input-text qty" disabled>
						                              	</div>
					                            	</div>
					                          	</div>
				                        	</div>
				                      	</li>
				                    </ul>
				                    <p class="cart-sub-totle"> 
				                    <span class="pull-left">Cart Subtotal</span> 
				                    <span class="pull-right"><strong class="price-box">₱29.98</strong></span> </p>
				                    <div class="clearfix"></div>
				                    <div class="mt-20 text-left"> 
				                    	<a href="cart.html" class="btn-color btn">Cart</a> 
				                    	<a href="checkout.html" class="btn-color btn right-side">Checkout</a> 
				                    </div>
				                </div>
			                </li>
			                <li class="order-online">
			                	<a href="menu.html" class="btn btn-green">Order online</a>
			                </li>
			                <li class="side-toggle">
			                  	<button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button"><span></span></button>
			                </li>
			            </ul>
			        </div>
			    </div>
			</div>
		</div>
	</header>

	<section class="page-banner" style="background: #121619 url(assets/images/blog-9.jpg) no-repeat center / cover;">
		<div class="container">
			<div class="row">
				<div class="col-xl-12 col-lg-12 col-md-12">
					<div class="page-title">
						<h1 class="page-headding">order online</h1>
						<ul>
							<li><a href="index.html" class="page-name">Home</a></li>
							<li>Order Online</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="pizza-crust pt-100 pb-50">
		<div class="container">
			<div class="crust-banner" style="background: url(assets/images/crust.jpg) no-repeat center / cover;">
				<h2 class="crust-title">Pizza Crust & <span>Tortillas</span></h2>
				<p class="crust-sub">His creation set off a heated debate over whether pineapple belongs on pizza</p>
			</div>
		</div>
	</section>

	<section class="online-booking filter-part">
		<div class="container">
			<div class="row">
				<div class="col-xl-12 col-lg-12 col-md-12">
					<ul class="filter-line">
						<li><img src="assets/images/filter.png" alt="filter"> Filter</li>
						<li>
							<select name="sources" class="custom-select sources form-control" data-placeholder="Crust">
								<option value="profile">Crust-1</option>
								<option value="word">Crust-2</option>
								<option value="hashtag">Crust-3</option>
							</select>
						</li>
						<li>
							<select name="sources" class="custom-select sources form-control" data-placeholder="Price">
								<option value="profile">₱ 20</option>
								<option value="word">₱15</option>
								<option value="hashtag">₱22</option>
							</select>
						</li>
						<li>
							<select name="sources" class="custom-select sources form-control" data-placeholder="Size">
								<option value="profile">Medium</option>
								<option value="word">Regular</option>
								<option value="hashtag">large</option>
							</select>
						</li>
						<li>
							<select name="sources" class="custom-select sources form-control" data-placeholder="Cheeze">
								<option value="profile">Veg</option>
								<option value="word">Cheeze</option>
								<option value="hashtag">Non-veg</option>
							</select>
						</li>
						<li>
							<select name="sources" class="custom-select sources form-control" data-placeholder="Type">
								<option value="profile">Neapolitan</option>
								<option value="word">Chicago</option>
								<option value="hashtag">Greek</option>
							</select>
						</li>
						<li>
							<select name="sources" class="custom-select sources form-control" data-placeholder="Flavour">
								<option value="profile">Crust-1</option>
								<option value="word">Crust-2</option>
								<option value="hashtag">Crust-3</option>
							</select>
						</li>
						<li>Showing 1–12 of 28 Results</li>
					</ul>
				</div>
			</div>
			<div class="row">
				<div class="col-xl-6 col-lg-6 col-md-6">
					<div class="filter-box filter-grid">
						<div class="row">
							<div class="col-xl-4 col-lg-4 col-md-4">
								<div class="img-filter"><a href="shop-detail.html"><img src="assets/images/filter-1.png" alt="img" /></a></div>
							</div>
							<div class="col-xl-8 col-lg-8 col-md-8">
								<a href="shop-detail.html" class="filter-name">margheritapizza</a>
								<p class="filter-sub">Lorem Ipsum is simply dummy text of the There are many variations of passages of Lorem Ipsum available, but the majority e of Lorem Ipsum, you need.</p>
								<span class="filter-price">₱ 20.50</span>
								<span class="filter-price filter-price-r">₱ 30.50</span>
								<div class="filter-order">
									<a href="shop-detail.html" class="order-filter">order now</a>
									<ul>
										<li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-6 col-lg-6 col-md-6">
					<div class="filter-box filter-grid">
						<div class="row">
							<div class="col-xl-4 col-lg-4 col-md-4">
								<div class="img-filter"><a href="shop-detail.html"><img src="assets/images/filter-7.png" alt="img"></a></div>
							</div>
							<div class="col-xl-8 col-lg-8 col-md-8">
								<a href="shop-detail.html" class="filter-name">Bismarck</a>
								<p class="filter-sub">Lorem Ipsum is simply dummy text of the There are many variations of passages of Lorem Ipsum available, but the majority e of Lorem Ipsum, you need.</p>
								<span class="filter-price">₱ 20.50</span>
								<span class="filter-price filter-price-r">₱ 30.50</span>
								<div class="filter-order">
									<a href="shop-detail.html" class="order-filter">order now</a>
									<ul>
										<li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-6 col-lg-6 col-md-6">
					<div class="filter-box filter-grid">
						<div class="row">
							<div class="col-xl-4 col-lg-4 col-md-4">
								<div class="img-filter"><a href="shop-detail.html"><img src="assets/images/filter-3.png" alt="img"></a></div>
							</div>
							<div class="col-xl-8 col-lg-8 col-md-8">
								<a href="shop-detail.html" class="filter-name">Fiori di zucca</a>
								<p class="filter-sub">Lorem Ipsum is simply dummy text of the There are many variations of passages of Lorem Ipsum available, but the majority e of Lorem Ipsum, you need.</p>
								<span class="filter-price">₱ 20.50</span>
								<span class="filter-price filter-price-r">₱ 30.50</span>
								<div class="filter-order">
									<a href="shop-detail.html" class="order-filter">order now</a>
									<ul>
										<li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-6 col-lg-6 col-md-6">
					<div class="filter-box filter-grid">
						<div class="row">
							<div class="col-xl-4 col-lg-4 col-md-4">
								<div class="img-filter"><a href="shop-detail.html"><img src="assets/images/filter-4.png" alt="img"></a></div>
							</div>
							<div class="col-xl-8 col-lg-8 col-md-8">
								<a href="shop-detail.html" class="filter-name">Valdostana</a>
								<p class="filter-sub">Lorem Ipsum is simply dummy text of the There are many variations of passages of Lorem Ipsum available, but the majority e of Lorem Ipsum, you need.</p>
								<span class="filter-price">₱ 20.50</span>
								<span class="filter-price filter-price-r">₱ 30.50</span>
								<div class="filter-order">
									<a href="shop-detail.html" class="order-filter">order now</a>
									<ul>
										<li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-6 col-lg-6 col-md-6">
					<div class="filter-box filter-grid">
						<div class="row">
							<div class="col-xl-4 col-lg-4 col-md-4">
								<div class="img-filter"><a href="shop-detail.html"><img src="assets/images/filter-5.png" alt="img"></a></div>
							</div>
							<div class="col-xl-8 col-lg-8 col-md-8">
								<a href="shop-detail.html" class="filter-name">Pizza tartufata</a>
								<p class="filter-sub">Lorem Ipsum is simply dummy text of the There are many variations of passages of Lorem Ipsum available, but the majority e of Lorem Ipsum, you need.</p>
								<span class="filter-price">₱ 20.50</span>
								<span class="filter-price filter-price-r">₱ 30.50</span>
								<div class="filter-order">
									<a href="shop-detail.html" class="order-filter">order now</a>
									<ul>
										<li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-6 col-lg-6 col-md-6">
					<div class="filter-box filter-grid">
						<div class="row">
							<div class="col-xl-4 col-lg-4 col-md-4">
								<div class="img-filter"><a href="shop-detail.html"><img src="assets/images/filter-6.png" alt="img"></a></div>
							</div>
							<div class="col-xl-8 col-lg-8 col-md-8">
								<a href="shop-detail.html" class="filter-name">Francescana</a>
								<p class="filter-sub">Lorem Ipsum is simply dummy text of the There are many variations of passages of Lorem Ipsum available, but the majority e of Lorem Ipsum, you need.</p>
								<span class="filter-price">₱ 20.50</span>
								<span class="filter-price filter-price-r">₱ 30.50</span>
								<div class="filter-order">
									<a href="shop-detail.html" class="order-filter">order now</a>
									<ul>
										<li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-6 col-lg-6 col-md-6">
					<div class="filter-box filter-grid border-0 border-r-b">
						<div class="row">
							<div class="col-xl-4 col-lg-4 col-md-4">
								<div class="img-filter"><a href="shop-detail.html"><img src="assets/images/filter-7.png" alt="img"></a></div>
							</div>
							<div class="col-xl-8 col-lg-8 col-md-8">
								<a href="shop-detail.html" class="filter-name">Boscaiola</a>
								<p class="filter-sub">Lorem Ipsum is simply dummy text of the There are many variations of passages of Lorem Ipsum available, but the majority e of Lorem Ipsum, you need.</p>
								<span class="filter-price">₱ 20.50</span>
								<span class="filter-price filter-price-r">₱ 30.50</span>
								<div class="filter-order">
									<a href="shop-detail.html" class="order-filter">order now</a>
									<ul>
										<li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-6 col-lg-6 col-md-6">
					<div class="filter-box filter-grid border-0">
						<div class="row">
							<div class="col-xl-4 col-lg-4 col-md-4">
								<div class="img-filter"><a href="shop-detail.html"><img src="assets/images/filter-1.png" alt="img"></a></div>
							</div>
							<div class="col-xl-8 col-lg-8 col-md-8">
								<a href="shop-detail.html" class="filter-name">margheritapizza</a>
								<p class="filter-sub">Lorem Ipsum is simply dummy text of the There are many variations of passages of Lorem Ipsum available, but the majority e of Lorem Ipsum, you need.</p>
								<span class="filter-price">₱ 20.50</span>
								<span class="filter-price filter-price-r">₱ 30.50</span>
								<div class="filter-order">
									<a href="shop-detail.html" class="order-filter">order now</a>
									<ul>
										<li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<div class="top-scrolling">
		<a href="#header" class="scrollTo"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
	</div>

	<footer>
		<div class="container">
			<div class="footer">
				<div class="row">
					<div class="col-xl-4 col-lg-4 col-md-4 footer-box">
						<div class="footer-logo">
							<img src="assets/images/footer-logo.png" alt="fooret-logo">
							<p class="footer-des">LA HUERTA MARULAS, Valenzuela City 1440 Valenzuela, Philippines</p>
							<ul>
								<li>phone  - <a href="assets/+911234567890">+91 123 456 789 0 , +91 123 456 789 0</a></li>
								<li>email  - <a href=""><span class="__cf_email__" data-cfemail="8bf8fefbfbe4f9ffcbfbe2f1f1e4e5a5e8e4e6">4kcoffeeshop@gmail.com</span></a></li>
							</ul>
						</div>
					</div>

					<div class="col-xl-4 col-lg-4 col-md-4 footer-box">
						<div class="opening-hours">
							<h2>Opening Hours</h2>
							<ul>
								<li>Mon - Tues :  <span>6.00 am - 10.00 pm</span></li>
								<li>Wednes - Thurs : <span>6.00 am - 10.00 pm</span></li>
								<li>Launch :  <span>Everyday</span></li>
								<li>Sunday :  <span class="footer-close">Closed</span></li>
							</ul>
						</div>
					</div>

					<div class="col-xl-4 col-lg-4 col-md-4 footer-box">
						<div class="useful-links">
							<h2>useful links</h2>
							<ul>
							
								<li><a href="about.html">About</a></li>
								<li><a href="contact.html">Contact Us</a></li>
								<li><a href="#">Feedback</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="copyright">
				<div class="row">
					<div class="col-xl-6 col-lg-6 col-md-6 copyright-box">
						<p class="copy-text">© 4K all Rights Reserved.</p>
					</div>

					<div class="col-xl-6 col-lg-6 col-md-6 copyright-box">
						<ul>
							<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</footer>

	<script data-cfasync="false" src="../../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/owl.carousel.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/script.js"></script>

</body>

<!-- Mirrored from themes.templatescoder.com/4K Coffee Shop/html/demo/1-0/shop-grid.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 28 Nov 2020 08:46:17 GMT -->
</html>