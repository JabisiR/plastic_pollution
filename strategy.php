<?php
$pageTitle = "Strategy";
include 'includes/header.php';
include 'db/connection.php';
?>

<?php include 'includes/navbar.php'; ?>

<!-- PAGE HEADER -->
<section class="bg-success text-white py-5 text-center">
    <div class="container">
        <h1 class="fw-bold display-5">
            <i class="fas fa-chess me-3"></i>Our Strategy
        </h1>
        <p class="lead opacity-75 mt-2">
            Our roadmap to eliminating plastic pollution in Ghana and beyond
        </p>
    </div>
</section>

<!-- MISSION & VISION -->
<section class="py-5">
    <div class="container">
        <div class="row g-4">
            <div class="col-md-6">
                <div class="card border-0 shadow-sm h-100 border-start border-success border-4">
                    <div class="card-body p-5">
                        <div class="d-flex align-items-center mb-4">
                            <div class="bg-success text-white rounded-circle d-flex
                                 align-items-center justify-content-center me-3"
                                 style="width:60px;height:60px;font-size:1.5rem;">
                                <i class="fas fa-bullseye"></i>
                            </div>
                            <h3 class="fw-bold mb-0">Our Mission</h3>
                        </div>
                        <p class="text-muted fs-5">
                            To reduce plastic waste and prevent harm to oceans, 
                            wildlife, and the general environment by promoting 
                            sustainable practices and encouraging individuals, 
                            manufacturers, and retailers to eliminate non-essential 
                            single-use plastics.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card border-0 shadow-sm h-100 border-start border-primary border-4">
                    <div class="card-body p-5">
                        <div class="d-flex align-items-center mb-4">
                            <div class="bg-primary text-white rounded-circle d-flex
                                 align-items-center justify-content-center me-3"
                                 style="width:60px;height:60px;font-size:1.5rem;">
                                <i class="fas fa-eye"></i>
                            </div>
                            <h3 class="fw-bold mb-0">Our Vision</h3>
                        </div>
                        <p class="text-muted fs-5">
                            A Ghana and world free from plastic pollution, where 
                            communities, businesses and governments work together 
                            to ensure that plastic waste never reaches our oceans, 
                            rivers, or landfills — and where sustainable alternatives 
                            are accessible to all.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- STRATEGIC PILLARS -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold">Our 4 Strategic Pillars</h2>
            <p class="text-muted">The foundations of everything we do</p>
        </div>
        <div class="row g-4">
            <div class="col-md-3 col-6">
                <div class="card border-0 shadow-sm h-100 text-center p-4">
                    <div class="bg-success text-white rounded-circle d-inline-flex
                         align-items-center justify-content-center mx-auto mb-3"
                         style="width:80px;height:80px;font-size:2rem;">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <h5 class="fw-bold">Education</h5>
                    <p class="text-muted small">Raising awareness about plastic 
                    dangers through schools, universities, and community outreach 
                    programs.</p>
                </div>
            </div>
            <div class="col-md-3 col-6">
                <div class="card border-0 shadow-sm h-100 text-center p-4">
                    <div class="bg-primary text-white rounded-circle d-inline-flex
                         align-items-center justify-content-center mx-auto mb-3"
                         style="width:80px;height:80px;font-size:2rem;">
                        <i class="fas fa-gavel"></i>
                    </div>
                    <h5 class="fw-bold">Advocacy</h5>
                    <p class="text-muted small">Lobbying government and industry 
                    for stronger policies, regulations and investment in 
                    sustainable alternatives.</p>
                </div>
            </div>
            <div class="col-md-3 col-6">
                <div class="card border-0 shadow-sm h-100 text-center p-4">
                    <div class="bg-warning text-white rounded-circle d-inline-flex
                         align-items-center justify-content-center mx-auto mb-3"
                         style="width:80px;height:80px;font-size:2rem;">
                        <i class="fas fa-hands-helping"></i>
                    </div>
                    <h5 class="fw-bold">Community</h5>
                    <p class="text-muted small">Organising cleanup drives, recycling 
                    programs, and community engagement initiatives across Ghana.</p>
                </div>
            </div>
            <div class="col-md-3 col-6">
                <div class="card border-0 shadow-sm h-100 text-center p-4">
                    <div class="bg-danger text-white rounded-circle d-inline-flex
                         align-items-center justify-content-center mx-auto mb-3"
                         style="width:80px;height:80px;font-size:2rem;">
                        <i class="fas fa-flask"></i>
                    </div>
                    <h5 class="fw-bold">Innovation</h5>
                    <p class="text-muted small">Supporting research and development 
                    of biodegradable alternatives and better recycling 
                    technologies.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- STRATEGIC GOALS TIMELINE -->
<section class="py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold">Our Strategic Timeline</h2>
            <p class="text-muted">Our goals from now through 2030</p>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-10">

                <!-- Timeline Item 1 -->
                <div class="row g-0 mb-4 align-items-center">
                    <div class="col-md-5 text-md-end pe-md-4">
                        <div class="card border-0 shadow-sm p-4">
                            <h5 class="fw-bold text-success">2026 — Foundation</h5>
                            <p class="text-muted mb-0">Launch web platform, grow 
                            membership to 500 students, conduct 4 major cleanup 
                            events, and establish partnerships with 10 local 
                            businesses committed to reducing plastic use.</p>
                        </div>
                    </div>
                    <div class="col-md-2 text-center">
                        <div class="bg-success text-white rounded-circle d-inline-flex
                             align-items-center justify-content-center fw-bold"
                             style="width:60px;height:60px;">
                            2026
                        </div>
                    </div>
                    <div class="col-md-5 d-none d-md-block"></div>
                </div>

                <!-- Timeline Item 2 -->
                <div class="row g-0 mb-4 align-items-center">
                    <div class="col-md-5 d-none d-md-block"></div>
                    <div class="col-md-2 text-center">
                        <div class="bg-primary text-white rounded-circle d-inline-flex
                             align-items-center justify-content-center fw-bold"
                             style="width:60px;height:60px;">
                            2027
                        </div>
                    </div>
                    <div class="col-md-5 ps-md-4">
                        <div class="card border-0 shadow-sm p-4">
                            <h5 class="fw-bold text-primary">2027 — Growth</h5>
                            <p class="text-muted mb-0">Expand campaigns to 5 regions 
                            of Ghana, launch school education program reaching 
                            10,000 students, and submit formal plastic ban 
                            petition to Parliament with 50,000 signatures.</p>
                        </div>
                    </div>
                </div>

                <!-- Timeline Item 3 -->
                <div class="row g-0 mb-4 align-items-center">
                    <div class="col-md-5 text-md-end pe-md-4">
                        <div class="card border-0 shadow-sm p-4">
                            <h5 class="fw-bold text-warning">2028 — Impact</h5>
                            <p class="text-muted mb-0">Achieve measurable 20% 
                            reduction in plastic waste in partner communities, 
                            establish Ghana's first student-led plastic 
                            recycling enterprise, and present at UN 
                            Environment Assembly.</p>
                        </div>
                    </div>
                    <div class="col-md-2 text-center">
                        <div class="bg-warning text-white rounded-circle d-inline-flex
                             align-items-center justify-content-center fw-bold"
                             style="width:60px;height:60px;">
                            2028
                        </div>
                    </div>
                    <div class="col-md-5 d-none d-md-block"></div>
                </div>

                <!-- Timeline Item 4 -->
                <div class="row g-0 mb-4 align-items-center">
                    <div class="col-md-5 d-none d-md-block"></div>
                    <div class="col-md-2 text-center">
                        <div class="bg-danger text-white rounded-circle d-inline-flex
                             align-items-center justify-content-center fw-bold"
                             style="width:60px;height:60px;">
                            2030
                        </div>
                    </div>
                    <div class="col-md-5 ps-md-4">
                        <div class="card border-0 shadow-sm p-4">
                            <h5 class="fw-bold text-danger">2030 — Legacy</h5>
                            <p class="text-muted mb-0">Achieve 50% reduction in 
                            single-use plastic in Ghana, influence national 
                            legislation banning key plastic products, and 
                            replicate our model in 5 other African countries.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- POLICIES -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold">Our Core Policies</h2>
            <p class="text-muted">The principles that guide our work</p>
        </div>
        <div class="row g-4">
            <div class="col-md-6">
                <div class="card border-0 shadow-sm h-100 p-4">
                    <div class="d-flex align-items-start">
                        <i class="fas fa-check-circle text-success fs-3 me-3 mt-1"></i>
                        <div>
                            <h6 class="fw-bold">Zero Tolerance for Single-Use Plastics</h6>
                            <p class="text-muted mb-0">We do not use or promote 
                            single-use plastics in any of our events, campaigns, 
                            or activities. All our operations are plastic-free.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card border-0 shadow-sm h-100 p-4">
                    <div class="d-flex align-items-start">
                        <i class="fas fa-check-circle text-success fs-3 me-3 mt-1"></i>
                        <div>
                            <h6 class="fw-bold">Evidence-Based Advocacy</h6>
                            <p class="text-muted mb-0">All our policy recommendations 
                            are backed by scientific research and real data on plastic 
                            pollution, its sources, and its environmental impact.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card border-0 shadow-sm h-100 p-4">
                    <div class="d-flex align-items-start">
                        <i class="fas fa-check-circle text-success fs-3 me-3 mt-1"></i>
                        <div>
                            <h6 class="fw-bold">Inclusive Community Engagement</h6>
                            <p class="text-muted mb-0">We engage all members of 
                            society regardless of background, ensuring our campaigns 
                            are accessible, inclusive, and culturally sensitive.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card border-0 shadow-sm h-100 p-4">
                    <div class="d-flex align-items-start">
                        <i class="fas fa-check-circle text-success fs-3 me-3 mt-1"></i>
                        <div>
                            <h6 class="fw-bold">Transparency & Accountability</h6>
                            <p class="text-muted mb-0">We publish regular reports 
                            on our activities, donation usage, and campaign impact 
                            so that members and the public can hold us accountable.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- PROGRESS BARS -->
<section class="py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold">2026 Goals Progress</h2>
            <p class="text-muted">Tracking our targets for this year</p>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card border-0 shadow-sm p-5">

                    <div class="mb-4">
                        <div class="d-flex justify-content-between mb-1">
                            <span class="fw-semibold">Membership Growth</span>
                            <span class="text-success fw-bold">320 / 500</span>
                        </div>
                        <div class="progress" style="height:12px;">
                            <div class="progress-bar bg-success progress-animated" 
                                 data-width="64" style="width:0%">64%</div>
                        </div>
                    </div>

                    <div class="mb-4">
                        <div class="d-flex justify-content-between mb-1">
                            <span class="fw-semibold">Cleanup Events</span>
                            <span class="text-primary fw-bold">2 / 4</span>
                        </div>
                        <div class="progress" style="height:12px;">
                            <div class="progress-bar bg-primary progress-animated" 
                                 data-width="50" style="width:0%">50%</div>
                        </div>
                    </div>

                    <div class="mb-4">
                        <div class="d-flex justify-content-between mb-1">
                            <span class="fw-semibold">Business Partnerships</span>
                            <span class="text-warning fw-bold">7 / 10</span>
                        </div>
                        <div class="progress" style="height:12px;">
                            <div class="progress-bar bg-warning progress-animated" 
                                 data-width="70" style="width:0%">70%</div>
                        </div>
                    </div>

                    <div class="mb-4">
                        <div class="d-flex justify-content-between mb-1">
                            <span class="fw-semibold">Petition Signatures</span>
                            <span class="text-danger fw-bold">3,200 / 10,000</span>
                        </div>
                        <div class="progress" style="height:12px;">
                            <div class="progress-bar bg-danger progress-animated" 
                                 data-width="32" style="width:0%">32%</div>
                        </div>
                    </div>

                    <div class="mb-2">
                        <div class="d-flex justify-content-between mb-1">
                            <span class="fw-semibold">Donations Raised (GH₵)</span>
                            <span class="text-info fw-bold">8,500 / 20,000</span>
                        </div>
                        <div class="progress" style="height:12px;">
                            <div class="progress-bar bg-info progress-animated" 
                                 data-width="43" style="width:0%">43%</div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="py-5 bg-success text-white text-center">
    <div class="container">
        <h2 class="fw-bold mb-3">Be Part of Our Strategy</h2>
        <p class="lead opacity-75 mb-4">
            Every volunteer, donor, and advocate brings us closer to our goals.
        </p>
        <div class="d-flex justify-content-center gap-3 flex-wrap">
            <a href="how-to-help.php" class="btn btn-light text-success fw-bold px-4 py-2">
                <i class="fas fa-hands-helping me-2"></i>Get Involved
            </a>
            <a href="donate.php" class="btn btn-outline-light fw-bold px-4 py-2">
                <i class="fas fa-donate me-2"></i>Donate Now
            </a>
        </div>
    </div>
</section>

<script>
// Animate progress bars when visible
const progressBars = document.querySelectorAll('.progress-animated');
const observer = new IntersectionObserver(function(entries) {
    entries.forEach(function(entry) {
        if (entry.isIntersecting) {
            const bar = entry.target;
            const width = bar.getAttribute('data-width');
            bar.style.transition = 'width 1.5s ease';
            bar.style.width = width + '%';
        }
    });
}, { threshold: 0.3 });

progressBars.forEach(function(bar) {
    observer.observe(bar);
});
</script>

<?php include 'includes/footer.php'; ?>