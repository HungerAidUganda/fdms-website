<?php
include '../includes/db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $image = $_POST['image'];

    $statement = $connection->prepare("INSERT INTO products (name, description, price, image) VALUES (?, ?, ?, ?)");
    if ($statement->execute([$name, $description, $price, $image])) {
        echo "Product added successfully";
    } else {
        echo "Error: " .$statement->errorInfo()[2];
    }
}

?>