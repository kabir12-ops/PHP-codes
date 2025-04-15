<?php
date_default_timezone_set("Asia/Kolkata");

$lat = 28.6139; $lon = 77.2090;
$date = date("Y-m-d");
$time = time();

$sunrise = date_sunrise($time, SUNFUNCS_RET_STRING, $lat, $lon, 90, 5.5);
$sunset  = date_sunset($time, SUNFUNCS_RET_STRING, $lat, $lon, 90, 5.5);

echo "Date: $date<br>Sunrise in New Delhi: $sunrise AM<br>Sunset in New Delhi: $sunset PM<br><br>";
echo "Code executed by Kabir(0221BCA165)";
?>
