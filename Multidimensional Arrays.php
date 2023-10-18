<?php
  
$students = array(

array("name" => "Alice", "grades" => array(85,90,92)),
array("name" => "Bob", "grades" => array(75,80,92)),
array("name" => "Charlie", "grades" => array(93,98,92))

);

echo $students[1]["name"];
echo $students[2]["grades"][1];

foreach($students as $student){
    echo "Name: " . $student["name"] . ", Grades: ";
    foreach($student["grades"] as $grade){
        echo $grade . " ";
    }
    echo "<br>";
}


?>
