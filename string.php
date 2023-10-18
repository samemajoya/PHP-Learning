<?php

$singleQuotes = 'PHP strings are simple.';
$doubleQuotes = "but they offer more flexibility";
$combined = $singleQuotes . ' ' . $doubleQuotes;

echo "<p>$singleQuotes</p>";
echo "<p>$doubleQuotes</p>";
echo "<p>Combined:$combined </p>";


$phrase = 'PHP is a language of elegance';
$length= strlen($phrase);

$firstCharacter = $phrase[0];
$lastCharacter = $phrase[$length - 1];

echo "<p>Phrase length: $length</p>";
echo "<p>first character: $firstCharacter</p>";
echo "<p>last character: $lastCharacter</p>";



?>