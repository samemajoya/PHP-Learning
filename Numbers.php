<?php
$integerOne = 42;
$integerTwo = -17;
$floatOne = 3.14;
$floatTwo = -0.75;

$sum = $integerOne + $integerTwo;
$difference = $floatOne - $floatTwo;

echo "<p>sum: $sum</p>";
echo "<p>difference: $difference</p>";

$absoluteValue = abs($integerTwo);
$roundedValue = round($floatOne);
$powerResult = pow($integerOne, 3);

echo "<p>Absolute Value: $absoluteValue</p>";
echo "<p>round Value: $roundedValue</p>";
echo "<p>3 to the power of $integerOne: $powerResult</p>";


$counter = 10;

$incremented = ++$counter;
$decremented = --$counter;

echo "<p>counter: $counter</p>";
echo "<p>Incremented:$incremented</p> ";
echo "<p>Decremented:$decremented</p> ";






?>