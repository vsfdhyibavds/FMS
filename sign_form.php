<?php
include('db_connect.php');

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Use prepared statements to prevent SQL injection
    $stmt = $conn->prepare("SELECT * FROM user WHERE email =? AND password =?");
    $stmt->bind_param("ss", $email, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 0) {
        echo "<script>alert('Please check your username and password!'); window.location='signin.php'</script>";
    } else {
        $row = $result->fetch_assoc();
        session_start();
        $_SESSION['id'] = $row['user_id'];
        header("Location: dashboard.php");
        exit;
    }
}
?>