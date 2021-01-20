 
 <?php 
  $db = mysqli_connect('localhost','root','','order');
  $query = "SELECT COUNT(*) AS count FROM `cart2`";
  $query_result = mysqli_query($db, $query);

 while($row = mysqli_fetch_assoc($query_result)) {
  	$totalcart = $row['count'];
  }
?>
<?php 
$total=0;
$orderfee=50; ?>
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
			               	<a class="navbar-brand page-scroll" href="index.php">
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
			                		<div class="link-text">+6312345678</div>
			                	</a>
			                </li>
			                <li class="cart-icon"> 
			                	<a href="#"> 
			                		<span class="icon"></span>
			                		<div class="link-text"><?php echo "$totalcart"; ?> items  <span></span></div>
			                	</a>
				                <div class="cart-dropdown header-link-dropdown">
				                	<?php  
                  			 		$db = mysqli_connect('localhost','root','','order');
                  			 		$sql = "SELECT * FROM cart2" ;
                  			 		$result = mysqli_query($db, $sql);
                   			 		?>
                  			 		<?php while ($row = $result->fetch_assoc()):?>
				                    <ul class="cart-list link-dropdown-list">
				                      	<li> <a class="close-cart"><i class="fa fa-times-circle"></i></a>
				                        	<div class="media"> <a href="cart.php" class="pull-left"> <img src="<?php  echo$row['pro_image'] ?>"></a>
				                          	<div class="media-body"> <span><a href="cart.php"><?php  echo$row['pro_name'] ?></a></span>
					                            <p class="cart-price">₱<?php echo number_format($row['pro_price'] * $row['pro_quantity'],2); ?></p>
					                            <div class="product-qty">
					                              	<label>Qty:</label>
					                              	<div class="custom-qty">
					                                	<input type="text" name="qty" maxlength="8" value="<?php  echo$row['pro_quantity'] ?>" title="Qty" class="input-text qty" disabled>
					                              	</div>
					                            </div>
				                          	</div>
				                        </div>
				                      	</li>
				                    </ul>
				                     <?php $total = $total + ($row['pro_price'] * $row['pro_quantity']);?>
				                <?php endwhile; ?>
				                    <p class="cart-sub-totle"> 
				                    <span class="pull-left">Cart Subtotal</span> 
				                    <span class="pull-right"><strong class="price-box">₱<?php echo number_format($total, 2);?></strong></span> </p>
				                    <div class="clearfix"></div>
				                    <div class="mt-20 text-left"> 
				                    	<a href="cart.php" class="btn-color btn">Cart</a> 
				                    	<a href="checkout.php" class="btn-color btn right-side">Checkout</a> 
				                    </div>
				                </div>
			                </li>
			                <li class="order-online">
			                	<a href="menu.php" class="btn btn-green">Order online</a>
			                </li>
			                <li class="side-toggle">
			                  	
			                </li>
			            </ul>
			        </div>
			    </div>
			</div>
		</div>
	</header>




	<section class="banner">
		<div class="banner-carousel owl-carousel owl-loaded owl-drag">
			
			
			
		<div class="owl-stage-outer owl-height" style="height: 500px;"><div class="owl-stage" style="transform: translate3d(-3372px, 0px, 0px); transition: all 0.25s ease 0s; width: 5901px;"><div class="owl-item cloned" style="width: 843px;"><div class="banner-slide-2">
				<div class="container">
					<div class="banner-box">
						<div class="banner-text">
							<div class="banner-center">
								<h2 class="banner-headding">Quality F<span>oo</span>ds</h2>
								<p class="banner-sub-hed">Healthy Food for healthy body</p>
							</div>
						</div>
						<div class="banner-images">
							<div class="all-img-banner">
								<img src="images/pizza-banner-1.png" class="pizza-img">
								
							</div>
						</div>
					</div>
				</div>
			</div></div><div class="owl-item cloned" style="width: 843px;"><div class="banner-slide-3">
				<div class="container">
					<div class="banner-box">
						<div class="banner-images">
							<div class="all-img-banner">
								<img src="images/pizza-banner-2.png" class="pizza-img">
								
							</div>
						</div>
						<div class="banner-text">
							<div class="banner-center">
								<h2 class="banner-headding">Quality F<span>oo</span>ds</h2>
								<p class="banner-sub-hed">Healthy Food for healthy body</p>
							</div>
						</div>
					</div>
				</div>
			</div></div><div class="owl-item" style="width: 843px;"><div class="banner-slide">
				<div class="container">
					<div class="banner-box">
						<div class="banner-text">
							<div class="banner-center">
								<h2 class="banner-headding">Quality F<span>oo</span>ds</h2>
								<p class="banner-sub-hed">Healthy Food for healthy body</p>
							</div>
						</div>
						<div class="banner-images">
							<div class="all-img-banner">
								<img src="images/banner-bg-1.png" class="pizza-img">
								
							</div>
						</div>
					</div>
				</div>
			</div></div><div class="owl-item" style="width: 843px;"><div class="banner-slide-2">
				<div class="container">
					<div class="banner-box">
						<div class="banner-text">
							<div class="banner-center">
								<h2 class="banner-headding">Quality F<span>oo</span>ds</h2>
								<p class="banner-sub-hed">Healthy Food for healthy body</p>
							</div>
						</div>
						<div class="banner-images">
							<div class="all-img-banner">
								<img src="images/pizza-banner-1.png" class="pizza-img">
								
							</div>
						</div>
					</div>
				</div>
			</div></div><div class="owl-item active" style="width: 843px;"><div class="banner-slide-3">
				<div class="container">
					<div class="banner-box">
						<div class="banner-images">
							<div class="all-img-banner">
								<img src="images/pizza-banner-2.png" class="pizza-img">
								
							</div>
						</div>
						<div class="banner-text">
							<div class="banner-center">
								<h2 class="banner-headding">Quality F<span>oo</span>ds</h2>
								<p class="banner-sub-hed">Healthy Food for healthy body</p>
							</div>
						</div>
					</div>
				</div>
			</div></div><div class="owl-item cloned" style="width: 843px;"><div class="banner-slide">
				<div class="container">
					<div class="banner-box">
						<div class="banner-text">
							<div class="banner-center">
								<h2 class="banner-headding">Quality F<span>oo</span>ds</h2>
								<p class="banner-sub-hed">Healthy Food for healthy body</p>
							</div>
						</div>
						<div class="banner-images">
							<div class="all-img-banner">
								<img src="images/banner-bg-1.png" class="pizza-img">
								
							</div>
						</div>
					</div>
				</div>
			</div></div><div class="owl-item cloned" style="width: 843px;"><div class="banner-slide-2">
				<div class="container">
					<div class="banner-box">
						<div class="banner-text">
							<div class="banner-center">
								<h2 class="banner-headding">Quality F<span>oo</span>ds</h2>
								<p class="banner-sub-hed">Healthy Food for healthy body</p>
							</div>
						</div>
						<div class="banner-images">
							<div class="all-img-banner">
								<img src="images/pizza-banner-1.png" class="pizza-img">
							
							</div>
						</div>
					</div>
				</div>
			</div></div></div></div><div class="owl-nav">
				<button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button>
				<button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button>
			</div><div class="owl-dots"></div></div>
	</section>

	

	<section class="order-section ptb">
		<div class="container">
			<div class="row">
				<div class="order-top"><img src="assets/images/order-top.png" alt="layer"></div>
				<div class="col-xl-4 col-lg-4 col-md-4 servose-box text-center padding-lf">
					<img src="assets/images/order-1.svg" alt="order" class="order-img">
					<h2 class="order-title text-uppercase">order</h2>
					<p class="order-des">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eius-Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eius-Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eius-</p>
				</div>
				<div class="col-xl-4 col-lg-4 col-md-4 servose-box text-center padding-lf">
					<img src="assets/images/order-2.svg" alt="delivery" class="order-img">
					<h2 class="order-title text-uppercase">delivery</h2>
					<p class="order-des">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eius-Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eius-Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eius-</p>
				</div>
				<div class="col-xl-4 col-lg-4 col-md-4 servose-box text-center padding-lf">
					<img src="assets/images/order-3.svg" alt="delicious" class="order-img">
					<h2 class="order-title text-uppercase">enjoy</h2>
					<p class="order-des">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eius-Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eius-Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eius-</p>
				</div>
				<div class="order-bottom"><img src="assets/images/order-bottom.png" alt="layer"></div>
			</div>
		</div>
	</section>
<section class="about-4K Coffee Shop ptb">
		<div class="container">
			<div class="row">
				<div class="col-xl-6 col-lg-6 col-md-6">
					<div class="max-w-390">
						<div class="headding-part">
							<p class="headding-sub">Cozy Coffee Shop</p>
							<h2 class="headding-title text-uppercase font-weight-bold">about 4K Coffee Shop</h2>
						</div>
						<p class="online-des">Sit amet, consectetur adipiscing elit quisque eget maximus velit, non eleifend libero curabitur dapibus mauris sed leo cursus aliquetcras suscipit. Sit amet, consectetur adipiscing elit quisque eget maximus velit, non eleifend libero curabitur Sit amet, consectetur adipiscing elit quisque eget maximus velit, non eleifend libero curabitur dapibus mauris sed leo cursus aliquetcras suscipit. Sit amet, consectetur adipiscing elit quisque eget maximus velit, non eleifend libero curabitur </p>
						<a href="about.php" class="about-more-z com-btn">view more</a>
					</div>
				</div>
				<div class="col-xl-6 col-lg-6 col-md-6">
					<div class="about-4K Coffee Shop-img">
						<img src="assets/images/about-4K Coffee Shop.png" alt="about" class="4K Coffee Shop-ab">
					</div>
				</div>
			</div>
		</div>
	</section>
	

	

	<section class="customer ptb">
		<div class="container">
			<div class="menu-top-bg"><img src="assets/images/menu-top-bg.png" alt="meu-bg"></div>
			<div class="customer-inner">
				<div class="customer-top-bg"><img src="assets/images/customer-top-bg.png" alt="customer"></div>
				<div class="headding-part pb-50 text-center">
					<p  class="headding-sub">What Our Clients Say</p>
					<h2 class="headding-title text-uppercase font-weight-bold">Customer Reviews</h2>
				</div>
				<div class="customer-slide owl-carousel">
					<div class="customer-detail">
						<div class="customer-img">
							<div class="customer-img-in">
								<img src="assets/images/customer-1.png" alt="customer" class="customer-image">
								<p class="customer-name">Lisa Manoban</p>
							</div>
						</div>
						<div class="customer-reviews">
							<p class="review-cus">The one day when the lady met this fellow and they knew it was much more than a hunch the first mate and his Skipper too will do their comforta The one day when the lady met this fellow and they knew it was much more than a hunch the first mate and his Skipper too will do their comforta The one day when the lady met this fellow and they knew it was much </p>
							<label class="post-name">Lisa Manoban- <span>Dancer</span></label>
						</div>
					</div>
					<div class="customer-detail">
						<div class="customer-img">
							<div class="customer-img-in">
								<img src="assets/images/customer-1.png" alt="customer"  class="customer-image">
								<p class="customer-name">Jennie Kim</p>
							</div>
						</div>
						<div class="customer-reviews">
							<p class="review-cus">The one day when the lady met this fellow and they knew it was much more than a hunch the first mate and his Skipper too will do their comforta The one day when the lady met this fellow and they knew it was much more than a hunch the first mate and his Skipper too will do their comforta The one day when the lady met this fellow and they knew it was much </p>
							<label class="post-name">Jennie Kim- <span>Rapper</span></label>
						</div>
					</div>
					<div class="customer-detail">
						<div class="customer-img">
							<div class="customer-img-in">
								<img src="assets/images/customer-1.png" alt="customer" class="customer-image">
								<p class="customer-name">John doe</p>
							</div>
						</div>
						<div class="customer-reviews">
							<p class="review-cus">The one day when the lady met this fellow and they knew it was much more than a hunch the first mate and his Skipper too will do their comforta The one day when the lady met this fellow and they knew it was much more than a hunch the first mate and his Skipper too will do their comforta The one day when the lady met this fellow and they knew it was much </p>
							<label class="post-name">john doe - <span>Designer</span></label>
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
							
								<li><a href="about.php">About</a></li>
								<li><a href="contact.php">Contact Us</a></li>
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
	<script src="assets/js/modernizr.js"></script>
	<script src="assets/js/script.js"></script>

</body>

</html>