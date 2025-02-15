<?php
$servername="localhost";
$username="root";
$password="";
$database="studentrecord";
$conn=new mysqli($servername,$username,$password,$database);
if($conn->connect_error){
    die("Failed to connect".connect_error);
}
echo("Successfully connected");
$sql="CREATE TABLE `studentrecord`.`records` (`Name` VARCHAR(50) NOT NULL , `Roll no` INT NOT NULL , `Faculty` VARCHAR(50) NOT NULL , `contact` BIGINT NOT NULL )";
$result=mysqli_query($conn,$sql);
if($result){
    echo("table is created sucessfully");
}
else{
    echo("table wasnot created".mysqli_error($conn));
}
?>