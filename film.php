
<?php
// Make sure to start the session.
include_once("config1.php");
include_once("config.php");
include("header.php");


if (isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])) {
    // The user is logged in; set isAuthenticated to true.
    echo '<script>var isAuthenticated = true;</script>';

    // Fetch the user's name from the database based on the user's ID
    $user_id = $_SESSION['user_id'];
    $user_name = ''; // Initialize the variable

    // Query the database to fetch the user's name
    $result = mysqli_query($mysqli, "SELECT Name FROM tblaccounts WHERE ID = '$user_id'");
    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $user_name = $row['Name'];
    }
}
?>

<!doctype html>
<html lang="en">
<head>
<style>
    body{
        background-color: #f7e7ce;
    }
	.site-header{
		background-image:url('images/headerbg.png');
	}
    .play-button {
            width: 100px;
            height: 100px;
            background-color: #FF0000; /* Red background color */
            border-radius: 50%; /* Create a circle */
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
            display: absolute;
        }

        /* Triangle shape to simulate the play icon */
        .play-button::before {
            content: '';
            width: 0;
            height: 0;
            border-top: 20px solid transparent;
            border-bottom: 20px solid transparent;
            border-left: 30px solid #FFF; /* White triangle */
        }

        /* Hover effect (e.g., change background color) */
        .play-button:hover {
            background-color: #FF6666; /* Lighter red on hover */
        }
	.fas{
		background:none;
		border:none;
		width:10%;
		border-radius:50%;
	}
	.fas:hover{
		color:yellow;
		
	}
	.postComment{
		margin-top: 20px;margin-right: 1px;
	}
	.sidebarArticle{
		left:70%;
	}
	.textComment{
		width:100%; height: 228px;
	}
    .comments {
        padding: 20px;
    }

    .comment-box {
        display: flex;
        border: 1px solid #ccc;
        border-radius: 10px;
        padding: 10px;
        margin-bottom: 10px;
        background-color: #f9f9f9;
    }

    .profilepic {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        margin-right: 10px;
    }

    .comment-details {
        display: flex;
        align-items: center;
    }

    .comment-name {
        font-weight: bold;
        margin-right: 10px;
    }

    .comment-text {
        flex-grow: 1;
    }

    .rating {
            display: flex;
            justify-content: center;
            font-size: 24px;
            cursor: pointer;
        }

        .rating i {
            font-size: 24px;
            color: #ccc;
            margin: 0 5px; /* Adjust the margin to control the separation */
        }

        .rating i:hover,
        .rating i.active {
            color: gold;
        }
        .star {
    color: #ffd700;
    font-size: 24px; /* Adjust the size as needed */
}

.star.rated {
    color: #ffd700;
}

.star-ratings {
    display: flex;
    align-items: center;
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
.feedback-box {
    display: flex;
    border: 1px solid #e0e0e0;
    padding: 15px;
    margin: 10px 0;
}

.feedback-column-1 {
    flex: 1;
    display: flex;
    flex-direction: column;
    align-items: center;
}

.feedback-column-2 {
    flex: 3;
    padding: 0 20px;
    display: flex;
    flex-direction: column;
}

.star-ratings {
    margin-top: 10px;
    font-size: 20px;
    color: #ffd700; /* Color of rated stars */
}

.star {
    font-size: 20px;
    color: #ddd; /* Color of unrated stars */
}

.rated {
    color: #ffd700; /* Color of rated stars */
}

.profilepic {
    max-width: 100px;
    border-radius: 50%;
}

.feedback-name {
    font-weight: bold;
}

.feedback-date {
    color: #888;
}
.container video{
    filter: brightness(0.80); 
}

</style>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">	
	<title>Tara-Laro</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="Stylesheet" href="css/home.css">
	<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="embed-responsive embed-responsive-16by9">
                <video id="videoPlayer">
                    <source src="images/bath.mp4" type="video/mp4" class="video">
                </video>
                <?php
                if (!isset($_SESSION['user_id']) || empty($_SESSION['user_id'])) {
                    echo '<button id="playButton" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); z-index: 1;" class="play-button" type="button" data-toggle="modal" data-target="#authModal"></button>';
                }
                ?>
            </div>
        </div>
            </div>

<!-- COMMENT-->

<br>
<br>
<form action="backend_add_comment.php" method="POST" name="frmAccountUpdate" enctype="multipart/form-data" autocomplete="off">
    <!-- Include a hidden input field to submit the user's name -->
    <input type="hidden" class="form-control" id="Name" name="Name" value="<?php echo $user_name; ?>">
    
    <div>
        <?php
        $sanitizedName = '';

        // Check if the "user_id" is set in the session
        if (isset($_SESSION['user_id'])) {
            $user_id = $_SESSION['user_id'];

            // Prepare and execute the query
            $select_profile = $conn->prepare("SELECT * FROM tblaccounts WHERE ID = :user_id");
            $select_profile->bindParam(':user_id', $user_id, PDO::PARAM_INT);
            $select_profile->execute();

            $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);

            // Check if the 'Name' key exists in the fetched profile array
            if (isset($fetch_profile['Name'])) {
                $sanitizedName = htmlspecialchars($fetch_profile['Name'], ENT_QUOTES, 'UTF-8');
            }
        }
        ?>
        
        <div class="profile-info">
            <label for="Name" class="text-dark w-50 form-label h6">Name:</label>
            <input type="text" class="form-control" id="Name" name="Name" required value="<?php echo $sanitizedName; ?>" readonly>
        </div>
        
        <br>
        <div>
            <label for="Email" class="text-dark w-50 form-label h6">Comment:</label>
            <textarea id="comment" name="comment" class="textComment" onkeyup="this.value=this.value.replace(/[^a-zA-Z0-9.!?,-]/g, ' ')" required></textarea>
        </div>
        
        <br>
        <div>
            <label for="rating" class="text-dark w-50 form-label h6">Rating:</label>
            <div class="rating">
                <i class="far fa-star" data-rating="1"></i>
                <i class="far fa-star" data-rating="2"></i>
                <i class="far fa-star" data-rating="3"></i>
                <i class="far fa-star" data-rating="4"></i>
                <i class="far fa-star" data-rating="5"></i>
            </div>
            <input type="hidden" id="rating" name="rating" value="0" required>
        </div>
        
        <br>
        <?php
        if (!isset($_SESSION['user_id']) || empty($_SESSION['user_id'])) {
            echo '<button type="button" class="btn btn-primary" id="submit-button">SUBMIT</button>';
        }
        ?>
    </div>
</form>

    <script>
        const stars = document.querySelectorAll('.rating i');
        const ratingInput = document.getElementById("rating");

        stars.forEach(star => {
            star.addEventListener("click", () => {
                const rating = parseInt(star.getAttribute("data-rating"));
                ratingInput.value = rating;
                stars.forEach(s => s.classList.remove("active"));
                for (let i = 0; i < rating; i++) {
                    stars[i].classList.add("active");
                    stars[i].classList.remove("far");
                    stars[i].classList.add("fas");
                }
            });
        });
    </script>











<!--
<form action="backend_add_comment.php" method="POST" name="frmAccountUpdate" enctype="multipart/form-data" autocomplete="off">
<input type="hidden" class="form-control" id="id" name="id" value="<?php echo $id; ?>">
					    <h1 class="h3 mb-3 fw-normal">Post Comments</h1>
						<input type="text" class="form-control" id="Name" name="Name" required value="<?php echo $name; ?>" readonly>
					    <div class="mb-3">
						    <textarea id="comment" name="comment" class="textComment" onkeyup="this.value=this.value.replace(/[^a-z A-Z0-9.!?,]/g, '')" required ></textarea>
						</div>

					   <button class="btn btn-lg btn-primary" type="submit">Submit Post</button>
					
					</div>
	</form>
    -->
</div>
</div>
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
  <i class="fas fa-key fa-lg me-3 fa-fw"></i>
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





  <!-- AUTHENTICATE IF USER NOT LOG In -->

  <script>
    var modal = document.getElementById('myModal');
    var video = document.getElementById('videoPlayer');
    var closeBtn = document.getElementById('closeModal');
    var isAuthenticated = <?php echo (isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])) ? 'true' : 'false'; ?>;
    var playButton = document.getElementById('playButton');
    var submitButton = document.getElementById('submit-button');

    // Intercept form submission
    submitButton.addEventListener('click', function (event) {
        if (!isAuthenticated) {
            event.preventDefault(); // Prevent the form from submitting
            playButton.click(); // Trigger the click event on playButton to open the modal
        }
    });

    if (!isAuthenticated) {
        // User is not authenticated, show the modal when they try to play the video.
        playButton.addEventListener('click', function () {
            modal.style.display = 'block';
            video.pause();
        });

        closeBtn.addEventListener('click', function () {
            modal.style.display = 'none';
        });

        // Show the play button for logged-out users
        playButton.style.display = 'block';
    } else {
        // User is authenticated, enable video controls and hide the play button.
        video.setAttribute('controls', 'controls');
        playButton.style.display = 'none';
    }
</script>

    
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







<div class="container">
        <h1 class="h3 mb-3 fw-normal">Comments</h1>
        <div class="comments">
            <?php
            include_once("config1.php");
            $result = mysqli_query($mysqli, "SELECT * FROM tblcomments ORDER BY id DESC");

            while ($res = mysqli_fetch_array($result)) {
                // Fetch the profile picture from tblaccounts for each comment
                $select_profile = $conn->prepare("SELECT Image FROM tblaccounts WHERE Name = ?");
                $select_profile->execute([$res['Name']]);
                $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);

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
                echo '<p class="feedback-text" style="font-size:20px">' . $res['Comment'] . '</p>';
                echo '</div>';
                
                echo '</div>'; // Close feedback-box
            }
            ?>
        </div>
    </div>
</section>



	<script src="js/bootstrap.min.js"></script>
	<script src="js/script.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    
	
</body>
<?php
include("footer.php");
?>
</html>