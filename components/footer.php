    </main>
    <footer>
        <nav>
            <ul>
                <li><a href="privacy.php">Privacy Policy</a></li>
                <li><a href="terms&conditions.php">Terms & Conditions</a></li>
                <li><a href="blog.php">Blog</a></li>
                <li><a href="register.php">Register</a></li>
                <li><a href="login.php">Login</a></li>
            </ul>
        </nav>
        <p>&copy; 2024 FDMS</p>
    </footer>
    <script>
    /* Fetching Data from GitHub profiles */
    async function fetchGitHubUser(username) {
        try {
            const response = await fetch(`https://api.github.com/users/${username}`);
            const data = await response.json();
            document.getElementById(`avatar-${username}`).src = data.avatar_url;
            document.getElementById(`name-${username}`).textContent = data.name || username;
        } catch (error) {
            console.error('Error fetching GitHub user:', error);
        }
    }

    document.querySelectorAll('.team-member').forEach(member => {
        const username = member.dataset.username;
        fetchGitHubUser(username);
    });

</script>

</body>
</html>
