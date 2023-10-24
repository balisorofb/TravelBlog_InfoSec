<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['isAuthenticated'])) {
        $isAuthenticated = filter_var($_POST['isAuthenticated'], FILTER_VALIDATE_BOOLEAN);

        // Update the user's authentication status in your session or database
        if ($isAuthenticated) {
            session_start();
            $_SESSION['isAuthenticated'] = true;
            // Update it in the database if applicable
        } else {
            // Handle the case when isAuthenticated is false
        }

        echo 'Authentication status updated.';
    } else {
        echo 'Missing isAuthenticated parameter.';
    }
} else {
    echo 'Invalid request method.';
}