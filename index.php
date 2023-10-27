<?php

@include 'config.php';

session_start();


?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            font-family: 'Roboto', sans-serif;
        }

        body {
            background: url("https://images.unsplash.com/photo-1529528744093-6f8abeee511d?auto=format&fit=crop&q=80&w=1740&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1pYWdlfHx8fGVufDB8fHx8fA%3D%3D");
            background-position: center;
            background-size: cover;
            background-clip: border-box;
            background-attachment: fixed;
            min-height: 100vh;
            background-color: #fff; /* Set a background color for the body */
            padding-bottom: 0;
        }

        .navbar {
            justify-content: space-between;
            align-items: center;
            width: 100%;
            color: #fff;
            padding: 10px 0;
        }

        .navbar-brand {
            cursor: pointer;
            width: 10%;
            margin-left: 7%;
        }

        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }

        .nav-items {
            display: inline-block;
            margin: 0 1rem;
            position: relative;
        }

        .nav-items a {
            text-decoration: none;
            font-weight: 600;
            color: #fff;
            transition: transform 0.2s;
        }

        .nav-items a:hover::before {
            content: '';
            width: 100%;
            height: 4px;
            background-image: linear-gradient(90deg, #91228f, #ed1621, #feee03, #2b2e90);
            background-size: 400% 100%;
            background-position: 100%;
            background-repeat: no-repeat;
            position: absolute;
            left: 0;
            bottom: 0;
            transition: background-position 0.3s;
        }

        .nav-items a:hover::before {
            background-position: 0;
        }

        .nav-items a:hover {
            transform: scale(1.1);
        }
        
        .custom-dropdown {
    position: relative;
    display: inline-block;
}

.custom-dropdown-trigger {
    background-color: #333;
    color: white;
    border: none;
    border-radius: 4px;
    padding: 10px;
    cursor: pointer;
}

.custom-dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.custom-dropdown-content .profile {
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    color: #333;
}

.custom-dropdown-content .profile:hover {
    background-color: #ddd;
}

.custom-dropdown:hover .custom-dropdown-content {
    display: block;
}

		.dropdown{
			font-size:38px; color:white; text-align:right;
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

        main{
            max-width: 100%;
            background-color: #faf0e6;
        }

        .container {
            max-width: 100%;
            padding: 10px;
        }

        .overview {
            padding: 20px;
            text-align: center;
        }

        .overview h3 {
            font-size: 24px;
            color: #000;
        }

        .overview p {
            font-size: 16px;
            color: #000;
        }

        .aboutTrad {
            padding: 20px;
            text-align: center;
        }

        .aboutTrad h3 {
            font-size: 24px;
            color: #000;
        }

        .aboutTrad p {
            font-size: 16px;
            color: #000;
        }


        .content {
            padding: 0 4rem;
            text-align: left;
        }

        .button {
            background-color: rgba(255, 255, 255, 1);
            color: red;
            padding: 15px 69px;
            margin-top: 2rem;
            border-radius: 15px 20px;
            font-size: 1.2rem;
            cursor: pointer;
            border: none;
            font-weight: 600;
            transition: all 0.6s ease;
        }

        .button:hover {
            background-color: rgba(255, 255, 255, 0.5);
            color: #000;
            box-shadow: 0 0 2px 3px #fff;
        }
        .button-1 {
            background: rgb(195,34,56);
background: linear-gradient(0deg, rgba(195,34,56,1) 0%, rgba(193,181,41,1) 38%, rgba(206,119,42,1) 61%, rgba(253,121,45,1) 100%);
            color: black;
            padding: 10px;
            margin-top: 2rem;
            border-radius: 6px;
            font-size: 1.2rem;
            cursor: pointer;
            border: none;
            font-weight: 600;
            transition: all 0.6s ease;
        }

        .button-1:hover {
            background-color: rgba(255, 255, 255, 0.5);
            color: #000;
            box-shadow: 0 0 2px 3px #fff;
        }

        h2 {
            letter-spacing: 3px;
            color: darkorange;
            font-size: 5rem;
            margin-top: 9rem;
        }

        p {
            color: black;
            font-size: 1.8rem;
            margin-top: 2rem;
        }

        @media screen and (max-width: 768px) {
            /* Adjust styles for screens up to 768px wide */
            .button {
                left: 0;
            }

            .navbar-collapse {
                text-align: center;
            }

            h1 {
                font-size: 2.9rem;
            }
        }

        @media screen and (max-width: 350px) {
            /* Adjust styles for screens up to 350px wide */
            .button {
                width: 100%;
                font-size: 1rem;
            }

            h2 {
                font-size: 2rem;
            }
        }
        .carousel-inner {
            display: flex;
            flex-direction: column;
            align-items: center;
            transition: transform 0.5s;
        }

        /*Login */
        .loginicon {
            width: 200px;
            margin: 0 auto;
            display: block;
        }
        .inputs {
            text-align: center;
            margin: 20px 0;
        }

        input[type="text"],
        input[type="password"] {
            width: 80%;
            padding: 10px;
            margin: 5px 0;
          
            border-radius: 10px;
            font-size: 16px;
        }

        .light {
            color: #666;
        }

        .btnSubmit {
            background-color: #ff6666; /* Playful Red */
            color: #fff;
            border: none;
            border-radius: 10px;
            padding: 15px 30px;
            font-size: 18px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .btnSubmit:hover {
            background-color: #ff4f4f; /* Lighter Red on hover */
        }

        /* Playful styles for the footer */
        footer {
            text-align: center;
            margin: 20px 0;
          
         
        }
        footer p{
            font-size: medium;
        }
        footer a {
            text-decoration: none;
            color:blue; 
            font-weight: bold;
        }





        .carousel-item {
            margin-bottom: 10px;
        }

        .carousel-control-prev, .carousel-control-next {
            background: transparent;
        }

        .carousel-control-prev-icon, .carousel-control-next-icon {
            font-size: 2rem;
        }

        footer{
            background-color:#ffe4c4 ;
            bottom: 0;
            margin-bottom: 0;
            padding: 10px;
        }



    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="#"><img src="images/logo-black.png" width="100%"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-items">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-items">
                    <a class="nav-link" href="#">Content</a>
                </li>
                <li class="nav-items">
                    <a class="nav-link" href="film.php">Film</a>
                </li>
                <li class="nav-items">
                    <a class="nav-link" href="about.php">About</a>
                </li>
                <li class="nav-items">
                    <a class="nav-link" href="#">Contact</a>
                </li>
            </ul>
            </ul>
            <ul class="navbar-nav ml-auto" style="margin-right: 7%;"> <!-- Added ml-auto class here -->
            <li class="nav-items">
                
            

            
            <?php
if (isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])) {
    // User is logged in, show the profile dropdown menu
    ?>
    <div class="custom-dropdown">
        <div class="custom-dropdown-trigger" style="background-color:transparent;">
        <?php
                $select_profile = $conn->prepare("SELECT * FROM `tblaccounts` WHERE ID = ?");
                $select_profile->execute([$_SESSION['user_id']]);
                $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);
                ?>
            <img src="uploaded_img/<?= $fetch_profile['Image']; ?>" alt="" class="imgProfile">
        </div>
        <div class="custom-dropdown-content">
            <div class="profile">
                <?php
                $select_profile = $conn->prepare("SELECT * FROM `tblaccounts` WHERE ID = ?");
                $select_profile->execute([$_SESSION['user_id']]);
                $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);
                ?>
                <img src="uploaded_img/<?= $fetch_profile['Image']; ?>" alt="" class="profilepic">
                <p class="profilename"><?= $fetch_profile['Name']; ?></p>
                <a href="logout.php" class="btn btn-danger btnLogout"><i class='fas fa-sign-out-alt'></i> Log out</a>
            </div>
        </div>
    </div>
    <?php
} else {
    // User is not logged in, show the Login/Signup button
    echo '<button style="" class="button-1" type="button" data-toggle="modal" data-target="#authModal">Log In / Register</button>';
}
?>
            </li>
        </ul>
        </div>
    </nav>

    <div class="container" style="padding-bottom:50px;">
        <div class="content">
            <h2>TARA <span style="color: #fff;">LARO:</span> <br> <span style="font-size:70% ; color:black;">A 3D Animation Showcasing <br> Filipino Traditional Games </span></h2>
            <p>Let us preserve and recognize our cultural heritage with this 3D Animated Film <br> that showcases some of our Filipino Traditional Games.</p>
            <button class="button">Watch</button>
        </div>
    </div>


<main>
    <!-- Overview Section -->
    <div class="container">
        <section class="overview">
            <h3>Overview</h3>
            <p>Provide an overview of your project here.</p>
        </section>
    </div>


    <!-- Content for the About the Traditional Games section -->
    <div class="container">
    <section class="aboutTrad">
        <h3>About the Traditional Games</h3>
        <p >Learn about the rich history and cultural significance of the traditional games featured in our project.</p>
    </section>
</div>

<!-- CAROUSEL REVIEWS -->
<div class="container mt-5">
    <div id="verticalCarousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <?php
            include_once("config1.php");
            $result = mysqli_query($mysqli, "SELECT * FROM tblcomments ORDER BY id DESC");

            while ($res = mysqli_fetch_array($result)) {
                // Fetch the profile picture from tblaccounts for each comment
                $select_profile = $conn->prepare("SELECT Image FROM tblaccounts WHERE Name = ?");
                $select_profile->execute([$res['Name']]);
                $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);

                echo '<div class="carousel-item">';
                echo '<div class="feedback-box">';
                
                // Comment Column #1: Profile, Name, Date
                echo '<div class="feedback-column-1">';
                // Display the profile picture
                echo '<img src="uploaded_img/' . $fetch_profile['Image'] . '" alt="Profile Picture" class="profilepic">';
                // Display the name
                echo '<span class="feedback-name">' . $res['Name'] . '</span>';
                // Display the date
                echo '<span class="feedback-date">' . $res['PostedDate'] . '</span>';
                echo '</div>';
                
                // Comment Column #2: Stars and Comment Text
                echo '<div class="feedback-column-2">';
                // Display the star ratings
                echo '<div class="star-ratings">';
                $rating = $res['rating'];
                for ($i = 1; $i <= 5; $i++) {
                    // Check if the current star is rated or not
                    $isRated = ($i <= $rating);
                    // Use a different Unicode character (e.g., ★) for rated stars
                    echo '<span class="star ' . ($isRated ? 'rated' : '') . '">' . ($isRated ? '★' : '☆') . '</span>';
                }
                echo '</div>';
                // Display the comment text
                echo '<p class="feedback-text">' . $res['Comment'] . '</p>';
                echo '</div>';
                
                echo '</div>'; // Close feedback-box
                echo '</div>'; // Close carousel-item
            }
            ?>
        </div>
        <a class="carousel-control-prev" href="#verticalCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        </a>
        <a class="carousel-control-next" href="#verticalCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" ariahidden="true"></span>
        </a>
    </div>
</div>
<main>
       
    </div>





    <!-- SIGN IN AND REGISTER MODAL  -->

<!-- The modal -->
<div class="modal fade" id="authModal" tabindex="-1" role="dialog" aria-labelledby="authModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="authModalLabel">Sign In / Register</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <ul class="nav nav-tabs" id="authTabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="signin-tab" data-toggle="tab" href="#signin" role="tab" aria-controls="signin" aria-selected="true">Sign In</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="register-tab" data-toggle="tab" href="#register" role="tab" aria-controls="register" aria-selected="false">Register</a>
                    </li>
                </ul>
                <div class="tab-content" id="authTabsContent">
                    <!-- Sign In Tab -->
                    <div class="tab-pane fade show active" id="signin" role="tabpanel" aria-labelledby="signin-tab">
                        <!-- Sign In form content -->
                        <!-- Your Sign In form code goes here -->
                        <form action="backend_login.php" method="POST">
        <?php
        if (isset($message)) {
            foreach ($message as $message) {
                echo '
                <div class="message" style="position:absolute; color:red; margin:auto 0px auto 0px; font-size:medium; font-style:italic; margin-top:-20px; z-index:1;">
                    <span>' . $message . '</span>
                    <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
                </div>';
            }
        }
        ?>
        <header>
            <img src="images/laro-sipa.gif" class="loginicon" alt="Login Icon">
        </header>

        <div class="form-container">
            <form method="post">
                <div class="inputs">
                 <label class="form-label" for="form3Example3c" style="text-align:left;">Email</label> <br>
                    <input type="text" name="email" id="email" placeholder="Enter your Email" required><br>
                    <label class="form-label" for="form3Example3c">Password</label><br>
                    <input type="password" name="pass" id="pass" placeholder="Enter your Password" required><br>
                </div>
                <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                <input type="submit" class="btn btnSubmit" name="submit" value="Login now ">
                </div>
               
            </form>
           
        </div>
    </form>



                    </div>
                    <!-- Register Tab -->
                    <div class="tab-pane fade" id="register" role="tabpanel" aria-labelledby="register-tab">
                        <!-- Register form content -->
                        <!-- Your Register form code goes here -->
                       
                <?php
                        if(isset($message)){
                     foreach($message as $message){
                    echo '
                    <div class="message" style="color:red; font-size:medium; font-style:italic; text-align:center;">
                    <span>'.$message.'</span>
                    <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
                   </div>
      ';
   }
}

?>
                    <form action="backend_add_account.php" method="post" class="mx-1 mx-md-4">
<br>
<div class="d-flex flex-row align-items-center mb-4">
  <i class="fas fa-user fa-lg me-3 fa-fw"></i>
  <div class="form-outline flex-fill mb-0">
    <label class="form-label" for="Name">Fullname</label>
    <input type="text" pattern="[A-Z a-z]+{8}" title="Must contain only letters" class="form-control" id="name" name="name" Placeholder="Fullname" required>
  </div>
</div>

<div class="d-flex flex-row align-items-center mb-4">
  <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
  <div class="form-outline flex-fill mb-0">
  <label class="form-label" for="form3Example3c">Email</label>
  <input type="email" id="email" class="form-control"  name="email" placeholder="email@example.com" required>
  </div>
</div>

<div class="d-flex flex-row align-items-center mb-4">
  <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
  <div class="form-outline flex-fill mb-0">
    
  <label class="form-label" for="form3Example4c">Password *
    <p class="password-label" style="font-size:15px;">(Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters) </p></label>  
  <input type="password" id="password" class="form-control" name="password"  placeholder="Enter password" 
  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required/>
  </div>
</div>

<div class="d-flex flex-row align-items-center mb-4">
  <i class="fas fa-key fa-lg me-3 fa-fw"></i>
  <div class="form-outline flex-fill mb-0">
  <label class="form-label" for="form3Example4cd">Confirm Password</label>  
  <input type="password" id="cpass" name="cpass" class="form-control" placeholder="Re-type password" required/>
  </div>
</div>

<div class="d-flex flex-row align-items-center mb-4">
  <i class="fa-lg me-3 fa-fw"></i>
  <div class="form-outline flex-fill mb-0">
  <label class="form-label" for="form3Example4cd">Upload Profile Picture</label>  
  <input type="file" name="image" class="box" required accept="image/jpg, image/jpeg, image/png">
  </div>
</div>


<div class="form-check d-flex  mb-5">
  <input class="form-check-input me-2" type="checkbox" value="" id="terms" required>
  <label class="form-check-label" for="form2Example3">
    I agree all statements in <a href="#!">Terms of service</a>
  </label>
</div>

<div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
  <input type="submit" class="btn btn-primary btn-lg" name="submit"></button>
</div>

</form>



                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    var password = document.getElementById("password")
  , confirm_password = document.getElementById("cpass");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Passwords Don't Match");
  } else {
    confirm_password.setCustomValidity('');
  }
  }
password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;
  </script>

<!-- Your JavaScript for handling form submissions can be added here -->
<script>
    // Handle switching to the Register tab
    $(document).on('click', '#switch-to-register', function() {
        // Show the Register tab and hide the Sign In tab
        $('#register-tab').tab('show');
    });

    // Handle form submissions (you can add your AJAX or JavaScript code here)
    $("#signin-form").submit(function(event) {
        event.preventDefault();
        // Add your sign-in form submission logic
        alert("Sign In form submitted.");
    });

    $("#register-form").submit(function(event) {
        event.preventDefault();
        // Add your register form submission logic
        alert("Register form submitted.");
    });
</script>



<?php
include 'footer.php';
?>



    <!-- Bootstrap and jQuery scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
    // TweenMax animation
    const carousel = document.getElementById('verticalCarousel');
    const carouselInner = carousel.querySelector('.carousel-inner');

    gsap.to(carouselInner, {
        y: 0,
        ease: 'none',
        scrollTrigger: {
            trigger: carousel,
            start: 'top top',
            end: '+=100%',
            scrub: 1,
        },
    });
</script>
</body>

</html>
 
