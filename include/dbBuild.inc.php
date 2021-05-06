<?php
$servername = "localhost";
$username = "root";
$password = "";
 
// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    die("ارتباط بر قرار نشد: " . $conn->connect_error);
}

$sql = "CREATE DATABASE keshmoon;";
if ($conn->query($sql) === TRUE) {
    header("location:../index.php?error=none");
} else {
    echo "خطا: " . $conn->error;
}


$conn->close();



