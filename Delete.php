<?php
$servername="localhost";
$username="root";
$password="";
$database="studentrecord";
$conn=new mysqli($servername,$username,$password,$database);
if($conn->connect_error){
    die("Failed to connect".connect_error);
}
$roll = $_GET['roll'];
$sql="DELETE FROM records WHERE `Roll no` = '$roll'";
$result=mysqli_query($conn,$sql);
if($result){
    echo"<script>alert('Deleted successfully');</script>";
}
else{
    echo"<script>alert('Failed to Delete');</script>";
}

?>