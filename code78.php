<?php
$conn = new mysqli("localhost", "root", "");

if ($conn->connect_error) die("Connection failed: " . $conn->connect_error);

echo $conn->query("CREATE DATABASE mydb") 
    ? "Database created successfully" 
    : "Error: " . $conn->error;

$conn->close();
echo "<br><br>Code executed by Kabir(0221BCA165)";
?>
