<?php
$pageTitle = "What To Do About Plastic";
include 'includes/header.php';
include 'db/connection.php';
?>

<?php include 'includes/navbar.php'; ?>

<!-- PAGE HEADER -->
<section class="bg-success text-white py-5 text-center">
    <div class="container">
        <h1 class="fw-bold display-5">
            <i class="fas fa-recycle me-3"></i>What To Do About Plastic
        </h1>
        <p class="lead opacity-75 mt-2">
            Learn about plastic types, their impact, and how to make a difference
        </p>
    </div>
</section>

<!-- TYPES OF PLASTIC -->
<section class="py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold">Types of Plastic & Their Impact</h2>
            <p class="text-muted">Understanding plastics is the first step to reducing them</p>
        </div>
        <div class="row g-4">

            <div class="col-md-4">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-header bg-danger text-white fw-bold fs-5 text-center">
                        PET — Type 1
                    </div>
                    <div class="card-body p-4">
                        <h6 class="fw-bold">Polyethylene Terephthalate</h6>
                        <p class="text-muted">Found in water bottles, soft drink bottles, 
                        and food containers. One of the most recycled plastics but still 
                        causes major pollution when disposed of incorrectly.</p>
                        <span class="badge bg-warning text-dark">Recyclable</span>
                        <span class="badge bg-danger ms-1">Single Use Risk</span>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-header bg-warning text-dark fw-bold fs-5 text-center">
                        HDPE — Type 2
                    </div>
                    <div class="card-body p-4">
                        <h6 class="fw-bold">High-Density Polyethylene</h6>
                        <p class="text-muted">Used in milk jugs, detergent bottles, and 
                        plastic bags. Considered safer than other plastics and is widely 
                        recyclable in most facilities.</p>
                        <span class="badge bg-success">Most Recyclable</span>
                        <span class="badge bg-secondary ms-1">Durable</span>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-header bg-danger text-white fw-bold fs-5 text-center">
                        PVC — Type 3
                    </div>
                    <div class="card-body p-4">
                        <h6 class="fw-bold">Polyvinyl Chloride</h6>
                        <p class="text-muted">Found in pipes, window frames, and some food 
                        wraps. Very difficult to recycle and releases toxic chemicals when 
                        burned, making it one of the most dangerous plastics.</p>
                        <span class="badge bg-danger">Toxic</span>
                        <span class="badge bg-dark ms-1">Hard to Recycle</span>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-header bg-primary text-white fw-bold fs-5 text-center">
                        LDPE — Type 4
                    </div>
                    <div class="card-body p-4">
                        <h6 class="fw-bold">Low-Density Polyethylene</h6>
                        <p class="text-muted">Used in plastic bags, cling wrap, and squeezable 
                        bottles. Rarely accepted in curbside recycling programs but some 
                        stores collect it separately.</p>
                        <span class="badge bg-warning text-dark">Rarely Recycled</span>
                        <span class="badge bg-danger ms-1">Ocean Hazard</span>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-header bg-info text-white fw-bold fs-5 text-center">
                        PP — Type 5
                    </div>
                    <div class="card-body p-4">
                        <h6 class="fw-bold">Polypropylene</h6>
                        <p class="text-muted">Found in yogurt containers, bottle caps, and 
                        straws. Has a high melting point making it useful for hot food 
                        containers. Increasingly being recycled.</p>
                        <span class="badge bg-info">Increasingly Recycled</span>
                        <span class="badge bg-secondary ms-1">Heat Resistant</span>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-header bg-dark text-white fw-bold fs-5 text-center">
                        PS — Type 6
                    </div>
                    <div class="card-body p-4">
                        <h6 class="fw-bold">Polystyrene (Styrofoam)</h6>
                        <p class="text-muted">Used in disposable cups, plates, and food 
                        packaging. Extremely difficult to recycle, breaks into microplastics 
                        easily, and is highly harmful to marine life.</p>
                        <span class="badge bg-danger">Avoid</span>
                        <span class="badge bg-dark ms-1">Microplastic Risk</span>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- ENVIRONMENTAL IMPACT VIDEO -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold">See The Impact</h2>
            <p class="text-muted">Watch how plastic pollution is destroying our planet</p>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="ratio ratio-16x9 shadow rounded-4 overflow-hidden">
                    <iframe 
                        src="https://www.youtube.com/embed/HQTUWK7CM-Y" 
                        title="Plastic Pollution Documentary"
                        allowfullscreen>
                    </iframe>
                </div>
                <p class="text-muted text-center mt-3 small">
                    <i class="fas fa-info-circle me-1"></i>
                    Video includes captions for accessibility
                </p>
            </div>
        </div>
    </div>
</section>

<!-- RECYCLING TIPS INFOGRAPHIC -->
<section class="py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold">How to Recycle Properly</h2>
            <p class="text-muted">Follow these steps to recycle effectively</p>
        </div>
        <div class="row g-4 text-center">
            <div class="col-md-3 col-6">
                <div class="p-4 rounded-4 bg-light h-100">
                    <div class="bg-success text-white rounded-circle d-inline-flex 
                         align-items-center justify-content-center mb-3"
                         style="width:70px;height:70px;font-size:1.8rem;">
                        <i class="fas fa-water"></i>
                    </div>
                    <h6 class="fw-bold">Step 1</h6>
                    <p class="text-muted small">Rinse containers before placing them 
                    in the recycling bin</p>
                </div>
            </div>
            <div class="col-md-3 col-6">
                <div class="p-4 rounded-4 bg-light h-100">
                    <div class="bg-primary text-white rounded-circle d-inline-flex 
                         align-items-center justify-content-center mb-3"
                         style="width:70px;height:70px;font-size:1.8rem;">
                        <i class="fas fa-sort"></i>
                    </div>
                    <h6 class="fw-bold">Step 2</h6>
                    <p class="text-muted small">Sort plastics by their resin 
                    identification code (1–7)</p>
                </div>
            </div>
            <div class="col-md-3 col-6">
                <div class="p-4 rounded-4 bg-light h-100">
                    <div class="bg-warning text-white rounded-circle d-inline-flex 
                         align-items-center justify-content-center mb-3"
                         style="width:70px;height:70px;font-size:1.8rem;">
                        <i class="fas fa-compress"></i>
                    </div>
                    <h6 class="fw-bold">Step 3</h6>
                    <p class="text-muted small">Flatten bottles and containers 
                    to save space in recycling bins</p>
                </div>
            </div>
            <div class="col-md-3 col-6">
                <div class="p-4 rounded-4 bg-light h-100">
                    <div class="bg-danger text-white rounded-circle d-inline-flex 
                         align-items-center justify-content-center mb-3"
                         style="width:70px;height:70px;font-size:1.8rem;">
                        <i class="fas fa-trash-alt"></i>
                    </div>
                    <h6 class="fw-bold">Step 4</h6>
                    <p class="text-muted small">Never put contaminated or 
                    greasy plastics in recycling bins</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- DONATE & PETITION SECTION -->
<section class="py-5 bg-success text-white">
    <div class="container">
        <div class="row g-5 align-items-center">

            <!-- Donate -->
            <div class="col-md-6 text-center">
                <i class="fas fa-hand-holding-heart fs-1 mb-3"></i>
                <h3 class="fw-bold">Support Our Cause</h3>
                <p class="opacity-75">
                    Your donation funds our campaigns, cleanups, and advocacy efforts 
                    to reduce plastic pollution across Ghana and beyond.
                </p>
                <a href="donate.php" class="btn btn-light text-success fw-bold px-5 py-2">
                    <i class="fas fa-donate me-2"></i>Donate Now
                </a>
            </div>

            <!-- Petition -->
            <div class="col-md-6">
                <h3 class="fw-bold text-center mb-4">
                    <i class="fas fa-file-signature me-2"></i>Sign Our Petition
                </h3>
                <div id="petitionMsg"></div>
                <form id="petitionForm" class="bg-white text-dark rounded-4 p-4">
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Full Name</label>
                        <input type="text" id="pet_name" class="form-control" 
                               placeholder="Your full name" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Email Address</label>
                        <input type="email" id="pet_email" class="form-control" 
                               placeholder="Your email" required>
                    </div>
                    <div class="mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" 
                                   id="pet_agree" required>
                            <label class="form-check-label" for="pet_agree">
                                I support the ban on single-use plastics in Ghana
                            </label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success w-100 fw-bold">
                        <i class="fas fa-signature me-2"></i>Sign Petition
                    </button>
                </form>
            </div>

        </div>
    </div>
</section>

<script>
document.getElementById('petitionForm').addEventListener('submit', function(e) {
    e.preventDefault();
    const name    = document.getElementById('pet_name').value.trim();
    const email   = document.getElementById('pet_email').value.trim();
    const agree   = document.getElementById('pet_agree').checked;
    const msgDiv  = document.getElementById('petitionMsg');

    if (!name || !email || !agree) {
        msgDiv.innerHTML = '<div class="alert alert-danger">Please fill all fields.</div>';
        return;
    }

    msgDiv.innerHTML = `<div class="alert alert-light text-success fw-bold">
        <i class="fas fa-check-circle me-2"></i>
        Thank you ${name}! Your signature has been recorded. 
        Together we can make a difference!
    </div>`;

    this.reset();
});
</script>

<?php include 'includes/footer.php'; ?>