<?php include 'components/header.php'; ?>

<div class="form-container">
    <h2>Login</h2>
    <form action="php/login_process.php" method="POST" class="form">
        <label for="username">Email:</label>
        <input type="email" id="email" name="email" required>
        
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        
        <button type="submit">Login</button>
    </form>
</div>

<?php include 'components/footer.php'; ?>
