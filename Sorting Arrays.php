<?php 
$students = array(

    "alice" =>85,
    "bob" =>78,
    "charlie" => 92,
    "david" => 95
);
arsort($students);

print_r($students);

$numbers = array(45,12,78,23,56);
rsort($numbers, SORT_NUMERIC);

print_r($numbers);


?>