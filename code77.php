<!DOCTYPE html>
<html>
<head>
    <title>Chessboard</title>
    <style>
        table { border-collapse: collapse; }
        td { width: 50px; height: 50px; }
    </style>
</head>
<body>
    <h3>Chessboard</h3>
    <table border="1">
        <?php
        for ($row = 1; $row <= 8; $row++) {
            echo "<tr>";
            for ($col = 1; $col <= 8; $col++) {
                $color = ($row + $col) % 2 ? "white" : "black";
                echo "<td bgcolor='$color'></td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
    <br><br>
    <?php echo "Code executed by Kabir(0221BCA165)"; ?>
</body>
</html>
