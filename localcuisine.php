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
	<title>Local Cuisine</title>
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
									<a href="#" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
										Check Out
									</a>
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

							<li>
								<a href="fastfood.php">Fast Food</a>
							</li>

							<li class ="sale-noti">
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
	<section class="bg-title-page p-t-50 p-b-40 flex-col-c-m" style="background-image: url(images/bg.jpg);">
		<h2 class="l-text2 t-center">
			Local Cuisine Menu
		</h2>
	
	</section>


	<!-- Our product -->
	<section class="bgwhite p-t-45 p-b-58">
		<div class="container">
			
			
				<section>
				    <h3 class="m-text5 t-center">
					Main Dish
				    </h3>
						<div class="row">
							<div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
								<!-- Block2 -->
								<div class="block2">
									<div class="block2-img wrap-pic-w of-hidden pos-relative ">
										<img src="images/pattaya.jpg" alt="IMG-PRODUCT" width="200" height="200">

										<div class="block2-overlay trans-0-4">

											<div class="block2-btn-addcart w-size1 trans-0-4">
												<!-- Button -->
												
												<button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4" onclick="simpleCart.add({name:'Nasi Goreng Pattaya', price: 5.50,size:'tiny',thumb:'images/pattaya.jpg'});">
													Add to Cart
												</button>
												
											</div>
										</div>
									</div>

									<div class="block2-txt p-t-20 ">
										<a href="ngpattayadetail.php" class="block2-name dis-block s-text3 p-b-5 ">
											<strong >Nasi Goreng Pattaya</strong>
										</a>

										<span class="block2-price m-text6 p-r-5 ">
											<strong >RM 5.50</strong>
										</span>
									</div>

								</div>
							</div>

							
							<div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
								<!-- Block2 -->
								<div class="block2">
									<div class="block2-img wrap-pic-w of-hidden pos-relative ">
										<img src="images/ngkampung.jpg" alt="IMG-PRODUCT" width="200" height="200">

										<div class="block2-overlay trans-0-4">
										
											<div class="block2-btn-addcart w-size1 trans-0-4">
												<!-- Button -->
												<button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4" onclick="simpleCart.add({name:'Nasi Goreng Kampung', price: 4.50,size:'tiny',thumb:'images/ngkampung.jpg'});">
													Add to Cart
												</button>
											</div>
										</div>
									</div>

									<div class="block2-txt p-t-20">
										<a href="product-detail.php" class="block2-name dis-block s-text3 p-b-5">
											<strong>Nasi Goreng Kampung</strong>
										</a>

										<span class="block2-price m-text6 p-r-5">
											<strong>RM 4.50</strong>
										</span>
									</div>
									
								
								</div>
							</div>

							<div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
								<!-- Block2 -->
								<div class="block2">
									<div class="block2-img wrap-pic-w of-hidden pos-relative">
										<img src="images/ngcina.jpg" alt="IMG-PRODUCT" width="200" height="200">

										<div class="block2-overlay trans-0-4">

											<div class="block2-btn-addcart w-size1 trans-0-4">
												<!-- Button -->
												<button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4" onclick="simpleCart.add({name:'Nasi Goreng Cina', price: 4.50,size:'tiny',thumb:'images/ngcina.jpg'});">
													Add to Cart
												</button>
											</div>
										</div>
									</div>

									<div class="block2-txt p-t-20">
										<a href="product-detail.php" class="block2-name dis-block s-text3 p-b-5">
											<strong>Nasi Goreng Cina</strong>
										</a>

										<span class="block2-price m-text6 p-r-5">
											<strong>RM 4.50</strong>
										</span>
									</div>
								</div>
							</div>

							
						

							<div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
								<!-- Block2 -->
								<div class="block2">
									<div class="block2-img wrap-pic-w of-hidden pos-relative">
										<img src="images/ngusa.jpg" alt="IMG-PRODUCT" width="200" height="200">

										<div class="block2-overlay trans-0-4">

											<div class="block2-btn-addcart w-size1 trans-0-4">
												<!-- Button -->
												<button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4" onclick="simpleCart.add({name:'Nasi Goreng USA', price: 6.50,size:'tiny',thumb:'images/ngusa.jpg'});">
													Add to Cart
												</button>
											</div>
										</div>
									</div>

									<div class="block2-txt p-t-20">
										<a href="product-detail.php" class="block2-name dis-block s-text3 p-b-5">
											<strong>Nasi Goreng USA</strong>
										</a>

										<span class="block2-price m-text6 p-r-5">
											<strong>RM 6.50</strong>
										</span>
									</div>
								</div>
							</div>

						

							

							<div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
								<!-- Block2 -->
								<div class="block2">
									<div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew">
										<img src="images/ngseafood.jpg" alt="IMG-PRODUCT" width="200" height="200">

										<div class="block2-overlay trans-0-4">

											<div class="block2-btn-addcart w-size1 trans-0-4">
												<!-- Button -->
												<button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4" onclick="simpleCart.add({name:'Nasi Goreng Seafood', price: 6.00,size:'tiny',thumb:'images/ngseafood.jpg'});">
													Add to Cart
												</button>
											</div>
										</div>
									</div>

									<div class="block2-txt p-t-20">
										<a href="product-detail.php" class="block2-name dis-block s-text3 p-b-5">
											<strong>Nasi Goreng Seafood</strong>
										</a>

										

										<span class="block2-price m-text6 p-r-5">
											<strong>RM 6.00</strong>
										</span>
									</div>
								</div>
							</div>
							
							<div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
								<!-- Block2 -->
								<div class="block2">
									<div class="block2-img wrap-pic-w of-hidden pos-relative ">
										<img src="images/meegoreng.jpg" alt="IMG-PRODUCT" width="200" height="200">

										<div class="block2-overlay trans-0-4">
											
											<div class="block2-btn-addcart w-size1 trans-0-4">
												<!-- Button -->
												<button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4" onclick="simpleCart.add({name:'Mee Goreng', price: 5.00,size:'tiny',thumb:'images/meegoreng.jpg'});">
													Add to Cart
												</button>
											</div>
										</div>
									</div>

									

									<div class="block2-txt p-t-20">
										<a href="product-detail.php" class="block2-name dis-block s-text3 p-b-5">
											<strong>Mee Goreng</strong>
										</a>

										<span class="block2-price m-text6 p-r-5">
											<strong>RM 5.00</strong>
										</span>
									</div>
								</div>
							</div>

								<div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
								<!-- Block2 -->
								<div class="block2">
									<div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew">
										<img src="images/meebandung.jpg" alt="IMG-PRODUCT" width="200" height="200">

										<div class="block2-overlay trans-0-4">
											
											<div class="block2-btn-addcart w-size1 trans-0-4">
												<!-- Button -->
												<button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4" onclick="simpleCart.add({name:'Mee Bandung', price: 6.50,size:'tiny',thumb:'images/meebandung.jpg'});">
													Add to Cart
												</button>
											</div>
										</div>
									</div>

									<div class="block2-txt p-t-20">
										<a href="product-detail.php" class="block2-name dis-block s-text3 p-b-5">
											<strong>Mee Bandung</strong>
										</a>

										<span class="block2-price m-text6 p-r-5">
											<strong>RM 6.50</strong>
										</span>
									</div>
								</div>
							</div>

							<div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
								<!-- Block2 -->
								<div class="block2">
									<div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew">
										<img src="images/meehailam.jpg" alt="IMG-PRODUCT" width="200" height="200">

										<div class="block2-overlay trans-0-4">
											
											<div class="block2-btn-addcart w-size1 trans-0-4">
												<!-- Button -->
												<button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4" onclick="simpleCart.add({name:'Mee Hailam', price: 6.50,size:'tiny',thumb:'images/meehailam.jpg'});">
													Add to Cart
												</button>
											</div>
										</div>
									</div>

									<div class="block2-txt p-t-20">
										<a href="product-detail.php" class="block2-name dis-block s-text3 p-b-5">
											<strong>Mee Hailam</strong>
										</a>

										<span class="block2-price m-text6 p-r-5">
											<strong>RM 6.50</strong>
										</span>
									</div>
								</div>
							</div>
							
							
							<div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
								<!-- Block2 -->
								<div class="block2">
									<div class="block2-img wrap-pic-w of-hidden pos-relative">
										<img src="images/bihungoreng.jpg" alt="IMG-PRODUCT" width="200" height="200">

										<div class="block2-overlay trans-0-4">
											
											<div class="block2-btn-addcart w-size1 trans-0-4">
												<!-- Button -->
												<button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4" onclick="simpleCart.add({name:'Bihun Goreng Ayam', price: 6.50,size:'tiny',thumb:'images/bihungorengayam.jpg'});">
													Add to Cart
												</button>
											</div>
										</div>
									</div>

									<div class="block2-txt p-t-20">
										<a href="product-detail.php" class="block2-name dis-block s-text3 p-b-5">
											<strong>Bihun Goreng</strong>
										</a>

										<span class="block2-price m-text6 p-r-5">
											<strong>RM 6.50</strong>
										</span>
									</div>
								</div>
							</div>

							
							
							<div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
								<!-- Block2 -->
								<div class="block2">
									<div class="block2-img wrap-pic-w of-hidden pos-relative">
										<img src="images/kuewteowgoreng.jpg" alt="IMG-PRODUCT" width="200" height="200">

										<div class="block2-overlay trans-0-4">

											<div class="block2-btn-addcart w-size1 trans-0-4">
												<!-- Button -->
												<button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4" onclick="simpleCart.add({name:'Kuew Teow Goreng', price: 5.00,size:'tiny',thumb:'images/kuewteowgoreng.jpg'});">
													Add to Cart
												</button>
											</div>
										</div>
									</div>

									<div class="block2-txt p-t-20">
										<a href="product-detail.php" class="block2-name dis-block s-text3 p-b-5">
											<strong>Kuew Teow Goreng</strong>
										</a>

										<span class="block2-price m-text6 p-r-5">
											<strong>RM 5.00</strong>
										</span>
									</div>
								</div>
							</div>
							
							
								<div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
								<!-- Block2 -->
								<div class="block2">
									<div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew">
										<img src="images/kuewteowkungfu.jpg" alt="IMG-PRODUCT" width="200" height="200">

										<div class="block2-overlay trans-0-4">
											
											<div class="block2-btn-addcart w-size1 trans-0-4">
												<!-- Button -->
												<button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4" onclick="simpleCart.add({name:'Kuew Teow Kungfu', price: 6.50,size:'tiny',thumb:'images/kuewteowkungfu.jpg'});">
													Add to Cart
												</button>
											</div>
										</div>
									</div>

									<div class="block2-txt p-t-20">
										<a href="product-detail.php" class="block2-name dis-block s-text3 p-b-5">
											<strong>Kuew Teow Kungfu</strong>
										</a>

										<span class="block2-price m-text6 p-r-5">
											<strong>RM 6.50</strong>
										</span>
									</div>
								</div>
							</div>

							
						</div>
					</div>
                    </section>
					
					
					
	<!--side-dish -->
		<section class="bgwhite p-t-45 p-b-58">
		<div class="container">
					<section>
					 <h3 class="m-text5 t-center">
					Side Dish
				    </h3>
						<div class="row">
							<div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
								<!-- Block2 -->
								<div class="block2">
									<div class="block2-img wrap-pic-w of-hidden pos-relative ">
										<img src="images/telurmata.jpg" alt="IMG-PRODUCT" width="200" height="200">

										<div class="block2-overlay trans-0-4">
											
											<div class="block2-btn-addcart w-size1 trans-0-4">
												<!-- Button -->
												<button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4" onclick="simpleCart.add({name:'Telur Mata', price: 1.00,size:'tiny',thumb:'images/telurmata.jpg'});">
													Add to Cart
												</button>
											</div>
										</div>
									</div>

									<div class="block2-txt p-t-20">
										<a href="product-detail.php" class="block2-name dis-block s-text3 p-b-5">
											<strong>Telur Mata</strong>
										</a>

										

										<span class="block2-price m-text6 p-r-5">
										<strong>RM 1.00</strong>
										</span>
									</div>
								</div>
							</div>

							<div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
								<!-- Block2 -->
								<div class="block2">
									<div class="block2-img wrap-pic-w of-hidden pos-relative ">
										<img src="images/telurdadar.jpg" alt="IMG-PRODUCT" width="200" height="200">

										<div class="block2-overlay trans-0-4">

											<div class="block2-btn-addcart w-size1 trans-0-4">
												<!-- Button -->
												<button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4" onclick="simpleCart.add({name:'Telur Dadar', price: 2.00,size:'tiny',thumb:'images/telurdadar.jpg'});">
													Add to Cart
												</button>
											</div>
										</div>
									</div>

									<div class="block2-txt p-t-20">
										<a href="product-detail.php" class="block2-name dis-block s-text3 p-b-5">
											<strong>Telur Dadar</strong>
										</a>

										<span class="block2-price m-text6 p-r-5">
											<strong>RM 2.00</strong>
										</span>
									</div>
								</div>
							</div>

							<div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
								<!-- Block2 -->
								<div class="block2">
									<div class="block2-img wrap-pic-w of-hidden pos-relative">
										<img src="images/ayamgoreng.jpg" alt="IMG-PRODUCT" width="200" height="200">

										<div class="block2-overlay trans-0-4">
											
											<div class="block2-btn-addcart w-size1 trans-0-4">
												<!-- Button -->
												<button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4" onclick="simpleCart.add({name:'Ayam Goreng', price: 3.00,size:'tiny',thumb:'images/ayamgoreng.jpg'});">
													Add to Cart
												</button>
											</div>
										</div>
									</div>

									<div class="block2-txt p-t-20">
										<a href="product-detail.php" class="block2-name dis-block s-text3 p-b-5">
											<strong>Ayam Goreng</strong>
										</a>

										<span class="block2-price m-text6 p-r-5">
										<strong>RM 3.00</strong>
										</span>
									</div>
								</div>
							</div>

							<div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
								<!-- Block2 -->
								<div class="block2">
									<div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew">
										<img src="images/telurbungkus.jpg" alt="IMG-PRODUCT" width="200" height="200">

										<div class="block2-overlay trans-0-4">
											
											<div class="block2-btn-addcart w-size1 trans-0-4">
												<!-- Button -->
												<button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4" onclick="simpleCart.add({name:'Telur Bungkus', price: 4.00,size:'tiny',thumb:'images/telurbungkus.jpg'});">
													Add to Cart
												</button>
											</div>
										</div>
									</div>

									<div class="block2-txt p-t-20">
										<a href="product-detail.php" class="block2-name dis-block s-text3 p-b-5">
											<strong>Telur Bungkus</strong>
										</a>

										<span class="block2-price m-text6 p-r-5">
											<strong>RM 4.00</strong>
										</span>
									</div>
								</div>
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

		$('.block2-btn-addwishlist').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
			var gege = String(nameProduct);
			var gege2 = gege.substring(20,gege.length-20);
			$(this).on('click', function(){
				swal(gege2, "is added to wishlist !", "success");
			});
		});
	</script>

<!--===============================================================================================-->
	<script type="text/javascript" src="vendor/noui/nouislider.min.js"></script>
	<script type="text/javascript">
		/*[ No ui ]
	    ===========================================================*/
	    var filterBar = document.getElementById('filter-bar');

	    noUiSlider.create(filterBar, {
	        start: [ 50, 200 ],
	        connect: true,
	        range: {
	            'min': 50,
	            'max': 200
	        }
	    });

	    var skipValues = [
	    document.getElementById('value-lower'),
	    document.getElementById('value-upper')
	    ];

	    filterBar.noUiSlider.on('update', function( values, handle ) {
	        skipValues[handle].innerHTML = Math.round(values[handle]) ;
	    });
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

	
	<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

</body>
</html>
