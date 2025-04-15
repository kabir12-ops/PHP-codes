<?php
session_start();

if (isset($_SESSION["lastname"])) {
    unset($_SESSION["lastname"]);
    echo "Session removed.<br>";
} else {
    echo "Session already destroyed.";
}

echo "<br><br>Code executed by Kabir(0221BCA165)";
?>
