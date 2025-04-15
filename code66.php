<?php
date_default_timezone_set("Asia/Kolkata");

$dob = new DateTime("2005-01-01");
$today = new DateTime();
$age = $today->diff($dob);

echo "Date of Birth: {$dob->format("Y-m-d")}<br>";
echo "Today's Date: {$today->format("Y-m-d")}<br><br>";
echo "Age: {$age->y} years {$age->m} months {$age->d} days<br><br>";
echo "Code executed by Kabir(0221BCA165)";
?>
