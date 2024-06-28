<?php
session_start();

if (!isset($_SESSION['id'])) {
    header("Location: login_form.php");
    exit;
}

// ... Your admin page content ...

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>Welcome to the Admin Page</h1>
    <a href="logout_form.php">Logout</a>
    <!-- Your admin page content here -->
</body>
</html>
