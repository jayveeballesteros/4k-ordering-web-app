<?php 
$total=0;
$orderfee=50; ?>
<?php 
if (isset($_GET['get'])) {
	$db = mysqli_connect("localhost", "root", "", "order");
	$product_id= $_GET['get'];

	$query = "SELECT * FROM `product` WHERE product_id LIKE '%".$product_id."%'";
    $search_result = filterTable($query);
}

    function filterTable($query)
{
	$connect = mysqli_connect("localhost", "root", "", "order");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}
 	
 ?>

  <?php 
 if (isset($_POST['addcart'])) {
 	$db = mysqli_connect('localhost','root','','order');
 	$image = $_POST['image'];
 	$name = $_POST['name'];
 	$price = $_POST['price'];
 	$qty =$_POST['quantity'];
 	$sql ="INSERT INTO cart2(pro_image, pro_name, pro_price, pro_quantity) VALUES('$image','$name','$price','$qty')";
 	$result = mysqli_query($db, $sql);

 	 if($result){
           header("location:cart.php");
        }else{
            echo '<script> alert("Category Not Added."); </script>';
        }
  	# code...
  } ?>
   <?php 
  $db = mysqli_connect('localhost','root','','order');
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
			                		<div class="link-text">+91 123 456 789</div>
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
				                        	<div class="media"> <a href="assets/shop-detail.php" class="pull-left"> <img src="<?php  echo$row['pro_image'] ?>"></a>
				                          	<div class="media-body"> <span><a href="assets/shop-detail.php"><?php  echo$row['pro_name'] ?></a></span>
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
			<?php  
                   $db = mysqli_connect('localhost','root','','order');
                   $sql = "SELECT * FROM product" ;
                   $result = mysqli_query($db, $sql);
                    ?>
                     <?php while($row = mysqli_fetch_array($search_result)):?>
			<div class="row">
				<div class="col-xl-12 col-lg-12 col-md-12">
					<div class="page-title">
						<h1 class="page-headding"><?php  echo$row['product_name'] ?></h1>
						<ul>
							<li><a href="index.php" class="page-name">Home</a></li>
							<li><a href="menu.php" class="page-name">Order Online</a></li>
							<li><?php  echo$row['product_name'] ?></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="product-det pt-100">
		<div class="container">
			
                   
			<form action="shop-detail.php" method="post">
			<div class="row">
				<div class="col-lg-5 col-md-6 col-12">
					<div class="align-center mb-md-30">
					    <ul id="glasscase" class="gc-start">
					    	<input type="hidden" name="image" value="<?php  echo$row['product_image'] ?>">
					        <img style="height: 300px; width: 300px;" src="<?php  echo$row['product_image'] ?>" alt="4K Coffee Shop" />
					    </ul>
					</div>
				</div>
				<div class="col-xl-7 col-lg-7 col-md-7">
					<div class="shop-detail">
						<div class="shop-name">
							<input type="hidden" name="name" value="<?php  echo$row['product_name'] ?>">
							<h3 class="title-shop"><?php  echo$row['product_name'] ?></h3>
							<div class="price-shop">
								<input type="hidden" name="price" value="<?php echo$row['product_price'] ?>">
								<span class="filter-price">₱<?php echo$row['product_price'] ?></span>
							</div>
							<p class="shop-desc" name="desc"><?php echo$row['product_desc'] ?> </p>
						</div>
						<div class="quantity-product">
							<input type="text" name="quantity" value="1" autocomplete="off">
							<button type="submit" name="addcart" class="btn btn-success">Add to Cart </button>
						</div>
					</div>
				</div>
			</div>
			</form>
		<?php endwhile; ?>
		</div>
	</section>

	<section class="desc-tabbing pt-100">
		<div class="container">
			<div class="row">
				<div class="col-xl-12 col-lg-12 col-md-12">
					<div class="border-tab">
						<ul class="panel-tab">
							<li class="tab-link current" data-tab="tab-1"><a href="javascript:void(0)">Description</a></li>
							<li class="tab-link" data-tab="tab-3"><a href="javascript:void(0)">Reviews</a></li>
						</ul>
						<div class="product-desc-tab current" id="tab-1">
							<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. </p>
							<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
						</div>
						<div class="product-desc-tab" id="tab-3">
							<div class="comment-part">
								<h3>03 COMMENTS</h3>
								<ul>
									<li>
										<div class="comment-user">
											<img src="assets/images/comment-img1.jpg" alt="comment-img">
										</div>
										<div class="comment-detail">
											<span class="commenter">
												<span>John Doe</span> (05 Jan 2020)
											</span>
											<p>Lorem ipsum dolor sit amet adipiscing elit labore dolore that sed do eiusmod tempor labore dolore that magna aliqua. Ut enim ad minim veniam, exercitation.</p>
											<a href="#" class="reply-btn btn btn-color small">Reply</a>
										</div>
										<div class="clearfix"></div>
									</li>
									<li>
										<ul>
											<li>
												<div class="comment-user">
													<img src="assets/images/comment-img2.jpg" alt="comment-img">
												</div>
												<div class="comment-detail">
													<span class="commenter">
														<span>John Doe</span> (12 Jan 2020)
													</span>
													<p>Lorem ipsum dolor sit amet adipiscing elit labore dolore that sed do eiusmod tempor labore dolore that magna aliqua. Ut enim ad minim veniam, exercitation.</p>
													<a href="#" class="reply-btn btn btn-color small">Reply</a>
												</div>
												<div class="clearfix"></div>
											</li>
											<li>
												<div class="comment-user">
													<img src="assets/images/comment-img3.jpg" alt="comment-img">
												</div>
												<div class="comment-detail">
													<span class="commenter">
														<span>John Doe</span> (15 Jan 2020)
													</span>
													<p>Lorem ipsum dolor sit amet adipiscing elit labore dolore that sed do eiusmod tempor labore dolore that magna aliqua. Ut enim ad minim veniam, exercitation.</p>
													<a href="#" class="reply-btn btn btn-color small">Reply</a>
												</div>
												<div class="clearfix"></div>
											</li>
										</ul>
									</li>
								</ul>
							</div>
							<div class="leave-comment-part pt-100">
								<h3 class="reviews-head mb-30">Leave A Comment</h3>
								<form class="main-form">
									<div class="row">
										<div class="col-md-4">
											<div class="form-group">
												<input type="text" class="form-control" placeholder="Name" required="">
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<input type="text" class="form-control" placeholder="Subject" required="">
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<input type="text" class="form-control" placeholder="Email" required="">
											</div>
										</div>
										<div class="col-12">
											<div class="form-group">
												<textarea class="form-control" placeholder="Message" rows="8"></textarea>
											</div>
										</div>
										<div class="col-12">
											<button type="submit" class="btn post-comm">Post Comment</button>
										</div>
									</div>
								</form>
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
	<script>

	        //If your <ul> has the id "glasscase"
	        ₱('#glasscase').glassCase({ 
	           	'thumbsPosition': 'bottom', 
	            'widthDisplayPerc' : 100,
	            isDownloadEnabled: false,
	        });
	</script>
	<script src="assets/js/script.js"></script>

</body>

<!-- Mirrored from themes.templatescoder.com/4K Coffee Shop/html/demo/1-0/shop-detail.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 28 Nov 2020 08:46:40 GMT -->
</html>