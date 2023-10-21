<!--PHP routine to Get Data-->
<?php
    include_once("config1.php");

    session_start();
    
    $user_id = $_SESSION['admin_id'];
    
    if(!isset($user_id)){
       header('location:index.php');
    };

?>


<!doctype html>
<html lang="en">
<head>
  <style>
    @import url(https://fonts.googleapis.com/css?family=Oswald:400);

.navigation {
  width: 100%;
}

.fa-sign-out-alt {
  font-size: 15px;
  float: left;
  color:white;
  padding:2px;
}

.logout {
  font-size: 13px;
  font-family: 'Oswald', sans-serif;
  color:white;
  overflow: hidden;
  letter-spacing: 3px;
}
.logout:hover{
  color:yellow;
}

.button {
	text-decoration: none;
	float: right;
  color: white;
  width: 200px;
  overflow: hidden
}


.dashboard{
        color:gray;
}
.dashboard:hover{
        color: white;
}

#active{
      color:blue;
}
.accounts:hover{
      color:white;
}

.posts:hover{
      color:white;
}

    </style>

    <script>
      var pass = document.getElementById("Password");
      document.querySelector('#chkUpdatePass').addEventListener('click', (event) =>{
      if(event.target.checked){
        pass.readOnly = false;
        pass.value = "";
      }else{
        pass.readOnly = true;
        pass.value = "";
      }
      })
    </script>
    
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">	
	<title>Account Update</title>
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
          <div class="logout" href=""><i class='fas fa-sign-out-alt'></i>LOGOUT</div>
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
                <span class="dashboard"> Dashboard </span>
              </a>
            </li>
          </ul>

          <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted text-uppercase">
            <span class=text-light>DATA ADMINISTRATION</span>
          </h6>
          <ul class="nav flex-column mb-2">
            <li class="nav-item">
              <a class="nav-link" href="ui_manage_account.php" style="color:gray;">
                <span data-feather="users" class="align-text-bottom text-light"></span>
                <span class="accounts" > Accounts Management </span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="ui_manage_comment.php" style="color:gray;">
                <span data-feather="message-circle" class="align-text-bottom text-light" ></span>
                <span class="posts"> Posts Management </span>
              </a>
            </li>
          </ul>
        </div>
      </nav>

<!-- PHP Routine to Get Data -->

<?php
    include_once("config.php");

    if($_SERVER['REQUEST_METHOD'] == "GET")
    {
        $id = $_GET['id'];
        $result = mysqli_query($mysqli, "SELECT * FROM tblaccounts WHERE ID=$id");
        while($res = mysqli_fetch_array($result))
        {
            $name = $res['Name'];
            $name = filter_var($name, FILTER_SANITIZE_STRING);
            $email = $res['Email'];
            $email = filter_var($email, FILTER_SANITIZE_STRING);
        }
    }
    ?>
    
      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h1 class="h2">Edit Users Account</h1>
        </div>

        
        
        <form action="backend_update_account.php" method="POST" name="frmAccountUpdate" enctype="multipart/form-data" autocomplete="off">
        <input type="hidden" class="form-control" id="id" name="id" value="<?php echo $id; ?>">
        <div>
			    <label for="Name" class="text-dark w-50 form-label h6" >NAME:</label>
      	 	<input type="text" class="form-control" id="Name" name="Name" required value="<?php echo $name; ?>" pattern="[A-Z a-z]+{8}" title="Must contain only letters" >
      	</div>
      	 <br>
       	<div>
			    <label for="Email" class="text-dark w-50 form-label h6" >Email:</label>
       	  <input type="text" class="form-control" id="Email" name="Email" required value="<?php echo $email; ?>">
       	</div>
       	<br>  
        <div>
          <label for="Password" class="text-dark w-50 form-label h6" >Password:</label>
       	  <input type="password" class="form-control" id="Password" name="Password" readOnly>
       	</div>
         <div>
          <input type="checkbox" id="chkUpdatePass" name="chkUpdatePass">Update Password?</input>
       	</div>
		    <br>
        <button type="submit"class="btn btn-primary">UPDATE</button>
        <a type="button" class="btn btn-danger" href="ui_manage_account.php">Cancel</a>
        </form>
      </main>
    </div>
  </div>
   
  <script src="js/dashboard.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/feather.min.js"></script>
  <script src="js/feather.js"></script>

</body>
</html>