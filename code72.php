<?php
session_start();

$_SESSION["firstname"] = "Kabir";
$_SESSION["lastname"] = "Bhatia";

echo "First name: {$_SESSION['firstname']}<br>";
echo "Last name: {$_SESSION['lastname']}<br><br>";
echo "Code executed by Kabir(0221BCA165)";
?>
