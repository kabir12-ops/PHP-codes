<?php
$a = ["a" => 1, "b" => 2, "c" => 3];
$b = ["c" => 4, "d" => 5];

print_r($a + $b); echo "<br>"; // Union
var_dump($a == ["a" => 1, "b" => 2, "c" => 3]); echo "<br>"; // Equality
var_dump($a === ["a" => 1, "b" => 2, "c" => 3]); echo "<br>"; // Identity
var_dump($a != $b); echo "<br>"; // Inequality
var_dump($a !== ["b" => 2, "a" => 1, "c" => 3]); echo "<br><br>"; // Non-identity

echo "Code executed by Kabir(0221BCA165)";
?>
