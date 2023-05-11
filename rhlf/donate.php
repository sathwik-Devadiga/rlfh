<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$a = $_POST['name'];
$b = $_POST['pan'];
$c = $_POST['email'];
$d = $_POST['amount'];
$e = $_POST['address'];
$f = $_POST['city'];
$g = $_POST['state'];
$h = $_POST['country'];
$i = $_POST["type"];

echo "name =".$a;
echo "<br>";
echo "pan =".$b;
echo "<br>";
echo "email =".$c;
echo "<br>";
echo "amount =".$d;
echo "<br>";
echo "address =".$e;
echo "<br>";
echo "city =".$f;
echo "<br>";
echo "state =".$g;
echo "<br>";
echo "country =".$h;
echo "<br>";
echo "mode =".$i;
?>
</body>
</html>

