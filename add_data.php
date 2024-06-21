<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['username'])) {
  header("Location: login.php");
  exit();
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $type = $_POST['data-type'];
  $value = $_POST['data-value'];

  // Add database connection and insertion logic here
  $conn = new mysqli('localhost', 'root', '', 'farm_management');
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $stmt = $conn->prepare("INSERT INTO farm_data (type, value) VALUES (?, ?)");
  $stmt->bind_param("ss", $type, $value);
  $stmt->execute();
  $stmt->close();
  $conn->close();

  // Redirect to dashboard
  header("Location: index.php");
  exit();
}
?>
