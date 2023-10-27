<?php

@include 'config1.php';
include_once("error.php");
include_once("crypto.php");

session_start();

$user_id = $_SESSION['admin_id'];

if(!isset($user_id)){
  header('location:access_denied.php');
};

?>

<!doctype html>
<html lang="en">
<head>
<style>
@import url(https://fonts.googleapis.com/css?family=Oswald:400);

body {
  font-size: .875rem;
  background: url(images/loginbackground.png) center / cover;

  min-height: 100vh;
  justify-content: center;
  align-items: center;
}

.container{
  position:absolute;
  left:22%;
  width:90%;
}

/* Eloisa */

main.table {
  width: 80vw;
  height: 80vh;
  background-color: #fff5;
  backdrop-filter: blur(5px);
  box-shadow: 0 .4rem .8rem #0005;
  border-radius: .8rem;
  overflow: hidden;
  margin-left: 240px;
  margin-top: 25px;
}

.table_header {
  width: 120%;
  height: 15%;
  background-color: transparent;
  padding: .8rem 1rem;
  border-radius: .8rem;
}

h1 {
  font-family: 'Oswald', sans-serif;
}

.table_body {
  width: 95%;
  max-height: calc(89% - .8rem);
  background-color: #fffb;
  margin: .8rem auto;
  border-radius:  .6rem;
  overflow: auto;
}

.table_body::-webkit-scrollbar {
  width: 0.5rem;
  height: 0.5rem;
}

.table_body::-webkit-scrollbar-thumb {
  border-radius: .5rem;
  background-color: #0004;
  visibility: hidden;
}

.table_body:hover::-webkit-scrollbar-thumb {
  visibility: visible;
}

table, th, td {
  padding: 1rem;
  border-collapse: collapse;
}

table{
  width: 100%;
}

thead th {
  position: sticky;
  top: 0;
  left: 0;
  background-color: #d5d1defe;
}

tbody tr:nth-child(even) {
  background-color: #0000000b;
}

tbody tr:hover {
  background-color: #fff6;
  box-shadow: 8px 8px 8px grey;
}

hr {
  width:83%;
  text-align:left;
  margin-left:0;
}

</style>

	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">	
	<title>Admin | Manage Accounts</title>
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
	<link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/dashboard.css">
  <link rel="stylesheet" href="css/ui_manage_account.css">

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
              <a class="nav-link" href="ui_admin_dashboard.php" >
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
              <a class="nav-link" aria-current="page" href="ui_manage_account.php">
                <span data-feather="users" class="align-text-bottom text-light"></span>
                <span class="accounts" id="active"> Accounts Management </span>
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

      <!--<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h1 class="h2">Users Account Management</h1>
        </div>
        <div class="container table-responsive">
            <table class="table">
            <tbody>
                    <tr>
                        <th>ID</th>
                        <th>Fullname</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Created Date</th>
                        <th>Modified Date</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                //include_once("config.php");
                //$result = mysqli_query($mysqli, "SELECT * FROM tblaccounts ORDER BY id ASC");
                //while($res = mysqli_fetch_array($result)) {
                //  echo "<tr>";
                //  echo "<td>".$res['ID']."</td>";
                //  echo "<td>".$res['Name']."</td>";
                //  echo "<td>".$res['Email']."</td>";
                //  echo "<td>".$res['Password']."</td>";
                //  echo "<td>".$res['CreatedDate']."</td>";
                //  echo "<td>".$res['ModifiedDate']."</td>";
                //  echo "<td>
                //            <a type='button' class='btn btn-info btn-sm' data-toggle='modal' href='ui_update_account.php?id=".$res['ID']."'>EDIT</a>
                //            <a type='button' class='btn btn-danger btn-sm' data-toggle='modal' href='backend_delete_account.php?id=".$res['ID']."'>DELETE</a>
                            
                //        </td>";

                //  echo "<tr>";
              //  }
              //  Mysqli_close($mysqli);

              ?>
              PHP routine to Get Data

                </tbody>
            </table>    

      </main>-->
    
    <main class="table">
      <section class="table_header">
        <h1>Users Account Management</h1>
        <hr>
      </section>
        
      <section class="table_body">
        <table>
          <thead>
            <tr>
              <th>ID</th>
              <th>Fullname</th>
              <th>Email</th>
              <th>Password</th>
              <th>Created Date</th>
              <th>Modified Date</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            <?php
                include_once("config.php");
               
                $result = mysqli_query($mysqli, "SELECT * FROM tblaccounts ORDER BY id ASC");
                while($res = mysqli_fetch_array($result)) {
                  echo "<tr>";
                  echo "<td>".$res['ID']."</td>";
                  echo "<td>".$res['Name']."</td>";
                  echo "<td>".$res['Email']."</td>";
                  echo "<td>".$res['Password']."</td>";
                  echo "<td>".$res['CreatedDate']."</td>";
                  echo "<td>".$res['ModifiedDate']."</td>";
                  echo "<td>
                            <a type='button' class='btn btn-info btn-sm' data-toggle='modal' href='ui_update_account.php?id=".$res['ID']."'>EDIT</a>
                            <a type='button' class='btn btn-danger btn-sm' data-toggle='modal' href='backend_delete_account.php?id=".$res['ID']."'>DELETE</a>
                            
                        </td>";

                  echo "<tr>";
                }
                Mysqli_close($mysqli);
            ?>
          </tbody>
        </table>
      </section>
    </main>
    
    </div>
  </div>
 

  <script src="js/dashboard.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/feather.min.js"></script>
  <script src="js/feather.js"></script>
  
</body>
</html>