<?php
/* Operators in PHP
1. Arithmetic Operators
2. Assignment Operators
3. Comparison Operators 
4. Logical Operators
*/

$a = 2;
$b = 8;

// 1. Arithmetic Operators
echo "For a + b, the result is ". ($a + $b) . "<br>";

echo "For a - b, the result is ". ($a - $b) . "<br>";

echo "For a * b, the result is ". ($a * $b) . "<br>";

echo "For a / b, the result is ". ($a / $b) . "<br>";

echo "For a % b, the result is ". ($a % $b) . "<br>";

echo "For a ** b, the result is ". ($a ** $b) . "<br>";
 



// 3. Comparison Operators 
$x = 78;
$y = 78;



echo "For x <> y, the result is "; 
echo var_dump($x <> $y);
echo "<br>";


// 4. Logical Operators

$m = true;
$n = true;

echo "For m and n, the result is "; 
echo var_dump($m and $n);
echo "<br>";

echo "For m && n, the result is "; 
echo var_dump($m && $n);
echo "<br>";

echo "For m or n, the result is "; 
echo var_dump($m or $n);
echo "<br>";

echo "For m || n, the result is "; 
echo var_dump($m || $n);
echo "<br>";

echo "For !m , the result is "; 
echo var_dump(!$m);
echo "<br>";



?>
