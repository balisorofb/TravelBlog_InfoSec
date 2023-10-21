<?php
    //include database connection file
    include_once("config.php");
    include_once("error.php");
    
    $id = $_GET['id'];
    $id = filter_var($id, FILTER_SANITIZE_STRING);

    //Delete data from table
    //$result = mysqli_query($mysqli, "DELETE FROM tblaccounts WHERE ID=$id");


    $result = $conn->prepare("DELETE FROM tblaccounts WHERE ID=$id");
	$result->execute();

    //show message when data is deleted
    echo "<script>alert('Data deleted successfully.');</script>";
    echo"<script>window.location.href = 'ui_manage_account.php';</script>";
 
    
    

?>