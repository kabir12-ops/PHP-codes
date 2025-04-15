<?php

    $date=date_create("2013-03-15");
    date_add($date,date_interval_create_from_date_string("40 days"));
    echo date_format($date,"Y-m-d");
    echo "<br><br>";
    echo "Code executed by Kabir(0221BCA165)";
?>