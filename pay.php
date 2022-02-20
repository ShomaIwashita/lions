<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="styles.css" type="text/css">
<title>Payroll Calculator</title>
</head>
<body>
<h1>Compute your weekly pay</h1>
<?php
$hours = $_GET["hours"];
$rate = $_GET["rate"];
if ($hours <= 40)
$pay = $hours * $rate;
else
$pay = 40*$rate + ($hours-40)*1.5*$rate;
echo "Your hours: $hours<br>";
echo "Your rate: $rate<br>";
echo "Your pay is \$$pay";
?>
<p><a href="index.html">Back to Shoma Iwashita's page</a></p>
</body>
</html>

