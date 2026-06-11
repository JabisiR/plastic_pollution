<?php
include 'includes/header.php';
include 'includes/navbar.php';

// Handle pledge form submission
$pledge_success = false;
$pledge_error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['pledge_name'])) {
    $pledge_name  = trim(htmlspecialchars($_POST['pledge_name']));
    $pledge_email = trim(htmlspecialchars($_POST['pledge_email']));
    $pledge_type  = trim(htmlspecialchars($_POST['pledge_type']));

    if (empty($pledge_name) || empty($pledge_email) || empty($pledge_type)) {
        $pledge_error = 'Please fill in all fields.';
    } elseif (!filter_var($pledge_email, FILTER_VALIDATE_EMAIL)) {
        $pledge_error = 'Please enter a valid email address.';
    } else {
        // Save to DB if you have a pledges table, or just confirm
        $pledge_success = true;
    }
}
?>

<!-- Hero -->
<section class="help-hero">
    <div class="help-hero-inner">
        <span class="help-badge">Take Action</span>
        <h1>How <span class="help-green">You Can Help</span></h1>
        <p>Every action counts. Join thousands of people committed to ending plastic pollution.</p>
        <a href="#pledge" class="help-btn-main">Make a Pledge</a>
    </div>
</section>

<!-- Stats Bar -->
<div class="help-stats-bar">
    <div class="help-stat">
        <strong class="counter" data-target="12400">0</strong>
        <span>Volunteers Worldwide</span>
    </div>
    <div class="help-stat">
        <strong class="counter" data-target="3200">0</strong>
        <span>Pledges Made</span>
    </div>
    <div class="help-stat">
        <strong class="counter" data-target="580">0</strong>
        <span>Cleanup Events</span>
    </div>
    <div class="help-stat">
        <strong class="counter" data-target="45000">0</strong>
        <span>Kg of Plastic Removed</span>
    </div>
</div>

<!-- Ways to Help -->
<section class="help-ways">
    <div class="help-container">
        <div class="section-header">
            <h2>Ways to Make a Difference</h2>
            <p>You don't need to be an expert — just willing to act. Here's how you can contribute.</p>
        </div>

        <div class="help-ways-grid">

            <div class="help-way-card">
                <div class="help-way-icon" style="background:#e8f8ef;color:#1a6b3c;">
                    <i class="fas fa-hands-helping"></i>
                </div>
                <h3>Volunteer</h3>
                <p>Join our local cleanup drives and community awareness programs. No experience needed — just bring your energy and passion.</p>
                <ul>
                    <li><i class="fas fa-check"></i> Beach &amp; river cleanup events</li>
                    <li><i class="fas fa-check"></i> School awareness programs</li>
                    <li><i class="fas fa-check"></i> Community workshops</li>
                </ul>
                <a href="contact.php" class="help-way-btn">Sign Up to Volunteer</a>
            </div>

            <div class="help-way-card">
                <div class="help-way-icon" style="background:#fff8e1;color:#f39c12;">
                    <i class="fas fa-hand-holding-usd"></i>
                </div>
                <h3>Donate</h3>
                <p>Your financial support helps fund campaigns, purchase cleanup equipment, and run educational outreach programs.</p>
                <ul>
                    <li><i class="fas fa-check"></i> Fund cleanup equipment</li>
                    <li><i class="fas fa-check"></i> Support awareness campaigns</li>
                    <li><i class="fas fa-check"></i> Help school education programs</li>
                </ul>
                <a href="donate.php" class="help-way-btn" style="background:#f39c12;">Donate Now</a>
            </div>

            <div class="help-way-card">
                <div class="help-way-icon" style="background:#fde8e8;color:#e74c3c;">
                    <i class="fas fa-leaf"></i>
                </div>
                <h3>Change Your Lifestyle</h3>
                <p>Small daily changes add up to massive impact. Reduce your plastic footprint with these simple habits.</p>
                <ul>
                    <li><i class="fas fa-check"></i> Use reusable bags &amp; bottles</li>
                    <li><i class="fas fa-check"></i> Refuse single-use plastics</li>
                    <li><i class="fas fa-check"></i> Buy products in bulk</li>
                </ul>
                <a href="what-to-do.php" class="help-way-btn" style="background:#e74c3c;">Learn More</a>
            </div>

            <div class="help-way-card">
                <div class="help-way-icon" style="background:#e8f0fe;color:#3498db;">
                    <i class="fas fa-share-alt"></i>
                </div>
                <h3>Spread the Word</h3>
                <p>Use your voice on social media to raise awareness and inspire others to join the movement.</p>
                <ul>
                    <li><i class="fas fa-check"></i> Share our posts online</li>
                    <li><i class="fas fa-check"></i> Use #PlasticPollutions</li>
                    <li><i class="fas fa-check"></i> Tag friends to take the pledge</li>
                </ul>
                <div class="help-social-share">
                    <a href="https://twitter.com/intent/tweet?text=I+just+pledged+to+fight+plastic+pollution+with+PlasticPollutions!+%23PlasticPollutions" target="_blank" class="social-share-btn twitter"><i class="fab fa-twitter"></i></a>
                    <a href="https://www.facebook.com/sharer/sharer.php?u=<?= urlencode('http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']) ?>" target="_blank" class="social-share-btn facebook"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://wa.me/?text=Join+the+PlasticPollutions+movement!" target="_blank" class="social-share-btn whatsapp"><i class="fab fa-whatsapp"></i></a>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Pledge Section -->
<section class="pledge-section" id="pledge">
    <div class="help-container">
        <div class="pledge-inner">
            <div class="pledge-info">
                <h2>Take the Pledge</h2>
                <p>Make a personal commitment to reduce plastic in your daily life. When you sign the pledge, you join a growing community of changemakers at Pentecost University and beyond.</p>
                <div class="pledge-types">
                    <div class="pledge-type-item">
                        <i class="fas fa-recycle"></i>
                        <div>
                            <strong>Reduce</strong>
                            <span>Cut your single-use plastic consumption by 50%</span>
                        </div>
                    </div>
                    <div class="pledge-type-item">
                        <i class="fas fa-people-carry"></i>
                        <div>
                            <strong>Participate</strong>
                            <span>Join at least one cleanup event this year</span>
                        </div>
                    </div>
                    <div class="pledge-type-item">
                        <i class="fas fa-bullhorn"></i>
                        <div>
                            <strong>Advocate</strong>
                            <span>Influence at least 5 people to reduce plastic use</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="pledge-form-wrap">
                <?php if ($pledge_success): ?>
                <div class="pledge-success">
                    <i class="fas fa-check-circle"></i>
                    <h3>Thank You for Your Pledge!</h3>
                    <p>You're now part of the PlasticPollutions movement. Together we can make a real difference.</p>
                    <a href="index.php" class="help-btn-main">Back to Home</a>
                </div>
                <?php else: ?>
                    <?php if ($pledge_error): ?>
                    <div class="pledge-alert"><?= $pledge_error ?></div>
                    <?php endif; ?>
                <form method="POST" action="#pledge" class="pledge-form" novalidate>
                    <h3>Sign the Pledge</h3>
                    <div class="pform-group">
                        <label for="pledge_name">Your Full Name</label>
                        <input type="text" id="pledge_name" name="pledge_name" placeholder="e.g. Kofi Mensah" required value="<?= isset($_POST['pledge_name']) ? htmlspecialchars($_POST['pledge_name']) : '' ?>">
                    </div>
                    <div class="pform-group">
                        <label for="pledge_email">Email Address</label>
                        <input type="email" id="pledge_email" name="pledge_email" placeholder="you@example.com" required value="<?= isset($_POST['pledge_email']) ? htmlspecialchars($_POST['pledge_email']) : '' ?>">
                    </div>
                    <div class="pform-group">
                        <label for="pledge_type">I pledge to:</label>
                        <select id="pledge_type" name="pledge_type" required>
                            <option value="" disabled selected>Select a pledge</option>
                            <option value="reduce">Reduce my single-use plastic by 50%</option>
                            <option value="participate">Join a cleanup event this year</option>
                            <option value="advocate">Advocate to 5+ people about plastic reduction</option>
                            <option value="all">All of the above</option>
                        </select>
                    </div>
                    <button type="submit" class="pledge-submit-btn">
                        <i class="fas fa-signature"></i> Sign the Pledge
                    </button>
                </form>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<!-- Tips Section -->
<section class="help-tips">
    <div class="help-container">
        <h2>Quick Tips to Reduce Plastic Today</h2>
        <div class="tips-grid">
            <div class="tip-item"><span class="tip-num">01</span><p>Carry a reusable water bottle instead of buying plastic ones.</p></div>
            <div class="tip-item"><span class="tip-num">02</span><p>Say no to plastic straws — use metal, bamboo, or paper alternatives.</p></div>
            <div class="tip-item"><span class="tip-num">03</span><p>Bring your own bag when shopping at markets or supermarkets.</p></div>
            <div class="tip-item"><span class="tip-num">04</span><p>Buy in bulk to reduce packaging waste from small-quantity products.</p></div>
            <div class="tip-item"><span class="tip-num">05</span><p>Choose products with minimal or biodegradable packaging.</p></div>
            <div class="tip-item"><span class="tip-num">06</span><p>Recycle correctly — learn what your local facility accepts.</p></div>
        </div>
    </div>
</section>

<style>
/* ===== HOW TO HELP PAGE ===== */
.help-hero {
    background: linear-gradient(135deg, #0a2e17 0%, #1a6b3c 60%, #145a30 100%);
    min-height: 360px;
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    position: relative;
    overflow: hidden;
}
.help-hero::before {
    content: '';
    position: absolute;
    width: 500px; height: 500px;
    background: radial-gradient(circle, rgba(46,204,113,0.15) 0%, transparent 70%);
    top: -100px; right: -100px;
    border-radius: 50%;
}
.help-hero-inner {
    position: relative;
    z-index: 2;
    color: #fff;
    padding: 60px 20px;
}
.help-badge {
    display: inline-block;
    background: rgba(46,204,113,0.2);
    border: 1px solid #2ecc71;
    color: #2ecc71;
    padding: 5px 16px;
    border-radius: 50px;
    font-size: 0.8rem;
    letter-spacing: 2px;
    text-transform: uppercase;
    margin-bottom: 15px;
}
.help-hero-inner h1 {
    font-size: clamp(2rem, 5vw, 3.5rem);
    font-weight: 800;
    margin: 10px 0;
}
.help-green { color: #2ecc71; }
.help-hero-inner p {
    color: rgba(255,255,255,0.8);
    font-size: 1.1rem;
    max-width: 500px;
    margin: 0 auto 25px;
}
.help-btn-main {
    display: inline-block;
    background: #2ecc71;
    color: #fff;
    padding: 13px 32px;
    border-radius: 50px;
    font-weight: 700;
    text-decoration: none;
    transition: background 0.3s, transform 0.2s;
}
.help-btn-main:hover { background: #27ae60; transform: translateY(-2px); }

/* Stats bar */
.help-stats-bar {
    display: flex;
    flex-wrap: wrap;
    background: #0d3d20;
    justify-content: center;
}
.help-stat {
    flex: 1;
    min-width: 140px;
    padding: 25px 20px;
    text-align: center;
    border-right: 1px solid rgba(255,255,255,0.08);
}
.help-stat:last-child { border-right: none; }
.help-stat strong {
    display: block;
    font-size: 2rem;
    font-weight: 800;
    color: #2ecc71;
}
.help-stat span {
    color: rgba(255,255,255,0.7);
    font-size: 0.8rem;
    text-transform: uppercase;
    letter-spacing: 1px;
}

/* Ways Section */
.help-ways {
    padding: 70px 20px;
    background: #f8fdf9;
}
.help-container {
    max-width: 1200px;
    margin: 0 auto;
}
.section-header {
    text-align: center;
    margin-bottom: 45px;
}
.section-header h2 {
    font-size: 2rem;
    font-weight: 700;
    color: #0d3d20;
    margin-bottom: 10px;
}
.section-header p {
    color: #666;
    font-size: 1.05rem;
    max-width: 600px;
    margin: 0 auto;
}
.help-ways-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
    gap: 25px;
}
.help-way-card {
    background: #fff;
    border-radius: 18px;
    padding: 30px 25px;
    box-shadow: 0 5px 25px rgba(0,0,0,0.07);
    transition: transform 0.3s, box-shadow 0.3s;
    border-top: 4px solid #2ecc71;
}
.help-way-card:nth-child(2) { border-top-color: #f39c12; }
.help-way-card:nth-child(3) { border-top-color: #e74c3c; }
.help-way-card:nth-child(4) { border-top-color: #3498db; }
.help-way-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 15px 40px rgba(0,0,0,0.12);
}
.help-way-icon {
    width: 56px; height: 56px;
    border-radius: 14px;
    display: flex; align-items: center; justify-content: center;
    font-size: 1.5rem;
    margin-bottom: 18px;
}
.help-way-card h3 {
    font-size: 1.2rem;
    font-weight: 700;
    color: #0d3d20;
    margin-bottom: 10px;
}
.help-way-card p {
    color: #666;
    font-size: 0.92rem;
    line-height: 1.65;
    margin-bottom: 15px;
}
.help-way-card ul {
    list-style: none;
    padding: 0;
    margin: 0 0 20px;
}
.help-way-card ul li {
    color: #555;
    font-size: 0.88rem;
    margin-bottom: 7px;
    display: flex;
    align-items: center;
    gap: 8px;
}
.help-way-card ul li i { color: #2ecc71; font-size: 0.75rem; }
.help-way-btn {
    display: inline-block;
    background: #1a6b3c;
    color: #fff;
    padding: 10px 22px;
    border-radius: 50px;
    font-size: 0.88rem;
    font-weight: 600;
    text-decoration: none;
    transition: opacity 0.2s, transform 0.2s;
}
.help-way-btn:hover { opacity: 0.9; transform: translateY(-2px); color:#fff; }
.help-social-share {
    display: flex;
    gap: 10px;
    margin-top: 8px;
}
.social-share-btn {
    width: 40px; height: 40px;
    border-radius: 50%;
    display: flex; align-items: center; justify-content: center;
    color: #fff;
    font-size: 1rem;
    text-decoration: none;
    transition: transform 0.2s;
}
.social-share-btn:hover { transform: scale(1.1); color:#fff; }
.social-share-btn.twitter { background: #1da1f2; }
.social-share-btn.facebook { background: #1877f2; }
.social-share-btn.whatsapp { background: #25d366; }

/* Pledge Section */
.pledge-section {
    padding: 70px 20px;
    background: #fff;
}
.pledge-inner {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 50px;
    align-items: start;
}
.pledge-info h2 {
    font-size: 2rem;
    font-weight: 700;
    color: #0d3d20;
    margin-bottom: 14px;
}
.pledge-info > p {
    color: #666;
    line-height: 1.7;
    margin-bottom: 25px;
    font-size: 0.97rem;
}
.pledge-types { display: flex; flex-direction: column; gap: 16px; }
.pledge-type-item {
    display: flex;
    align-items: flex-start;
    gap: 14px;
    background: #f0faf4;
    padding: 16px;
    border-radius: 12px;
}
.pledge-type-item i {
    font-size: 1.4rem;
    color: #1a6b3c;
    margin-top: 2px;
}
.pledge-type-item strong {
    display: block;
    color: #0d3d20;
    font-weight: 700;
    margin-bottom: 3px;
}
.pledge-type-item span { color: #666; font-size: 0.88rem; }

.pledge-form-wrap {
    background: #f8fdf9;
    border-radius: 20px;
    padding: 35px;
    box-shadow: 0 5px 25px rgba(0,0,0,0.06);
}
.pledge-form h3 {
    font-size: 1.4rem;
    font-weight: 700;
    color: #0d3d20;
    margin-bottom: 22px;
}
.pform-group { margin-bottom: 18px; }
.pform-group label {
    display: block;
    font-size: 0.88rem;
    font-weight: 600;
    color: #333;
    margin-bottom: 6px;
}
.pform-group input,
.pform-group select {
    width: 100%;
    padding: 12px 15px;
    border: 1.5px solid #d0e8d9;
    border-radius: 10px;
    font-size: 0.95rem;
    color: #333;
    background: #fff;
    transition: border-color 0.2s;
    box-sizing: border-box;
}
.pform-group input:focus,
.pform-group select:focus {
    outline: none;
    border-color: #2ecc71;
}
.pledge-submit-btn {
    width: 100%;
    padding: 14px;
    background: linear-gradient(135deg, #1a6b3c, #2ecc71);
    color: #fff;
    border: none;
    border-radius: 12px;
    font-size: 1rem;
    font-weight: 700;
    cursor: pointer;
    transition: opacity 0.2s;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    margin-top: 5px;
}
.pledge-submit-btn:hover { opacity: 0.9; }
.pledge-alert {
    background: #fde8e8;
    border: 1px solid #e74c3c;
    color: #c0392b;
    padding: 12px 15px;
    border-radius: 10px;
    margin-bottom: 16px;
    font-size: 0.9rem;
}
.pledge-success {
    text-align: center;
    padding: 20px;
}
.pledge-success i {
    font-size: 3rem;
    color: #2ecc71;
    margin-bottom: 12px;
}
.pledge-success h3 { color: #0d3d20; margin-bottom: 10px; }
.pledge-success p { color: #666; margin-bottom: 20px; }

/* Tips */
.help-tips {
    padding: 65px 20px;
    background: #f0faf4;
}
.help-tips h2 {
    text-align: center;
    font-size: 1.8rem;
    color: #0d3d20;
    margin-bottom: 35px;
    font-weight: 700;
}
.tips-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
    gap: 20px;
}
.tip-item {
    background: #fff;
    border-radius: 14px;
    padding: 22px;
    display: flex;
    align-items: flex-start;
    gap: 14px;
    box-shadow: 0 3px 15px rgba(0,0,0,0.06);
    transition: transform 0.3s;
}
.tip-item:hover { transform: translateY(-4px); }
.tip-num {
    font-size: 1.8rem;
    font-weight: 900;
    color: #d5f0e0;
    line-height: 1;
    flex-shrink: 0;
}
.tip-item p {
    color: #444;
    font-size: 0.9rem;
    line-height: 1.6;
    margin: 0;
}

@media (max-width: 768px) {
    .pledge-inner { grid-template-columns: 1fr; }
    .help-stat { min-width: 45%; }
}
@media (max-width: 500px) {
    .help-stat { min-width: 100%; border-right: none; border-bottom: 1px solid rgba(255,255,255,0.08); }
}
</style>

<script>
// Animated Counters
document.addEventListener('DOMContentLoaded', function () {
    const counters = document.querySelectorAll('.counter');
    const speed = 2000;

    const animate = (el) => {
        const target = +el.getAttribute('data-target');
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
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                animate(entry.target);
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.5 });

    counters.forEach(c => observer.observe(c));
});
</script>

<?php include 'includes/footer.php'; ?>