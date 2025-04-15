<?php
$conn = new mysqli("localhost", "root", "", "mydb");
if ($conn->connect_error) die("Connection failed: " . $conn->connect_error);

$sql = "CREATE TABLE students (
    Stud_ID INT(11) NOT NULL,
    Stud_Name VARCHAR(40) NOT NULL,
    Stud_Email VARCHAR(40) NOT NULL,
    Stud_Contact CHAR(10) NOT NULL
)";

echo $conn->query($sql) 
    ? "Table 'students' created successfully" 
    : "Error creating table: " . $conn->error;

$conn->close();
echo "<br><br>Code executed by Kabir(0221BCA165)";
?>
