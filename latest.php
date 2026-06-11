<?php
$pageTitle = "Latest on Plastic";
include 'includes/header.php';
include 'db/connection.php';
?>

<?php include 'includes/navbar.php'; ?>

<!-- PAGE HEADER -->
<section class="bg-success text-white py-5 text-center">
    <div class="container">
        <h1 class="fw-bold display-5">
            <i class="fas fa-newspaper me-3"></i>Latest on Plastic
        </h1>
        <p class="lead opacity-75 mt-2">
            Current news, updates and developments in the fight against plastic pollution
        </p>
    </div>
</section>

<!-- SEARCH & FILTER BAR -->
<section class="bg-light py-3 border-bottom">
    <div class="container">
        <div class="row align-items-center g-3">
            <div class="col-md-6">
                <div class="input-group">
                    <span class="input-group-text bg-success text-white border-0">
                        <i class="fas fa-search"></i>
                    </span>
                    <input type="text" id="searchInput" class="form-control border-0 shadow-sm"
                           placeholder="Search articles...">
                </div>
            </div>
            <div class="col-md-6">
                <div class="d-flex gap-2 flex-wrap">
                    <button class="btn btn-success btn-sm filter-btn active" 
                            data-filter="all">All</button>
                    <button class="btn btn-outline-success btn-sm filter-btn" 
                            data-filter="news">News</button>
                    <button class="btn btn-outline-success btn-sm filter-btn" 
                            data-filter="research">Research</button>
                    <button class="btn btn-outline-success btn-sm filter-btn" 
                            data-filter="campaign">Campaign</button>
                    <button class="btn btn-outline-success btn-sm filter-btn" 
                            data-filter="tips">Tips</button>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-5">
    <div class="container">
        <div class="row g-4" id="articlesContainer">

            <!-- Article 1 -->
            <div class="col-md-4 article-card" data-category="news">
                <div class="card border-0 shadow-sm h-100">
                    <img src="https://images.unsplash.com/photo-1621451537084-482c73073a0f?w=600"
                         class="card-img-top" style="height:200px;object-fit:cover;" 
                         alt="Ocean plastic pollution">
                    <div class="card-body p-4">
                        <div class="d-flex justify-content-between mb-2">
                            <span class="badge bg-success">News</span>
                            <small class="text-muted">April 20, 2026</small>
                        </div>
                        <h5 class="fw-bold">Ghana Government Announces 
                        New Plastic Ban Policy</h5>
                        <p class="text-muted">The Ghanaian government has announced 
                        a sweeping new policy to ban single-use plastics in all major 
                        cities by the end of 2026, following pressure from environmental 
                        groups including PlasticPollutions.</p>
                        <a href="#" class="btn btn-outline-success btn-sm mt-auto"
                           data-bs-toggle="modal" data-bs-target="#article1Modal">
                            Read More <i class="fas fa-arrow-right ms-1"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Article 2 -->
            <div class="col-md-4 article-card" data-category="research">
                <div class="card border-0 shadow-sm h-100">
                    <img src="https://images.unsplash.com/photo-1583947215259-38e31be8751f?w=600"
                         class="card-img-top" style="height:200px;object-fit:cover;" 
                         alt="Research on microplastics">
                    <div class="card-body p-4">
                        <div class="d-flex justify-content-between mb-2">
                            <span class="badge bg-primary">Research</span>
                            <small class="text-muted">April 15, 2026</small>
                        </div>
                        <h5 class="fw-bold">New Study Finds Microplastics 
                        in Human Blood</h5>
                        <p class="text-muted">A groundbreaking new study has found 
                        microplastic particles in the bloodstream of 80% of people 
                        tested, raising serious concerns about the long-term health 
                        effects of plastic pollution on humans.</p>
                        <a href="#" class="btn btn-outline-success btn-sm mt-auto"
                           data-bs-toggle="modal" data-bs-target="#article2Modal">
                            Read More <i class="fas fa-arrow-right ms-1"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Article 3 -->
            <div class="col-md-4 article-card" data-category="campaign">
                <div class="card border-0 shadow-sm h-100">
                    <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=600"
                         class="card-img-top" style="height:200px;object-fit:cover;" 
                         alt="Beach cleanup campaign">
                    <div class="card-body p-4">
                        <div class="d-flex justify-content-between mb-2">
                            <span class="badge bg-warning text-dark">Campaign</span>
                            <small class="text-muted">April 10, 2026</small>
                        </div>
                        <h5 class="fw-bold">Labadi Beach Cleanup Drive 
                        Removes 500kg of Plastic</h5>
                        <p class="text-muted">Our latest beach cleanup campaign at 
                        Labadi Beach in Accra successfully removed over 500 kilograms 
                        of plastic waste, with over 300 volunteers participating 
                        from across Ghana.</p>
                        <a href="#" class="btn btn-outline-success btn-sm mt-auto"
                           data-bs-toggle="modal" data-bs-target="#article3Modal">
                            Read More <i class="fas fa-arrow-right ms-1"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Article 4 -->
            <div class="col-md-4 article-card" data-category="tips">
                <div class="card border-0 shadow-sm h-100">
                    <img src="https://images.unsplash.com/photo-1604187351574-c75ca79f5807?w=600"
                         class="card-img-top" style="height:200px;object-fit:cover;" 
                         alt="Plastic free tips">
                    <div class="card-body p-4">
                        <div class="d-flex justify-content-between mb-2">
                            <span class="badge bg-info text-white">Tips</span>
                            <small class="text-muted">April 5, 2026</small>
                        </div>
                        <h5 class="fw-bold">10 Easy Ways to Reduce 
                        Your Plastic Footprint Today</h5>
                        <p class="text-muted">Small changes in your daily habits can 
                        have a huge impact on plastic pollution. Here are 10 simple, 
                        practical steps you can take starting today to live a more 
                        plastic-free lifestyle.</p>
                        <a href="#" class="btn btn-outline-success btn-sm mt-auto"
                           data-bs-toggle="modal" data-bs-target="#article4Modal">
                            Read More <i class="fas fa-arrow-right ms-1"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Article 5 -->
            <div class="col-md-4 article-card" data-category="news">
                <div class="card border-0 shadow-sm h-100">
                    <img src="https://images.unsplash.com/photo-1532996122724-e3c354a0b15b?w=600"
                         class="card-img-top" style="height:200px;object-fit:cover;" 
                         alt="Plastic recycling facility">
                    <div class="card-body p-4">
                        <div class="d-flex justify-content-between mb-2">
                            <span class="badge bg-success">News</span>
                            <small class="text-muted">March 28, 2026</small>
                        </div>
                        <h5 class="fw-bold">New Recycling Facility Opens 
                        in Kumasi</h5>
                        <p class="text-muted">A state-of-the-art plastic recycling 
                        facility has opened in Kumasi capable of processing up to 
                        50 tonnes of plastic waste per day, providing jobs for over 
                        200 local residents.</p>
                        <a href="#" class="btn btn-outline-success btn-sm mt-auto"
                           data-bs-toggle="modal" data-bs-target="#article5Modal">
                            Read More <i class="fas fa-arrow-right ms-1"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Article 6 -->
            <div class="col-md-4 article-card" data-category="research">
                <div class="card border-0 shadow-sm h-100">
                    <img src="https://images.unsplash.com/photo-1611284446314-60a58ac0deb9?w=600"
                         class="card-img-top" style="height:200px;object-fit:cover;" 
                         alt="Ocean research">
                    <div class="card-body p-4">
                        <div class="d-flex justify-content-between mb-2">
                            <span class="badge bg-primary">Research</span>
                            <small class="text-muted">March 20, 2026</small>
                        </div>
                        <h5 class="fw-bold">Ocean Plastic Could Double 
                        by 2030 Warns UN Report</h5>
                        <p class="text-muted">A new United Nations report warns that 
                        the amount of plastic entering the world's oceans could double 
                        by 2030 unless urgent action is taken by governments, 
                        businesses, and individuals worldwide.</p>
                        <a href="#" class="btn btn-outline-success btn-sm mt-auto"
                           data-bs-toggle="modal" data-bs-target="#article6Modal">
                            Read More <i class="fas fa-arrow-right ms-1"></i>
                        </a>
                    </div>
                </div>
            </div>

        </div>

        <!-- No Results Message -->
        <div id="noResults" class="text-center py-5 d-none">
            <i class="fas fa-search fs-1 text-muted mb-3 d-block"></i>
            <h5 class="text-muted">No articles found matching your search.</h5>
        </div>

    </div>
</section>

<!-- ARTICLE MODALS -->
<!-- Modal 1 -->
<div class="modal fade" id="article1Modal" tabindex="-1">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content border-0">
            <div class="modal-header bg-success text-white">
                <h5 class="modal-title fw-bold">
                    Ghana Government Announces New Plastic Ban Policy
                </h5>
                <button type="button" class="btn-close btn-close-white" 
                        data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body p-4">
                <img src="https://images.unsplash.com/photo-1621451537084-482c73073a0f?w=800"
                     class="img-fluid rounded mb-4" alt="Plastic ban policy">
                <p class="text-muted"><strong>April 20, 2026</strong> | By PlasticPollutions Team</p>
                <p>The Ghanaian government has announced a sweeping new policy to ban 
                single-use plastics in all major cities by the end of 2026. The announcement 
                came following sustained pressure from environmental groups, including 
                PlasticPollutions at Pentecost University.</p>
                <p>The ban will initially target plastic bags, straws, and disposable 
                cutlery. Retailers found violating the ban will face fines of up to 
                GH₵50,000. The government has also announced a GH₵10 million fund 
                to support businesses in transitioning to sustainable alternatives.</p>
                <p>PlasticPollutions has welcomed the announcement and pledged to work 
                with local communities to ensure compliance and awareness of the new 
                regulations.</p>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <a href="campaigns.php" class="btn btn-success">View Our Campaigns</a>
            </div>
        </div>
    </div>
</div>

<!-- Modal 2 -->
<div class="modal fade" id="article2Modal" tabindex="-1">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content border-0">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title fw-bold">
                    New Study Finds Microplastics in Human Blood
                </h5>
                <button type="button" class="btn-close btn-close-white" 
                        data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body p-4">
                <img src="https://images.unsplash.com/photo-1583947215259-38e31be8751f?w=800"
                     class="img-fluid rounded mb-4" alt="Microplastics research">
                <p class="text-muted"><strong>April 15, 2026</strong> | Research Update</p>
                <p>A groundbreaking new study published in the journal Environmental 
                Science has found microplastic particles in the bloodstream of 80% 
                of people tested across 10 countries, including Ghana.</p>
                <p>The particles, smaller than 0.5mm, were found to originate primarily 
                from plastic bottles, food packaging, and synthetic clothing. Researchers 
                warn that the long-term health implications are still unknown but could 
                include inflammation, hormonal disruption, and increased cancer risk.</p>
                <p>PlasticPollutions is using this research to push for stronger 
                regulations on microplastic-producing materials in Ghana.</p>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <a href="what-to-do.php" class="btn btn-primary">Learn What To Do</a>
            </div>
        </div>
    </div>
</div>

<!-- Modal 3 -->
<div class="modal fade" id="article3Modal" tabindex="-1">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content border-0">
            <div class="modal-header bg-warning text-dark">
                <h5 class="modal-title fw-bold">
                    Labadi Beach Cleanup Drive Removes 500kg of Plastic
                </h5>
                <button type="button" class="btn-close" 
                        data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body p-4">
                <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=800"
                     class="img-fluid rounded mb-4" alt="Beach cleanup">
                <p class="text-muted"><strong>April 10, 2026</strong> | Campaign Update</p>
                <p>Our latest beach cleanup campaign at Labadi Beach in Accra was a 
                tremendous success. Over 300 volunteers from Pentecost University and 
                surrounding communities came together to remove over 500 kilograms of 
                plastic waste from the beach and surrounding areas.</p>
                <p>The cleanup took place over two days and included sorting and 
                cataloguing of plastic types for recycling. The most common items found 
                were plastic bags, bottles, and styrofoam containers.</p>
                <p>We thank all volunteers and sponsors who made this event possible. 
                Our next cleanup is scheduled for June 2026 at Kokrobite Beach.</p>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <a href="how-to-help.php" class="btn btn-warning text-dark">Get Involved</a>
            </div>
        </div>
    </div>
</div>

<!-- Modal 4 -->
<div class="modal fade" id="article4Modal" tabindex="-1">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content border-0">
            <div class="modal-header bg-info text-white">
                <h5 class="modal-title fw-bold">
                    10 Easy Ways to Reduce Your Plastic Footprint Today
                </h5>
                <button type="button" class="btn-close btn-close-white" 
                        data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body p-4">
                <p class="text-muted"><strong>April 5, 2026</strong> | Tips & Lifestyle</p>
                <ol class="list-group list-group-numbered list-group-flush">
                    <li class="list-group-item">Carry a reusable water bottle everywhere</li>
                    <li class="list-group-item">Use cloth bags instead of plastic bags</li>
                    <li class="list-group-item">Avoid single-use plastic straws</li>
                    <li class="list-group-item">Buy in bulk to reduce packaging waste</li>
                    <li class="list-group-item">Choose products with minimal packaging</li>
                    <li class="list-group-item">Use a bamboo or metal toothbrush</li>
                    <li class="list-group-item">Recycle properly and consistently</li>
                    <li class="list-group-item">Support plastic-free businesses</li>
                    <li class="list-group-item">Participate in local cleanup events</li>
                    <li class="list-group-item">Educate friends and family about 
                    plastic dangers</li>
                </ol>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <a href="how-to-help.php" class="btn btn-info text-white">How You Can Help</a>
            </div>
        </div>
    </div>
</div>

<!-- Modal 5 -->
<div class="modal fade" id="article5Modal" tabindex="-1">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content border-0">
            <div class="modal-header bg-success text-white">
                <h5 class="modal-title fw-bold">
                    New Recycling Facility Opens in Kumasi
                </h5>
                <button type="button" class="btn-close btn-close-white" 
                        data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body p-4">
                <img src="../images/kumasi.jpg" class="img-fluid rounded mb-4" alt="Recycling facility">
                <p class="text-muted"><strong>March 28, 2026</strong> | News</p>
                <p>A state-of-the-art plastic recycling facility has opened in Kumasi, 
                Ghana's second largest city. The facility, built with support from 
                the European Union and the Ghana government, is capable of processing 
                up to 50 tonnes of plastic waste per day.</p>
                <p>The facility provides employment for over 200 local residents and 
                uses advanced sorting technology to separate different types of plastics 
                for recycling into new products including construction materials and 
                clothing fibre.</p>
                <p>PlasticPollutions is partnering with the facility to organise 
                community plastic collection drives across Kumasi and surrounding areas.</p>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <a href="campaigns.php" class="btn btn-success">Our Campaigns</a>
            </div>
        </div>
    </div>
</div>

<!-- Modal 6 -->
<div class="modal fade" id="article6Modal" tabindex="-1">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content border-0">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title fw-bold">
                    Ocean Plastic Could Double by 2030 Warns UN Report
                </h5>
                <button type="button" class="btn-close btn-close-white" 
                        data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body p-4">
                <img src="https://images.unsplash.com/photo-1611284446314-60a58ac0deb9?w=800"
                     class="img-fluid rounded mb-4" alt="Ocean plastic">
                <p class="text-muted"><strong>March 20, 2026</strong> | Research</p>
                <p>A new United Nations Environment Programme report has issued a stark 
                warning that the amount of plastic entering the world's oceans could 
                double by 2030 if current trends continue. The report highlights that 
                Africa is among the most vulnerable regions.</p>
                <p>The report calls for an immediate global treaty on plastic pollution, 
                binding commitments from manufacturers to reduce plastic production, 
                and significant investment in waste management infrastructure in 
                developing countries.</p>
                <p>PlasticPollutions has signed the open letter supporting the UN 
                treaty and continues to advocate for Ghana's active participation 
                in global plastic reduction efforts.</p>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <a href="what-to-do.php" class="btn btn-primary">Learn More</a>
            </div>
        </div>
    </div>
</div>

<script>
// ── Search Filter ─────────────────────────────────────
document.getElementById('searchInput').addEventListener('input', function() {
    const query    = this.value.toLowerCase();
    const articles = document.querySelectorAll('.article-card');
    let   visible  = 0;

    articles.forEach(function(card) {
        const text = card.innerText.toLowerCase();
        if (text.includes(query)) {
            card.style.display = 'block';
            visible++;
        } else {
            card.style.display = 'none';
        }
    });

    document.getElementById('noResults').classList.toggle('d-none', visible > 0);
});

// ── Category Filter Buttons ───────────────────────────
document.querySelectorAll('.filter-btn').forEach(function(btn) {
    btn.addEventListener('click', function() {
        // Update active button
        document.querySelectorAll('.filter-btn').forEach(function(b) {
            b.classList.remove('btn-success', 'active');
            b.classList.add('btn-outline-success');
        });
        this.classList.add('btn-success', 'active');
        this.classList.remove('btn-outline-success');

        const filter   = this.dataset.filter;
        const articles = document.querySelectorAll('.article-card');
        let   visible  = 0;

        articles.forEach(function(card) {
            if (filter === 'all' || card.dataset.category === filter) {
                card.style.display = 'block';
                visible++;
            } else {
                card.style.display = 'none';
            }
        });

        document.getElementById('noResults').classList.toggle('d-none', visible > 0);
    });
});
</script>

<?php include 'includes/footer.php'; ?>