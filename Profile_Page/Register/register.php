<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once 'user.php';

if (isset($_POST['registerBtn'])) {

    // echo "Received data: ";

    $id = null;
    $name = $_POST['name'];
    $lastName = $_POST['lastName'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $role = 'user';

    // echo "$name, $lastName, $username, $email, $password";

    $user = new User();
    $registrationResult = $user->register($id, $name, $lastName, $username, $email, $password, $role);

    if ($registrationResult === true) {
        // echo "Registration successful";
    } else {
        echo "Registration failed: $registrationResult";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="validation.js"></script>
    <link rel="stylesheet" href="style.css">
    <title>Register Form</title>
</head>
<body>
    <div class="container">
        <form class="register-form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" autocomplete="off">
            <input type="text" name="name" id="name" placeholder="Name" required><br><br>
            <input type="text" name="lastName" id="lastName" placeholder="Last Name" required><br><br>
            <input type="text" name="username" id="username" placeholder="Username" required><br><br>
            <input type="email" name="email" id="email" placeholder="Email" required><br><br>
            <input type="password" name="password" id="password" placeholder="Password" required><br><br>
            <input type="submit" name="registerBtn" value="Register" id="registerBtn">
        </form>
        <span>Already have an account? <a href="../Log-in/Login.php">Log-in</a>.</span>
    </div>
</body>
</html>
