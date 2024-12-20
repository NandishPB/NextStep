<?php

// Check if the form is submitted
if (isset($_POST['username']) && isset($_POST['password'])) {

    // Get form data
    $username = $_POST['username'];
    $password = $_POST['password'];

    // **Important:** 
    // 1. **Hash the password:** This is crucial for security. 
    //    Never store passwords in plain text.
    $hashed_password = password_hash($password, PASSWORD_DEFAULT); 

    // **Example: Basic validation (replace with your actual logic)**
    if ($username === 'your_valid_username' && $hashed_password === 'your_valid_hashed_password') {
        // Set cookies (securely)
        setcookie('username', $username, time() + (86400 * 30), '/', '', true, true); // 30 days
        setcookie('password', $hashed_password, time() + (86400 * 30), '/', '', true, true); 

        // Redirect to the same page
        header("Location: {$_SERVER['PHP_SELF']}"); 
        exit;
    } else {
        // Handle invalid credentials
        $error = "Invalid username or password.";
    }
}

// Retrieve stored credentials (if any)
$storedUsername = isset($_COOKIE['username']) ? $_COOKIE['username'] : ''; 
$storedPassword = isset($_COOKIE['password']) ? $_COOKIE['password'] : '';

?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>

    <h2>Login</h2>

    <?php if (isset($error)): ?>
        <p style="color: red;"><?php echo $error; ?></p>
    <?php endif; ?>

    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" value="<?php echo $storedUsername; ?>"><br><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" value="<?php echo $storedPassword; ?>"><br><br>

        <button type="submit">Login</button>
    </form>

</body>
</html>
