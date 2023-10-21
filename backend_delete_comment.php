<?php
    //include database connection file
    include_once("config.php");
    include_once("error.php");

    $id = $_GET['id'];

    //Delete data from table
   // $result = mysqli_query($mysqli, "DELETE FROM tblcomments WHERE ID=$id");
    $result = $conn->prepare("DELETE FROM tblcomments WHERE ID=$id");
	$result->execute();


    //show message when data is deleted
    echo "<script>alert('Data deleted successfully.');</script>";
    echo"<script>window.location.href = 'ui_manage_comment.php';</script>";

?>