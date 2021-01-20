<?php 
$total=0;
$orderfee=50; ?>

<?php 
if (isset($_POST['placeorder'])) {
	$db = mysqli_connect('localhost','root','','order');
	$custfname = $_POST['cust_fname'];
	$custemail = $_POST['cust_email'];
	$custphoneno = $_POST['cus_phoneno'];
	$custadress = $_POST['cust_address'];
	$date = $_POST['date_place'];
	$totalfee = $_POST['total_fee'];
	$pro_name = $_POST['name_pro'];
	$pro_qty = $_POST['qunti_pro'];
	
	$sql = "INSERT INTO purchase2(cus_fname, cust_email, cust_phoneno, cust_address, order_date, total_fee, pro_nmae, pro_quantity) VALUES('$custfname','$custemail','$custphoneno','$custadress','$date','$totalfee','$pro_name','$pro_qty')";
	$result = mysqli_query($db, $sql);

	 if($result){
            echo '<script> alert("Order Added."); </script>';
        }else{
            echo '<script> alert("Order Added."); </script>';
       }

 }
 ?>

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
    <script async src="../../../../../www.googletagmanager.com/gtag/js64d7?id=UA-142494086-2"></script>
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
			                  	<button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button"><span></span></button>
			                </li>
			            </ul>
			        </div>
			    </div>
			</div>
		</div>
	</header>

	<section class="page-banner" style="background: #121619 url(assets/images/blog-1.jpg) no-repeat center / cover;">
		<div class="container">
			<div class="row">
				<div class="col-xl-12 col-lg-12 col-md-12">
					<div class="page-title">
						<h1 class="page-headding">CHECKOUT</h1>
						<ul>
							<li><a href="index.php" class="page-name">Home</a></li>
							<li><a href="cart.php" class="page-name">cart</a></li>
							<li>CHECKOUT</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="checkout-part ptb">
		<div class="container">
			<form class="main-form" action="checkout.php" method="post">
				<div class="row">
					<div class="col-12 col-lg-8">
						<div class="mb-md-30">
							<div class="mb-60">
								<div class="row">
									<div class="col-12">
										<div class="heading-part mb-30 mb-sm-20">
								            <h3>Billing Details</h3>
								        </div>
									</div>
								</div>
								<div class="row">
									<div class="col-12">
										<div class="form-group">
											<label for="full-name">Full Name*</label>
					                        <input id="full-name" name="cust_fname" type="text" required="" autocomplete="off">
					                    </div>
									</div>
									<div class="col-12">
										<div class="form-group">
											<label for="email">Email</label>
					                        <input id="email" name="cust_email" type="text" autocomplete="off">
					                    </div>
									</div>
									<div class="col-12">
										<div class="form-group">
											<label for="phone-no">Phone No*</label>
					                        <input id="phone-no" name="cus_phoneno" type="text" required="" autocomplete="off">
					                    </div>
									</div>
										<div class="col-md-6 col-12">
									</div>
									<div class="col-md-6 col-12">
									</div>
									
									<div class="col-12">
										<div class="form-group">
											<label for="address">Address Description (Home Number, Street, Blg. No., etc)*</label>
					                        <input id="address" name="cust_address" type="text" required="" autocomplete="off">
					                    </div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-12 col-lg-4">
						<div class="heading-part mb-30 mb-sm-20">
				            <h3>Your order</h3>
				        </div>
				        <?php  
                  			 $db = mysqli_connect('localhost','root','','order');
                  			 $sql = "SELECT * FROM cart2" ;
                  			 $result = mysqli_query($db, $sql);
                   			 ?>
                  			 <?php while ($row = $result->fetch_assoc()):?>
				        <div class="checkout-products sidebar-product mb-60">
				            <ul>
							    <li>
							        <div class="pro-media"> <a href="assets/shop-detail.php"><img src="<?php  echo$row['pro_image'] ?>"></a> </div>
							        <input type="hidden" name="name_pro" value="<?php  echo$row['pro_name'] ?>">
							        <div class="pro-detail-info"> <a href="assets/shop-detail.php" class="product-title"><?php  echo$row['pro_name'] ?></a>
								        <div class="price-box"> 
								            <span class="price">₱<?php echo number_format($row['pro_price'] * $row['pro_quantity'],2); ?></span>
								        </div>
								        <div class="checkout-qty">
								            <div>
						                        <label>Qty: </label>
						                        <input type="hidden" name="qunti_pro" value="<?php  echo$row['pro_quantity'] ?>">
						                        <span class="info-deta"><?php  echo$row['pro_quantity'] ?></span> 
						                         <?php $total = $total + ($row['pro_price'] * $row['pro_quantity']);?>
						                    </div>
								        </div>
							        </div>
							    </li>
						    </ul>
				        </div>
				    <?php endwhile; ?>
				        <div class="complete-order-detail commun-table gray-bg mb-30">
					        <div class="table-responsive">
					            <table class="table m-0">
					                <tbody>
					                    <tr>

					                        <td><b>Order Places:</b></td>
					                        <input type="hidden" name="date_place" value="<?php date_default_timezone_set('Asia/Manila');echo  date('F j, Y '); ?>">
					                        <td><?php date_default_timezone_set('Asia/Manila');echo  date('F j, Y '); ?></td>
					                    </tr>
					                    <tr>
					                    	<td><b>Order Fee:</b></td>
					                    	<td><div class="price-box"><span class="price">₱50.00</span></div></td>
					                    </tr>
					                    <tr>
					                        <td><b>Total:</b></td>
					                        <input type="hidden" name="total_fee" value="<?php echo number_format($total+$orderfee, 2);?>">
					                        <td><div class="price-box"> <span class="price">₱<?php echo number_format($total+$orderfee, 2);?></span></div>
					                        </td>
				
					                    </tr>
					                    <tr>
					                        <td><b>Payment:</b></td>
					                        <td>COD</td>
					                    </tr>
					                </tbody>
					            </table>
					        </div>
					    </div>
					    <button type="submit" name="placeorder" class="btn full btn-color">Place order</button>
					</div>
				</div>
			</form>
		</div>
	</section>

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

<!-- Mirrored from themes.templatescoder.com/4K Coffee Shop/html/demo/1-0/checkout.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 28 Nov 2020 09:07:28 GMT -->
</html>