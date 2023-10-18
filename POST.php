<?php 

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = $_POST['name'];
    echo "hello, $name! you used the POST method";
}else{
    echo "Please submit the from using POST.";
}

?>