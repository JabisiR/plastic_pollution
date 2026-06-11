// ─── Cookie Notification ───────────────────────────────
window.addEventListener('load', function () {
    const banner = document.getElementById('cookieBanner');
    if (banner) {
        if (localStorage.getItem('cookiesAccepted')) {
            banner.style.display = 'none';
        }
    }

    // Auto show signup modal after 3 seconds (only once per session)
    if (!sessionStorage.getItem('modalShown')) {
        setTimeout(function () {
            const modal = document.getElementById('signupModal');
            if (modal) {
                const bsModal = new bootstrap.Modal(modal);
                bsModal.show();
                sessionStorage.setItem('modalShown', 'true');
            }
        }, 3000);
    }
});

function acceptCookies() {
    localStorage.setItem('cookiesAccepted', 'true');
    document.getElementById('cookieBanner').style.display = 'none';
}

// ─── Animated Counters ─────────────────────────────────
function animateCounters() {
    const counters = document.querySelectorAll('.counter');
    counters.forEach(function (counter) {
        const target = parseInt(counter.getAttribute('data-target'));
        const duration = 2000;
        const step = target / (duration / 16);
        let current = 0;

        const timer = setInterval(function () {
            current += step;
            if (current >= target) {
                counter.textContent = target.toLocaleString();
                clearInterval(timer);
            } else {
                counter.textContent = Math.floor(current).toLocaleString();
            }
        }, 16);
    });
}

// Only animate when counters are visible
const counterSection = document.querySelector('.counter');
if (counterSection) {
    const observer = new IntersectionObserver(function (entries) {
        entries.forEach(function (entry) {
            if (entry.isIntersecting) {
                animateCounters();
                observer.disconnect();
            }
        });
    });
    observer.observe(counterSection);
}

// ─── Sign Up Modal Validation ──────────────────────────
const signupForm = document.getElementById('signupForm');
if (signupForm) {
    signupForm.addEventListener('submit', function (e) {
        e.preventDefault();

        const firstName = document.getElementById('modal_firstname').value.trim();
        const lastName  = document.getElementById('modal_lastname').value.trim();
        const email     = document.getElementById('modal_email').value.trim();
        const password  = document.getElementById('modal_password').value;
        const errorDiv  = document.getElementById('modalError');
        const successDiv = document.getElementById('modalSuccess');

        errorDiv.classList.add('d-none');
        successDiv.classList.add('d-none');

        // Validation
        if (!firstName || !lastName || !email || !password) {
            errorDiv.textContent = 'All fields are required.';
            errorDiv.classList.remove('d-none');
            return;
        }

        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(email)) {
            errorDiv.textContent = 'Please enter a valid email address.';
            errorDiv.classList.remove('d-none');
            return;
        }

        if (password.length < 6) {
            errorDiv.textContent = 'Password must be at least 6 characters.';
            errorDiv.classList.remove('d-none');
            return;
        }

        // Success — redirect to full register page
        successDiv.textContent = 'Great! Redirecting you to complete registration...';
        successDiv.classList.remove('d-none');

        setTimeout(function () {
            window.location.href = 'register.php';
        }, 2000);
    });
}