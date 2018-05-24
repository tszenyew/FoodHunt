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
	<title>Chicken Burger Details</title>
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
	  
</head>
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
									<a href="#" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
										Check Out
									</a>
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

							<li >
								<a href="about.php">About</a>
							</li>

							<li class ="sale-noti">
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

	<!-- breadcrumb -->
	<div class="bread-crumb bgwhite flex-w p-l-52 p-r-15 p-t-30 p-l-15-sm">
		<a href="index.php" class="s-text16">
			Home
			<i class="fa fa-angle-right m-l-8 m-r-9" aria-hidden="true"></i>
		</a>

		<a href="localcuisine.php" class="s-text16">
			FastFood
			<i class="fa fa-angle-right m-l-8 m-r-9" aria-hidden="true"></i>
		</a>

		<span class="s-text17">
			Chicken Burger
		</span>
	</div>

	<!-- Product Detail -->
	<div class="container bgwhite p-t-35 p-b-80">
		<div class="flex-w flex-sb">
			<div class="w-size13 p-t-30 respon5">
				<div class="wrap-slick3 flex-sb flex-w">
					<div class="wrap-slick3-dots"></div>

					<div class="slick3">
						<div class="item-slick3" data-thumb="images/chicken-burger.jpg">
							<div class="wrap-pic-w">
								<img src="images/chicken-burger.jpg" alt="IMG-PRODUCT" width="200" height="350">
							</div>
						</div>

						<div class="item-slick3" data-thumb="images/chick1.jpg">
							<div class="wrap-pic-w">
								<img src="images/chick1.jpg" alt="IMG-PRODUCT" width="200" height="350">
							</div>
						</div>

						<div class="item-slick3" data-thumb="images/chick2.jpg">
							<div class="wrap-pic-w">
								<img src="images/chick2.jpg" alt="IMG-PRODUCT" width="200" height="350">
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="w-size14 p-t-30 respon5">
				<h4 class="product-detail-name block2-name m-text16 p-b-13">
					Chicken Burger
				</h4>

				<span class="m-text17">
					RM 5.00
				</span>

				

				<!--  -->
				<div class="p-t-33 p-b-60">
					<div class="flex-m flex-w p-b-10">
					
					</div>

					<div class="flex-m flex-w">
						
					</div>

					<div class="flex-r-m flex-w p-t-10">
						<div class="w-size16 flex-m flex-w">
							

							
						</div>
					</div>
			
				

				<!--  -->
				<div class="wrap-dropdown-content bo6 p-t-15 p-b-14 active-dropdown-content">
					<h5 class="js-toggle-dropdown-content flex-sb-m cs-pointer m-text19 color0-hov trans-0-4">
						Description
						<i class="down-mark fs-12 color1 fa fa-minus dis-none" aria-hidden="true"></i>
						<i class="up-mark fs-12 color1 fa fa-plus" aria-hidden="true"></i>
					</h5>

					<div class="dropdown-content dis-none p-t-15 p-b-23">
						<p class="s-text8">
							Burger with quality bun and a mix of chicken petty and vegetables. 
						</p>
					</div>
				</div>

				

				
				</div>
				
				
			
				<div class="btn-addcart w-size1 trans-0-4">
								<!-- Button -->
									<button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4" onclick="simpleCart.add({name:'Chicken Burger', price: 5.00,size:'tiny',thumb:'images/chicken-burger.jpg'});">
										Add to Cart
									</button>
							</div>
			
		</div>
	</div>


	<!-- Relate Product -->
	<section class="relateproduct bgwhite p-t-45 p-b-138">
		<div class="container">
			<div class="sec-title p-b-60">
				<h3 class="m-text5 t-center">
					Related Menu
				</h3>
			</div>

			<!-- Slide2 -->
			<div class="wrap-slick2">
				<div class="slick2">

					<div class="item-slick2 p-l-15 p-r-15">
						<!-- Block2 -->
								<div class="block2">
									<div class="block2-img wrap-pic-w of-hidden pos-relative ">
										<img src="images/beef-burger.jpg" alt="IMG-PRODUCT" width="200" height="200">

										<div class="block2-overlay trans-0-4">
										
											<div class="block2-btn-addcart w-size1 trans-0-4">
												<!-- Button -->
												<button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4" onclick="simpleCart.add({name:'Beef Burger', price: 6.50,size:'tiny',thumb:'images/beef-burger.jpg'});">
													Add to Cart
												</button>
											</div>
										</div>
									</div>

									<div class="block2-txt p-t-20">
										<a href="beefburgerdetails.php" class="block2-name dis-block s-text3 p-b-5">
											<strong>Beef Burger</strong>
										</a>

										<span class="block2-price m-text6 p-r-5">
											<strong>RM 6.50</strong>
										</span>
									</div>
									
								</div>
							</div>

							
							
					<div class="item-slick2 p-l-15 p-r-15">
						<!-- Block2 -->
								<div class="block2">
									<div class="block2-img wrap-pic-w of-hidden pos-relative">
										<img src="images/doublebeef.jpg" alt="IMG-PRODUCT" width="200" height="200">

										<div class="block2-overlay trans-0-4">

											<div class="block2-btn-addcart w-size1 trans-0-4">
												<!-- Button -->
												<button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4" onclick="simpleCart.add({name:'Double Beef Burger', price: 8.50,size:'tiny',thumb:'images/doublebeef.jpg'});">
													Add to Cart
												</button>
											</div>
										</div>
									</div>

									<div class="block2-txt p-t-20">
										<a href="doublebeefdetails.php" class="block2-name dis-block s-text3 p-b-5">
											<strong>Double Beef Burger</strong>
										</a>

										<span class="block2-price m-text6 p-r-5">
											<strong>RM 8.00</strong>
										</span>
									</div>
								</div>
							</div>

					<div class="item-slick2 p-l-15 p-r-15">
						<!-- Block2 -->
								<div class="block2">
									<div class="block2-img wrap-pic-w of-hidden pos-relative">
										<img src="images/veg-burger.jpg" alt="IMG-PRODUCT" width="200" height="200">

										<div class="block2-overlay trans-0-4">

											<div class="block2-btn-addcart w-size1 trans-0-4">
												<!-- Button -->
												<button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4" onclick="simpleCart.add({name:'Vegetable Burger', price: 6.00,size:'tiny',thumb:'images/veg-burger.jpg'});">
													Add to Cart
												</button>
											</div>
										</div>
									</div>

									<div class="block2-txt p-t-20">
										<a href="" class="block2-name dis-block s-text3 p-b-5">
											<strong>Vegetable Burger</strong>
										</a>

										<span class="block2-price m-text6 p-r-5">
											<strong>RM 6.00</strong>
										</span>
									</div>
								</div>
							</div>

					<div class="item-slick2 p-l-15 p-r-15">
						<!-- Block2 -->
								<div class="block2">
									<div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew">
										<img src="images/doublechicken.jpg" alt="IMG-PRODUCT" width="200" height="200">

										<div class="block2-overlay trans-0-4">

											<div class="block2-btn-addcart w-size1 trans-0-4">
												<!-- Button -->
												<button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4" onclick="simpleCart.add({name:'Double Chicken Burger', price: 6.50,size:'tiny',thumb:'images/doublechicken.jpg'});">
													Add to Cart
												</button>
											</div>
										</div>
									</div>

									<div class="block2-txt p-t-20">
										<a href="doublechcikendetails.php" class="block2-name dis-block s-text3 p-b-5">
											<strong>Double Chicken Burger</strong>
										</a>

										

										<span class="block2-price m-text6 p-r-5">
											<strong>RM 6.50</strong>
										</span>
									</div>
								</div>
							</div>
							
							

					

					
				</div>
			</div>

		</div>
	</section>




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
	<script type="text/javascript" src="vendor/daterangepicker/moment.min.js"></script>
	<script type="text/javascript" src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/slick/slick.min.js"></script>
	<script type="text/javascript" src="js/slick-custom.js"></script>
<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/sweetalert/sweetalert.min.js"></script>
	<script type="text/javascript">
		$('.block2-btn-addcart').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
			var gege = String(nameProduct);
			var gege2 = gege.substring(20,gege.length-20);
			$(this).on('click', function(){
				
				swal(gege2, "is added to cart !", "success");
			});
		});
		
		
		$('.btn-addcart').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
			var gege = String(nameProduct);
			var gege2 = gege.substring(25,gege.length-22);
			$(this).on('click', function(){
				
				swal(gege2, "is added to cart !", "success");
			});
		});
		
		
		

		
	</script>

<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
