<?php

@include 'config.php';

session_start();
session_unset();
session_destroy();

header('location:ui_login.php');

?>