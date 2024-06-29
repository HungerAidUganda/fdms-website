<?php include 'components/header.php'; ?>

<section class="hero">
    <div class="hero-content">
        <h1>FAQs</h1>
        <p>Frequently Asked Questions about Hunger Aid Uganda.</p>
    </div>
</section>

<section class="faq">
    <div class="section-content">
        <h2>Frequently Asked Questions</h2>
        <div class="accordion">
            <div class="accordion-item">
                <button class="accordion-header">
                    What is Hunger Aid Uganda?
                </button>
                <div class="accordion-body">
                    <p>Hunger Aid Uganda is dedicated to providing food assistance to those in need...</p>
                </div>
            </div>
            <div class="accordion-item">
                <button class="accordion-header">
                    How can I donate?
                </button>
                <div class="accordion-body">
                    <p>You can donate through our website by clicking on the donate button...</p>
                </div>
            </div>
            <div class="accordion-item">
                <button class="accordion-header">
                    How are donations used?
                </button>
                <div class="accordion-body">
                    <p>Donations are used to purchase food supplies and other necessities...</p>
                </div>
            </div>
            <!-- Add more accordion items as needed -->
        </div>
    </div>
</section>

<script>
    
    document.querySelectorAll('.accordion-header').forEach(header => {
        header.addEventListener('click', function () {
            const body = this.nextElementSibling;
            this.classList.toggle('active');
            body.style.display = body.style.display === 'block' ? 'none' : 'block';
        });
    });

</script>

<?php include 'components/footer.php'; ?>
