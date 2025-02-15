<?php
$servername="localhost";
$username="root";
$password="";
$database="studentrecord";
$conn=new mysqli($servername,$username,$password,$database);
if($conn->connect_error){
    die("Failed to connect".connect_error);   
}
$roll= $_GET['roll'];
if($_SERVER['REQUEST_METHOD'] == "POST"){
    $name=$_POST ['name'];
    $rollno=$_POST ['rollno'];
    $faculty=$_POST ['faculty'];
    $number=$_POST ['number'];
    $sql="UPDATE `records` SET `Name`='$name',
    `Roll no`='$rollno',`Faculty`='$faculty',
    `contact`='$number' WHERE `Roll no` = '$roll'";
    $result=mysqli_query($conn,$sql);
    if($result){
        echo("<script>alert('edited successfully');</script>");
    }
    else{
        echo("<script>alert('failed to edit');</script>");
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School Management System</title>
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

        h3 {
            text-align: center;
            font-size:1.2rem;
            margin-bottom: 20px;
            color: #ffffff;
        }
        input[type="text"],
        input[type="number"] {
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
        <h1>National School Of Sciences</h1>
        <h3 >Lainchour, Kathmandu</h3>
        <form method="post">
        <input type="text" name="name" placeholder="New Name" autocomplete="off">
        <input type="number"name="rollno" placeholder="New Rollno" autocomplete="off">
        <input type="text" name="faculty" placeholder="New Faculty" autocomplete="off">
        <input type="number" name="number" placeholder="New Number">
        <div class="login-button">
            <button name="submit">EDIT</button>
        </div>
        </form>
    </div>
</body>
</html>