<?php session_start();?>
<?php

if(isset($_POST['search']))
{
    $productToSearch = $_POST['productToSearch'];

    $query = "SELECT * FROM `product` WHERE product_category LIKE '%".$productToSearch."%'";
    $search_result = filterTable($query);
}
 else {
    $query = "SELECT * FROM product ORDER BY product_id ASC ";
    $search_result = filterTable($query);
}

// function to connect and execute the query
function filterTable($query)
{
	$connect = mysqli_connect("localhost", "root", "", "order");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}

?>

<?php 
if (isset($_GET['get'])) {
	$db = mysqli_connect("localhost", "root", "", "order");
	$product_id= $_GET['get'];

	$sql="SELECT * FROM product WHERE product_id='$product_id'";
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
<bodyS>
<?php require_once 'menu.php'; ?>

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
				                        	<div class="media"> <a href="shop-detail.php" class="pull-left"> <img src="<?php  echo$row['pro_image'] ?>"></a>
				                          	<div class="media-body"> <span><a href="shop-detail.php"><?php  echo$row['pro_name'] ?></a></span>
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



	<section class="page-banner" style="background: #121619 url(assets/images/menu-banner-1.png) no-repeat center / cover;">
		<div class="container">
			<div class="row">
				<div class="col-xl-12 col-lg-12 col-md-12">
					<div class="page-title">
						<h1 class="page-headding">4K Menu</h1>
						
					</div>
				</div>
			</div>
		</div>
	</section>



	<section class="menu-list pt-100">
		<div class="container">
			<form action="menu.php" method="post">
			<div class="row">
				<div class="col-xl-12 col-lg-12 col-md-12">
					<div class="menu-tabbing">
						<h2 style="margin-right: 60px;">Category</h2>
						<ul id="tabs" class="nav nav-tabs" role="tablist">
							<li role="presentation" class="tab-link current" data-tab="tab-1">
								<a href="menu.php"><input type="button" value="Show All Products" class="btn btn-outline-dark"></a>
						<select class="form-control" name="productToSearch">
                         <?php  
                        $db = mysqli_connect('localhost','root','','order');
                        $sql = "SELECT * FROM category";
                        $result = mysqli_query($db, $sql);
                        ?>
                        <?php while ($row = $result->fetch_assoc()):?>
                          <option value="<?php echo$row['cat_name']?>"><?php echo$row['cat_name']?></option>
                        <?php endwhile; ?>
                      </select></li>
						</ul>
					 <input style="float:right; " type="submit" name="search" class="btn btn-outline-dark" value="sort">
					</div>
				</div>
			</div>
			<div style="display:grid; grid-template-columns:33% 33% 34%;" class="tab-content" >
				<?php  
                   $db = mysqli_connect('localhost','root','','order');
                   $sql = "SELECT * FROM product" ;
                   $result = mysqli_query($db, $sql);
                    ?>
                    <?php while($row = mysqli_fetch_array($search_result)):?>
				<div role="tabpanel" class="row tab-pane fade in active show" id="tab-1">
					<div class="col-xl-12 col-md-6">
						<div class="menu-list-box-2">
							<div class="list-img-2">
								<a href="shop-detail.php?get=<?php echo $row['product_id']; ?>"><img src="<?php echo$row['product_image'] ?>"></a>
							</div>
							<div class="menu-detail-2">
								<div class="iteam-name-list">
									<a href="shop-detail.php?get=<?php echo $row['product_id']; ?>" class="iteam-name"><?php echo$row['product_name']?></a>
									<span class="iteam-srice">₱<?php echo$row['product_price']?></span>
								</div>
								<p class="iteam-desc"><?php echo$row['product_desc'];?></p>
							</div>
						</div>
					</div>
				</div>
			<?php endwhile ?>
			</div>
			</form>
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
	<script src="assets/js/script.js"></script>

</body>

<!-- Mirrored from themes.templatescoder.com/4K Coffee Shop/html/demo/1-0/menu.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 28 Nov 2020 08:46:37 GMT -->
</html>