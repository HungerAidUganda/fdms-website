<?php include 'components/header.php'; ?>

<section class="cart">
    <h1>Your Subscription</h1>
    <div class="cart-item">
        <h2>Selected Package: <span id="package-name">Professional</span></h2>
        <p>Features included:</p>
        <ul id="package-features">
            <li>All Freemium features</li>
            <li>Priority Email Support</li>
            <li>Advanced Reporting and Analytics</li>
            <li>Automated Inventory Alerts</li>
        </ul>
        <p>Price: <span id="package-price">$29/month</span></p>
    </div>
    <button class="btn" id="checkout-btn">Proceed to Checkout</button>
</section>

<script>
    window.addEventListener('DOMContentLoaded', function() {
        const packageDetails = JSON.parse(localStorage.getItem('selectedPackage'));
        const successBar = document.getElementById('success-bar');



        if (packageDetails) {
            document.getElementById('package-name').textContent = packageDetails.name;
            document.getElementById('package-price').textContent = `$${packageDetails.price}/month`;
        } else {
            alert('No package selected. Redirecting to products page.');
            window.location.href = 'products.php';
        }

        document.getElementById('checkout-btn').addEventListener('click', function() {
            localStorage.setItem('successMessage', 'Proceeding to checkout...');
            window.location.href = 'payment.php';
        });
    });
</script>



<style>
    .success-bar {
        display: none;
        background-color: #4CAF50;
        color: white;
        text-align: center;
        padding: 10px;
        position: relative;
        z-index: 1000;
    }
</style>

<?php include 'components/footer.php'; ?>
