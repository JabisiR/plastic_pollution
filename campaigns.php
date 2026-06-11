<?php
include 'includes/header.php';
include 'includes/navbar.php';
?>

<!-- Hero -->
<section class="camp-hero">
    <div class="camp-hero-inner">
        <span class="camp-badge">Our Campaigns</span>
        <h1>Driving Change <span class="camp-green">Together</span></h1>
        <p>From policy advocacy to grassroots action — see how PlasticPollutions is making measurable impact.</p>
    </div>
</section>

<!-- Impact Stats -->
<div class="camp-stats">
    <div class="camp-stat">
        <i class="fas fa-globe-africa"></i>
        <strong class="counter" data-target="8">0</strong>
        <span>Active Campaigns</span>
    </div>
    <div class="camp-stat">
        <i class="fas fa-users"></i>
        <strong class="counter" data-target="25000">0</strong>
        <span>People Reached</span>
    </div>
    <div class="camp-stat">
        <i class="fas fa-file-signature"></i>
        <strong class="counter" data-target="9400">0</strong>
        <span>Petition Signatures</span>
    </div>
    <div class="camp-stat">
        <i class="fas fa-handshake"></i>
        <strong class="counter" data-target="34">0</strong>
        <span>Partners &amp; Sponsors</span>
    </div>
</div>

<!-- Campaigns List -->
<section class="camp-section">
    <div class="camp-container">

        <div class="section-title">
            <h2>Featured Campaigns</h2>
            <p>Each campaign targets a specific aspect of plastic pollution with clear goals and measurable outcomes.</p>
        </div>

        <!-- Campaign 1 -->
        <div class="camp-card camp-card-left">
            <div class="camp-card-img">
                <img src="images/campaign1.jpg" alt="Ban the Bag Campaign" onerror="this.src='https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=600&q=80'">
                <div class="camp-status active">Active</div>
            </div>
            <div class="camp-card-body">
                <span class="camp-tag">Policy Advocacy</span>
                <h3>Ban the Bag</h3>
                <p>A campaign pushing for a national ban on single-use plastic carrier bags. We are working closely with local government representatives, retailers, and environmental agencies to introduce legislation that reduces plastic bag usage across Ghana.</p>
                <div class="camp-metrics">
                    <div class="metric">
                        <div class="metric-bar"><div class="metric-fill" style="width:78%"></div></div>
                        <div class="metric-label"><span>Signatures Collected</span><strong>7,800 / 10,000</strong></div>
                    </div>
                    <div class="metric">
                        <div class="metric-bar"><div class="metric-fill" style="width:60%"></div></div>
                        <div class="metric-label"><span>Retailer Pledges</span><strong>60 / 100</strong></div>
                    </div>
                </div>
                <div class="camp-actions">
                    <a href="what-to-do.php#petition" class="camp-btn-primary">Sign the Petition</a>
                    <a href="donate.php" class="camp-btn-secondary">Support This Campaign</a>
                </div>
            </div>
        </div>

        <!-- Campaign 2 -->
        <div class="camp-card camp-card-right">
            <div class="camp-card-img">
                <img src="images/campaign2.jpg" alt="Ocean Clean Campaign" onerror="this.src='https://images.unsplash.com/photo-1527004013197-933b8ee0feaa?w=600&q=80'">
                <div class="camp-status active">Active</div>
            </div>
            <div class="camp-card-body">
                <span class="camp-tag" style="background:#e8f0fe;color:#3498db;">Cleanup Drive</span>
                <h3>Clean Our Coasts</h3>
                <p>Monthly coastal and river cleanup drives organized across Accra and surrounding regions. We partner with schools, youth groups, and corporate sponsors to mobilize teams for large-scale plastic removal events.</p>
                <div class="camp-metrics">
                    <div class="metric">
                        <div class="metric-bar"><div class="metric-fill" style="width:85%; background:#3498db;"></div></div>
                        <div class="metric-label"><span>Kg Plastic Removed</span><strong>42,500 kg collected</strong></div>
                    </div>
                    <div class="metric">
                        <div class="metric-bar"><div class="metric-fill" style="width:70%; background:#3498db;"></div></div>
                        <div class="metric-label"><span>Events Completed</span><strong>14 of 20 planned</strong></div>
                    </div>
                </div>
                <div class="camp-actions">
                    <a href="contact.php" class="camp-btn-primary" style="background:#3498db;">Join a Cleanup</a>
                    <a href="donate.php" class="camp-btn-secondary">Donate Equipment</a>
                </div>
            </div>
        </div>

        <!-- Campaign 3 -->
        <div class="camp-card camp-card-left">
            <div class="camp-card-img">
                <img src="images/campaign3.jpg" alt="Manufacturer Responsibility" onerror="this.src='https://images.unsplash.com/photo-1567201942-02f3a4d6a38e?w=600&q=80'">
                <div class="camp-status ongoing" style="background:#f39c12;">Ongoing</div>
            </div>
            <div class="camp-card-body">
                <span class="camp-tag" style="background:#fff8e1;color:#f39c12;">Industry Engagement</span>
                <h3>Manufacturer Responsibility Initiative</h3>
                <p>Working directly with product manufacturers and retailers to redesign packaging, adopt biodegradable alternatives, and take responsibility for the full lifecycle of their plastic products.</p>
                <div class="camp-metrics">
                    <div class="metric">
                        <div class="metric-bar"><div class="metric-fill" style="width:45%; background:#f39c12;"></div></div>
                        <div class="metric-label"><span>Companies Engaged</span><strong>9 of 20 target</strong></div>
                    </div>
                    <div class="metric">
                        <div class="metric-bar"><div class="metric-fill" style="width:30%; background:#f39c12;"></div></div>
                        <div class="metric-label"><span>Packaging Redesigns</span><strong>3 brands committed</strong></div>
                    </div>
                </div>
                <div class="camp-actions">
                    <a href="contact.php" class="camp-btn-primary" style="background:#f39c12;">Partner With Us</a>
                    <a href="strategy.php" class="camp-btn-secondary">Our Strategy</a>
                </div>
            </div>
        </div>

        <!-- Campaign 4 -->
        <div class="camp-card camp-card-right">
            <div class="camp-card-img">
                <img src="images/campaign4.jpg" alt="School Awareness" onerror="this.src='https://images.unsplash.com/photo-1497486751825-1233686d5d80?w=600&q=80'">
                <div class="camp-status active">Active</div>
            </div>
            <div class="camp-card-body">
                <span class="camp-tag" style="background:#fde8e8;color:#e74c3c;">Education</span>
                <h3>Plastic-Free Schools</h3>
                <p>An educational outreach program targeting primary and secondary schools across Greater Accra. Volunteers visit schools to deliver interactive lessons on plastic pollution, recycling, and sustainable choices.</p>
                <div class="camp-metrics">
                    <div class="metric">
                        <div class="metric-bar"><div class="metric-fill" style="width:65%; background:#e74c3c;"></div></div>
                        <div class="metric-label"><span>Schools Visited</span><strong>26 of 40 target</strong></div>
                    </div>
                    <div class="metric">
                        <div class="metric-bar"><div class="metric-fill" style="width:90%; background:#e74c3c;"></div></div>
                        <div class="metric-label"><span>Students Educated</span><strong>~9,000 students</strong></div>
                    </div>
                </div>
                <div class="camp-actions">
                    <a href="contact.php" class="camp-btn-primary" style="background:#e74c3c;">Volunteer to Teach</a>
                    <a href="donate.php" class="camp-btn-secondary">Fund Resources</a>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- Timeline Section -->
<section class="camp-timeline">
    <div class="camp-container">
        <div class="section-title" style="color:#fff;">
            <h2 style="color:#fff;">Campaign Timeline</h2>
            <p style="color:rgba(255,255,255,0.7);">Key milestones in our journey to fight plastic pollution.</p>
        </div>
        <div class="timeline">
            <div class="timeline-item left">
                <div class="timeline-dot"></div>
                <div class="timeline-content">
                    <span class="timeline-date">January 2025</span>
                    <h4>Group Formation</h4>
                    <p>PlasticPollutions founded at Pentecost University with 12 founding members.</p>
                </div>
            </div>
            <div class="timeline-item right">
                <div class="timeline-dot"></div>
                <div class="timeline-content">
                    <span class="timeline-date">March 2025</span>
                    <h4>First Cleanup Drive</h4>
                    <p>Organized our first coastal cleanup event, removing 800kg of plastic waste.</p>
                </div>
            </div>
            <div class="timeline-item left">
                <div class="timeline-dot"></div>
                <div class="timeline-content">
                    <span class="timeline-date">June 2025</span>
                    <h4>Ban the Bag Petition Launched</h4>
                    <p>Launched online petition which gathered 5,000 signatures in the first month.</p>
                </div>
            </div>
            <div class="timeline-item right">
                <div class="timeline-dot"></div>
                <div class="timeline-content">
                    <span class="timeline-date">September 2025</span>
                    <h4>School Outreach Program Starts</h4>
                    <p>Partnership with 10 schools launched the Plastic-Free Schools campaign.</p>
                </div>
            </div>
            <div class="timeline-item left">
                <div class="timeline-dot"></div>
                <div class="timeline-content">
                    <span class="timeline-date">2026 Onwards</span>
                    <h4>Expansion &amp; Policy Push</h4>
                    <p>Scaling campaigns nationally and engaging government for policy reforms.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="camp-cta">
    <div class="camp-container" style="text-align:center;">
        <h2>Want to Start a Campaign?</h2>
        <p>Have an idea for a campaign or initiative? We'd love to collaborate. Reach out to our team today.</p>
        <a href="contact.php" class="help-btn-main">Contact Our Team</a>
    </div>
</section>

<style>
/* ===== CAMPAIGNS PAGE ===== */
.camp-hero {
    background: linear-gradient(135deg, #0a2e17 0%, #1a6b3c 60%, #145a30 100%);
    min-height: 340px;
    display: flex; align-items: center; justify-content: center;
    text-align: center; position: relative; overflow: hidden;
}
.camp-hero::after {
    content: '';
    position: absolute;
    width: 400px; height: 400px;
    background: radial-gradient(circle, rgba(46,204,113,0.12) 0%, transparent 70%);
    bottom: -100px; left: -80px; border-radius: 50%;
}
.camp-hero-inner {
    position: relative; z-index: 2;
    color: #fff; padding: 60px 20px;
}
.camp-badge {
    display: inline-block;
    background: rgba(46,204,113,0.2);
    border: 1px solid #2ecc71;
    color: #2ecc71;
    padding: 5px 16px; border-radius: 50px;
    font-size: 0.8rem; letter-spacing: 2px;
    text-transform: uppercase; margin-bottom: 15px;
}
.camp-hero-inner h1 {
    font-size: clamp(2rem, 5vw, 3.5rem);
    font-weight: 800; margin: 10px 0;
}
.camp-green { color: #2ecc71; }
.camp-hero-inner p {
    color: rgba(255,255,255,0.8); font-size: 1.1rem;
    max-width: 520px; margin: 0 auto;
}

/* Stats */
.camp-stats {
    display: flex; flex-wrap: wrap;
    background: #0d3d20; justify-content: center;
}
.camp-stat {
    flex: 1; min-width: 140px;
    padding: 24px 20px; text-align: center;
    border-right: 1px solid rgba(255,255,255,0.08);
}
.camp-stat:last-child { border-right: none; }
.camp-stat i { font-size: 1.4rem; color: #2ecc71; margin-bottom: 6px; display: block; }
.camp-stat strong {
    display: block; font-size: 1.8rem;
    font-weight: 800; color: #fff;
}
.camp-stat span {
    color: rgba(255,255,255,0.65);
    font-size: 0.78rem; text-transform: uppercase; letter-spacing: 1px;
}

/* Campaigns Section */
.camp-section {
    padding: 70px 20px;
    background: #f8fdf9;
}
.camp-container { max-width: 1150px; margin: 0 auto; }
.section-title {
    text-align: center; margin-bottom: 50px;
}
.section-title h2 {
    font-size: 2rem; font-weight: 700;
    color: #0d3d20; margin-bottom: 10px;
}
.section-title p {
    color: #666; font-size: 1rem;
    max-width: 600px; margin: 0 auto;
}

/* Camp Card */
.camp-card {
    display: grid;
    grid-template-columns: 1fr 1.2fr;
    gap: 0;
    background: #fff;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 8px 35px rgba(0,0,0,0.08);
    margin-bottom: 35px;
    transition: transform 0.3s, box-shadow 0.3s;
}
.camp-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 20px 50px rgba(0,0,0,0.12);
}
.camp-card-right { direction: rtl; }
.camp-card-right > * { direction: ltr; }

.camp-card-img {
    position: relative;
    min-height: 280px;
    overflow: hidden;
}
.camp-card-img img {
    width: 100%; height: 100%;
    object-fit: cover;
    display: block;
    transition: transform 0.4s ease;
}
.camp-card:hover .camp-card-img img { transform: scale(1.05); }
.camp-status {
    position: absolute; top: 16px; left: 16px;
    background: #2ecc71; color: #fff;
    padding: 4px 14px; border-radius: 50px;
    font-size: 0.78rem; font-weight: 700;
    text-transform: uppercase; letter-spacing: 1px;
}

.camp-card-body {
    padding: 35px 30px;
}
.camp-tag {
    display: inline-block;
    background: #e8f8ef; color: #1a6b3c;
    padding: 4px 13px; border-radius: 50px;
    font-size: 0.78rem; font-weight: 700;
    text-transform: uppercase; letter-spacing: 0.5px;
    margin-bottom: 12px;
}
.camp-card-body h3 {
    font-size: 1.4rem; font-weight: 700;
    color: #0d3d20; margin: 0 0 12px;
}
.camp-card-body > p {
    color: #666; line-height: 1.7;
    font-size: 0.95rem; margin-bottom: 22px;
}

/* Metrics */
.camp-metrics { margin-bottom: 22px; }
.metric { margin-bottom: 14px; }
.metric-bar {
    height: 8px; background: #e0f0e8;
    border-radius: 50px; overflow: hidden; margin-bottom: 6px;
}
.metric-fill {
    height: 100%; background: #2ecc71;
    border-radius: 50px;
    transition: width 1.5s ease;
}
.metric-label {
    display: flex; justify-content: space-between;
    font-size: 0.82rem;
}
.metric-label span { color: #888; }
.metric-label strong { color: #0d3d20; }

.camp-actions { display: flex; gap: 12px; flex-wrap: wrap; }
.camp-btn-primary {
    display: inline-block;
    background: #1a6b3c; color: #fff;
    padding: 11px 22px; border-radius: 50px;
    font-size: 0.88rem; font-weight: 700;
    text-decoration: none; transition: opacity 0.2s, transform 0.2s;
}
.camp-btn-primary:hover { opacity: 0.9; transform: translateY(-2px); color:#fff; }
.camp-btn-secondary {
    display: inline-block;
    background: transparent; color: #1a6b3c;
    border: 2px solid #1a6b3c;
    padding: 9px 20px; border-radius: 50px;
    font-size: 0.88rem; font-weight: 700;
    text-decoration: none; transition: all 0.2s;
}
.camp-btn-secondary:hover {
    background: #1a6b3c; color: #fff;
}

/* Timeline */
.camp-timeline {
    padding: 70px 20px;
    background: linear-gradient(135deg, #0a2e17, #1a6b3c);
}
.timeline {
    position: relative;
    max-width: 750px;
    margin: 0 auto;
    padding: 20px 0;
}
.timeline::before {
    content: '';
    position: absolute;
    left: 50%; top: 0; bottom: 0;
    width: 2px;
    background: rgba(46,204,113,0.3);
    transform: translateX(-50%);
}
.timeline-item {
    position: relative;
    width: 45%;
    margin-bottom: 30px;
}
.timeline-item.left { margin-left: 0; text-align: right; padding-right: 30px; }
.timeline-item.right { margin-left: 55%; text-align: left; padding-left: 30px; }
.timeline-dot {
    position: absolute;
    width: 14px; height: 14px;
    background: #2ecc71;
    border: 3px solid #fff;
    border-radius: 50%;
    top: 8px;
}
.timeline-item.left .timeline-dot { right: -37px; }
.timeline-item.right .timeline-dot { left: -37px; }
.timeline-content {
    background: rgba(255,255,255,0.08);
    border: 1px solid rgba(46,204,113,0.2);
    padding: 18px 20px;
    border-radius: 14px;
}
.timeline-date {
    font-size: 0.78rem;
    color: #2ecc71;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 1px;
    display: block;
    margin-bottom: 5px;
}
.timeline-content h4 {
    color: #fff;
    font-weight: 700;
    margin: 0 0 6px;
    font-size: 1rem;
}
.timeline-content p {
    color: rgba(255,255,255,0.7);
    font-size: 0.88rem;
    margin: 0;
    line-height: 1.6;
}

/* CTA */
.camp-cta {
    padding: 60px 20px;
    background: #f0faf4;
}
.camp-cta h2 {
    font-size: 2rem; color: #0d3d20;
    font-weight: 700; margin-bottom: 12px;
}
.camp-cta p {
    color: #666; font-size: 1rem;
    max-width: 500px; margin: 0 auto 25px;
}
.help-btn-main {
    display: inline-block;
    background: #1a6b3c; color: #fff;
    padding: 13px 32px; border-radius: 50px;
    font-weight: 700; text-decoration: none;
    transition: background 0.3s;
}
.help-btn-main:hover { background: #145a30; color:#fff; }

/* Responsive */
@media (max-width: 768px) {
    .camp-card { grid-template-columns: 1fr; }
    .camp-card-right { direction: ltr; }
    .camp-card-img { min-height: 200px; }
    .timeline::before { left: 20px; }
    .timeline-item.left,
    .timeline-item.right {
        width: 100%; margin-left: 0;
        text-align: left;
        padding-left: 50px; padding-right: 0;
    }
    .timeline-item.left .timeline-dot,
    .timeline-item.right .timeline-dot { left: 13px; right: auto; }
    .camp-stat { min-width: 45%; }
}
@media (max-width: 500px) {
    .camp-stat { min-width: 100%; border-right: none; border-bottom: 1px solid rgba(255,255,255,0.08); }
    .camp-card-body { padding: 25px 18px; }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function () {
    // Animated Counters
    const counters = document.querySelectorAll('.counter');
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const el = entry.target;
                const target = +el.getAttribute('data-target');
                const speed = 2000;
                const increment = target / (speed / 16);
                let current = 0;
                const timer = setInterval(() => {
                    current += increment;
                    if (current >= target) {
                        el.textContent = target.toLocaleString();
                        clearInterval(timer);
                    } else {
                        el.textContent = Math.floor(current).toLocaleString();
                    }
                }, 16);
                observer.unobserve(el);
            }
        });
    }, { threshold: 0.5 });
    counters.forEach(c => observer.observe(c));

    // Animate metric bars on scroll
    const fills = document.querySelectorAll('.metric-fill');
    const barObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.width = entry.target.style.width; // trigger CSS transition
                barObserver.unobserve(entry.target);
            }
        });
    }, { threshold: 0.3 });
    fills.forEach(f => {
        const w = f.style.width;
        f.style.width = '0%';
        setTimeout(() => barObserver.observe(f), 100);
        // Reset width after observer catches it
        setTimeout(() => { f.style.width = w; }, 300);
    });
});
</script>

<?php include 'includes/footer.php'; ?>