
<?php
include 'components/header.php';
include 'includes/db.php';


if (isset($_GET['id'])) {
    $id = intval($_GET['id']); // Sanitize the input
    $sql = "SELECT * FROM blog_posts WHERE id = :id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->execute();

    $post = $stmt->fetch(PDO::FETCH_ASSOC);
} else {
    echo "No post found!";
    exit;
}

$conn = null;
?>


<section>
    <?php if ($post): ?>
        <article class="blog-post">
            <h2><?= htmlspecialchars($post["title"]) ?></h2>
            <p><?= nl2br(htmlspecialchars($post["content"])) ?></p>
            <p>Posted on <?= date('F j, Y', strtotime($post["created_at"])) ?></p>
        </article>
    <?php else: ?>
        <p>Post not found.</p>
    <?php endif; ?>
</section>

<?php include 'components/footer.php'; ?>
