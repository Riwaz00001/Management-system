<?php
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
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            border:1px solid black;
            width:100%;
            border-collapse:collapse;
            border-radius:5px;
        }
        th{
            border:1px solid white;
            padding:8px;
            font-family:sans-serif;
            font-size:50px;
            color:White;
            background-color:red;
        }
        td{
            border:1px solid white;
            padding:8px;
            font-family:sans-serif;
            font-size:30px;
            color:White;
            background-color:#2c3e50;
        }
        button{
            padding:5px;
            padding-left:30px;
            padding-right:30px;
            border-radius:5px;
            font-family:sans-serif;
            font-size:20px;
            background-color:White;
            font-size:30px;
        }
        button:hover{
            background-color:green;
            color:black;
        }
        button a{
            text-decoration:none;
            color:black;
        }
    </style>
</head>
<body>
    <table>
        <tr>
        <th>Name</th>
        <th>Rollno</th>
<th>Faculty</th>
<th>Contact</th>
<th>Edit</th>
<th>Delete</th>
    </tr>
<tr>
    <?php
    while($row=mysqli_fetch_assoc($result)){ 
        ?>
     <td><?php echo $row['Name'];?></td>
        <td><?php echo $row['Roll no'];?></td>
        <td><?php echo $row['Faculty'];?></td>
        <td><?php echo $row['contact'];?></td>
        <td><center><button><a href="Edit.php?roll=<?php echo $row['Roll no'];?>">Edit</a></button></center></td>
        <td><center><button><a href="Delete.php?roll=<?php echo $row['Roll no'];?>">Delete</a></button></center></td>
    </tr>
    <?php
    }
    ?>
</tr>
    </table>
</body>
</html>