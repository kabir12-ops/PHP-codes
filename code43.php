<?php
$students = [
    "Manshay" => ["C" => 85, "Algo" => 90, "DS" => 78, "DBMS" => 88],
    "Kabir"   => ["C" => 92, "Algo" => 80, "DS" => 89, "DBMS" => 84],
    "Harsh"   => ["C" => 75, "Algo" => 85, "DS" => 80, "DBMS" => 79]
];

$subjects = array_keys(current($students));
$totals = array_fill_keys(array_keys($students), 0);

echo "<table border='1' cellspacing='0' cellpadding='10'>
<tr><th>SR No</th><th>Subject</th>";

foreach ($students as $name => $_) echo "<th>$name</th>";
echo "</tr>";

foreach ($subjects as $i => $subject) {
    echo "<tr><td>" . ($i + 1) . "</td><td>$subject</td>";
    foreach ($students as $name => $marks) {
        echo "<td>{$marks[$subject]}</td>";
        $totals[$name] += $marks[$subject];
    }
    echo "</tr>";
}

echo "<tr><td colspan='2'><b>Total</b></td>";
foreach ($totals as $total) echo "<td><b>$total</b></td>";
echo "</tr><tr><td colspan='2'><b>Percentage</b></td>";

foreach ($totals as $total) {
    $percentage = number_format($total / count($subjects), 2) . "%";
    echo "<td><b>$percentage</b></td>";
}

echo "</tr></table><br>Code executed by Kabir(0221BCA165)";
?>
