
<?php

$db = mysqli_connect('localhost','root','','order');

if(ISSET($_POST['deleteData']))
    {
        $id = $_POST['deleteId']; 

        $sql = "DELETE FROM cart2 WHERE cart_ID='$id'";
        $result = mysqli_query($db, $sql);

        if($result){
            echo '<script> alert("Product Deleted."); </script>';
        }else{
            echo '<script> alert("Product Not Deleted."); </script>';
        }
    }

 ?>

 <?php 
    // Update data into the database
    if(ISSET($_POST['cart_update']))
    {   
    	$db = mysqli_connect('localhost','root','','order');
        $cart_id = $_POST['cart_id'];
        $qty = $_POST['quantity'];

        $sql = "UPDATE cart2 SET pro_quantity='$qty'
                                      WHERE cart_ID='$cart_id'";

        $result = mysqli_query($db, $sql);

        if($result)
        {
            echo '<script> alert("Cart Updated Successfully."); </script>';
        }
        else
        {
            echo '<script> alert("Cart Not Updated"); </script>';
        }
    }
?>
<?php 
$total=0;
$orderfee=50; ?>

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
			               	<a class="navbar-brand page-scroll" href="assets/index.php">
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

	<section class="page-banner" style="background: #121619 url(assets/images/blog-1.jpg) no-repeat center / cover;">
		<div class="container">
			<div class="row">
				<div class="col-xl-12 col-lg-12 col-md-12">
					<div class="page-title">
						<h1 class="page-headding">SHOPPING CART</h1>
						<ul>
							<li><a href="assets/index.php" class="page-name">Home</a></li>
							<li>SHOPPING CART</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="shopping-cart ptb">
		<div class="container">
			<div class="cart-item-table commun-table">
				<div class="table-responsive">
				    <table class="table border mb-0">
				        <thead>
				            <tr>
				                <th class="align-left">Product</th>
				                <th class="align-left">Product Name</th>
				                <th>Price</th>
				                <th>Quantity</th>
				                <th>Sub Total</th>
				                <th>Action</th>
				            </tr>
				        </thead>
				        
				        <tbody>
				        	<form action="cart.php" method="post">
				        	<?php  
                  			 $db = mysqli_connect('localhost','root','','order');
                  			 $sql = "SELECT * FROM cart2" ;
                  			 $result = mysqli_query($db, $sql);
                   			 ?>
                  			 <?php while ($row = $result->fetch_assoc()):?>
				            <tr>
				            	<input type="hidden" name="cart_id" value="<?php echo$row['cart_ID']; ?>">
				            	<td hidden="true"><?php echo$row['cart_ID']; ?></td>
				                <td class="align-left">
				                    <a href="assets/shop-detail.php">
					                    <div class="product-image">
					                        <img alt="Eshoper" src="<?php  echo$row['pro_image'] ?>">
					                    </div>
				                     </a>
				                </td>
				                <td class="align-left">
				                    <div class="product-title"> 
				                        <a href="assets/shop-detail.php"><?php  echo$row['pro_name'] ?></a> 
				                    </div>
				                </td>
				                <td>
				                    <ul>
				                        <li>
				                          	<div class="base-price price-box"> 
				                            	<span class="price">₱<?php  echo$row['pro_price'] ?></span> 
				                          	</div>
				                        </li>
				                    </ul>
				                </td>
				                <td>
				                    <div class="input-box">
				                       	<input style="width: 40px; text-align: center;" type="text" value="<?php echo $row['pro_quantity']; ?>" name="quantity"  >
				                    </div>
				                </td>
				                <td>
				                    <div class="total-price price-box"> 
				                        <span class="price">₱ <?php echo number_format($row['pro_price'] * $row['pro_quantity'],2); ?></span> 
				                    </div>
				                </td>
				                <td>
				              		<button type="submit" class="btn btn-outline-info" name="cart_update">Update</button>
				                    <button type="button" class="btn btn-outline-danger deleteBtn" >Delete</button>
				                </td>
				            </tr>
				        <?php endwhile; ?>
				        </form>
				        </tbody>
				    </table>
				</div>
			</div>
			<div class="mb-30">
				<div class="row">
					<div class="col-md-6">
						<div class="mt-30 text-center-r"> 
						    <a href="menu.php" class="btn btn-color">
						        <i class="fa fa-angle-left"></i><span>Continue Shopping</span>
						    </a> 
						</div>
					</div>
					<div class="col-md-6">
						<div class="mt-30 right-side float-none-sm text-center-r"> 
						    <a href="checkout.php" class="btn btn-color">Proceed to checkout
					            <span><i class="fa fa-angle-right"></i></span>
					        </a> 
						</div>
					</div>
				</div>
			</div>
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


  <div class="modal hide fade in" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">

        <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Delete Product</h4>
                    <p class="card-description"> Are you sure you want to delete ____? </p>
                    <form class="forms-sample" action="cart.php" method="POST">
                    	<input type="hidden" name="deleteId" id="deleteId">
                   	  <button type="submit" class="btn btn-danger m-2" name="deleteData">Delete</button>
                      <button class="btn btn-dark" data-dismiss="modal">Cancel</button> 
                  
                    </form>
                  </div>
                </div>

      </div>
    </div>
  </div>

	<script data-cfasync="false" src="../../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/owl.carousel.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/script.js"></script>



 <script>
    $(document).ready(function () {
      $('.deleteBtn').on('click', function(){

        $('#deleteModal').modal('show');
        
        // Get the table row data.
        $tr = $(this).closest('tr');

        var data = $tr.children("td").map(function() {
            return $(this).text();
        }).get();

        console.log(data);

        $('#deleteId').val(data[0]);

        });
    
    });
  </script>

</body>

<!-- Mirrored from themes.templatescoder.com/4K Coffee Shop/html/demo/1-0/cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 28 Nov 2020 09:07:30 GMT -->
</html>