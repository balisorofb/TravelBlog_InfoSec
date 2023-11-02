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
         header('location:index.php');
		 echo '<script>var isAuthenticated = true;</script>';
        
      }else{
        header('location:index1.php#authModal');
         $message[] = 'no user found!';
      }

   }else{
    $message[] = 'incorrect email or password!';
    echo '<script>alert("' . $errorMessage . '");</script>';
    header('location:index.php');
     
   }

}

?>