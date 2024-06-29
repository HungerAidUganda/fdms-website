<?php
include '../includes/db.php';

$statement = $connection->query("SELECT * FROM products");
$products = $statement->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($products);
?>