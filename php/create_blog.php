<?php
include '../includes/db.php'; // Assuming this file includes PDO initialization

try {
    // Check if request method is POST
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $title = $_POST['title'];
        $content = $_POST['content'];

        // Prepare SQL statement
        $stmt = $conn->prepare("INSERT INTO blog_posts (title, content) VALUES (:title, :content)");
        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':content', $content);

        // Execute SQL statement
        $stmt->execute();

        echo "New blog post created successfully!";
    }
} catch (PDOException $e) {
    // Handle PDO exceptions
    echo "Error: " . $e->getMessage();
} finally {
    // Close the database connection
    $conn = null;
}
?>
