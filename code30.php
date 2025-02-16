<?php
    $number = 153;
    $sum = array_sum(array_map(fn($d) => $d ** strlen($number), str_split($number)));
    echo "$number is " . ($sum == $number ? "" : "not ") . "an Armstrong number.";
    echo "<br><br>Code executed by Kabir(0221BCA165)";
?>
