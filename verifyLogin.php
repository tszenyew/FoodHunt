<html>
<body>
<?php  
include 'includes/db_connection.php';
$conn = OpenCon();
echo "Connected Successfully";




if( isset($_POST['submitsignup']) ){
	if(strlen($_POST["signupInputEmail"])>4){
			
			$email = $_POST["signupInputEmail"];
			$password = $_POST["signupInputPassword1"];
			

	
	
		
		$sql = "INSERT INTO user ( email,psw) VALUES (  '$email' , '$password');";
	
			
	if ($conn->multi_query($sql) === TRUE) {
		echo "New record created successfully ";
		
		
		
		header("Location: index.php");
		
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
		echo"<script> alert('Error: " . $sql . "<br>" . $conn->error."')</script>";
		echo '<script>history.back();</script>';
		
	}
	}
	}
	

	
	if(isset($_POST['loginsubmit'])){

		if(count($_POST)>0) {
		$result = mysqli_query($conn,"SELECT * FROM user WHERE email='" . $_POST["loginemail"] . "' and psw = '". $_POST["loginpsw"]."'");
		
			$count  = mysqli_num_rows($result);
			if($count==0) {
				echo"<script> alert('Invalid Login Email or Password')</script>";
		
				echo '<script>history.back();</script>';
				
				
				
				
			} else {
				session_start();
				$_SESSION['loginuser']= $_POST["loginemail"]; 
			
				header("Location:index.php");
				
			}
		}
		}
?>
</body>
</html>