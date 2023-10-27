<?php
include_once("config.php");

$name = $_POST['Name'];
$name = filter_var($name, FILTER_SANITIZE_STRING);
$comment = $_POST['comment'];
$comment = filter_var($comment, FILTER_SANITIZE_STRING);
$datePosted = date("Y-m-d");
$rating = $_POST['rating']; // Get the rating from the form

$sql = "INSERT INTO tblcomments (Name, Comment, PostedDate, Rating) VALUES (:name, :comment, :datePosted, :rating)";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':name', $name, PDO::PARAM_STR);
$stmt->bindParam(':comment', $comment, PDO::PARAM_STR);
$stmt->bindParam(':datePosted', $datePosted, PDO::PARAM_STR);
$stmt->bindParam(':rating', $rating, PDO::PARAM_INT);
$stmt->execute();

// Show message when data is added
echo "<script>window.location.href = 'film.php';</script>";
?>