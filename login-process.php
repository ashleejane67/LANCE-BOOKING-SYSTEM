<?php
session_start();

// Dummy validation (replace with DB check)
$email = $_POST['email'];
$password = $_POST['password'];

// Normally: check DB with email + password
if (isset($_SESSION['registered_email']) && $email === $_SESSION['registered_email']) {
    // Login successful
    $_SESSION['logged_in'] = true;
    $_SESSION['fullname'] = $_SESSION['fullname'] ?? "Customer";
    $_SESSION['customer_id'] = $_SESSION['registered_id'];

    header("Location: dashboard.php");
    exit();
} else {
    // Login failed
    header("Location: login.html?error=1");
    exit();
}
?>
