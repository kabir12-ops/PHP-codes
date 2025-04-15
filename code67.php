<?php
date_default_timezone_set("Asia/Kolkata");

echo "Current Date and Time: " . date("Y-m-d H:i:s") . "<br><br>";
echo "Current Time: " . date("h:i:s A") . "<br>";
echo "Current Date: " . date("d-m-Y") . "<br>";
echo "Day: " . date("l") . "<br>";
echo "Unix Timestamp: " . time() . "<br>";

$custom = "2025-04-05 08:30:00";
echo "Timestamp for $custom: " . strtotime($custom) . "<br>";
echo "Date after 1 week: " . date("Y-m-d", strtotime("+1 week")) . "<br>";
echo "Date 10 days ago: " . date("Y-m-d", strtotime("-10 days")) . "<br><br>";

echo "Code executed by Kabir(0221BCA165)";
?>
