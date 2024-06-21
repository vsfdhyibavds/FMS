<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['username'])) {
  header("Location: login.php");
  exit();
}

// Fetch data from database
$data = [];
$conn = new mysqli('localhost', 'root', '', 'farm_management');
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$result = $conn->query("SELECT type, value FROM farm_data");
while ($row = $result->fetch_assoc()) {
  $data[] = $row;
}

$conn->close();

echo json_encode($data);
?>
