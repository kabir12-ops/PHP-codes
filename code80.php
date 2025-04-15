<?php
$conn = new mysqli("localhost", "root", "", "mydb");
if ($conn->connect_error) die("Connection failed: $conn->connect_error");

$sql = "ALTER TABLE students
    ADD PRIMARY KEY (Stud_ID),
    ADD UNIQUE KEY Stud_Email (Stud_Email)";

echo $conn->query($sql) 
    ? "Table 'students' altered successfully" 
    : "Error: $conn->error";

$conn->close();
echo "<br><br>Code executed by Kabir(0221BCA165)";
?>
