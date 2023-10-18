<?php 
$num1 = 10;
$num2 = 5;

$sum = $num1 + $num2;
$difference = $num1 - $num2;

echo "<p>Sum: $sum</p>";
echo "<p>Difference: $difference</p>";

$isEqual = $num1 == $num2;
$isNotEqual = $num1 != $num2;



$isSunny = true;
$isWarm = true;

$goForWalk = $isSunny && $isWarm;
$goForShopping = $isSunny || $isWarm;


echo "<p>Go for a walk: " .var_export($goForWalk, true) . "</p>";
echo "<p>Go for a Shopping: " .var_export($goForShopping, true) . "</p>";









?>