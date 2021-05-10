<?php
//connect to your db
$connect=mysqli_connect("example.com","leo","code","my_db");

if (mysqli_connect($connect)){
    echo "Failed to connect:".mysqli_connect_error();
}
//example of getting data
$result = mysqli_query($connect, "SELECT* FROM employees");
while ($row = mysqli_fetch_array($result)){
    echo $row['first_name']." ".$row['last_name'];
    echo "<br>";
}