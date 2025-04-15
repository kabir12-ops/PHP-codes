<?php
// Create an associative array
    $studentMarks = array(
        "Math" => 85,
        "English" => 78,
        "Science" => 92,
        "History" => 74,
        "Computer" => 88
    );

// Print the marks
    echo "Student Marks:<br>";
    foreach ($studentMarks as $subject => $mark) {
        echo "$subject: $mark<br>";
    }
    echo "<br>";
    echo "Code executed by Kabir(0221BCA165)";
?>
