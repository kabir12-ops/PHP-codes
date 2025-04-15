<?php
$str = strtolower("Hi, my name is Manshay");
$vowelCount = preg_match_all('/[aeiou]/', $str);
echo "Number of vowels in the string: $vowelCount<br><br>";
echo "Code executed by Kabir(0221BCA165)";
?>
