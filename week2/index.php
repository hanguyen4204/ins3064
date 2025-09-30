<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title></title>
</head>
<body>
<?php
$x = $_GET["x"];
$y = $_GET["y"];
echo "x:  " . $x . "<br/>";
echo "y:  " . $y . "<br/>";
echo "x/y:  " . ($x/$y) . "<br/>";
echo "x%y:  " . ($x%$y) . "<br/>";
echo "x++:  " . ($x++) . "<br/>";
echo "++y:  " . (++$y) . "<br/>";
echo "x + y = :  " . ($x + $y) . "<br/>";
echo "x - y = :  " . ($x - $y) . "<br/>";
echo "x==y:  " . ($x == $y) . "<br/>";
echo "x != y:  " . ($x != $y) . "<br/>";
echo "x < y:  " . ($x < $y) . "<br/>";
echo "x > y:  " . ($x > $y) . "<br/>";
echo "x <= y:  " . ($x <= $y) . "<br/>";
echo "x >= y:  " . ($x >= $y) . "<br/>";
?>
</body>
</html>