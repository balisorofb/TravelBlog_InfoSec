<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_id']) || (trim($_SESSION['user_id']) == '')) {
	header("location: access_denied.php");
	exit();
}

?>

<!doctype html>
<html lang="en">
<head>
    <style>
		@import url(https://fonts.googleapis.com/css?family=Oswald:400);

		.navbarHeader{
			background-color:#398B8D;
			background-color:#398B8D;
		}
		.btnDrop{
			border:none;
		}
        .btnUpdate{
		display: block; margin-left: auto; margin-right: auto; margin-top:20px;
		width:100%;
		}
		.dropdown{
			font-size:38px; color:white; text-align:right; margin-right:0px;
		}
		.btnLogout{
			display: block; margin-left: auto; margin-right: auto; margin-top:10px;
			width:100%;
		}
		.imgProfile{
			width:40px; height:40px; border:1px solid white; border-radius:50%;
		}
		.profile{
			width:200px; padding:5px; margin:5px;
		}
		.profilepic{
			width:100px; display: block; margin-left: auto; margin-right: auto; padding:3px;
		}
		.profilename{
			text-align:center; font-size:15px; margin-top:10px;
		}
		.about{
		float: right;
		text-decoration: none;
		color: white;
		font-family: 'Oswald', sans-serif;
		font-size: 20px;
		overflow: hidden;
		letter-spacing: 3px;
		text-align:right; 
		margin-right:-500px;
		}
        </style>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">	
	<title>BlogSite</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="Stylesheet" href="css/home.css">
	<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

	
</head>

<body>


<header>
	<div class="navbar navbar-dark shadow-sm navbarHeader justify-content-end" style="background-color:#cb5b36" >
	    <div class="container" >
	      <a href="#" class="navbar-nav d-flex align-items-end ">
		  <img src="images/tara-laro1.png" alt="Logo" width="200" />
	      </a>

		  <a type='button' class="about" href='index.php'>Home</a>
		  <a type='button' class="about" href='film.php'>Film</a>
		  <a type='button' class="about" href='film.php'>Content</a>
		  <a type='button' class="about" href='about.php'>About Us</a>
		
          <div class="dropdown">
  				<button class="btn dropdown-toggle btnDrop" type="button"  id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
  				<img src="images/userImg.png" alt="" class="imgProfile">
  				</button>
  				<ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
	
    				<li>
						<div class="profile">
							<?php
							$select_profile = $conn->prepare("SELECT * FROM `tblaccounts` WHERE ID = ?");
							$select_profile->execute([$_SESSION['user_id']]);
							$fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);
							?>
							<img src="uploaded_img/<?= $fetch_profile['Image']; ?>" alt="" class="profilepic">
							<p class="profilename"><?= $fetch_profile['Name']; ?></p>

					
							<a href="logout.php" class="btn btn-danger btnLogout"><i class='fas fa-sign-out-alt' ></i> Log out</a>
						</div>
					</li>
    
  				</ul>
		  </div>
		</div>
	</div>
</header>



</body>





<script src="js/bootstrap.min.js"></script>
	
</html>