<footer class="bg-dark text-white pt-4 pb-3 mt-5">
    <div class="container">
        <div class="row">

            <!-- Quick Links -->
            <div class="col-md-4 mb-3">
                <h6 class="fw-bold text-success mb-3">Quick Links</h6>
                <ul class="list-unstyled">
                    <li><a href="index.php"       class="text-white text-decoration-none">Home</a></li>
                    <li><a href="what-to-do.php"  class="text-white text-decoration-none">What To Do About Plastic</a></li>
                    <li><a href="campaigns.php"   class="text-white text-decoration-none">Campaigns</a></li>
                    <li><a href="how-to-help.php" class="text-white text-decoration-none">How You Can Help</a></li>
                    <li><a href="latest.php"      class="text-white text-decoration-none">Latest on Plastic</a></li>
                    <li><a href="strategy.php"    class="text-white text-decoration-none">Strategy</a></li>
                    <li><a href="developers.php"  class="text-white text-decoration-none">Our Team</a></li>
                    <li><a href="contact.php"     class="text-white text-decoration-none">Contact Us</a></li>
                </ul>
            </div>

            <!-- Social Media -->
            <div class="col-md-4 mb-3">
                <h6 class="fw-bold text-success mb-3">Follow Us</h6>
                <div class="d-flex gap-3 fs-5">
                    <a href="#" class="text-primary  text-decoration-none">Facebook</a>
                    <a href="#" class="text-info     text-decoration-none">Twitter</a>
                    <a href="#" class="text-danger   text-decoration-none">Instagram</a>
                    <a href="#" class="text-danger   text-decoration-none">YouTube</a>
                </div>
            </div>

            <!-- About -->
            <div class="col-md-4 mb-3">
                <h6 class="fw-bold text-success mb-3">PlasticPollutions</h6>
                <p class="text-muted small">An environmental action group at Pentecost University fighting plastic waste for a cleaner world.</p>
            </div>

        </div>

        <hr class="border-secondary">

        <p class="text-center text-muted small mb-0">
            &copy; <?php echo date('Y'); ?> PlasticPollutions &mdash; Pentecost University. All rights reserved.
        </p>
        <p class="text-center text-muted small mb-0">
            Powered by <strong class="text-success">JABISI MPONIGNAN RICARD</strong>
        </p>

    </div>
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo $root ?? ''; ?>js/main.js"></script>
</body>
</html>