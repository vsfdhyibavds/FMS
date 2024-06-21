<?php
include('session.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Farm Management Admin Dashboard</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <header>
    <h1>Farm Management Admin Dashboard</h1>
    <nav>
      <ul>
        <li><a href="dashboard.php">Dashboard</a></li>
        <li><a href="manage_farm_data.php">Manage Farm Data</a></li>
        <li><a href="manage_users.php">Manage Users</a></li>
        <li><a href="manage_inventory.php">Manage Inventory</a></li>
        <li><a href="reports.php">Reports</a></li>
        <li><a href="settings.php">Settings</a></li>
        <li><a href="logout.php">Log out</a></li>
      </ul>
    </nav>
  </header>

  <main>
    <section id="overview">
      <h2>Overview</h2>
      <div class="metrics">
        <div class="metric">
          <h3>Total Crops</h3>
          <p>1500</p>
        </div>
        <div class="metric">
          <h3>Total Livestock</h3>
          <p>300</p>
        </div>
        <div class="metric">
          <h3>Active Users</h3>
          <p>45</p>
        </div>
      </div>
      <div class="recent-activities">
        <h3>Recent Activities</h3>
        <ul>
          <li>New crop added: Corn</li>
          <li>New user registered: Farmer John</li>
          <li>Inventory updated: Fertilizer</li>
        </ul>
      </div>
    </section>
  </main>
  <script src="js/script.js"></script>
</body>
</html>
