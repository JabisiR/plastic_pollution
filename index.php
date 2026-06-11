<?php
$pageTitle = "Home";
include 'includes/header.php';
include 'db/connection.php';

// Visitor Counter — insert every visit
mysqli_query($conn, "INSERT INTO visitors (visit_time) VALUES (NOW())");
$visitorCount = mysqli_fetch_assoc(mysqli_query($conn, "SELECT COUNT(*) as total FROM visitors"));
$totalVisitors = $visitorCount['total'];
?>

<?php include 'includes/navbar.php'; ?>

<!-- COOKIE NOTIFICATION -->
<div id="cookieBanner" class="position-fixed bottom-0 start-0 end-0 bg-dark text-white 
     p-3 z-3 d-flex justify-content-between align-items-center flex-wrap gap-2"
     style="z-index:9999;">
    <p class="mb-0">
        <i class="fas fa-cookie-bite text-warning me-2"></i>
        We use cookies to improve your experience on our website.
        <a href="#" class="text-warning">Learn More</a>
    </p>
    <button class="btn btn-warning btn-sm fw-bold" onclick="acceptCookies()">
        Accept Cookies
    </button>
</div>

<!-- SIGN UP MODAL -->
<div class="modal fade" id="signupModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0 shadow">
            <div class="modal-header bg-success text-white">
                <h5 class="modal-title fw-bold">
                    <i class="fas fa-leaf me-2"></i>Join PlasticPollutions
                </h5>
                <button type="button" class="btn-close btn-close-white" 
                        data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body p-4">
                <p class="text-muted mb-4">
                    Sign up to join our movement and help fight plastic pollution!
                </p>
                <div id="modalError" class="alert alert-danger d-none"></div>
                <div id="modalSuccess" class="alert alert-success d-none"></div>

                <form id="signupForm">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label class="form-label fw-semibold">First Name</label>
                            <input type="text" id="modal_firstname" 
                                   class="form-control" placeholder="John" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Last Name</label>
                            <input type="text" id="modal_lastname" 
                                   class="form-control" placeholder="Doe" required>
                        </div>
                        <div class="col-12">
                            <label class="form-label fw-semibold">Email Address</label>
                            <input type="email" id="modal_email" 
                                   class="form-control" placeholder="john@example.com" required>
                        </div>
                        <div class="col-12">
                            <label class="form-label fw-semibold">Password</label>
                            <input type="password" id="modal_password" 
                                   class="form-control" placeholder="Min. 6 characters" required>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-success w-100 fw-bold py-2">
                                <i class="fas fa-user-plus me-2"></i>Sign Up Now
                            </button>
                        </div>
                    </div>
                </form>
                <p class="text-center mt-3 text-muted small">
                    Already have an account? 
                    <a href="register.php" class="text-success">Full Registration</a>
                </p>
            </div>
        </div>
    </div>
</div>

<!-- HERO IMAGE SLIDER -->
<div id="heroSlider" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#heroSlider" data-bs-slide-to="0" 
                class="active"></button>
        <button type="button" data-bs-target="#heroSlider" data-bs-slide-to="1"></button>
        <button type="button" data-bs-target="#heroSlider" data-bs-slide-to="2"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="https://images.unsplash.com/photo-1604187351574-c75ca79f5807?w=1400" 
                 class="d-block w-100 slider-img" alt="Plastic pollution in ocean">
            <div class="carousel-caption d-none d-md-block">
                <h1 class="fw-bold display-5">Stop Plastic Pollution</h1>
                <p class="lead">Our oceans are drowning in plastic. Together we can change that.</p>
                <button class="btn btn-success btn-lg fw-bold" 
                        data-bs-toggle="modal" data-bs-target="#signupModal">
                    Sign Up Now
                </button>
            </div>
        </div>
       <div class="carousel-item">
    <img src="images/recycle" class="d-block w-100 slider-img" alt="Recycle Reduce Reuse">
    <div class="carousel-caption d-none d-md-block">
        <h1 class="fw-bold display-5">Recycle. Reduce. Reuse.</h1>
        <p class="lead">Small actions make a big difference for our planet.</p>
        <a href="what-to-do.php" class="btn btn-warning btn-lg fw-bold">
            Learn How
        </a>
    </div>
</div>
        <div class="carousel-item">
            <img src="https://images.unsplash.com/photo-1621451537084-482c73073a0f?w=1400" 
                 class="d-block w-100 slider-img" alt="Clean environment">
            <div class="carousel-caption d-none d-md-block">
                <h1 class="fw-bold display-5">Join Our Movement</h1>
                <p class="lead">Thousands are already making a difference. Will you?</p>
                <a href="how-to-help.php" class="btn btn-light btn-lg fw-bold text-success">
                    Get Involved
                </a>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" 
            data-bs-target="#heroSlider" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" 
            data-bs-target="#heroSlider" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
    </button>
</div>

<!-- INTRO SECTION -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-md-6">
                <span class="badge bg-success mb-3 px-3 py-2">Who We Are</span>
                <h2 class="fw-bold display-6">Fighting Plastic Pollution at Pentecost University</h2>
                <p class="text-muted mt-3">
                    PlasticPollutions is an environmental action group whose aim is to reduce 
                    plastic waste and prevent harm to oceans, wildlife, and the general environment.
                </p>
                <p class="text-muted">
                    We actively promote sustainable practices and encourage individuals, 
                    manufacturers, and retailers to reduce the use of non-essential single-use plastics.
                </p>
                <button class="btn btn-success fw-bold px-4 py-2 mt-2"
                        data-bs-toggle="modal" data-bs-target="#signupModal">
                    <i class="fas fa-user-plus me-2"></i>Sign Up Now
                </button>
            </div>
            <div class="col-md-6">
                <img src="https://images.unsplash.com/photo-1583947215259-38e31be8751f?w=600" 
                     class="img-fluid rounded-4 shadow" alt="Environmental action">
            </div>
        </div>
    </div>
</section>

<!-- ANIMATED STATS COUNTERS -->
<section class="py-5 bg-success text-white">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold">The Plastic Crisis in Numbers</h2>
            <p class="opacity-75">Facts that demand action right now</p>
        </div>
        <div class="row g-4 text-center">
            <div class="col-md-3 col-6">
                <div class="p-3">
                    <h2 class="fw-bold display-4 counter" data-target="8000000">0</h2>
                    <p class="opacity-75">Tonnes of plastic enter oceans yearly</p>
                </div>
            </div>
            <div class="col-md-3 col-6">
                <div class="p-3">
                    <h2 class="fw-bold display-4 counter" data-target="91">0</h2>
                    <p class="opacity-75">% of plastic never recycled</p>
                </div>
            </div>
            <div class="col-md-3 col-6">
                <div class="p-3">
                    <h2 class="fw-bold display-4 counter" data-target="1000000">0</h2>
                    <p class="opacity-75">Seabirds killed by plastic annually</p>
                </div>
            </div>
            <div class="col-md-3 col-6">
                <div class="p-3">
                    <h2 class="fw-bold display-4 counter" data-target="500">0</h2>
                    <p class="opacity-75">Years for plastic to decompose</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- WHAT WE DO SECTION -->
<section class="py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold">What We Do</h2>
            <p class="text-muted">Our approach to tackling plastic pollution</p>
        </div>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card border-0 shadow-sm h-100 text-center p-4">
                    <i class="fas fa-bullhorn text-success fs-1 mb-3"></i>
                    <h5 class="fw-bold">Awareness Campaigns</h5>
                    <p class="text-muted">We run campaigns to educate communities 
                    about the dangers of plastic pollution.</p>
                    <a href="campaigns.php" class="btn btn-outline-success mt-auto">Learn More</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-0 shadow-sm h-100 text-center p-4">
                    <i class="fas fa-recycle text-success fs-1 mb-3"></i>
                    <h5 class="fw-bold">Recycling Drives</h5>
                    <p class="text-muted">We organise community recycling events 
                    to reduce plastic waste at the source.</p>
                    <a href="how-to-help.php" class="btn btn-outline-success mt-auto">Get Involved</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-0 shadow-sm h-100 text-center p-4">
                    <i class="fas fa-gavel text-success fs-1 mb-3"></i>
                    <h5 class="fw-bold">Policy Advocacy</h5>
                    <p class="text-muted">We lobby government and manufacturers 
                    for stronger anti-plastic policies.</p>
                    <a href="strategy.php" class="btn btn-outline-success mt-auto">Our Strategy</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- SIMULATED TWITTER/X FEED -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold">
                <i class="fab fa-twitter text-info me-2"></i>Latest Updates
            </h2>
            <p class="text-muted">Follow us for the latest news and actions</p>
        </div>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card border-0 shadow-sm p-4">
                    <div class="d-flex align-items-center mb-3">
                        <div class="bg-success rounded-circle text-white d-flex 
                             align-items-center justify-content-center me-3"
                             style="width:45px;height:45px;">
                            <i class="fas fa-leaf"></i>
                        </div>
                        <div>
                            <p class="fw-bold mb-0">PlasticPollutions</p>
                            <small class="text-muted">@PlasticPollutionsPU</small>
                        </div>
                    </div>
                    <p class="text-muted">🌊 Did you know that over 8 million tonnes of 
                    plastic enter our oceans every year? We must act NOW. 
                    #PlasticFree #SaveOurOceans</p>
                    <small class="text-muted">2 hours ago</small>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-0 shadow-sm p-4">
                    <div class="d-flex align-items-center mb-3">
                        <div class="bg-success rounded-circle text-white d-flex 
                             align-items-center justify-content-center me-3"
                             style="width:45px;height:45px;">
                            <i class="fas fa-leaf"></i>
                        </div>
                        <div>
                            <p class="fw-bold mb-0">PlasticPollutions</p>
                            <small class="text-muted">@PlasticPollutionsPU</small>
                        </div>
                    </div>
                    <p class="text-muted">♻️ Our campus recycling drive was a huge success! 
                    Over 200kg of plastic collected last weekend. Thank you Pentecost University! 
                    #Recycle #GreenCampus</p>
                    <small class="text-muted">1 day ago</small>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-0 shadow-sm p-4">
                    <div class="d-flex align-items-center mb-3">
                        <div class="bg-success rounded-circle text-white d-flex 
                             align-items-center justify-content-center me-3"
                             style="width:45px;height:45px;">
                            <i class="fas fa-leaf"></i>
                        </div>
                        <div>
                            <p class="fw-bold mb-0">PlasticPollutions</p>
                            <small class="text-muted">@PlasticPollutionsPU</small>
                        </div>
                    </div>
                    <p class="text-muted">📢 Join us this Saturday for our beach cleanup 
                    at Labadi Beach! Bring gloves and a friend. 
                    Together we make a difference! #BeachCleanup #Ghana</p>
                    <small class="text-muted">3 days ago</small>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- VISITOR COUNTER -->
<section class="py-4 bg-dark text-white text-center">
    <div class="container">
        <p class="mb-0 fs-5">
            <i class="fas fa-eye text-success me-2"></i>
            Total Site Visitors: 
            <strong class="text-success fs-4">
                <?php echo number_format($totalVisitors); ?>
            </strong>
        </p>
    </div>
</section>

<?php include 'includes/footer.php'; ?>