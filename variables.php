<?php 

$name = "Wizard";
$age = 100;

echo "<p>Hello, $name! you are $age years old.</p>";

$isWizard = true;
$magicLevel = 8.5;

echo "<p>Am I a wizard? " .($isWizard ? "Yes" : "No") . ".</p>";
echo "<p>My magic level is $magicLevel.</p>";

$greeting = "Greeting";
$greeting .= ", magical begings!";

echo "<p>$greeting</p>";

?>