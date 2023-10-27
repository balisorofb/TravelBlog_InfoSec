<?php

@include 'config.php';
include_once("crypto.php");

session_start();

if(isset($_POST['submit'])){

   $email = $_POST['email'];
   $email = filter_var($email, FILTER_SANITIZE_STRING);
   $pass = password_hash($_POST['pass'], PASSWORD_DEFAULT);
   $pass = filter_var($pass, FILTER_SANITIZE_STRING);

   $email = encryptData($email);
   
   $sql = "SELECT * FROM `tblaccounts` WHERE Email = ?";
   $stmt = $conn->prepare($sql);
   $stmt->execute([$email]);
   $rowCount = $stmt->rowCount();  

   $row = $stmt->fetch(PDO::FETCH_ASSOC);

   if($rowCount > 0){

	  if(!password_verify($pass,$row['Password'])){
		$message[] = 'no user found!';
	  }

      if($row['Usertype'] == 'admin'){

         $_SESSION['admin_id'] = $row['ID'];
         header('location:ui_admin_dashboard.php');

      }elseif($row['Usertype'] == 'user'){

         $_SESSION['user_id'] = $row['ID'];
         header('location:index1.php');
		 echo '<script>var isAuthenticated = true;</script>';

      }else{
         $message[] = 'no user found!';
      }

   }else{
      $message[] = 'incorrect email or password!';
   }

}

?>



<!doctype html>
<html lang="en">
<head>

<style>

	body{
		background-image:url('images/bgtara.jpg');
		background-repeat:no-repeat;
		background-size:cover;
		height:140vh;
		width:100%;
		margin: 0;
	  padding: 0;
	  font-family: 'Poppins', sans-serif;
	  overflow-x: hidden;
	  height: 100vh;
	  margin: auto;
	  display: flex;
	}
	.btnSubmit{
		margin-top:50px
	}
	form{
		background-color: black;
	}

	
  </style>

	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">	
	<title>BlogSite</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/ui_login.css">
</head>

<body>
	<header class="left-container">
		<div class="container" >
			<div class="row">
				<img src="images/tara-laro1.png" class="blackLogo">
			</div>
			<div class="row explore"  >
				<a href="index.php"class="explorebtn" style="background-color:white; color:black; font-family:'Poppins', sans-serif" >EXPLORE </a>
			</div>

		</div>
	</header>

	<main>

	

    <div class="app" >

		<div class="bg"></div>

		<form action="" method="POST">
			<?php

if(isset($message)){
	   foreach($message as $message){
	  echo '
	  <div class="message" style="position:absolute; color:red; margin:auto 0px auto 0px; font-size:medium; font-style:italic; margin-top:-20px; z-index:1;">
	 <span>'.$message.'</span>
 <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
  </div>
';
}
}
?>
			<header>
			
				<h2 class="signin-title"> Sign In </h2> 
				<img src="images/laro-sipa.gif" class="loginicon" width="300">
				
			</header>
		
			<div class="inputs">
				<input type="text" name="email" id="email" placeholder="Enter your Email" required>
				<input type="password" name="pass" id="pass" placeholder="Enter your Password" required>

				<p class="light"><a href="#">Forgot password?</a></p>
			</div>
			<input type="submit" class="btn btn-primary btn-lg btnSubmit" name="submit" value="Login now"  onclick="onSignInSuccess()" >
		</form>

		<footer>
		
			<p>Don't have an account? <a href="ui_register.php">Register Here!</a></p>
		</footer>
	

	</div>
	</main>
	<script src="js/bootstrap.min.js"></script>
	<script>
		function updateAuthenticationStatus(isAuthenticated) {
    var xhr = new XMLHttpRequest();
    var url = 'update-auth-status.php'; // URL of your PHP script

    xhr.open('POST', url, true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
            console.log('Authentication status updated on the server.');
        }
    };

    xhr.send('isAuthenticated=' + isAuthenticated);
}
</script>










</body>

</html>