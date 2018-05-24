<html>
<body>
<?php  
//employer
	if(isset($_POST['submitsignup'])){
		$data_missing = array();
    
		if(empty($_POST['email'])){
			$data_missing[] = 'email';
		} else {
			$empemail = trim($_POST['email']);
		}
		
		if(empty($_POST['psw'])){
			$data_missing[] = 'psw';
		} else {
			$emppass = trim($_POST['emppass']);
		}
		
		if(empty($_POST['empname'])){
			$data_missing[] = 'empname';
		} else {
			$empname = trim($_POST['empname']);
		}
		if(empty($_POST['empphone'])){
			$data_missing[] = 'empphone';
		}else {
			$empphone = trim($_POST['empphone']);
		}
		
	
		
				
		if(empty($data_missing)) {
        
			require_once('config.php');
			session_start();
			
			$query = "INSERT INTO employer (empemail, emppass, empname, empphone) VALUES('$empemail', '$emppass', '$empname', '$empphone')" ;
			
			if (mysqli_query ($mysqli , $query)){
				header("location: home.php");
				mysqli_close($mysqli);
			}else {
				echo "error";
			}
        
		} 
		
		else {
			echo 'You need to enter the following data<br />';
			foreach($data_missing as $missing){
				echo "$missing<br />";
			}
		}
	}
	
        // Applicant
        
        if(isset($_POST['submitSignupApp'])){
		$data_missing = array();
    
		if(empty($_POST['signupInputEmail1'])){
			$data_missing[] = 'signupInputEmail1';
		} else {
			$appemail = trim($_POST['signupInputEmail1']);
		}
		
		if(empty($_POST['signupInputPassword11'])){
			$data_missing[] = 'signupInputPassword11';
		} else {
			$apppass = trim($_POST['signupInputPassword11']);
		}
		
		if(empty($_POST['appname'])){
			$data_missing[] = 'appname';
		} else {
			$appname = trim($_POST['appname']);
		}
                
                
                
		if(empty($_POST['signupPhone1'])){
			$data_missing[] = 'signupPhone1';
		}else {
			$appphone= trim($_POST['signupPhone1']);
		}
		
				
		if(empty($data_missing)) {
        
			require_once('config.php');
			session_start();
			
			$query2 = "INSERT INTO applicant (appemail, apppass, appname, appphone) VALUES('$appemail','$apppass','$appname','$appphone')" ;
			
			if (mysqli_query ($mysqli , $query2)){
				header("location: login.php");
				mysqli_close($mysqli);
			}else {
				echo "error ".mysqli_error($mysqli);
			}
        
		} 
		
		else {
			echo 'You need to enter the following data<br />';
			foreach($data_missing as $missing){
				echo "$missing<br />";
			}
		}
	}
	
        //employer
	if(isset($_POST['submitLoginEmp'])){
		$data_missing = array();
    
		if(empty($_POST['signupInputEmail'])){
			$data_missing[] = 'signupInputEmail';
		} else {
			$username = trim($_POST['signupInputEmail']);
		}
		
		if(empty($_POST['signupInputPassword1'])){
			$data_missing[] = 'signupInputPassword1';
		} else {
			$password = trim($_POST['signupInputPassword1']);
		}
				
		if(empty($data_missing)) {
        
			require_once('config.php');
			session_start();
			
			$query = "SELECT * FROM quickjob WHERE signupInputEmail = '$signupInputEmail' AND signupInputPassword1 = '$signupInputPassword1'" ;
			
			if (mysqli_query ($mysqli , $query)){
				
				$_SESSION['login_user'] = $signupInputEmail;
				$_SESSION['type'] = "u";
				
				header("location: index_logged.php");
				mysqli_close($mysqli);
				
			}else {
				echo "error";
			}
        
		} 
		
		else {
			echo 'You need to enter the following data<br />';
			foreach($data_missing as $missing){
				echo "$missing<br />";
			}
		}
	}
        
        //applicant
        
        if(isset($_POST['submitLoginApp'])){
		$data_missing = array();
    
		if(empty($_POST['signupInputEmail1'])){
			$data_missing[] = 'signupInputEmail1';
		} else {
			$signupInputEmail1 = trim($_POST['signupInputEmail1']);
		}
		
		if(empty($_POST['signupInputPassword11'])){
			$data_missing[] = 'signupInputPassword11';
		} else {
			$signupInputPassword11 = trim($_POST['signupInputPassword11']);
		}
				
		if(empty($data_missing)) {
        
			require_once('config.php');
			session_start();
			
			$query = "SELECT * FROM quickjob WHERE signupInputEmail1 = '$signupInputEmail1' AND signupInputPassword11 = '$signupInputPassword11'" ;
			
			if (mysqli_query ($mysqli , $query)){
				
				$_SESSION['login_user'] = $signupInputEmail;
				$_SESSION['type'] = "u";
				
				header("location: login.php");
				mysqli_close($mysqli);
			}else {
				echo "error";
			}
        
		} 
		
		else {
			echo 'You need to enter the following data<br />';
			foreach($data_missing as $missing){
				echo "$missing<br />";
			}
		}
	}
	
	//employer
	if(isset($_POST['updateUser'])){
		$data_missing = array();
		
		if(empty($_POST['signupInputEmail'])){
			$data_missing[] = 'signupInputEmail';
		} else {
			$signupInputEmail = trim($_POST['signupInputEmail']);
		}
    
		if(empty($_POST['signupInputPassword1'])){
			$data_missing[] = 'signupInputPassword1';
		} else {
			$signupInputPassword1 = trim($_POST['signupInputPassword1']);
		}
		
		if(empty($_POST['signupInputPassword2'])){
			$data_missing[] = 'signupInputPassword2';
		}else {
			$signupInputPassword2 = trim($_POST['signupInputPassword2']);
		}
		
		if(empty($_POST['signupPhone'])){
			$data_missing[] = 'signupPhone';
		}else {
			$signupPhone = trim($_POST['signupPhone']);
		}
		
		
		
		//edit start sini pulak		
		if(empty($data_missing)) {
        
			require_once('config.php');
			session_start();
			
			$query = "UPDATE user set  fullName = '$fullName', emailAddress = '$emailAddress', phoneNumber = '$phoneNumber', address = '$address', password = '$password' WHERE username = '$username'" ;
			
			if (mysqli_query ($mysqli , $query)){
				header("location: myAccount.php");
				mysqli_close($mysqli);
			}else {
				echo "error";
			}
        
		} 
		
		else {
			echo 'You need to enter the following data<br />';
			foreach($data_missing as $missing){
				echo "$missing<br />";
			}
		}
	}
	
	if(isset($_POST['submitMLogin'])){
		$data_missing = array();
    
		if(empty($_POST['username'])){
			$data_missing[] = 'username';
		} else {
			$username = trim($_POST['username']);
		}
		
		if(empty($_POST['password'])){
			$data_missing[] = 'password';
		} else {
			$password = trim($_POST['password']);
		}
				
		if(empty($data_missing)) {
        
			require_once('config.php');
			session_start();
			
			$query = "SELECT * FROM admin WHERE adminUsername = '$username' AND adminPassword = '$password'" ;
			
			if (mysqli_query ($mysqli , $query)){
				
				$_SESSION['login_user'] = $username;
				$_SESSION['type'] = "m";
				
				header("location: index_logged.php");
				mysqli_close($mysqli);
				
			}else {
				echo "error";
			}
        
		} 
		
		else {
			echo 'You need to enter the following data<br />';
			foreach($data_missing as $missing){
				echo "$missing<br />";
			}
		}
	}
	
	if(isset($_POST['submitPSLogin'])){
		$data_missing = array();
    
		if(empty($_POST['username'])){
			$data_missing[] = 'username';
		} else {
			$username = trim($_POST['username']);
		}
		
		if(empty($_POST['password'])){
			$data_missing[] = 'password';
		} else {
			$password = trim($_POST['password']);
		}
				
		if(empty($data_missing)) {
        
			require_once('config.php');
			session_start();
			
			$query = "SELECT * FROM personalshopper WHERE psUsername = '$username' AND psPassword = '$password'" ;
			
			if (mysqli_query ($mysqli , $query)){
				
				$_SESSION['login_user'] = $username;
				$_SESSION['type'] = "ps";
				
				header("location: index_logged.php");
				mysqli_close($mysqli);
				
			}else {
				echo "error";
			}
        
		} 
		
		else {
			echo 'You need to enter the following data<br />';
			foreach($data_missing as $missing){
				echo "$missing<br />";
			}
		}
	}
?>
</body>
</html>