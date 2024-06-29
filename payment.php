<?php include 'components/header.php'; ?>

<section class="payment">
    <h1>Payment Details</h1>
    <form id="payment-form">
        <label for="card-number">Card Number</label>
        <input type="text" id="card-number" placeholder="Enter your card number" required>
        
        <label for="expiry-date">Expiry Date</label>
        <input type="text" id="expiry-date" placeholder="MM/YY" required>
        
        <label for="cvc">CVC</label>
        <input type="text" id="cvc" placeholder="CVC" required>
        
        <button class="btn" type="submit">Pay Now</button>
    </form>
</section>

<?php include 'components/footer.php'; ?>