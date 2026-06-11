<?php
include 'includes/header.php';
include 'includes/navbar.php';
?>

<!-- Page Hero -->
<section class="dev-hero">
    <div class="dev-hero-overlay"></div>
    <div class="dev-hero-content">
        <span class="dev-badge">Meet The Team</span>
        <h1>Our <span class="dev-highlight">Developers</span></h1>
        <p>The passionate minds behind the PlasticPollutions platform</p>
    </div>
</section>

<!-- Team Cards -->
<section class="dev-section">
    <div class="dev-container">
        <div class="dev-intro">
            <h2>The People Behind the Mission</h2>
            <p>Our team of dedicated students from Pentecost University built this platform to help fight plastic pollution. We believe technology can drive real environmental change.</p>
        </div>

        <div class="dev-grid">

            <!-- Developer 1 -->
            <div class="dev-card" data-delay="0">
                <div class="dev-card-top">
                    <div class="dev-img-wrap">
                        <img src="images/JABISI.jpg" alt="Developer 1"">
                        <div class="dev-social-links">
                            <a href="https://github.com/" target="_blank" title="GitHub"><i class="fab fa-github"></i></a>
                            <a href="https://linkedin.com/" target="_blank" title="LinkedIn"><i class="fab fa-linkedin"></i></a>
                            <a href="mailto:jabisirichard055@gmail.com" title="Email"><i class="fas fa-envelope"></i></a>
                        </div>
                    </div>
                </div>
                <div class="dev-card-body">
                    <h3>Jabisi Mponignan Richard</h3>
                    <span class="dev-role">Team Lead &amp; Backend Developer</span>
                    <p class="dev-philosophy">"Code is not just logic — it's a tool for change. I believe every line written with purpose can contribute to a better world."</p>
                    <div class="dev-skills">
                        <span>PHP</span><span>MySQL</span><span>Laravel</span>
                    </div>
                </div>
            </div>

            <!-- Developer 2 -->
           <div class="dev-card" data-delay="100">
    <div class="dev-card-top">
        <div class="dev-img-wrap">
            <img src="images/CATH.jpg" alt="Developer 2">
            <div class="dev-social-links">
                <a href="https://github.com/" target="_blank" title="GitHub"><i class="fab fa-github"></i></a>
                <a href="https://linkedin.com/" target="_blank" title="LinkedIn"><i class="fab fa-linkedin"></i></a>
                <a href="mailto:catherinedoku@gmail.com" title="Email"><i class="fas fa-envelope"></i></a>
            </div>
        </div>
    </div>
                <div class="dev-card-body">
                    <h3>Catherine Doku</h3>
                    <span class="dev-role">UI/UX Designer &amp; Frontend Developer</span>
                    <p class="dev-philosophy">"Design is the bridge between people and purpose. I craft interfaces that don't just look good — they inspire action."</p>
                    <div class="dev-skills">
                        <span>HTML/CSS</span><span>JavaScript</span><span>Figma</span>
                    </div>
                </div>
            </div>

            <!-- Developer 3 -->
            <div class="dev-card" data-delay="200">
                <div class="dev-card-top">
                    <div class="dev-img-wrap">
                        <img src="images/paul.jpeg" alt="Developer 3">
                        <div class="dev-social-links">
                            <a href="https://github.com/" target="_blank" title="GitHub"><i class="fab fa-github"></i></a>
                            <a href="https://linkedin.com/" target="_blank" title="LinkedIn"><i class="fab fa-linkedin"></i></a>
                            <a href="mailto:kwame@example.com" title="Email"><i class="fas fa-envelope"></i></a>
                        </div>
                    </div>
                </div>
                <div class="dev-card-body">
                    <h3>Paul Boison </h3>
                    <span class="dev-role">Database Administrator &amp; Security</span>
                    <p class="dev-philosophy">"Data is power. Protecting it and using it responsibly is the foundation of any trustworthy system."</p>
                    <div class="dev-skills">
                        <span>MySQL</span><span>PHP</span><span>Security</span>
                    </div>
                </div>
            </div>

  
</section>

<!-- Tech Stack Section -->
<section class="dev-tech">
    <div class="dev-container">
        <h2>Technologies We Used</h2>
        <div class="tech-grid">
            <div class="tech-item"><i class="fab fa-php"></i><span>PHP</span></div>
            <div class="tech-item"><i class="fas fa-database"></i><span>MySQL</span></div>
            <div class="tech-item"><i class="fab fa-js"></i><span>JavaScript</span></div>
            <div class="tech-item"><i class="fab fa-html5"></i><span>HTML5</span></div>
            <div class="tech-item"><i class="fab fa-css3-alt"></i><span>CSS3</span></div>
            <div class="tech-item"><i class="fab fa-bootstrap"></i><span>Bootstrap</span></div>
        </div>
    </div>
</section>

<style>
/* ===== DEVELOPERS PAGE ===== */
.dev-hero {
    position: relative;
    min-height: 340px;
    background: linear-gradient(135deg, #0d3d20 0%, #1a6b3c 50%, #0a2e17 100%);
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    overflow: hidden;
}
.dev-hero::before {
    content: '';
    position: absolute;
    inset: 0;
    background: url('images/hero-bg.jpg') center/cover no-repeat;
    opacity: 0.15;
}
.dev-hero-content {
    position: relative;
    z-index: 2;
    color: #fff;
    padding: 60px 20px;
}
.dev-badge {
    display: inline-block;
    background: rgba(46,204,113,0.25);
    border: 1px solid #2ecc71;
    color: #2ecc71;
    padding: 6px 18px;
    border-radius: 50px;
    font-size: 0.85rem;
    letter-spacing: 2px;
    text-transform: uppercase;
    margin-bottom: 18px;
}
.dev-hero-content h1 {
    font-size: clamp(2rem, 5vw, 3.5rem);
    font-weight: 800;
    margin: 10px 0;
    color: #fff;
}
.dev-highlight { color: #2ecc71; }
.dev-hero-content p {
    font-size: 1.1rem;
    color: rgba(255,255,255,0.8);
    max-width: 500px;
    margin: 0 auto;
}

/* Section */
.dev-section {
    padding: 70px 20px;
    background: #f8fdf9;
}
.dev-container {
    max-width: 1200px;
    margin: 0 auto;
}
.dev-intro {
    text-align: center;
    margin-bottom: 50px;
}
.dev-intro h2 {
    font-size: 2rem;
    font-weight: 700;
    color: #0d3d20;
    margin-bottom: 12px;
}
.dev-intro p {
    color: #555;
    font-size: 1.05rem;
    max-width: 650px;
    margin: 0 auto;
    line-height: 1.7;
}

/* Grid */
.dev-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
    gap: 30px;
}

/* Card */
.dev-card {
    background: #fff;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 8px 30px rgba(0,0,0,0.08);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    animation: fadeUp 0.6s ease both;
}
.dev-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 20px 50px rgba(26,107,60,0.15);
}
@keyframes fadeUp {
    from { opacity:0; transform: translateY(30px); }
    to { opacity:1; transform: translateY(0); }
}
.dev-card:nth-child(1) { animation-delay: 0s; }
.dev-card:nth-child(2) { animation-delay: 0.1s; }
.dev-card:nth-child(3) { animation-delay: 0.2s; }
.dev-card:nth-child(4) { animation-delay: 0.3s; }

.dev-card-top {
    background: linear-gradient(135deg, #1a6b3c, #2ecc71);
    padding: 30px 20px 20px;
    display: flex;
    justify-content: center;
}
.dev-img-wrap {
    position: relative;
    width: 120px;
    height: 120px;
}
.dev-img-wrap img {
    width: 120px;
    height: 120px;
    border-radius: 50%;
    object-fit: cover;
    border: 4px solid rgba(255,255,255,0.4);
}
.dev-social-links {
    position: absolute;
    bottom: -14px;
    left: 50%;
    transform: translateX(-50%);
    display: flex;
    gap: 6px;
    background: #fff;
    padding: 6px 12px;
    border-radius: 50px;
    box-shadow: 0 4px 15px rgba(0,0,0,0.15);
}
.dev-social-links a {
    color: #1a6b3c;
    font-size: 0.85rem;
    transition: color 0.2s;
    width: 22px;
    text-align: center;
}
.dev-social-links a:hover { color: #2ecc71; }

.dev-card-body {
    padding: 30px 22px 24px;
    text-align: center;
}
.dev-card-body h3 {
    font-size: 1.2rem;
    font-weight: 700;
    color: #0d3d20;
    margin: 0 0 6px;
}
.dev-role {
    display: inline-block;
    font-size: 0.8rem;
    color: #1a6b3c;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    margin-bottom: 14px;
}
.dev-philosophy {
    color: #666;
    font-size: 0.9rem;
    line-height: 1.65;
    font-style: italic;
    margin-bottom: 16px;
    border-left: 3px solid #2ecc71;
    padding-left: 12px;
    text-align: left;
}
.dev-skills {
    display: flex;
    flex-wrap: wrap;
    gap: 6px;
    justify-content: center;
}
.dev-skills span {
    background: #e8f8ef;
    color: #1a6b3c;
    padding: 4px 12px;
    border-radius: 50px;
    font-size: 0.75rem;
    font-weight: 600;
}

/* Tech Stack */
.dev-tech {
    padding: 60px 20px;
    background: #0d3d20;
    text-align: center;
}
.dev-tech h2 {
    color: #fff;
    font-size: 1.8rem;
    margin-bottom: 35px;
}
.tech-grid {
    display: flex;
    flex-wrap: wrap;
    gap: 25px;
    justify-content: center;
    max-width: 800px;
    margin: 0 auto;
}
.tech-item {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 8px;
    background: rgba(255,255,255,0.07);
    border: 1px solid rgba(46,204,113,0.2);
    padding: 22px 28px;
    border-radius: 16px;
    transition: background 0.3s, transform 0.3s;
    min-width: 100px;
}
.tech-item:hover {
    background: rgba(46,204,113,0.15);
    transform: translateY(-5px);
}
.tech-item i {
    font-size: 2.2rem;
    color: #2ecc71;
}
.tech-item span {
    color: #fff;
    font-size: 0.85rem;
    font-weight: 600;
}

@media (max-width: 600px) {
    .dev-grid { grid-template-columns: 1fr; }
}
</style>

<?php include 'includes/footer.php'; ?>