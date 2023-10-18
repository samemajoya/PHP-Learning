<?php 

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $username = $_POST['username'];
    $password = $_POST['password'];

    echo "Welcome, $username! Your password is $password.";
}else{
    echo "Invalid from submission.";
}





?>
