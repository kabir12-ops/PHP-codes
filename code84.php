<!DOCTYPE html>
<html>
<head><title>Favourite Car Selection</title></head>
<body>
<h2>Select your favourite car</h2>
<form method="post">
    <input type="radio" name="car" value="Nissan"> Nissan
    <input type="radio" name="car" value="Toyota"> Toyota
    <input type="radio" name="car" value="Mitsubishi"> Mitsubishi<br>
    <input type="submit" name="submit" value="Submit">
</form>
<?php if (isset($_POST['submit'])) echo "<div style='border:2px solid #000;padding:10px;width:300px;margin-top:20px;background-color:#f4f4f4;'><strong>" . ($_POST['car'] ?? "Please select a car!") . "</strong></div>"; ?>
<p>Code executed by Kabir(0221BCA165)</p>
</body>
</html>
