<?php

define("PI", 3.1416);

$radius = 5;
$area = PI * $radius * $radius;

echo "<p>The area of a circle with radius $radius is $area</p>";

echo "<p>Current file: " . __FILE__ . "</P>";
echo "<p>Current line: " . __LINE__ . "</P>";
echo "<p>Current Directory: " . __DIR__ . "</P>";

echo "<p>PHP Version: " .PHP_VERSION . "</p>";
echo "<p>PHP Os: " .PHP_OS . "</p>";
echo "<p>Maximum Integer: " .PHP_INT_MAX . "</p>";






?>