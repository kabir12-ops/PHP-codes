<?php
if (empty($_COOKIE['user'])) {
    setcookie("user", "Manshay", time() + 3600, "/");
    echo "Cookie 'user' set. Refresh to access it.";
} else {
    echo "Welcome, {$_COOKIE['user']}";
}

echo "<br><br>Code executed by Kabir(0221BCA165)";
?>
