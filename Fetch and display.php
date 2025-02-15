<?php
//connection
$servername="localhost";
$username="root";
$password="";
$database="studentrecord";
$conn=new mysqli($servername,$username,$password,$database);
if($conn->connect_error){
    die("Failed to connect".connect_error);
}
//fetching data
$sql="SELECT * FROM `records`";
$result=mysqli_query($conn,$sql);
//Find records return
$num=mysqli_num_rows($result);
//fetching the data
if($num>0){
    while($row=mysqli_fetch_assoc($result)){
        echo "Name:".$row['Name']."<br>"."Roll no:"
        .$row['Roll no']."<br>"."Faculty:".$row['Faculty']."<br>".
        "Contact:".$row['contact'];
        echo"<br>";
        echo"<br>";
    }
}
?>
