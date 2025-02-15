<?php
$servername="localhost";
$username="root";
$password="";
$database="studentrecord";
$conn=new mysqli($servername,$username,$password,$database);
if($conn->connect_error){
    die("Failed to connect".connect_error);
}
if($_SERVER['REQUEST_METHOD'] == 'POST') 
{
$name=$_POST ['name'];
$rollno=$_POST ['rollno'];
$faculty=$_POST ['faculty'];
$number=$_POST ['number'];
    $sql="INSERT INTO `records` 
    (`Name`, `Roll no`, `Faculty`, `contact`) VALUES 
    ('$name', '$rollno', '$faculty', '$number')";
    $result=mysqli_query($conn,$sql);
    if($result){
        echo"<script>alert('Data added successfully');</script>";
    }
    else{
        die(mysqli_error($conn));
    }
}
?>