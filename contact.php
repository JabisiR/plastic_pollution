<?php
$pageTitle = "Contact Us";
include 'includes/header.php';
include 'db/connection.php';

$success = "";
$error   = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name    = htmlspecialchars(trim($_POST['name']));
    $email   = htmlspecialchars(trim($_POST['email']));
    $subject = htmlspecialchars(trim($_POST['subject']));
    $message = htmlspecialchars(trim($_POST['message']));

    if (empty($name) || empty($email) || empty($subject) || empty($message)) {
        $error = "All fields are required.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = "Please enter a valid email address.";
    } elseif (strlen($message) < 10) {
        $error = "Message must be at least 10 characters.";
    } else {
        // In a real system you would send an email or save to DB
        // For now we show a success message
        $success = "Thank you <strong>$name</strong>! Your message has been received. 
                   We will get back to you at <strong>$email</strong> shortly.";
    }
}
?>

<?php include 'includes/navbar.php'; ?>

<!-- PAGE HEADER -->
<section class="bg-success text-white py-5 text-center">
    <div class="container">
        <h1 class="fw-bold display-5">
            <i class="fas fa-envelope me-3"></i>Contact Us
        </h1>
        <p class="lead opacity-75 mt-2">
            We'd love to hear from you. Send us a message!
        </p>
    </div>
</section>

<section class="py-5">
    <div class="container">
        <div class="row g-5">

            <!-- Contact Form -->
            <div class="col-md-7">
                <div class="card border-0 shadow">
                    <div class="card-body p-5">
                        <h4 class="fw-bold text-success mb-4">
                            <i class="fas fa-paper-plane me-2"></i>Send Us a Message
                        </h4>

                        <?php if($error): ?>
                            <div class="alert alert-danger">
                                <i class="fas fa-exclamation-circle me-2"></i>
                                <?php echo $error; ?>
                            </div>
                        <?php endif; ?>
                        <?php if($success): ?>
                            <div class="alert alert-success">
                                <i class="fas fa-check-circle me-2"></i>
                                <?php echo $success; ?>
                            </div>
                        <?php endif; ?>

                        <form method="POST" action="" id="contactForm">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label class="form-label fw-semibold">Full Name</label>
                                    <input type="text" name="name" class="form-control"
                                           placeholder="John Doe"
                                           value="<?php echo $_POST['name'] ?? ''; ?>" 
                                           required>
                                    <div class="invalid-feedback">
                                        Please enter your name.
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label fw-semibold">Email Address</label>
                                    <input type="email" name="email" class="form-control"
                                           placeholder="john@example.com"
                                           value="<?php echo $_POST['email'] ?? ''; ?>" 
                                           required>
                                    <div class="invalid-feedback">
                                        Please enter a valid email.
                                    </div>
                                </div>
                                <div class="col-12">
                                    <label class="form-label fw-semibold">Subject</label>
                                    <select name="subject" class="form-select" required>
                                        <option value="">-- Select a Subject --</option>
                                        <option value="General Enquiry"
                                            <?php echo (($_POST['subject'] ?? '') == 
                                            'General Enquiry') ? 'selected' : ''; ?>>
                                            General Enquiry
                                        </option>
                                        <option value="Donation Enquiry"
                                            <?php echo (($_POST['subject'] ?? '') == 
                                            'Donation Enquiry') ? 'selected' : ''; ?>>
                                            Donation Enquiry
                                        </option>
                                        <option value="Volunteer"
                                            <?php echo (($_POST['subject'] ?? '') == 
                                            'Volunteer') ? 'selected' : ''; ?>>
                                            I Want to Volunteer
                                        </option>
                                        <option value="Campaign Partnership"
                                            <?php echo (($_POST['subject'] ?? '') == 
                                            'Campaign Partnership') ? 'selected' : ''; ?>>
                                            Campaign Partnership
                                        </option>
                                        <option value="Media"
                                            <?php echo (($_POST['subject'] ?? '') == 
                                            'Media') ? 'selected' : ''; ?>>
                                            Media & Press
                                        </option>
                                        <option value="Other"
                                            <?php echo (($_POST['subject'] ?? '') == 
                                            'Other') ? 'selected' : ''; ?>>
                                            Other
                                        </option>
                                    </select>
                                    <div class="invalid-feedback">
                                        Please select a subject.
                                    </div>
                                </div>
                                <div class="col-12">
                                    <label class="form-label fw-semibold">Message</label>
                                    <textarea name="message" class="form-control" 
                                              rows="6" placeholder="Write your message here..."
                                              required><?php echo $_POST['message'] ?? ''; ?>
                                    </textarea>
                                    <div class="invalid-feedback">
                                        Message must be at least 10 characters.
                                    </div>
                                    <small class="text-muted">
                                        Minimum 10 characters. 
                                        <span id="charCount">0</span> characters typed.
                                    </small>
                                </div>
                                <div class="col-12">
                                    <button type="submit" 
                                            class="btn btn-success w-100 fw-bold py-3">
                                        <i class="fas fa-paper-plane me-2"></i>Send Message
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Contact Info -->
            <div class="col-md-5">

                <!-- Info Cards -->
                <div class="card border-0 shadow-sm mb-4">
                    <div class="card-body p-4">
                        <h5 class="fw-bold text-success mb-4">
                            <i class="fas fa-info-circle me-2"></i>Get In Touch
                        </h5>
                        <div class="d-flex align-items-start mb-4">
                            <div class="bg-success text-white rounded-circle d-flex 
                                 align-items-center justify-content-center me-3 flex-shrink-0"
                                 style="width:45px;height:45px;">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div>
                                <h6 class="fw-bold mb-1">Address</h6>
                                <p class="text-muted mb-0">
                                    Pentecost University<br>
                                    Sowutuom, Accra<br>
                                    Ghana
                                </p>
                            </div>
                        </div>
                        <div class="d-flex align-items-start mb-4">
                            <div class="bg-success text-white rounded-circle d-flex 
                                 align-items-center justify-content-center me-3 flex-shrink-0"
                                 style="width:45px;height:45px;">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div>
                                <h6 class="fw-bold mb-1">Email</h6>
                                <p class="text-muted mb-0">
                                    info@plasticpollutions.edu.gh<br>
                                    support@plasticpollutions.edu.gh
                                </p>
                            </div>
                        </div>
                        <div class="d-flex align-items-start mb-4">
                            <div class="bg-success text-white rounded-circle d-flex 
                                 align-items-center justify-content-center me-3 flex-shrink-0"
                                 style="width:45px;height:45px;">
                                <i class="fas fa-phone"></i>
                            </div>
                            <div>
                                <h6 class="fw-bold mb-1">Phone</h6>
                                <p class="text-muted mb-0">
                                    +233 30 000 0000<br>
                                    +233 24 000 0000
                                </p>
                            </div>
                        </div>
                        <div class="d-flex align-items-start">
                            <div class="bg-success text-white rounded-circle d-flex 
                                 align-items-center justify-content-center me-3 flex-shrink-0"
                                 style="width:45px;height:45px;">
                                <i class="fas fa-clock"></i>
                            </div>
                            <div>
                                <h6 class="fw-bold mb-1">Office Hours</h6>
                                <p class="text-muted mb-0">
                                    Monday – Friday: 8am – 5pm<br>
                                    Saturday: 9am – 1pm
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Social Media -->
                <div class="card border-0 shadow-sm mb-4">
                    <div class="card-body p-4">
                        <h5 class="fw-bold text-success mb-3">
                            <i class="fas fa-share-alt me-2"></i>Follow Us
                        </h5>
                        <div class="d-flex gap-3">
                            <a href="#" class="btn btn-primary fw-bold">
                                <i class="fab fa-facebook me-1"></i>Facebook
                            </a>
                            <a href="#" class="btn btn-info text-white fw-bold">
                                <i class="fab fa-twitter me-1"></i>Twitter
                            </a>
                            <a href="#" class="btn btn-danger fw-bold">
                                <i class="fab fa-instagram me-1"></i>Instagram
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Quick FAQ -->
                <div class="card border-0 shadow-sm">
                    <div class="card-body p-4">
                        <h5 class="fw-bold text-success mb-3">
                            <i class="fas fa-question-circle me-2"></i>Quick FAQ
                        </h5>
                        <div class="accordion accordion-flush" id="faqAccordion">
                            <div class="accordion-item border-bottom">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed px-0 fw-semibold" 
                                            type="button" data-bs-toggle="collapse" 
                                            data-bs-target="#faq1">
                                        How can I volunteer?
                                    </button>
                                </h2>
                                <div id="faq1" class="accordion-collapse collapse" 
                                     data-bs-parent="#faqAccordion">
                                    <div class="accordion-body px-0 text-muted">
                                        Fill the contact form above selecting 
                                        "I Want to Volunteer" as the subject and 
                                        we will reach out to you.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item border-bottom">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed px-0 fw-semibold" 
                                            type="button" data-bs-toggle="collapse" 
                                            data-bs-target="#faq2">
                                        How do I donate?
                                    </button>
                                </h2>
                                <div id="faq2" class="accordion-collapse collapse" 
                                     data-bs-parent="#faqAccordion">
                                    <div class="accordion-body px-0 text-muted">
                                        Register or log into your account and 
                                        visit the Donate page from your dashboard.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed px-0 fw-semibold" 
                                            type="button" data-bs-toggle="collapse" 
                                            data-bs-target="#faq3">
                                        How quickly do you respond?
                                    </button>
                                </h2>
                                <div id="faq3" class="accordion-collapse collapse" 
                                     data-bs-parent="#faqAccordion">
                                    <div class="accordion-body px-0 text-muted">
                                        We aim to respond to all enquiries 
                                        within 24–48 working hours.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<script>
// Character counter for message field
const message  = document.querySelector('textarea[name="message"]');
const charCount = document.getElementById('charCount');

if (message) {
    message.addEventListener('input', function () {
        charCount.textContent = this.value.length;
        if (this.value.length < 10) {
            charCount.classList.add('text-danger');
            charCount.classList.remove('text-success');
        } else {
            charCount.classList.add('text-success');
            charCount.classList.remove('text-danger');
        }
    });
}

// Client side validation before submit
document.getElementById('contactForm').addEventListener('submit', function(e) {
    const name    = document.querySelector('input[name="name"]').value.trim();
    const email   = document.querySelector('input[name="email"]').value.trim();
    const subject = document.querySelector('select[name="subject"]').value;
    const msg     = document.querySelector('textarea[name="message"]').value.trim();

    if (!name || !email || !subject || !msg) {
        e.preventDefault();
        alert('Please fill in all fields before submitting.');
        return;
    }

    if (msg.length < 10) {
        e.preventDefault();
        alert('Your message must be at least 10 characters long.');
        return;
    }
});
</script>

<?php include 'includes/footer.php'; ?>