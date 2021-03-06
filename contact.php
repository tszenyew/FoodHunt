<?php include 'includes/db_connection.php';
$conn = OpenCon();
 session_start();


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Contact</title>
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

		
		<!-- Header Icon -->
		<div class="header-icons">
			<a href="#" class="header-wrapicon1 dis-block">
				<img src="images/icons/icon-header-01.png" class="header-icon1" alt="ICON">
			</a>

			<span class="linedivide1"></span>

			<div class="header-wrapicon2">
				<img src="images/icons/icon-header-02.png" class="header-icon1 js-show-header-dropdown" alt="ICON">
				<span class="header-icons-noti simpleCart_quantity">0</span>

				<!-- Header cart noti -->
				<div class="header-cart header-dropdown ">
					<ul class='header-cart-wrapitem simpleCart_items'>
					</ul>		
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
							<a href="#" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
								Check Out
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
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
						<span class="header-icons-noti simpleCart_quantity">0</span>

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

							<li>
								<a href="about.php">About</a>
							</li>

							<li >
								<a href="fastfood.php">Fast Food</a>
							</li>

							<li >
								<a href="localcuisine.php">Local Cuisine</a>
							</li>

							<li>
								<a href="cart.php">Cart</a>
							</li>

							<li class ="sale-noti">
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

		<!-- Header Mobile -->
		<div class="wrap_header_mobile">
			<!-- Logo moblie -->
			<a href="index.php" class="logo-mobile">
				<img src="images/icons/logo2.png" alt="IMG-LOGO">
			</a>

			<!-- Button show menu -->
			<div class="btn-show-menu">
				<!-- Header Icon mobile -->
				<div class="header-icons-mobile">
					<a href="#" class="header-wrapicon1 dis-block">
						<img src="images/icons/icon-header-01.png" class="header-icon1" alt="ICON">
					</a>

					<span class="linedivide2"></span>

					<div class="header-wrapicon2">
						<img src="images/icons/icon-header-02.png" class="header-icon1 js-show-header-dropdown" alt="ICON">
						<span class="header-icons-noti simpleCart_quantity">0</span>

						<!-- Header cart noti -->
						<div class="header-cart header-dropdown">
								<ul class="header-cart-wrapitem ">
								</ul>

							<div class="header-cart-total item-total">
								
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
									<a href="#" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
										Check Out
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="btn-show-menu-mobile hamburger hamburger--squeeze">
					<span class="hamburger-box">
						<span class="hamburger-inner"></span>
					</span>
				</div>
			</div>
		</div>

	<!-- Title Page -->
	<section class="bg-title-page p-t-40 p-b-50 flex-col-c-m" style="background-image: url(images/bg.jpg);">
		<h2 class="l-text2 t-center">
			Contact Us
		</h2>
	</section>

	<!-- content page -->
	<section class="bgwhite p-t-66 p-b-60">
		<div class="container">
			<div class="row">
				<div class="col-md-6 p-b-30">
					<div class="p-r-20 p-r-0-lg">
						<div class="contact-map size21" id="google_map" data-map-x="2.9952466" data-map-y="101.7199902" data-pin="images/icons/logo3.png" data-scrollwhell="0" data-draggable="1"></div>
					</div>
				</div>

				<div class="col-md-6 p-b-30">
					<form class="leave-comment">
						<h4 class="m-text26 p-b-36 p-t-15">
							Send us your message
						</h4>

						<div class="bo4 of-hidden size15 m-b-20">
							<input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="name" placeholder="Full Name">
						</div>

						<div class="bo4 of-hidden size15 m-b-20">
							<input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="phone-number" placeholder="Phone Number">
						</div>

						<div class="bo4 of-hidden size15 m-b-20">
							<input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="email" placeholder="Email Address">
						</div>

						<textarea class="dis-block s-text7 size20 bo4 p-l-22 p-r-22 p-t-13 m-b-20" name="message" placeholder="Message"></textarea>

						<div class="w-size25">
							<!-- Button -->
							<button class="flex-c-m size2 bg1 bo-rad-23 hov1 m-text3 trans-0-4">
								Send
							</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>


	<!-- Footer -->
	<footer>
			<div class="t-center s-text8 p-t-20">
				Copyright © 2018 All rights reserved. | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
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
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAKFWBqlKAGCeS1rMVoaNlwyayu0e0YRes"></script>
	<script src="js/map-custom.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
