<?php
$filename = "newfile.txt";
if ($file = fopen($filename, "w")) {
    fwrite($file, "Kabir Bhatia\nPHP\n");
    fclose($file);
}

if (file_exists($filename)) {
    echo "File '$filename' created with " . filesize($filename) . " bytes";
} else {
    echo "File '$filename' does not exist";
}

echo "<br><br>Code executed by Kabir(0221BCA165)";
?>
