<?php
    $name = "CodeExplorer";
    $age = 30;

    if($age >=18){
        echo "<p>Welcome , $name! you are eligible.</p>";
    }else{
        echo "<p>Sorry , $name! you are not eligible.</p>";
    }

    echo "<ul>";
    for($i = 1; $i <=5; $i++){
        echo "<li>Item $i</li>";
    }
    echo "</ul>";
?>
