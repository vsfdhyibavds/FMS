# Farm Management System

## Overview

The Farm Management System is a web-based application designed to help farm administrators manage various aspects of farm operations. It includes features for managing farm data (crops and livestock), user accounts, inventory, and generating reports. The system is built using PHP, HTML, CSS, and JavaScript.

## Features

- **Dashboard**: Provides an overview of key metrics and recent activities.
- **Farm Data Management**: Allows viewing, adding, updating, and deleting farm data (crops and livestock).
- **User Management**: Enables admin to manage user accounts and roles.
- **Inventory Management**: Manage farm inventory such as seeds, tools, and fertilizers.
- **Reports and Analytics**: Generate and view reports on farm operations.
- **Settings**: Manage system settings.
- **Notifications and Alerts**: Display important notifications and alerts.

## Installation

1. **Prerequisites**:
    - Web server (e.g., Apache)
    - PHP 8.2 or higher
    - MySQL or MariaDB
    - A web browser

2. **Download the Project**:
    - Clone the repository or download the project files to your local machine.

3. **Set Up Database**:
    - Create a new database in MySQL or MariaDB.
    - Import the provided SQL file (`database.sql`) to set up the required tables and initial data.

4. **Configure Database Connection**:
    - Open the `config.php` file.
    - Update the database connection settings (host, username, password, database name).

    ```php
    <?php
    $db_host = 'localhost';
    $db_user = 'root';
    $db_pass = '';
    $db_name = 'farm_management';

    $conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    ?>
    ```

5. **Start the Server**:
    - Place the project files in the web server's root directory (e.g., `htdocs` for XAMPP).
    - Start the Apache server.

6. **Access the Application**:
    - Open your web browser and navigate to `http://localhost/your_project_folder`.

## Project Structure

- **index.php**: The main entry point of the application.
- **dashboard.php**: Admin dashboard page.
- **manage_farm_data.php**: Page for managing farm data.
- **manage_users.php**: Page for managing users.
- **manage_inventory.php**: Page for managing inventory.
- **reports.php**: Page for generating and viewing reports.
- **settings.php**: Page for managing system settings.
- **logout.php**: Script for logging out.
- **css/style.css**: Stylesheet for the application.
- **js/script.js**: JavaScript file for handling client-side interactions.
- **session.php**: Script for managing user sessions.

## Usage

1. **Login**:
    - Access the login page at `http://localhost/your_project_folder/login.php`.
    - Enter your admin credentials to log in.

2. **Dashboard**:
    - View key metrics and recent activities.

3. **Manage Farm Data**:
    - Add, update, or delete crops and livestock data.

4. **Manage Users**:
    - Add, update, or delete user accounts.
    - Assign roles to users (e.g., Farmer, Admin).

5. **Manage Inventory**:
    - Add, update, or delete inventory items.

6. **Reports**:
    - Generate and view various reports related to farm operations.

7. **Settings**:
    - Update system settings.

## Contributing

1. **Fork the Repository**: Click on the 'Fork' button on the repository page to create a copy of the repository under your GitHub account.

2. **Clone the Repository**: Clone the forked repository to your local machine.

    ```sh
    git clone https://github.com/your-username/farm-management-system.git
    ```

3. **Create a Branch**: Create a new branch for your feature or bug fix.

    ```sh
    git checkout -b feature-name
    ```

4. **Make Changes**: Make the necessary changes in your code.

5. **Commit Changes**: Commit your changes to the new branch.

    ```sh
    git commit -m "Description of your changes"
    ```

6. **Push Changes**: Push your changes to your forked repository.

    ```sh
    git push origin feature-name
    ```

7. **Create Pull Request**: Go to the original repository and create a pull request to merge your changes.

## License

This project is licensed under the MIT License.

## Acknowledgements

- Thanks to all contributors and developers of the libraries and frameworks used in this project.

## Contact

For any queries or support, please contact [eugenco578@gmail.com].
