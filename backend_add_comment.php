<?php 
    // include database connection file
    include_once("config.php");
   

    $comment = $_POST['comment'];
    $comment = filter_var($comment, FILTER_SANITIZE_STRING);
    $datePosted = date("Y-m-d");


    // Insert data into table
   // $result = mysqli_query($mysqli, "INSERT INTO tblcomments(Comment,PostedDate)
  //  VALUES('$comment','$datePosted')");


$result = $conn->prepare("INSERT INTO tblcomments(Comment,PostedDate)
VALUES('$comment','$datePosted')");
          $result->execute();

    // Show message when data is added
    ;
    echo "<script>window.location.href = 'home.php';</script>";
?>