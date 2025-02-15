<?php
session_start();
$admin_username = "Nist";
$admin_password = "Nist@123";

// Get form data
if($_SERVER['REQUEST_METHOD']=="POST"){
$username = $_POST['name'];
$password = $_POST['pass'];
// Validate credentials
if ($username === $admin_username && $password === $admin_password) {
    // Set session variable
    $_SESSION['admin'] = true;
    // Redirect to dashboard
    header("Location: index.html");
    exit();
} 
else{
    echo"<script>alert('Invalid Username or password');</script>";
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> School Management System</title>
    <style>
        body {
            background: #2c3e50; /* Gradient background */
            color: #f9f9f9;
            font-family: 'Arial', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }
        .container {
            background-color: #ffffff1a; /* Semi-transparent background */
            padding: 30px;
            border-radius: 5px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
            backdrop-filter: blur(8px);
        }
form{
    border-radius: 20px;
    border:2px white solid;
    padding:20px;
}
        h1 {
            text-align: center;
            font-size: 2rem;
            margin-bottom: 10px;
            color: white;
        }
        input[type="text"],
        input[type="password"] {
            width: 90%;
            padding: 12px;
            margin-bottom: 20px;
            border: none;
            border-radius: 5px;
            background-color: #ffffff33; /* Semi-transparent white */
            color: #fff;
            font-size: 1rem;
            outline: none;
        }

        input::placeholder {
            color: #ffffff99; /* Lighter text for placeholders */
        }

        .login-button {
            display: flex;
            justify-content: center;
        }

        button {
            background-color: #2c3e50;
            color: white;
            padding: 12px 20px;
            font-size: 0.9rem;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: all 0.3s ease-in-out;
            margin-top: 15px;
        }

        button:hover {
            background-color: #34495e; 
            transform: scale(1.05); 
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Admin Login</h1>
        <form action="Adminlogin.php" method="post">
        <input type="text" name="name"placeholder="Username" autocomplete="off">
        <input type="password" name="pass" placeholder="Password" autocomplete="off">
        <div class="login-button">
            <button name="submit">LOGIN</button>
        </div>
        </form>
    </div>
</body>
</html>