<?php
include '../includes/db.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_SESSION['user_id'])) {
    $userId = $_SESSION['user_id'];
    $cartItems = $_POST['cart_items']; // Array of product_id and quantity
    $total = 0;

    foreach ($cartItems as $item) {
        $productId = $item['product_id'];
        $quantity = $item['quantity'];
        $statement = $connection->prepare("SELECT price FROM products WHERE id = ?");
        $statement->execute([$productId]);
        $product = $statement->fetch();

        if ($product) {
            $total += $product['price'] * $quantity;
        }
    }

    $statement = $connection->prepare("INSERT INTO orders (user_id, total) VALUES (?, ?)");
    if ($statement->execute([$userId, $total])) {
        $orderId = $connection->lastInsertId();

        foreach ($cartItems as $item) {
            $statement = $connection->prepare("INSERT INTO order_items (order_id, product_id, quantity) VALUES (?, ?, ?)");
            $statement->execute([$orderId, $item['product_id'], $item['quantity']]);
        }

        echo "Order created successfully!";
    } else {
        echo "Error: " . $statement->errorInfo()[2];
    }
}
?>