<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = validateInput($_POST['username']);
    $password = validateInput($_POST['password']);

    
    if (isValidUser($username, $password)) {
        echo "Welcome, $username!";
    } else {
        $errors = [];
        if (!isValidUsernameFormat($username)) {
            $errors['username'] = 'Invalid username format';
        }
        if (!isValidPasswordStrength($password)) {
            $errors['password'] = 'Password must be at least 8 characters long';
        }

        echo json_encode(['success' => false, 'errors' => $errors]);
    }
}

function isValidUsernameFormat($username) {
    
    return preg_match('/^[a-zA-Z0-9]+$/', $username);
}

function isValidPasswordStrength($password) {
  
    return strlen($password) >= 8;
}
?>
