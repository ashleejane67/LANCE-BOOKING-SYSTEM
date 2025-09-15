<?php
session_start();

if (!isset($_SESSION['logged_in'])) {
  header("Location: login.html");
  exit();
}

$fullname = $_SESSION['fullname'] ?? "Customer";
$customer_id = $_SESSION['customer_id'] ?? "N/A";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Customer Dashboard | LANCE</title>
  <link rel="stylesheet" href="style.css">
</head>
<body class="dashboard-page">

  <header class="dashboard-header">
    <h1>Welcome back, <span><?php echo htmlspecialchars($fullname); ?></span>!</h1>
    <p>Your Customer ID: <strong><?php echo htmlspecialchars($customer_id); ?></strong></p>
    <div class="dashboard-actions">
      <a href="book-service.html" class="btn primary">📅 Book New Service</a>
      <a href="logout.php" class="btn secondary">⏻ Logout</a>
    </div>
  </header>

  <!-- Tabs -->
  <nav class="dashboard-tabs">
    <button class="active">Dashboard</button>
    <button>Track Service</button>
    <button>Service History</button>
  </nav>

  <!-- Stats + Requests (same as before) -->
</body>
</html>
