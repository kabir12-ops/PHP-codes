<?php
$lat = 28.6139; $lon = 77.2090; $zenith = 90; $timestamp = strtotime("today");
echo "Sunrise: " . date("H:i:s", date_sunrise($timestamp, SUNFUNCS_RET_TIMESTAMP, $lat, $lon, $zenith)) . "<br>";
echo "Sunset: " . date("H:i:s", date_sunset($timestamp, SUNFUNCS_RET_TIMESTAMP, $lat, $lon, $zenith)) . "<br><br>";
echo "Code executed by Kabir(0221BCA165)";
?>
