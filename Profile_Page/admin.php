
<!-- Art Krasniqi -->

<?php

// Include the DB class
require_once 'Register/db.php';
require_once 'Register/user.php';


// Check if registration form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['registerBtn'])) {
    // Retrieve form data
    $name = $_POST['name'];
    $lastName = $_POST['lastName'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $role = 'user';

    // Create a new instance of User class
    $user = new User();
    
    // Register the user
    $registrationResult = $user->register(null, $name, $lastName, $username, $email, $password, $role);

    if ($registrationResult === true) {
        echo "<script>alert('Registration successful');</script>";
    } else {
        echo "<script>alert('Registration failed: $registrationResult');</script>";
    }
}


$db = new DB(); 
$conn = $db->getConnection(); 

// Check if update form is submitted
if (isset($_POST['updateBtn'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $lastName = $_POST['lastName'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $role = $_POST['role'];

    $sql = $conn->prepare("UPDATE users SET name = :name, lastName = :lastName, username = :username, email = :email, password = :password, role = :role WHERE id = :id");
    $sql->bindParam(':id', $id);
    $sql->bindParam(':name', $name);
    $sql->bindParam(':lastName', $lastName);
    $sql->bindParam(':username', $username);
    $sql->bindParam(':email', $email);
    $sql->bindParam(':password', $password);
    $sql->bindParam(':role', $role);
    $sql->execute();
    echo "<script>alert('User updated successfully');</script>";
}

$sql = "SELECT * FROM users"; 
$stmt = $conn->query($sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: center;
        }

        th {
            background-color: #f2f2f2;
        }

        td {
            background-color: #fff;
        }

        .btn {
            display: inline-block;
            padding: 8px 16px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            text-decoration: none;
            margin-right: 5px;
        }

        .btn:hover {
            background-color: #45a049;
        }

        .center-container {
            text-align: center;
            margin-top: 20px;
        }

        .add-user-btn {
            background-color: #007bff;
        }

        .add-user-btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

<h1>ADMIN DASHBOARD</h1>

<section>
    <h1>Users</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Last Name</th>
            <th>Username</th>
            <th>Email</th>
            <th>Password</th>
            <th>User Type</th> 
            <th>Action</th>
        </tr>
        <?php 
            while($rows=$stmt->fetch(PDO::FETCH_ASSOC))
            {
        ?>
       <tr>
    <td><?php echo $rows['id'] ?></td>
    <td><?php echo $rows['name'];?></td>
    <td><?php echo $rows['lastName'];?></td>
    <td><?php echo $rows['username'];?></td>
    <td><?php echo $rows['email'];?></td>
    <td><?php echo $rows['password'];?></td>
    <td><?php echo $rows['role'];?></td> 
    <td>
        <form method="post">
            <input type="hidden" name="id" value="<?php echo $rows['id']; ?>">
            <input type="text" name="name" value="<?php echo $rows['name']; ?>">
            <input type="text" name="lastName" value="<?php echo $rows['lastName']; ?>">
            <input type="text" name="username" value="<?php echo $rows['username']; ?>">
            <input type="email" name="email" value="<?php echo $rows['email']; ?>">
            <input type="password" name="password" value="<?php echo $rows['password']; ?>">
            <select name="role">
                <option value="user" <?php echo ($rows['role'] == 'user') ? 'selected' : ''; ?>>User</option>
                <option value="admin" <?php echo ($rows['role'] == 'admin') ? 'selected' : ''; ?>>Admin</option>
            </select>
            <button type="submit" class="btn" name="updateBtn">Update</button>
        </form>
        <a href="admin.php?delid=<?php echo htmlentities($rows['id']);?>" 
            onClick="return confirm('Are you sure you want to delete this user?');" class="btn">Delete</a>
    </td>
</tr>

        <?php
            }
        ?>
    </table>
</section>




<!-- Venis Maloku -->

<div class="center-container">
    <h1>Add New User</h1>
    <form method="post">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" required><br>
        <label for="lastName">Last Name:</label><br>
        <input type="text" id="lastName" name="lastName" required><br>
        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username" required><br>
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br>
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password" required><br>
        <button type="submit" name="registerBtn">Register</button>
    </form>
</div>

</body>
</html>