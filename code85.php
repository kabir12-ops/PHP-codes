<?php
// Database connection
$conn = new mysqli("localhost", "root", "", "mydb");
if ($conn->connect_error) die("Connection failed: " . $conn->connect_error);

// Insert data
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {
    $stud_id = $_POST['stud_id'];
    // Check if ID already exists
    $check = $conn->query("SELECT Stud_ID FROM students WHERE Stud_ID = $stud_id");
    if ($check->num_rows > 0) {
        $msg = "Error: Student ID already exists!";
    } else {
        $sql = "INSERT INTO students (Stud_ID, Stud_Name, Stud_Email, Stud_Contact) 
                VALUES ({$_POST['stud_id']}, '{$_POST['name']}', '{$_POST['email']}', '{$_POST['contact']}')";
        $conn->query($sql) ? $msg = "Record submitted successfully." : $msg = "Error: " . $conn->error;
    }
}

// Delete data
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["delete"])) {
    $sql = "DELETE FROM students WHERE Stud_ID={$_POST['id']}";
    $conn->query($sql) ? $msg = "Record deleted successfully." : $msg = "Error: " . $conn->error;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Student Registration Form</title>
    <style>
        body { font-family: Arial, sans-serif; background: #f4f6f8; }
        .container { max-width: 800px; margin: 20px auto; background: #fff; padding: 20px; border-radius: 10px; }
        label, input, select { display: block; width: 100%; margin-bottom: 10px; }
        button { padding: 10px 20px; background: #007BFF; color: white; border: none; border-radius: 5px; cursor: pointer; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid #ccc; padding: 10px; text-align: center; }
        th { background: #007BFF; color: white; }
    </style>
</head>
<body>
<div class="container">
    <h2>Student Registration Form</h2>
    <form method="POST" action="">
        <label>Student ID:</label> 
        <input type="number" name="stud_id" required>
        
        <label>Name:</label> 
        <input type="text" name="name" required>
        
        <label>Email:</label> 
        <input type="email" name="email" required>
        
        <label>Contact:</label> 
        <input type="text" name="contact" required>
        
        <button type="submit" name="submit">Submit</button>
    </form>
    <?php if (isset($msg)) echo "<p>$msg</p>"; ?>
    
    <h2>Submitted Records</h2>
    <?php
    $result = $conn->query("SELECT * FROM students");
    if ($result->num_rows > 0) {
        echo "<table><tr><th>ID</th><th>Name</th><th>Email</th><th>Contact</th><th>Action</th></tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>{$row['Stud_ID']}</td>
                    <td>{$row['Stud_Name']}</td>
                    <td>{$row['Stud_Email']}</td>
                    <td>{$row['Stud_Contact']}</td>
                    <td>
                        <form method='POST' action='' style='display:inline;'>
                            <input type='hidden' name='id' value='{$row['Stud_ID']}'>
                            <button type='submit' name='delete'>Delete</button>
                        </form>
                    </td>
                  </tr>";
        }
        echo "</table>";
    } else echo "<p>No records found.</p>";
    echo "<br>Code executed by Kabir(0221BCA165)";
    $conn->close();
    ?>
</div>
</body>
</html>