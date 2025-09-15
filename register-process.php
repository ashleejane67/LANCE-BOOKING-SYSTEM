<?php
session_start();

// Grab form data
$fullname = $_POST['fullname'];
$email = $_POST['email'];
$password = $_POST['password'];

// Generate unique customer ID (e.g., CUST-202409-001)
$customer_id = "CUST-" . date("Ymd") . "-" . rand(1000, 9999);

// TODO: Save to database instead of session
// Example: mysqli_query($conn, "INSERT INTO users (fullname, email, password, customer_id) VALUES (...)");

$_SESSION['registered'] = true;
$_SESSION['registered_email'] = $email;
$_SESSION['registered_id'] = $customer_id;

// Redirect to login page
header("Location: login.html?registered=1");
exit();
?>
