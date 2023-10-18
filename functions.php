<?php


function factorial($n){
    if($n <= 1){
        return 1;
    }else{
        return $n * factorial($n - 1);
    }
}

$result = factorial(5);
echo "Factorial of 5: $result";


?>