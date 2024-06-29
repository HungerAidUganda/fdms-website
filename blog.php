<?php
include 'components/header.php';
include 'includes/db.php';

$sql = "SELECT * FROM blog_posts ORDER BY created_at DESC";
$posts = [];

if ($result = $conn->query($sql)) {
    if ($result->rowCount() > 0) {  // Change from num_rows for PDO
        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            $posts[] = $row;
        }
    }
} else {
    echo "Error: " . $conn->errorInfo()[2];  // Correct PDO error handling
}

$conn = null;
?>

<section class="blog">
    <div class="section-content">
        <h2>Latest Blog Posts</h2>
        <?php if (!empty($posts)): ?>
            <?php foreach ($posts as $post): ?>
                <div class="blog-post">
                    <h3><?= htmlspecialchars($post["title"]) ?></h3>
                    <p><?= htmlspecialchars(substr($post["content"], 0, 200)) ?>...</p>
                    <p><a href="blog_post.php?id=<?= $post["id"] ?>">Read more</a></p>
                    <p>Posted on <?= date('F j, Y', strtotime($post["created_at"])) ?></p>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <p>No blog posts found.</p>
        <?php endif; ?>
    </div>
</section>

<?php include 'components/footer.php'; ?>
