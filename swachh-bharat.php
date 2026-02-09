<?php include 'includes/header.php'; ?>
<?php include 'includes/navbar.php'; ?>

<style>
    /* Swachh Bharat Unique Styles */
    .hero-swachh {
        clip-path: polygon(0 0, 100% 0, 100% 85%, 50% 100%, 0 85%);
    }
    .floating-icon {
        position: absolute;
        font-size: 2rem;
        opacity: 0.1;
        animation: floatUp 8s infinite linear;
    }
    @keyframes floatUp {
        0% { transform: translateY(100vh) rotate(0deg); opacity: 0; }
        20% { opacity: 0.2; }
        80% { opacity: 0.2; }
        100% { transform: translateY(-10vh) rotate(360deg); opacity: 0; }
    }
    .card-eco {
        background: rgba(255, 255, 255, 0.9);
        border: 1px solid rgba(8, 145, 178, 0.1);
        border-radius: 20px;
        transition: all 0.3s ease;
        overflow: hidden;
    }
    .card-eco:hover {
        transform: translateY(-10px);
        box-shadow: 0 20px 40px rgba(8, 145, 178, 0.15);
        border-color: #0891b2;
    }
    .blob-bg {
        position: absolute;
        filter: blur(80px);
        z-index: 0;
        opacity: 0.4;
    }
</style>

<!-- Hero Section: Unique Polygon Shape -->
<section class="position-relative d-flex align-items-center justify-content-center overflow-hidden hero-swachh" 
         style="min-height: 750px; background: url('assets/images/soch%20bharat.jpg') center/cover no-repeat fixed;">
    <!-- Very light dark gradient for text readability only, keeping image clear -->
    <div class="position-absolute top-0 start-0 w-100 h-100" style="background: linear-gradient(to bottom, rgba(0,0,0,0.3), rgba(0,0,0,0.5));"></div>
    
    <!-- Floating Eco Icons -->
    <i class="fa-solid fa-leaf floating-icon text-white" style="left: 10%; animation-delay: 0s;"></i>
    <i class="fa-solid fa-recycle floating-icon text-white" style="left: 30%; animation-delay: 2s; font-size: 3rem;"></i>
    <i class="fa-solid fa-droplet floating-icon text-white" style="left: 60%; animation-delay: 4s;"></i>
    <i class="fa-solid fa-trash-arrow-up floating-icon text-white" style="left: 80%; animation-delay: 6s; font-size: 2.5rem;"></i>

    <div class="container position-relative z-1 text-center text-white animate-fade-up">
        <div class="d-inline-block border border-white border-2 rounded-pill px-4 py-2 mb-4 backdrop-blur shadow-lg bg-dark bg-opacity-25">
            <i class="fa-solid fa-broom me-2 animate-pulse text-warning"></i> <span class="fw-bold text-uppercase tracking-wider">Let's Clean India</span>
        </div>
        <h1 class="display-1 fw-bold mb-4" style="text-shadow: 2px 2px 10px rgba(0,0,0,0.8); letter-spacing: -2px;">
            One Step Towards <span class="text-transparent bg-clip-text bg-gradient-to-r from-green-400 to-blue-500" style="background: linear-gradient(to right, #4ade80, #60a5fa); -webkit-background-clip: text; -webkit-text-fill-color: transparent; text-shadow: none; filter: drop-shadow(0 0 10px rgba(74, 222, 128, 0.5));">Cleanliness</span>
        </h1>
        <p class="lead fw-bold opacity-100 mx-auto mb-5 fs-4 text-white" style="max-width: 800px; text-shadow: 1px 1px 5px rgba(0,0,0,0.9); background: rgba(0,0,0,0.2); padding: 15px; border-radius: 15px; backdrop-filter: blur(2px);">
            A clean nation is a healthy nation. Join the movement to make India garbage-free, plastic-free, and beautiful.
        </p>
        <div class="d-flex justify-content-center gap-4">
             <a href="#projects" class="btn btn-white text-info fw-bold px-5 py-3 rounded-pill shadow-lg hover-scale">Our Initiatives</a>
             <a href="member.php" class="btn btn-outline-light fw-bold px-5 py-3 rounded-pill hover-scale backdrop-blur border-2">Become a Member</a>
        </div>
    </div>
</section>

<!-- Mission & Vision with Modern Layout -->
<section class="py-5 bg-white position-relative overflow-hidden">
    <div class="blob-bg bg-info rounded-circle" style="width: 400px; height: 400px; top: -100px; left: -100px;"></div>
    <div class="blob-bg bg-success rounded-circle" style="width: 400px; height: 400px; bottom: -100px; right: -100px;"></div>

    <div class="container py-5 position-relative z-1">
        <div class="row align-items-center g-5">
            <div class="col-lg-6 animate-fade-up">
                <div class="position-relative">
                    <img src="assets/images/swachh-bharat2.jpg" class="w-100 rounded-4 shadow-lg object-fit-cover" style="height: 500px;" alt="Cleanliness Drive">
                    <div class="position-absolute bottom-0 end-0 bg-white p-4 rounded-3 shadow-xl m-4 border-start border-5 border-info">
                        <h2 class="fw-bold text-dark counter mb-0 display-4" data-target="1000">0+</h2>
                        <small class="text-uppercase fw-bold text-secondary tracking-wider">Cleanliness Drives</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 animate-fade-up delay-100">
                <div class="ps-lg-4">
                    <h5 class="text-info fw-bold text-uppercase mb-3">Our Mission</h5>
                    <h2 class="display-4 fw-bold text-dark mb-4">Transforming India through <span class="text-success fst-italic">Action</span></h2>
                    <p class="text-secondary lead mb-4" style="line-height: 1.8;">
                        We don't just talk about cleanliness; we pick up the broom. Our members work every weekend to clean public spaces, segregate waste, and educate communities about hygiene.
                    </p>
                    <ul class="list-unstyled d-flex flex-column gap-3 mb-5">
                        <li class="d-flex align-items-center text-dark fs-5">
                            <i class="fa-solid fa-circle-check text-success me-3 fs-4"></i> Waste Segregation at Source
                        </li>
                        <li class="d-flex align-items-center text-dark fs-5">
                            <i class="fa-solid fa-circle-check text-success me-3 fs-4"></i> Plastic Ban Awareness
                        </li>
                        <li class="d-flex align-items-center text-dark fs-5">
                            <i class="fa-solid fa-circle-check text-success me-3 fs-4"></i> Sustainable Composting
                        </li>
                    </ul>
                    <a href="donate.php" class="btn btn-info text-white rounded-pill px-5 py-3 fw-bold shadow-lg hover-lift">Support the Cause</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Initiatives Cards (Eco Style) -->
<section id="projects" class="py-5 bg-light position-relative">
    <div class="container py-5">
        <div class="text-center mb-5 animate-fade-up">
            <h2 class="display-5 fw-bold text-dark">Cleanliness in Action</h2>
            <p class="text-secondary lead">Practical solutions for a cleaner environment.</p>
        </div>

        <div class="row g-4">
            <!-- Card 1 -->
            <div class="col-md-4 animate-fade-up">
                <div class="card-eco p-4 h-100">
                    <div class="bg-info bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center mb-4" style="width: 70px; height: 70px;">
                        <i class="fa-solid fa-trash-can text-info fs-3"></i>
                    </div>
                    <h4 class="fw-bold mb-3">Public Cleaning</h4>
                    <p class="text-secondary">Community-led cleaning drives in parks, streets, and rivers to remove litter and debris.</p>
                </div>
            </div>
            <!-- Card 2 -->
             <div class="col-md-4 animate-fade-up delay-100">
                <div class="card-eco p-4 h-100" style="border-top: 5px solid #22c55e;">
                    <div class="bg-success bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center mb-4" style="width: 70px; height: 70px;">
                        <i class="fa-solid fa-recycle text-success fs-3"></i>
                    </div>
                    <h4 class="fw-bold mb-3">Recycling Hubs</h4>
                    <p class="text-secondary">Setting up collection points for plastic, paper, and e-waste to ensure proper recycling.</p>
                </div>
            </div>
            <!-- Card 3 -->
             <div class="col-md-4 animate-fade-up delay-200">
                <div class="card-eco p-4 h-100">
                    <div class="bg-warning bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center mb-4" style="width: 70px; height: 70px;">
                        <i class="fa-solid fa-school text-warning fs-3"></i>
                    </div>
                    <h4 class="fw-bold mb-3">Hygiene Education</h4>
                    <p class="text-secondary">Teaching school children about handwashing, sanitation, and the importance of toilets.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action Banner -->
<section class="py-5 position-relative bg-dark overflow-hidden">
    <div class="position-absolute top-0 start-0 w-100 h-100" style="background: url('assets/images/soch%20bharat.jpg') center/cover no-repeat; opacity: 0.3;"></div>
    <div class="container position-relative z-1 text-center py-5">
        <i class="fa-solid fa-hands-holding-circle text-info fs-1 mb-4 animate-bounce"></i>
        <h2 class="display-4 fw-bold text-white mb-4">Be the Change You Want to See</h2>
        <p class="text-white-50 lead mb-5 mx-auto" style="max-width: 700px;">
            It starts with you. Pick up that wrapper, segregate your waste, plant a tree. Join us to build a better India.
        </p>
        <a href="member.php" class="btn btn-outline-light btn-lg rounded-pill px-5 py-3 fw-bold border-2 hover-scale">Join as a Member</a>
    </div>
</section>

<script>
    // Include Counter Script if not already globally available or specific to this page
    document.addEventListener('DOMContentLoaded', () => {
        const counters = document.querySelectorAll('.counter');
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const counter = entry.target;
                    const target = +counter.getAttribute('data-target');
                    const duration = 2000; 
                    const increment = target / (duration / 16); 
                    
                    let count = 0;
                    const updateCount = () => {
                        count += increment;
                        if (count < target) {
                            counter.innerText = Math.ceil(count);
                            requestAnimationFrame(updateCount);
                        } else {
                            counter.innerText = target + "+";
                        }
                    };
                    updateCount();
                    observer.unobserve(counter);
                }
            });
        }, { threshold: 0.5 });
        counters.forEach(c => observer.observe(c));
    });
</script>

<?php include 'includes/footer.php'; ?>
