<?php

session_start();

include_once("config.php");
include_once("crypto.php");


ini_set("error" , dirname(__FILE__).'/error.txt'); //errors will be shown in the error_log.txt

$nonce = base64_encode(openssl_random_pseudo_bytes(16)); // Generate a random nonce

if (isset($_POST['email']) && isset($_POST['pass'])) {
$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
$pass = filter_var($_POST['pass'], FILTER_SANITIZE_STRING);

if (!empty($email) && !empty($pass) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
$hashed_pass = password_hash($pass, PASSWORD_DEFAULT);
$stmt = $mysqli->prepare("SELECT * FROM tblaccounts WHERE Email=?");
$stmt->bind_param("s", encryptData($email)); 
$stmt->execute();
$result = $stmt->get_result();

if(mysqli_num_rows($result)>0){
while ($res = mysqli_fetch_assoc($result)){
if (password_verify($pass, $res['Password'])) {
if ($res['Usertype'] == 'admin') {
$_SESSION['Name'] = decryptData($res['Name']);
$_SESSION['Email'] = decryptData($res['Email']);
$_SESSION['Password'] = $pass;
$_SESSION['Usertype'] = $res['Usertype'];

header('Location: ui_admin_dashboard.php');
} else {
$_SESSION['Name'] = decryptData($res['Name']);
$_SESSION['Email'] = decryptData($res['Email']);
$_SESSION['Password'] = $pass;
$_SESSION['Usertype'] = $res['Usertype'];

header('Location: ui_homepage.php');
}
} else {
header('Location: access_denied.php');
}
}
} else {
header('Location: access_denied.php');
}
} else {
header('Location: access_denied.php');
}
}

$mysqli->close();
// we used prepared statements and parameter binding to ensure that user input is properly sanitized and to prevent SQL injection attacks.
?>