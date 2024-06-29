<?php include 'components/header.php'; ?>

<section class="contact-us">
    <h1>Contact Us</h1>
    <p>If you have any questions or inquiries, feel free to reach out to us using the information below or the form.</p>
    
    <div class="contact-details">
        <p><strong>Phone:</strong> +256 (788) 833-366</p>
        <p><strong>Email:</strong> support@hau.com</p>
        <p><strong>Address:</strong> 3A Mpanga Close, Kampala, Uganda</p>
    </div>
    
    <form class="contact-form">
        <label for="name">Name</label>
        <input type="text" id="name" name="name" placeholder="Your Name" required>

        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="Your Email" required>

        <label for="message">Message</label>
        <textarea id="message" name="message" rows="5" placeholder="Your Message" required></textarea>

        <button type="submit">Send Message</button>
    </form>
</section>

<?php include 'components/footer.php'; ?>
