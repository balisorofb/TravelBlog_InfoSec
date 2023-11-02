
<?php
// Make sure to start the session.
include_once("config1.php");
include_once("config.php");

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
</style>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">	
	<title>Tara-Laro</title>

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
				<source src="images/bath.mp4" type="video/mp4">
				</video>
                </div>
            </div>
        </div>
        <?php
        if (!isset($_SESSION['user_id']) || empty($_SESSION['user_id'])) {
            echo '<button id="playButton" class="btn btn-lg btn-primary">Play Video</button>';
        }
    ?>



<?php
if($_SERVER['REQUEST_METHOD'] == "GET")
{
    $id = $_GET['Id'];
    $result = mysqli_query($mysqli, "SELECT * FROM tblaccounts WHERE ID=$id");
    while($res = mysqli_fetch_array($result))
    {
        $name = $res['Name'];
        $name = filter_var($name, FILTER_SANITIZE_STRING);
        $email = $res['Email'];
        $email = filter_var($email, FILTER_SANITIZE_STRING);
    }
}
}
?>

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
</div>
</div>

   <!-- The Modal -->
   <div class="modal" id="myModal">
 			<div class="modal-dialog">
    			<div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Please Sign In First!</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        Do you already have an account?
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
	  <a type='button' class="btn btn-lg btn-primary" href='ui_login.php'>Sign in Here</a>
	<a type='button' class='btn btn-lg btn-info' href='ui_register.php'>Register Here</a>
      </div>

    </div>
  </div>
</div>






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





	  <section class="py-5" >
	  	<div class="container">
	  		<div class="row">
	  			<div class="col-md-12">
	  				<h1 class="h3 mb-3 fw-normal">Comments</h1>
	  				<table class="table table-striped table-responsive">
                      <thead>
                        <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Message</th>
                        <th scope="col">Post Date</th>
                        </tr>
                    </thead>

                    <tbody>
                        <!--PHP routine to Display Data-->
						<?php
            		    include_once("config1.php");
             		   	$result = mysqli_query($mysqli, "SELECT * FROM tblcomments ORDER BY id DESC");
             		   	while($res = mysqli_fetch_array($result)) {
              		    	echo "<tr>";
                              echo "<td>".$res['Name']."</td>";
              		   		echo "<td>".$res['Comment']."</td>";
              		    	echo "<td>".$res['PostedDate']."</td>";
                		  	echo "<tr>";
              		  	}

            		  ?>
                    </tbody>

                    </table>
	  			</div>
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