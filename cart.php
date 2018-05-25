<?php include 'includes/db_connection.php';
$conn = OpenCon();
session_start();


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Fast Food</title>
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


 <!-- simplecart script start for cart header -->
 <script src="js/simpleCart.js">
   
 </script>
 
<script>
	simpleCart({
    cartColumns: [
	{ view: function(item, column){
    return  "<tr class='table-row'><td class='column-1'><div class='cart-img-product b-rad-4 o-f-hidden'><img src='"+item.get('thumb')+"' alt='IMG-PRODUCT'></div></td> <td class='column-2'>" +item.get('name')+"</td> <td class='column-3'>RM"+item.get('price')+"</td> <td class='column-4 p-l-70' style='font-size:25px;'> <a href='javascript:;' class='simpleCart_increment'><button type='button' style='font-size:25px; border: 2px; padding: 15px;'>+</button></a> <span>"+item.get('quantity')+"<span><a href='javascript:;' class='simpleCart_decrement'><button type='button' style='font-size:35px; border: 2px; padding: 15px;'>-</button></a></td> <td class='column-5'> RM"+item.get('total')+"</td>";
}, attr: 'custom' }
    ]
});
</script>
<script>
	function updateTotal(){
		
		document.getElementById("item-total").textContent=newtext;
	}
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
        
        // url to return to on cancelled checkout, default is null
    
    } 
});
</script>
 <!-- simplecart script end -->

</head>
<body class="animsition">

	<!-- header fixed -->
	<div class="wrap_header fixed-header2 trans-0-4">
		<!-- Logo -->
		<a href="index.php" class="logo2">
			<img src="images/icons/logo2.png" alt="IMG-LOGO">
		</a>
				<!-- Header Icon -->
				<div class="header-icons">
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

							<li>
								<a href="localcuisine.php">Local Cuisine</a>
							</li>

							<li class ="sale-noti">
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
			Cart
		</h2>
	</section>

	<!-- Cart -->
	<section class="cart bgwhite p-t-70 p-b-100">
		<div class="container">
			<!-- Cart item -->
			<div class="container-table-cart pos-relative">
				<div class="wrap-table-shopping-cart bgwhite  ">
						<table class="table-shopping-cart">
								<tr class="table-head ">
									<th class="column-1"></th>
									<th class="column-2">Product</th>
									<th class="column-3">Price</th>
									<th class="column-4 p-l-70">Quantity</th>
									<th class="column-5">Total</th>
								</tr>
						</table>
					<table class="table-shopping-cart simpleCart_items">
						

							
					</table>
				</div>
			</div>

			<div class="flex-w flex-sb-m p-t-25 p-b-25 bo8 p-l-35 p-r-60 p-lr-15-sm">
				<div class="flex-w flex-m w-full-sm">
					<div class="size11 bo4 m-r-10">
						<input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="coupon-code" placeholder="Coupon Code">
					</div>

					<div class="size12 trans-0-4 m-t-10 m-b-10 m-r-10">
						<!-- Button -->
						<button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
							Apply coupon
						</button>
					</div>
				</div>

				
			</div>

			<!-- Total -->
			<div class="bo9 w-size18 p-l-40 p-r-40 p-t-30 p-b-38 m-t-30 m-r-0 m-l-auto p-lr-15-sm">
				<h5 class="m-text20 p-b-24">
					Cart Totals
				</h5>

				<!--  -->
				<div class="flex-w flex-sb-m p-b-12">
					<span class="s-text18 w-size19 w-full-sm">
						Subtotal:
					</span>

					<span class="m-text21 w-size20 w-full-sm simpleCart_total" id="item-total">
						
					</span>
				</div>

				<!--  -->
				<div class="flex-w flex-sb bo10 p-t-15 p-b-20">
					<span class="s-text18 w-size19 w-full-sm">
						Shipping:
					</span>

					<div class="w-size20 w-full-sm">
						<p class="s-text8 p-b-23">
							Please select your selection for payment 
						</p>
						<div class="size13 bo4 m-b-12">
						<?php 
						if(isset($_SESSION['loginuser'])){
							$email = $_SESSION['loginuser'];
							echo"<input id ='email' class='sizefull s-text7 p-l-15 p-r-15' type='text' name='email' value='$email' placeholder='Email'>";
						}
						else {
						echo "<input id ='email' class='sizefull s-text7 p-l-15 p-r-15' type='text' name='email' placeholder='Email'>";
						}?>
						</div>
						<div class="size13 ">
						<input id="cod" type="checkbox" name="delivery" onchange = "codchg(this)"value="cod">Cash on Deilvery<br>
						</div>
						<span class="s-text19">
							Enter address
						</span>
						<form id="submitform" action="submission.php" method="post">
						
						<div class="size13 bo4 m-b-12">
						<input id ="address1" class="sizefull s-text7 p-l-15 p-r-15" type="text" name="add1" placeholder="Address 1">
						</div>
						<div class="size13 bo4 m-b-12">
						<input id ="address2" class="sizefull s-text7 p-l-15 p-r-15" type="text" name="add2" placeholder="Address 2">
						</div>
						<div class="size13 bo4 m-b-12">
						<input id ="address3" class="sizefull s-text7 p-l-15 p-r-15" type="text" name="postcode" placeholder="Postcode / Zip">
						</div>
						<div class="size13 bo4 m-b-22">
						<input id ="address4" class="sizefull s-text7 p-l-15 p-r-15" type="text" name="state" placeholder="State">
						</div>
						<div class="size13 bo4 m-b-22">
						<input id ="phonenum" class="sizefull s-text7 p-l-15 p-r-15" type="text" name="phonenum" placeholder="Phone number">
						</div>
						</form>
						

						
					</div>
				</div>

				<!--  -->
				<div class="flex-w flex-sb-m p-t-26 p-b-30">
					<span class="m-text22 w-size19 w-full-sm">
						Total:
					</span>

					<span class="m-text21 w-size20 w-full-sm simpleCart_grandTotal">
						
					</span>
				</div>

				<div class="size15 trans-0-4">
					<!-- Button -->
					
					<button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4" onclick="submitbutton()">
						Proceed to Checkout
					</button>
					
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
	<script src="js/main.js"></script>
<script>


	
	function codchg(element){
    element.checked ? document.getElementById("address1").disabled = true : document.getElementById("address1").disabled = false;
	element.checked ? document.getElementById("address2").disabled = true : document.getElementById("address2").disabled = false;
	element.checked ? document.getElementById("address3").disabled = true : document.getElementById("address3").disabled = false;
	element.checked ? document.getElementById("address4").disabled = true : document.getElementById("address4").disabled = false;

	}
	

function submitbutton(){
	
	if(document.getElementById("cod").checked == true){
		window.location.href = 'success.php';
	}
	else {
	simpleCart.checkout();
	}
}
	
</script>
</body>
</html>
