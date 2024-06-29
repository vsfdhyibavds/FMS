<?php
// Include sessions.php file
include('sessions.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>View Farm Data</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <header>
    <h1>Farm Management Dashboard</h1>
    <nav>
      <ul>
        <li><a href="index.php">Dashboard</a></li>
        <li><a href="view_farm_data.php" id="view-farm-data">View Farm Data</a></li>
        <li><a href="add_farm_data.php" id="add-farm-data">Add Farm Data</a></li>
        <li><a href="logout.php">Log out</a></li>
      </ul>
    </nav>
  </header>

  <main>
    <section id="farm-data">
      <h2>Farm Data</h2>
      <div id="data-container">
        <!-- Display farm data here -->
      </div>
    </section>
  </main>

  <script src="js/script.js"></script>
</body>
</html>