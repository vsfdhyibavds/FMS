<?php
include('sessions.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Farm Management Dashboard</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <header>
    <h1>Farm Management Dashboard</h1>
    <nav>
      <ul>
        <li><a href="index.php">Dashboard</a></li>
        <li><a href="#" id="view-farm-data">View Farm Data</a></li>
        <li><a href="#" id="add-farm-data">Add Farm Data</a></li>
        <li><a href="logout.php">Log out</a></li>
      </ul>
    </nav>
  </header>

  <main>
    <section id="farm-data">
      <h2>Farm Data</h2>
      <div id="data-container"></div>
    </section>

    <section id="add-data">
      <h2>Add Farm Data</h2>
      <form id="add-data-form" method="POST" action="add_data.php">
        <label for="data-type">Data Type:</label>
        <select id="data-type" name="data-type">
          <option value="crop">Crop</option>
          <option value="livestock">Livestock</option>
        </select>
        <label for="data-value">Value:</label>
        <input type="text" id="data-value" name="data-value" required>
        <button type="submit">Add Data</button>
      </form>
    </section>
  </main>

  <script src="js/script.js"></script>
</body>
</html>
