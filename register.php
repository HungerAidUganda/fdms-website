<?php include 'components/header.php'; ?>

<div class="form-container">
    <h2>Register</h2>
    <form action="php/register_process.php" method="POST" class="form">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        
        <label for="confirm_password">Confirm Password:</label>
        <input type="password" id="confirm_password" name="confirm_password" required>
        
        <button type="submit">Register</button>
    </form>
</div>

<?php include 'components/footer.php'; ?>
