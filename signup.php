<?php include 'includes/db_connection.php';
$conn = OpenCon();
echo "Connected Successfully";
session_start();
if(isset($_SESSION['loginuser'])){
    header("location: index.php");
}

?>

<!DOCTYPE html>
<html>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box}
/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
}

/* Add a background color when the inputs get focus */
input[type=text]:focus, input[type=password]:focus {
    background-color: #ddd;
    outline: none;
}

/* Set a style for all buttons */
button {
    background-color: black;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
}

button:hover {
    opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
    padding: 14px 20px;
    background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
    padding: 16px;
}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: #474e5d;
    padding-top: 50px;
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 50%; /* Could be more or less, depending on screen size */
}

/* Style the horizontal ruler */
hr {
    border: 1px solid #f1f1f1;
    margin-bottom: 25px;
}
 
/* The Close Button (x) */
.close {
    position: absolute;
    right: 35px;
    top: 15px;
    font-size: 40px;
    font-weight: bold;
    color: #f1f1f1;
}

.close:hover,
.close:focus {
    color: #f44336;
    cursor: pointer;
}

/* Clear floats */
.clearfix::after {
    content: "";
    clear: both;
    display: table;
}


/* Add Zoom Animation */
.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)} 
    to {-webkit-transform: scale(1)}
}
    
@keyframes animatezoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
    .cancelbtn, .signupbtn {
       width: 100%;
    }
}
</style>
<body>

<form id="signupform" class="modal-content animate" action="verifyLogin.php" onsubmit="return signupValidation()" method="post">
    <div class="container">
      <h1>Sign Up</h1>
     
      <hr>
	  <br>
	  
      <label for="email"><b>Email</b></label>
      <input id = "signupInputEmail" type="text" placeholder="Enter Email" name="signupInputEmail" required>
        <p id="vfailemail"></p>
      <label for="psw"><b>Password</b></label>
      <input id="signupInputPassword1" type="password" placeholder="Enter Password" name="signupInputPassword1" required>
      <p id = "vfailpw"></p>
      <label for="psw-repeat"><b>Repeat Password</b></label>
      <input id="signupInputPassword2" type="password" placeholder="Repeat Password" name="signupInputPassword2" required>
      <p id = "vfailpw2"></p>
      <label>
        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
      </label>
      <input type="hidden" name = "submitsignup">
      <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

      <div class="clearfix">
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
        <button type="button" class="signupbtn" onclick="return signupValidation()">Sign Up</button>
      </div>
    </div>
  </form>
</div>


</body>

<script>
  function signupValidation() {
    mailValidation();
    pwValidation();
    pwMatch();
    if(mailValidation() && pwValidation() && pwMatch()) {
        document.getElementById("signupform").submit();
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





</html>
