<?php

@include 'config.php';

session_start();

$admin_id = $_SESSION['admin_id'];

if(!isset($admin_id)){
   header('location:ui_login.php');
};



?>
<!doctype html>
<html lang="en">
<head>
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="css/ui_admin_dashboard.css">

<style>
@import url(https://fonts.googleapis.com/css?family=Oswald:400);

body {
  background-color: var(--veryLightGray); 
}

</style>

	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">	
	<title>Admin Dashboard</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/dashboard.css">

  <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
  <script src="js/jquery-3.6.0.min.js"></script>
  <script src="js/jquery-ui.min.js"></script>
  <script src="js/jquery.validate.min.js"></script>   
</head>

<body>
<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
    <div class="container-fluid">
      <a class="" href="#">
        <img src="images/whiteLogo.png" alt="Logo" width="200"/>
      </a>
        <div class="navigation" >
          <a class="button logoutbtn" href="logout.php">
          <div class="logout" href="logout.php"><i class='fas fa-sign-out-alt'></i>LOGOUT</div>
          </a>
        </div>
    </div>
  </header>



  <div class="container-fluid">
    <div class="row">
      <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
        <div class="position-sticky pt-3 sidebar-sticky bg-dark">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="ui_admin_dashboard.php" >
                <span data-feather="home" class="align-text-bottom dashboard"></span>
                <span class="dashboard" id="active"> Dashboard </span>
              </a>
            </li>
          </ul>

          <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted text-uppercase">
            <span class=text-light>DATA ADMINISTRATION</span>
          </h6>
          <ul class="nav flex-column mb-2">
            <li class="nav-item">
              <a class="nav-link" href="ui_manage_account.php">
                <span data-feather="users" class="align-text-bottom text-light"></span>
                <span class="accounts" > Accounts Management </span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="ui_manage_comment.php">
                <span data-feather="message-circle" class="align-text-bottom text-light" ></span>
                <span class="posts"> Posts Management </span>
              </a>
            </li>
          </ul>
        </div>
      </nav>

      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h1 class="h2">Dashboard</h1>
        </div>


       
        <?php
         $select_accounts = $conn->prepare("SELECT * FROM `tblaccounts`");
         $select_accounts->execute();
         $number_of_accounts = $select_accounts->rowCount();
      ?>

        <div class="row1-container">
          <div class="box box1 cardBox">
            <div>
              <i class="fa fa-user-plus"></i>

              <h2><?= $number_of_accounts; ?> </h2>
              <p> Users Registrations</p>
          </div>
          <div class="container">
             <a href="ui_manage_account.php" class="linkInfo"><p>More Info <i class="fa fa-arrow-circle-right"></i></p> </a>

          </div>
        </div>

        
      <?php
         $select_comments = $conn->prepare("SELECT * FROM `tblcomments`");
         $select_comments->execute();
         $number_of_comments = $select_comments->rowCount();
      ?>
    
        <div class="box box2 cardBox" >
            <i class="fa fa-comments"></i>
            <h6>Comments</h6>
            <p> <h5><?= $number_of_comments; ?></h5> </p>
            <div class="container">
            <a href="ui_manage_account.php" class="linkInfo"><p>More Info <i class="fa fa-arrow-circle-right"></i></p> </a>

          </div>
        </div>

  </div>          
<div>
  <div>


  </main>


    <div class="chartContainer">
      <div class="chart">
        <canvas id="barchart" width="850" height="400"></canvas>
      </div>
    </div>
  
  <script src="https://cdn.jsdelivr.net/npm/chart.js@4.2.1/dist/chart.umd.min.js"></script>  
  <script src="js/chart.js"></script>

  <script src="js/dashboard.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/feather.min.js"></script>
  <script src="js/feather.js"></script>
  <script src="js/ui_admin_dashboard.js"></script>

</body>
</html>

