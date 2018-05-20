<?php
$servername = "sql110.infinityfree.com";
$username = "if0_40813680";
$password = "EVV9o8U0S7zg";
$dbname = "if0_40813680_eventsx";



$servername = "localhost";
$username = "root";
$password = ""; 
$dbname = "eventsx";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);


// Check connection
if ($conn->connect_error) {
    echo "Failed to connect to the online DB. Switching to local DB.";
    
    

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    echo "Successfully connected to the local DB.";
}
?>
