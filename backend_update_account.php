<?php
    //to include database connection file
    include_once("config.php");
    include_once("error.php");
   

    $id = $_POST['id'];
    $name = $_POST['Name'];
    
    $name = filter_var($name, FILTER_SANITIZE_STRING);
    $email = $_POST['Email'];
    $email = filter_var($email, FILTER_SANITIZE_STRING);

    $pass = $_POST['Password'];
    $pass = filter_var($pass, FILTER_SANITIZE_STRING);
    $pass = password_hash($pass,PASSWORD_DEFAULT);
    $modifiedDate = date("Y-m-d");

    //$result = mysqli_query($mysqli, "UPDATE tblaccounts
    //SET Name='$name', Email='$email', Password='$pass', ModifiedDate='$modifiedDate' WHERE id=$id");

    if(isset($_POST['chkUpdatePass'])){
        $result = $conn->prepare("UPDATE tblaccounts
        SET Name='$name', Email='$email', Password='$pass', ModifiedDate='$modifiedDate' WHERE id=$id");
       // $result->execute([$name, $email,  $pass, $modifiedDate]);

        $result->bind_param("sss", $name, $email, $pass, $modifiedDate);
        $result->execute();
        $result->close();


    }else{
        $result = $conn->prepare("UPDATE tblaccounts
        SET Name='$name', Email='$email', ModifiedDate='$modifiedDate' WHERE id=$id");
        //$result->execute([$name, $email,  $modifiedDate]);

        $result->execute();
  

    }

    //show message when data is updated
    echo "<script>alert('Data updated successfully.');</script>";
    echo "<script>window.location.href = 'ui_manage_account.php';</script>"
?>