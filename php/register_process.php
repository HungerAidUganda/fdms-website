<?php
include '../includes/db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $statement = $conn->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
    if ($statement->execute([$username, $email, $password])) {
        echo "Registration successful!";
    } else {
        echo "Error: " . $statement->errorInfo()[2];
    }
}
?>
