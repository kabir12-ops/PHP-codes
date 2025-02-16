<?php
    $terms = 10;
    $first = 0; $second = 1;
    echo "Fibonacci series up to $terms terms: $first, $second";

    for ($i = 3; $i <= $terms; $i++) {
        echo ", " . ($next = $first + $second);
        $first = $second; $second = $next;
    }

    echo "<br><br>";
    echo"Code executed by Kabir(0221BCA165)";

?>
