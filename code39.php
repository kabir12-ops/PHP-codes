<?php
function isArmstrong($num) {
    $sum = 0;
    $numLength = strlen((string)$num);
    for ($temp = $num; $temp > 0; $temp = (int)($temp / 10)) {
        $sum += pow($temp % 10, $numLength);
    }
    return $sum == $num;
}

$number = 153;
echo $number . (isArmstrong($number) ? " is an Armstrong number." : " is not an Armstrong number.") . "<br><br>";
echo "Code executed by Kabir(0221BCA165)";
?>
