<?php
$conn = new mysqli("localhost", "root", "", "mydb");
if ($conn->connect_error) die("Connection failed: $conn->connect_error");

$sql = "INSERT INTO students (Stud_ID, Stud_Name, Stud_Email, Stud_Contact)
        VALUES (101, 'Akshay', 'akshay@gmail.com', '1234567890')";

echo $conn->query($sql) 
    ? "New record created successfully" 
    : "Error: $conn->error";

$conn->close();
echo "<br><br>Code executed by Kabir(0221BCA165)";
?>
