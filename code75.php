<?php
session_start();

echo isset($_SESSION["lastname"]) 
    ? (unset($_SESSION["lastname"]) ? "Session removed.<br>" : "") 
    : "Session already destroyed.";

echo "<br><br>Code executed by Kabir(0221BCA165)";
?>
