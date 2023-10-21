
<?php

include 'backend_add_account.php';

?>


<!doctype html>
<html lang="en">
<head>

<style>
	body{
		background-image:url('images/indexbg.png');
		background-repeat:no-repeat;
		background-size:cover;
		height:150vh;
		width:100%;
        }
  </style>

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


	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">	
	<title>BlogSite</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/ui_register.css">
</head>



<body>

	<main>
    <form action="" method="POST" name="frmAccountRegistration" enctype="multipart/form-data" autocomplete="off">
    <section class="vh-100">
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-11">
        <div class="card text-black cardText">
          <div class="card-body p-md-5">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

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
                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign up</p>

                <form class="mx-1 mx-md-4">

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
                      <p class="password-label">(Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters) </p></label>  
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
                  

                  <div class="form-check d-flex justify-content-center mb-5">
                    <input class="form-check-input me-2" type="checkbox" value="" id="terms" required>
                    <label class="form-check-label" for="form2Example3">
                      I agree all statements in <a href="#!">Terms of service</a>
                    </label>
                  </div>

                  <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                    <input type="submit" class="btn btn-primary btn-lg" name="submit"></button>
                  </div>
                  <p class="text-center text-muted mt-5 mb-0">Have already an account? <a href="ui_login.php"
                       >Login here</a></p>

                </form>

              </div>
              <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                <img src="images/registerdraw.png"
                  class="img-fluid" alt="Sample image">

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
    
                   
                
               
 
  </form>
	</main>
	<script src="js/bootstrap.min.js"></script>
</body>

</html>