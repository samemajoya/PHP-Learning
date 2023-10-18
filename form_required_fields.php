<?php 

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = validateInput($_POST['name']);
    $email = validateEmail($_POST['email']);

    echo "Hello, $name! Your email is $email";
}

function validateInput($input) {
    return htmlspecialchars(trim($input));
}

function validateEmail($email){
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}



?>