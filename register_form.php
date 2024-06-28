<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Form</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
<div class="form-container">
    <form action="" method="post">
        <h3>Register Now</h3>
        <?php
        if (!empty($errors)) {
            foreach ($errors as $err) {
                echo '<div class="error-msg">'.$err.'</div>';
            }
        }
        ?>
        <input type="text" name="name" required placeholder="Enter your name">
        <input type="email" name="email" required placeholder="Enter your email">
        <input type="password" name="password" required placeholder="Enter your password">
        <input type="password" name="cpassword" required placeholder="Confirm your password">
        <select name="user_type">
            <option value="user">User</option>
            <option value="admin">Admin</option>
        </select>
        <input type="submit" name="submit" value="Register Now" class="form-btn">
        <p>Already have an account? <a href="login_form.php">Login now</a></p>
    </form>
</div>

</body>
</html>
