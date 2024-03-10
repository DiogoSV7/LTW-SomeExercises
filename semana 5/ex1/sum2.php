<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Soma de 2 números</title>
</head>
<body>
<?php
    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];
    $sum = $num1 + $num2;
    echo "<p>The sum of $num1 and $num2 is: $sum</p>";
?>
<p><a href="sum2.html">Do another sum:</a></p>
</body>
</html>
