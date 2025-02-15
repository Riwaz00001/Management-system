<?php
$servername="localhost";
$username="root";
$password="";
$conn=new mysqli($servername,$username,$password);
if($conn->connect_error){
    die("Failed to connect".connect_error);
}
echo("Successfully connected");
?>
