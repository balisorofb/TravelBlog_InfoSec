<?php

@include 'config.php';

session_start();

$user_id = $_SESSION['admin_id'];

if(!isset($user_id)){
  header('location:access_denied.php');
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

.containerrate {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .rating-container {
            width: 70%; /* Set the width to your desired value (e.g., 80%) */
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .rating-header {
            text-align: center;
            font-size: 24px;
            font-weight: bold;
        }

        .rating-label {
            font-size: 16px;
        }

        .rating-bar {
       
            height: 20px;
            display: flex;
            align-items: center;
            border: 1px solid #ddd;
            margin: 5px 0;
            border-radius: 10px;
        }
        .rating-bar1 {
            background-color: pink;
            height: 20px;
            display: flex;
            align-items: center;
            border: 1px solid #ddd;
            margin: 5px 0;
            border-radius: 10px;
        }
        .bar-fill {
            background-color: blue;
            height: 100%;
            border-radius: 10px;
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
        <img src="images/logo-black.png" alt="Logo" width="200"/>
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


     
<<div class="containerrate">
    <div class="rating-container">
        <div class="rating-header">Ratings Distribution</div>
        <div class="rating-label">Average Rating:</div>
        <div class="rating-bar">
            <div class="bar-fill" id="average-rating-bar" style="width: 0%;"></div>
        </div>
        <div class="rating-label"><span id="average-rating">0.00</span> ★★★★★ Average Rating</div>
        <div class="rating-label">Ratings Distribution:</div>
        <div id="rating-distribution"></div>
    </div>

</div>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Sample data for rating distribution
        const ratingsData = [3, 5, 7, 12, 9]; // Replace with your actual data

        // Calculate the average rating
        const totalRatings = ratingsData.reduce((acc, count, i) => acc + (count * (i + 1)), 0);
        const averageRating = totalRatings / ratingsData.reduce((acc, count) => acc + count, 0);

        // Update the average rating display
        const averageRatingDisplay = document.getElementById('average-rating');
        averageRatingDisplay.textContent = averageRating.toFixed(2);

        // Update the average rating bar width
        const averageRatingBar = document.getElementById('average-rating-bar');
        averageRatingBar.style.width = (averageRating * 20) + '%';

        // Create rating distribution bars
        const ratingDistribution = document.getElementById('rating-distribution');
        const starLabels = ['★', '★★', '★★★', '★★★★', '★★★★★'];

        // Calculate the total count of all ratings
        const totalRatingCount = ratingsData.reduce((total, count) => total + count, 0);

        // Create bars for each rating
        for (let i = 0; i < starLabels.length; i++) {
            const ratingLabel = document.createElement('div');
            ratingLabel.classList.add('rating-label');
            ratingLabel.textContent = starLabels[i];

            const ratingBar = document.createElement('div');
            ratingBar.classList.add('rating-bar1');
            const barWidth = (ratingsData[i] / totalRatingCount) * 100 + '%';
            ratingBar.style.width = barWidth;

            const barFill = document.createElement('div');
            barFill.classList.add('bar-fill');

            const countLabel = document.createElement('div');
            countLabel.classList.add('rating-label');
            countLabel.textContent = ratingsData[i] + ' (' + barWidth + ')';

            ratingBar.appendChild(barFill);
            ratingDistribution.appendChild(ratingLabel);
            ratingDistribution.appendChild(ratingBar);
            ratingDistribution.appendChild(countLabel);
        }
    });

</script>

  <script src="https://cdn.jsdelivr.net/npm/chart.js@4.2.1/dist/chart.umd.min.js"></script>  
  <script src="js/chart.js"></script>

  <script src="js/dashboard.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/feather.min.js"></script>
  <script src="js/feather.js"></script>
  <script src="js/ui_admin_dashboard.js"></script>

</body>
</html>

