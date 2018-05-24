<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">    
  <meta http-equiv="content-type" content="text/html; charset=utf-8">
  <meta name="author" content="Jobboard">

  <title>QuickJob</title>    

  <!-- Favicon -->
  <link rel="shortcut icon" href="assets/img/favicon.png">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">    
  <link rel="stylesheet" href="assets/css/jasny-bootstrap.min.css" type="text/css">  
  <link rel="stylesheet" href="assets/css/bootstrap-select.min.css" type="text/css">  
  <!-- Material CSS -->
  <link rel="stylesheet" href="assets/css/material-kit.css" type="text/css">
  <!-- Font Awesome CSS -->
  <link rel="stylesheet" href="assets/fonts/font-awesome.min.css" type="text/css"> 
  <link rel="stylesheet" href="assets/fonts/themify-icons.css"> 

  <!-- Animate CSS -->
  <link rel="stylesheet" href="assets/extras/animate.css" type="text/css">
  <!-- Owl Carousel -->
  <link rel="stylesheet" href="assets/extras/owl.carousel.css" type="text/css">
  <link rel="stylesheet" href="assets/extras/owl.theme.css" type="text/css">
  <!-- Rev Slider CSS -->
  <link rel="stylesheet" href="assets/extras/settings.css" type="text/css"> 
  <!-- Slicknav js -->
  <link rel="stylesheet" href="assets/css/slicknav.css" type="text/css">
  <!-- Main Styles -->
  <link rel="stylesheet" href="assets/css/main.css" type="text/css">
  <!-- Responsive CSS Styles -->
  <link rel="stylesheet" href="assets/css/responsive.css" type="text/css">

  <!-- Color CSS Styles  -->
  <link rel="stylesheet" type="text/css" href="assets/css/colors/red.css" media="screen" />

</head>

<body>  
  <!-- Header Section Start -->
  <div class="header">    
    <div class="logo-menu">
      <nav class="navbar navbar-default main-navigation" role="navigation" data-spy="affix" data-offset-top="50">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand logo" href="login.php"><img src="assets/img/logo (1).png" alt=""></a>
          </div>

          <div class="collapse navbar-collapse" id="navbar">              
           <!-- Start Navigation List -->
           <ul class="nav navbar-nav">
            <li>
              <a href="home.php">
                Home
              </a>
            </li>
          </ul>
          <ul class="nav navbar-nav navbar-right float-right">
            <li class="left"><a href="signup.php"><i class="ti-pencil-alt"></i> Sign Up</a></li>
            <li class="right"><a href="login.php"><i class="ti-lock"></i>  Log In</a></li>
          </ul>
        </div>
      </div>
      <!-- Mobile Menu Start -->
      <ul class="wpb-mobile-menu">
        <li>
          <a href="home.php">Home</a>
        </li>
        <li class="btn-m"><a href="signup.php"><i class="ti-pencil-alt"></i> Sign Up</a></li>
        <li class="btn-m"><a href="login.php"><i class="ti-lock"></i>  Log In</a></li>          
      </ul>
      <!-- Mobile Menu End --> 
    </nav>
  </div>
</div>
<!-- Header Section End -->  

















<!-- Page Header Start -->
<div class="page-header" style="background: url(assets/img/banner1.jpg);">
  <div class="container">
    <div class="row">         
      <div class="col-md-12">
        <div class="breadcrumb-wrapper">
          <h2 class="product-title">Sign up</h2>
          <div class="row align-items-center text-center">
            <div class="col-md-6">
              <h2 class="product-title">I'm an Employer</h2>
              <form action="verifyLogin.php" onsubmit="return signupValidation()" method="post" class="probootstrap-form probootstrap-form-box mb60" >
                <div class="form-group">
                  <p class="editfield">
                    <label for="empemail" style="color: white">Email</label><br>
                    <input class="form-control" id="empemail" name="empemail" placeholder="you@example.com" type="email" required="">
                    <p class="signupWarning" id="vfailemail" style="color: yellow"></p>
                  </p>
                  <p class="editfield">
                    <label for="emppass" style="color: white">Password</label>
                    <input class="form-control" id="emppass" name="emppass" placeholder="Enter Password" type="password" required="">
                    <p class="signupWarning" id="vfailpw" style="color: yellow"></p>
                  </p>
                  <p class="editfield">
                    <label for="empname" style="color: white">Username</label>
                    <input class="form-control" id="empname" name="empname" placeholder="Enter Username" type="username" required="">
                    <p class="signupWarning" id="vfailpw2" style="color: yellow"></p>
                  </p>
                  
                  <p class="editfield">
                    <label for="empphone" style="color: white">Phone number</label>
                    <input class="form-control" id="empphone" name="empphone" placeholder="0123456789" type="tel" required="">
                    <p class="signupWarning" id="vfailphone" style="color: yellow"></p>
                  </p>

                </div>
                <div class="form-group">
                  <input type="submit" class="btn btn-primary" id="submitSignupEmp" name="submitSignupEmp" value="Sign up">
                </div>
              </form>
            </div>




            <div class="col-md-6">
              <h2 class="product-title">I'm an Applicant</h2>
              <form id="signupform" action="verifyLogin.php" method="post" class="probootstrap-form probootstrap-form-box mb60">
                <div class="form-group">
                  <p class="editfield">
                    <label for="signupInputEmail1" style="color: white">Email</label><br>
                    <input class="form-control" id="signupInputEmail1" name="signupInputEmail1" placeholder="you@example.com" type="email" required="">
                    <p class="signupWarning" id="vfailemail1" style="color: yellow"></p>
                  </p>
                  <p class="editfield">
                    <label for="signupInputPassword11" style="color: white">Password</label>
                    <input class="form-control" id="signupInputPassword11" name="signupInputPassword11" placeholder="Enter Password" type="password">
                    <p class="signupWarning" id="vfailpw1" style="color: yellow"></p>
                  </p>
                  <p class="editfield">
                    <label for="signupInputPassword21" style="color: white">Username</label>
                    <input class="form-control" id="emppass" name="appname" placeholder="Enter Username" type="username" required="" >
                    <p class="signupWarning" id="vfailpw21" style="color: yellow"></p>
                  </p>
                  <p class="editfield">
                    <label for="singupPhone1" style="color: white">Phone number</label>
                    <input class="form-control" id="signupPhone1" name="signupPhone1" placeholder="0123456789" type="tel">
                    <p class="signupWarning" id="vfailphone1" style="color: yellow"></p>
                  </p>
                </div>
                <div class="form-group">
                  <button class="btn btn-primary" id="submitSignupApp" name="submitSignupApp" value="Sign up">
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Page Header End -->      









<script>
  function signupValidation() {
    mailValidation();
    pwValidation();
    pwMatch();
    if(mailValidation() && pwValidation() && pwMatch() && phoneValidation()) {
      return true;
    }
    else{
      return false;
    }
  }
</script>
<script>
  var txtemail="Please enter your email address";
  function mailValidation(){
    var inputEmail = document.getElementById("signupInputEmail").value;
    if(inputEmail.length < 6 ) {
      document.getElementById("vfailemail").innerHTML = txtemail;
      document.getElementById("signupInputEmail").style.borderColor = "#E34234";
    }
    else{
      document.getElementById("vfailemail").innerHTML = null ;
      document.getElementById("signupInputEmail").style.borderColor = "#008000";
      return true;
    }
  }
</script>
<script>
  var txtpw1="Password must between 6 character to 15 character";
  function pwValidation(){
    var inputpw1 = document.getElementById("signupInputPassword1").value;
    if(inputpw1.length < 6 || inputpw1.length > 15){
      document.getElementById("vfailpw").innerHTML = txtpw1 ;
      document.getElementById("signupInputPassword1").style.borderColor = "#E34234";
      document.getElementById("signupInputPassword2").style.borderColor = "#E34234";
    }
    else{
      document.getElementById("vfailpw").innerHTML = null ;
      document.getElementById("signupInputPassword1").style.borderColor = "#008000";
      return true;
    }
  }
</script>
<script>
  var txtpwmiss="Password missmatch";
  function pwMatch(){
    var inputpw1 = document.getElementById("signupInputPassword1").value;
    var inputpw2 = document.getElementById("signupInputPassword2").value;
    if(inputpw1=="" || inputpw2 != inputpw1 ){
      document.getElementById("vfailpw2").innerHTML = txtpwmiss ;
      document.getElementById("signupInputPassword2").style.borderColor = "#E34234";
    }
    else{
      document.getElementById("vfailpw2").innerHTML = null ;
      document.getElementById("signupInputPassword2").style.borderColor = "#008000";
      return true;
    }
  }
</script>
<script>
  var txtphone="Phone number must be 10 numbers without dash (-)";
  function phoneValidation(){
    var inputphone = document.getElementById("signupPhone").value;
    if(inputphone.length != 10){
      document.getElementById("vfailphone").innerHTML = txtphone ;
      document.getElementById("signupPhone").style.borderColor = "#E34234";
    }
    else{
      document.getElementById("vfailphone").innerHTML = null ;
      document.getElementById("signupPhone").style.borderColor = "#008000";
      return true;
    }
  }
</script>




<script>
  function signupValidation1() {
    mailValidation1();
    pwValidation1();
    pwMatch1();
    if(mailValidation1() && pwValidation1() && pwMatch1() && phoneValidation1()) {
      $("#signupform").submit();
    }
    else{
      return false;
    }
  }
</script>
<script>
  var txtemail="Please enter your email address";
  function mailValidation1(){
    var inputEmail = document.getElementById("signupInputEmail1").value;
    if(inputEmail.length < 6 ) {
      document.getElementById("vfailemail1").innerHTML = txtemail;
      document.getElementById("signupInputEmail1").style.borderColor = "#E34234";
    }
    else{
      document.getElementById("vfailemail1").innerHTML = null ;
      document.getElementById("signupInputEmail1").style.borderColor = "#008000";
      return true;
    }
  }
</script>
<script>
  var txtpw1="Password must between 6 character to 15 character";
  function pwValidation1(){
    var inputpw1 = document.getElementById("signupInputPassword11").value;
    if(inputpw1.length < 6 || inputpw1.length > 15){
      document.getElementById("vfailpw1").innerHTML = txtpw1 ;
      document.getElementById("signupInputPassword11").style.borderColor = "#E34234";
      document.getElementById("signupInputPassword21").style.borderColor = "#E34234";
    }
    else{
      document.getElementById("vfailpw1").innerHTML = null ;
      document.getElementById("signupInputPassword11").style.borderColor = "#008000";
      return true;
    }
  }
</script>
<script>
  var txtpwmiss="Password missmatch";
  function pwMatch1(){
    var inputpw1 = document.getElementById("signupInputPassword11").value;
    var inputpw2 = document.getElementById("signupInputPassword21").value;
    if(inputpw1=="" || inputpw2 != inputpw1 ){
      document.getElementById("vfailpw21").innerHTML = txtpwmiss ;
      document.getElementById("signupInputPassword21").style.borderColor = "#E34234";
    }
    else{
      document.getElementById("vfailpw21").innerHTML = null ;
      document.getElementById("signupInputPassword21").style.borderColor = "#008000";
      return true;
    }
  }
</script>
<script>
  var txtphone="Phone number must be 10 numbers without dash (-)";
  function phoneValidation1(){
    var inputphone = document.getElementById("signupPhone1").value;
    if(inputphone.length != 10){
      document.getElementById("vfailphone1").innerHTML = txtphone ;
      document.getElementById("signupPhone1").style.borderColor = "#E34234";
    }
    else{
      document.getElementById("vfailphone1").innerHTML = null ;
      document.getElementById("signupPhone1").style.borderColor = "#008000";
      return true;
    }
  }
</script>

















<!-- Footer Section Start -->
<footer>
  <!-- Footer Area Start -->
  <section class="footer-Content">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-6 col-xs-12">
          <div class="widget">
            <h3 class="block-title"><img src="assets/img/logo (1).png" class="img-responsive" alt="Footer Logo"></h3>
            <div class="textwidget">
              <p>All Rights reserved &copy; 2018 - Designed & Developed by QuickJob</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Footer area End -->

</footer>
<!-- Footer Section End -->  

<!-- Go To Top Link -->
<a href="#" class="back-to-top">
  <i class="ti-arrow-up"></i>
</a>

<div id="loading">
  <div id="loading-center">
    <div id="loading-center-absolute">
      <div class="object" id="object_one"></div>
      <div class="object" id="object_two"></div>
      <div class="object" id="object_three"></div>
      <div class="object" id="object_four"></div>
      <div class="object" id="object_five"></div>
      <div class="object" id="object_six"></div>
      <div class="object" id="object_seven"></div>
      <div class="object" id="object_eight"></div>
    </div>
  </div>
</div>

<!-- Main JS  -->
<script type="text/javascript" src="assets/js/jquery-min.js"></script>      
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>    
<script type="text/javascript" src="assets/js/material.min.js"></script>
<script type="text/javascript" src="assets/js/material-kit.js"></script>
<script type="text/javascript" src="assets/js/jquery.parallax.js"></script>
<script type="text/javascript" src="assets/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.slicknav.js"></script>
<script type="text/javascript" src="assets/js/main.js"></script>
<script type="text/javascript" src="assets/js/jquery.counterup.min.js"></script>
<script type="text/javascript" src="assets/js/waypoints.min.js"></script>
<script type="text/javascript" src="assets/js/jasny-bootstrap.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap-select.min.js"></script>
<script type="text/javascript" src="assets/js/form-validator.min.js"></script>
<script type="text/javascript" src="assets/js/contact-form-script.js"></script>    
<script type="text/javascript" src="assets/js/jquery.themepunch.revolution.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.themepunch.tools.min.js"></script>

</body>
</html>