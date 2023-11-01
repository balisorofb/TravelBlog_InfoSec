<?php
include 'config.php';
include_once('crypto.php');
include_once("error.php");
session_start();
if(isset($_POST['submit'])){

   $name = $_POST['name'];
   $name = filter_var($name, FILTER_SANITIZE_STRING);
   $email = $_POST['email'];
   $email = filter_var($email, FILTER_SANITIZE_STRING);
   $pass = password_hash($_POST['password'], PASSWORD_DEFAULT);
   $pass = filter_var($pass, FILTER_SANITIZE_STRING);
   $cpass = password_hash($_POST['cpass'], PASSWORD_DEFAULT);
   $cpass = filter_var($cpass, FILTER_SANITIZE_STRING);
   $user = filter_var('user');
   $accCreated = date("Y-m-d");
   
   $email = encryptData($email);
   $image = $_FILES['image']['name'];
   $image = filter_var($image, FILTER_SANITIZE_STRING);
   $image_size = $_FILES['image']['size'];
   $image_tmp_name = $_FILES['image']['tmp_name'];
   $image_folder = 'uploaded_img/'.$image;

   $select = $conn->prepare("SELECT * FROM `tblaccounts` WHERE Email = ?");
   $select->execute([$email]);

   if($select->rowCount() > 0){
      $message[] = 'user email already exist!';
   }
     else{
         $insert = $conn->prepare("INSERT INTO `tblaccounts`(Name, Email, Password, Usertype, Image, CreatedDate) VALUES(?,?,?,?,?,?)");
         $insert->execute([$name, $email, $pass, $user, $image, $accCreated]);

         if($insert){
            if($image_size > 2000000){
               $message[] = 'image size is too large!';
            }else{
               move_uploaded_file($image_tmp_name, $image_folder);
               $message[] = 'registered successfully!';
               header('location:index.php');
            }
         }

      }
   }



?>