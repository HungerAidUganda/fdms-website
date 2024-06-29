<?php include 'components/header.php'; ?>

<section class="products">
    <h1>Our Subscription Packages</h1>
    <div class="package" data-name="Freemium" data-price="0">
        <h2>Freemium</h2>
        <p>Basic features with limited support.</p>
        <ul>
            <li>User Authentication</li>
            <li>Donor Management</li>
            <li>Beneficiary Management</li>
            <li>Inventory Management</li>
            <li>Distribution Management</li>
        </ul>
        <button class="btn add-to-cart">Select Freemium</button>
    </div>
    <div class="package" data-name="Professional" data-price="29">
        <h2>Professional</h2>
        <p>Includes advanced features and support.</p>
        <ul>
            <li>All Freemium features</li>
            <li>Priority Email Support</li>
            <li>Advanced Reporting and Analytics</li>
            <li>Automated Inventory Alerts</li>
        </ul>
        <button class="btn add-to-cart">Select Professional</button>
    </div>
    <div class="package" data-name="Enterprise" data-price="49">
        <h2>Enterprise</h2>
        <p>All features with premium support.</p>
        <ul>
            <li>All Professional features</li>
            <li>Dedicated Account Manager</li>
            <li>Custom Reporting</li>
            <li>24/7 Support</li>
        </ul>
        <button class="btn add-to-cart">Select Enterprise</button>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Handle adding selected package to cart
    document.querySelectorAll('.add-to-cart').forEach(button => {
        button.addEventListener('click', function() {
            const packageDiv = this.closest('.package');
            const packageName = packageDiv.dataset.name;
            const packagePrice = packageDiv.dataset.price;

            const packageDetails = {
                name: packageName,
                price: packagePrice
            };

            // Store package details in localStorage
            localStorage.setItem('selectedPackage', JSON.stringify(packageDetails));

            // Redirect to cart page
            window.location.href = 'cart.php';
        });
    });
});
</script>

<?php include 'components/footer.php'; ?>
