<?php include 'includes/db_connection.php';
$conn = OpenCon();
echo "Connected Successfully"; session_start();
if(isset($_SESSION['loginuser'])){
    echo "s";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>About</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/themify/themify-icons.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/elegant-font/html-css/style.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/slick/slick.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/lightbox2/css/lightbox.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>

<!-- simplecart script start for normal header -->
<script src="js/simpleCart.js">
   
</script>

<script>
	simpleCart({
		cartColumns: [
		{ view: function(item, column){
		return  "<li class='header-cart-item'><div class='header-cart-item-img'><img src='"+item.get('thumb')+"' alt='IMG'></div><div class='header-cart-item-txt'><a href='#' class='header-cart-item-name'>" +item.get('name')+"</a><span class='header-cart-item-info'>"+item.get('quantity')+" x RM"+item.get('price')+"</span></div></li>";
	}, attr: 'custom' },
	
		]
	});
		
	</script>
	
	<script>
		simpleCart.currency({
		  code: "MYR",
		  name: "Malaysia ringgit",
		  symbol: "RM",
		  delimiter: ",",
		  decimal: ".",
		  after: false,
		  accuracy: 2
		});
	</script>
	<script>
		simpleCart({
		checkout: { 
			type: "PayPal" , 
			email: "ezami321-facilitator@gmail.com" ,
			// use paypal sandbox, default is false
			sandbox: true , 
			// http method for form, "POST" or "GET", default is "POST"
			method: "GET" , 
			// url to return to on successful checkout, default is null
			success: "success.php" , 
			// url to return to on cancelled checkout, default is null
			cancel: "cancel.php" 
		} 
	});
	</script>
	  <!-- simplecart script end  -->

<body class="animsition">

	<!-- header fixed -->
	<div class="wrap_header fixed-header2 trans-0-4">
		<!-- Logo -->
		<a href="index.php" class="logo2">
			<img src="images/icons/logo2.png" alt="IMG-LOGO">
		</a>
	</div>



	<!-- Header -->
	<header class="header2">
		<!-- Header desktop -->
		<div class="container-menu-header-v2 p-t-26">
			<div class="topbar2">
				<div class="topbar-social">
					<a href="#" class="topbar-social-item fa fa-facebook"></a>
					<a href="#" class="topbar-social-item fa fa-instagram"></a>
					<a href="#" class="topbar-social-item fa fa-pinterest-p"></a>
					<a href="#" class="topbar-social-item fa fa-snapchat-ghost"></a>
					<a href="#" class="topbar-social-item fa fa-youtube-play"></a>
				</div>

				<!-- Logo2 -->
				<a href="index.php" class="logo2">
					<img src="images/icons/logo2.png" alt="IMG-LOGO">
				</a>
				<div class="topbar-child2">
					<span class="topbar-email">
						<?php if(isset($_SESSION["loginuser"])){echo $_SESSION["loginuser"];}?>
					</span>

					

					<!--  -->
					<ul class="main_menu">
						<li>
					
						<img src="images/icons/icon-header-01.png" class="header-icon1" alt="ICON">
						<ul class="sub_menu">
									<?php if(isset($_SESSION["loginuser"])){
echo "<li><a href='logout.php'>Logout</a></li>";}
else {echo'<li><a href="login.php">Login</a></li>
									<li><a href="signup.php">Sign up</a></li>';}?>
									
								</ul>
						</li></ul>

					<span class="linedivide1"></span>

					<div class="header-wrapicon2 m-r-13">
						<img src="images/icons/icon-header-02.png" class="header-icon1 js-show-header-dropdown" alt="ICON">
						<span class="header-icons-noti">0</span>

						<!-- Header cart noti -->
						<div class="header-cart header-dropdown ">
							

							<div class="header-cart-total ">
									<ul class='header-cart-wrapitem simpleCart_items'>
									</ul>
							</div>
							<div class="header-cart-total ">
									SubTotal <p class="simpleCart_total"></p>
								</div>
							<div class="header-cart-buttons">
								<div class="header-cart-wrapbtn">
									<!-- Button -->
									<a href="cart.php" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
										View Cart
									</a>
								</div>

								<div class="header-cart-wrapbtn">
									<!-- Button -->
									<a href="#" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4 simpleCart_checkout">
										Check Out
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		</div>	
			
			
			

			<div class="wrap_header">

				<!-- Menu -->
				<div class="wrap_menu">
					<nav class="menu">
						<ul class="main_menu">
							<li>
								<a href="index.php">Home</a>
								
							</li>

							<li class ="sale-noti">
								<a href="about.php">About</a>
							</li>

							<li>
								<a href="fastfood.php">Fast Food</a>
							</li>

							<li>
								<a href="localcuisine.php">Local Cuisine</a>
							</li>

							<li>
								<a href="cart.php">Cart</a>
							</li>

							<li>
								<a href="contact.php">Contact</a>
							</li>

							
						</ul>
					</nav>
				</div>

				<!-- Header Icon -->
				<div class="header-icons">

				</div>
			</div>
		</div>

	</header>
	<!-- Title Page -->
	<section class="bg-title-page p-t-40 p-b-50 flex-col-c-m" style="background-image: url(images/bg.jpg);">
		<h2 class="l-text2 t-center">
			About
		</h2>
	</section>

	<!-- content page -->
	<section class="bgwhite p-t-66 p-b-38">
		<div class="container">
			<div class="row">
				<div class="col-md-4 p-b-30">
					<div class="hov-img-zoom">
						<img src="images/about.JPG" alt="IMG-ABOUT">
					</div>
				</div>

				<div class="col-md-8 p-b-30">
					<h3 class="m-text26 p-t-15 p-b-16">
						Our story
					</h3>

					<p class="p-b-28">
						
						Everyone has a story to tell and like all humble beginnings, <strong>FoodHunts</strong> started from a group of deddicated students. The delivery services started in May 2018. It was an idea from 4 university students who had similar problem of getting food.
						<br><br>This was not exclusive to them so they decided to start <strong>FoodHunts</strong> to provide a delivery service for the hungry students as well as a chance to start a new business.
						Our aim is to provide a variety of food choices to student with a simple delivery and payment system. We want to provide convenient at a fair price. 	
						<br><br>Our priority is not just about delivering fast meals. We've always care about our customer, about their choices and sastifactions . 
						<br><br>We put our heart and soul into each and every one of our delicious, wholesome meals. So, don't hesitate and order with us. <strong>FoodHunts</strong>, will do all the heavy work for you, so you can enjoy your food in comfort.
					
					</p>

					<div class="bo13 p-l-29 m-l-9 p-b-10">
						<p class="p-b-11">
							“You can’t wait for customers to come to you. You have to figure out where they are, go there and drag them back to your store.”
						</p>

						<span class="s-text7">
							- Paul Graham, Y COMBINATO
						</span>
					</div>
				</div>
			</div>
		</div>
	</section>


	<!-- Footer -->
	<footer>
		
			<div class="t-center s-text8 p-t-20">
				Copyright © 2018. All rights reserved. | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
			</div>
		</div>
	</footer>



	<!-- Back to top -->
	<div class="btn-back-to-top bg0-hov" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="fa fa-angle-double-up" aria-hidden="true"></i>
		</span>
	</div>

	<!-- Container Selection -->
	<div id="dropDownSelect1"></div>
	<div id="dropDownSelect2"></div>



<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/bootstrap/js/popper.js"></script>
	<script type="text/javascript" src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/select2/select2.min.js"></script>
	<script type="text/javascript">
		$(".selection-1").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});

		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect2')
		});
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
