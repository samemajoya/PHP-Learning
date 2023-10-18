
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];

    echo "Hello, $name! Your email is $email.";
} else {
    echo "Please submit the form.";
}
?>
