<?php include 'includes/header.php'; ?>
<?php include 'includes/navbar.php'; ?>

<style>
    /* Unique Animal Welfare Styles */
    .hero-animal {
        clip-path: ellipse(150% 100% at 50% 0%);
    }
    .paw-print {
        position: absolute;
        width: 60px;
        height: 60px;
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 512 512'%3E%3Cpath fill='%2316a34a' opacity='0.2' d='M226.5 92.9c14.3 42.9-.3 86.2-32.6 96.8s-70.1-15.6-84.4-58.5s.3-86.2 32.6-96.8s70.1 15.6 84.4 58.5zM100.4 198.6c18.9 32.4 14.3 70.1-10.2 84.1s-60.1-14-79-46.4s-14.3-70.1 10.2-84.1s60.1 14 79 46.4zM105.6 226.5c-6.8 45.3-43.2 78.7-88.5 78.7S-9.6 271.8 1.4 226.5C8.2 181.2 44.6 147.8 90 147.8s92.8 33.3 90 78.7zm289.4-44.1c17.5 41.7 6.8 84.8-23.8 96s-67.6-18.7-85.1-60.4c-17.5-41.8-6.8-84.8 23.8-96s67.6 18.7 85.1 60.4zm68.5 86.6c24.5-31.1 60.4-23.9 80 16s14 77.2-10.5 108.3c-24.5 31.1-60.4 23.9-80-16s-14-77.2 10.5-108.3zm-63.5 5.5c41.3 20.3 56.4 70.1 36.1 110.8s-70.1 56.4-111.4 36.1s-56.4-70.1-36.1-110.8s70.1-56.4 111.4-36.1zM93.3 416C93.3 469 136.3 512 189.3 512H322.7c53 0 96-43 96-96c0-42.5-27.7-78.5-66.2-90.8c-3-22.3-17.1-40.8-37.1-52.6c-4.4-12.7-16.5-21.8-30.7-21.8H227.3c-14.2 0-26.4 9.1-30.7 21.8c-20 11.8-34.1 30.3-37.1 52.6C121 333.5 93.3 369.5 93.3 416z'/%3E%3C/svg%3E");
        background-repeat: no-repeat;
        animation: floatPaw 10s infinite linear;
    }
    @keyframes floatPaw {
        0% { transform: translateY(0) rotate(0deg); opacity: 0; }
        20% { opacity: 0.2; }
        80% { opacity: 0.2; }
        100% { transform: translateY(-100vh) rotate(360deg); opacity: 0; }
    }
    .card-animal {
        border-radius: 20px 50px 20px 20px;
        transition: all 0.4s ease;
    }
    .card-animal:hover {
        transform: translateY(-10px);
        border-radius: 50px 20px 50px 50px;
    }
    .organic-shape {
        border-radius: 60% 40% 30% 70% / 60% 30% 70% 40%;
    }
</style>

<!-- Hero Section: Soft Organic Curve -->
<section class="position-relative d-flex align-items-center justify-content-center overflow-hidden hero-animal" 
         style="min-height: 700px; background: url('assets/images/animals-welfares.jpg') center/cover no-repeat fixed;">
    <div class="position-absolute top-0 start-0 w-100 h-100" style="background: linear-gradient(to bottom, rgba(20, 83, 45, 0.8), rgba(6, 78, 59, 0.6));"></div> <!-- Deep Green -->
    
    <!-- Floating Paws Animation -->
    <div class="paw-print" style="left: 10%; bottom: 0; animation-delay: 0s;"></div>
    <div class="paw-print" style="left: 30%; bottom: 0; animation-delay: 2s; width: 40px; height: 40px;"></div>
    <div class="paw-print" style="left: 70%; bottom: 0; animation-delay: 4s;"></div>
    <div class="paw-print" style="left: 90%; bottom: 0; animation-delay: 6s; width: 50px; height: 50px;"></div>

    <div class="container position-relative z-1 text-center text-white animate-fade-up">
        <div class="d-inline-flex flex-column align-items-center mb-4">
            <i class="fa-solid fa-paw fs-1 text-warning mb-3 animate-pulse"></i>
            <span class="fs-5 fw-bold text-uppercase tracking-widest" style="letter-spacing: 4px;">Paws & Soul</span>
        </div>
        <h1 class="display-1 fw-bold mb-4">Every Beat Matters</h1>
        <p class="text-white-50 lead mb-5 mx-auto" style="max-width: 600px;">
            A small contribution can feed a hungry dog, vaccinate a cat, or save an injured bird.
        </p>
        <div class="d-flex justify-content-center gap-3">
             <a href="member.php" class="btn btn-white text-success fw-bold px-5 py-3 rounded-pill shadow-lg hover-lift" style="color: #16a34a !important;">Become a Member</a>
             <a href="donate.php" class="btn btn-outline-warning fw-bold px-5 py-3 rounded-pill hover-lift text-white border-2">Donate Now</a>
        </div>
    </div>
</section>

<!-- Heartwarming Intro Section -->
<section class="py-5 bg-light position-relative">
    <div class="container py-5">
        <div class="row align-items-center">
            <div class="col-lg-5 order-lg-2 animate-fade-up">
                <div class="position-relative">
                    <!-- Additional Circular Image (Optional or overlay) -->
                    <div class="position-absolute top-0 start-0 translate-middle bg-white p-2 rounded-circle shadow-lg d-none d-md-block" style="width: 150px; height: 150px; z-index: 2; margin-top: 50px; margin-left: -20px;">
                         <img src="assets/images/Animal%20Welfare2.jpg" class="w-100 h-100 rounded-circle object-fit-cover" alt="Additional Welfare">
                    </div>
                    <!-- Organic Shaped Image -->
                    <div class="organic-shape overflow-hidden shadow-xl border border-5 border-white position-relative z-1" style="height: 500px;">
                        <img src="assets/images/Animal%20Welfare.jpeg" class="w-100 h-100 object-fit-cover" alt="Happy Dog">
                    </div>
                    <!-- Decorative Behind Elements -->
                    <div class="position-absolute top-0 end-0 translate-middle rounded-circle bg-warning opacity-25 blur-3xl" style="width: 300px; height: 300px; z-index: 0;"></div>
                    <div class="position-absolute bottom-0 start-0 translate-middle rounded-circle bg-success opacity-25 blur-3xl border border-dotted border-success p-5" style="width: 350px; height: 350px; z-index: 0;"></div>
                </div>
            </div>
            
            <div class="col-lg-7 order-lg-1 animate-fade-up delay-100">
                <h5 class="text-success fw-bold text-uppercase mb-3">Our Promise</h5>
                <h2 class="display-4 fw-bold text-dark mb-4">A Sanctuary of <span class="text-warning fst-italic">Hope</span></h2>
                <p class="text-secondary lead mb-4" style="line-height: 1.9;">
                    Imagine a world where no tail stops wagging out of hunger, and no bird falls from the sky unnoticed. We are building that world, one rescue at a time.
                </p>
                
                <div class="d-flex flex-wrap gap-3 mb-5">
                    <span class="badge bg-white text-dark shadow-sm px-4 py-3 rounded-pill border fs-6"><i class="fa-solid fa-heart text-danger me-2"></i> Rescue</span>
                    <span class="badge bg-white text-dark shadow-sm px-4 py-3 rounded-pill border fs-6"><i class="fa-solid fa-home text-success me-2"></i> Rehome</span>
                    <span class="badge bg-white text-dark shadow-sm px-4 py-3 rounded-pill border fs-6"><i class="fa-solid fa-syringe text-info me-2"></i> Rehab</span>
                </div>
                
                <div class="border-start border-4 border-success ps-4">
                    <p class="fs-5 fst-italic text-dark mb-0">
                        "Until one has loved an animal, a part of one's soul remains unawakened."
                    </p>
                    <small class="text-muted fw-bold mt-2 d-block">- Anatole France</small>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Our Focus Areas - Card Style Different -->
<section class="py-5 position-relative" style="background-color: #f0fdf4;"> <!-- Very Light Green -->
    <div class="container py-5">
        <div class="text-center mb-5 animate-fade-up">
            <h2 class="display-5 fw-bold text-dark">How We Help</h2>
            <p class="text-secondary lead">Comprehensive care for our furry and feathered friends.</p>
        </div>
        
        <div class="row g-4">
            <!-- Card 1: Gau Seva (Cows) -->
            <div class="col-md-4 animate-fade-up">
                <div class="card-animal bg-white p-5 shadow-sm h-100 position-relative border-0" style="border-bottom: 5px solid #eab308;">
                    <div class="rounded-circle bg-warning bg-opacity-10 d-inline-flex align-items-center justify-content-center mb-4" style="width: 80px; height: 80px;">
                        <i class="fa-solid fa-cow fs-2 text-warning"></i>
                    </div>
                    <h3 class="fw-bold mb-3">Gau Seva (Cow Care)</h3>
                    <p class="text-secondary mb-4">
                        Providing shelter, fodder, and medical care to abandoned and old cows (Gau Mata). We run a Gaushala where they live with dignity.
                    </p>
                    <a href="donate.php" class="text-warning fw-bold text-decoration-none stretched-link">Support Gaushala <i class="fa-solid fa-arrow-right ms-2"></i></a>
                </div>
            </div>

            <!-- Card 2: Street Dogs -->
             <div class="col-md-4 animate-fade-up delay-100">
                <div class="card-animal bg-white p-5 shadow-sm h-100 position-relative border-0" style="background: linear-gradient(135deg, #16a34a 0%, #15803d 100%);">
                    <div class="rounded-circle bg-white bg-opacity-20 d-inline-flex align-items-center justify-content-center mb-4" style="width: 80px; height: 80px;">
                        <i class="fa-solid fa-dog fs-2 text-white"></i>
                    </div>
                    <h3 class="fw-bold mb-3 text-white">Street Dog Rescue</h3>
                    <p class="text-white-50 mb-4">
                        Feeding drives, sterilization, and anti-rabies vaccination for street dogs. We ensure no dog sleeps hungry or in pain.
                    </p>
                    <a href="donate.php" class="text-white fw-bold text-decoration-none stretched-link">Feed a Dog <i class="fa-solid fa-arrow-right ms-2"></i></a>
                </div>
            </div>

            <!-- Card 3: General/Birds -->
             <div class="col-md-4 animate-fade-up delay-200">
                <div class="card-animal bg-white p-5 shadow-sm h-100 position-relative border-0" style="border-bottom: 5px solid #06b6d4;">
                    <div class="rounded-circle bg-info bg-opacity-10 d-inline-flex align-items-center justify-content-center mb-4" style="width: 80px; height: 80px;">
                        <i class="fa-solid fa-dove fs-2 text-info"></i>
                    </div>
                    <h3 class="fw-bold mb-3">Bird & Other Animals</h3>
                    <p class="text-secondary mb-4">
                        Rescuing injured birds and other stray animals needing emergency medical attention and rehabilitation.
                    </p>
                    <a href="#" class="text-info fw-bold text-decoration-none stretched-link">Our Ambulance <i class="fa-solid fa-arrow-right ms-2"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Impact Stats with Icons -->
<section class="py-5 bg-dark text-white position-relative overflow-hidden">
    <div class="container py-5 position-relative z-1">
        <div class="row text-center g-4">
            <div class="col-md-3 col-6 border-end border-white border-opacity-10 animate-fade-up">
                <h2 class="display-4 fw-bold text-success mb-1 counter" data-target="1500">0</h2>
                <p class="small text-uppercase tracking-widest opacity-50">Rescues</p>
            </div>
             <div class="col-md-3 col-6 border-end border-white border-opacity-10 animate-fade-up delay-100">
                <h2 class="display-4 fw-bold text-warning mb-1 counter" data-target="25000">0</h2>
                <p class="small text-uppercase tracking-widest opacity-50">Meals Served</p>
            </div>
             <div class="col-md-3 col-6 border-end border-white border-opacity-10 animate-fade-up delay-200">
                <h2 class="display-4 fw-bold text-info mb-1 counter" data-target="800">0</h2>
                <p class="small text-uppercase tracking-widest opacity-50">Sterilizations</p>
            </div>
             <div class="col-md-3 col-6 animate-fade-up delay-300">
                <h2 class="display-4 fw-bold text-danger mb-1 counter" data-target="450">0</h2>
                <p class="small text-uppercase tracking-widest opacity-50">Adoptions</p>
            </div>
        </div>
    </div>
</section>

<!-- Creative CTA -->
<section class="py-0 position-relative">
    <div class="container-fluid p-0">
        <div class="row g-0">
            <div class="col-lg-6 position-relative" style="min-height: 400px;">
                 <img src="assets/images/Animal%20Welfare3.jpg" class="w-100 h-100 object-fit-cover position-absolute" alt="Join Us">
                 <div class="position-absolute top-0 start-0 w-100 h-100 bg-success opacity-50"></div>
                 <div class="position-absolute top-50 start-50 translate-middle text-center text-white w-75">
                     <i class="fa-solid fa-hand-holding-heart fs-1 mb-3"></i>
                     <h2 class="fw-bold">Adopt, Don't Shop</h2>
                     <p class="mb-4">Give a homeless soul a second chance at life.</p>
                     <a href="#" class="btn btn-white rounded-pill px-5 text-success fw-bold">View Adoption List</a>
                 </div>
            </div>
            <div class="col-lg-6 position-relative d-flex align-items-center justify-content-center p-5 text-center overflow-hidden" style="min-height: 400px;">
                <!-- Background Image -->
                <img src="assets/images/Animal%20Welfare4.jpeg" class="position-absolute top-0 start-0 w-100 h-100 object-fit-cover" alt="Feeding Animals">
                <!-- Overlay -->
                <div class="position-absolute top-0 start-0 w-100 h-100 bg-warning opacity-90" style="mix-blend-mode: multiply;"></div>
                
                <style>
                    .btn-donate-glow {
                        background: #fff;
                        color: #dc2626;
                        transition: all 0.3s ease;
                        box-shadow: 0 0 15px rgba(255, 255, 255, 0.5);
                    }
                    .btn-donate-glow:hover {
                        background: #dc2626; /* Red */
                        color: #fff;
                        transform: translateY(-3px) scale(1.05);
                        box-shadow: 0 0 25px rgba(220, 38, 38, 0.8); /* Red Glow */
                        border-color: #dc2626;
                    }
                </style>
                <div class="position-relative z-1 text-white">
                    <i class="fa-solid fa-bowl-food fs-1 mb-3 text-white animate-bounce"></i>
                    <h2 class="fw-bold text-white display-5 mb-3">Sponsor a Meal</h2>
                    <p class="mb-4 text-white fs-4 fw-light">Just <span class="fw-bold bg-white text-dark px-2 rounded">₹50</span> can feed a stray dog for a day.</p>
                    <a href="donate.php" class="btn btn-lg rounded-pill px-5 py-3 fw-bold btn-donate-glow text-uppercase tracking-wider border-2 border-white">Donate Now <i class="fa-solid fa-heart ms-2"></i></a>
                </div>
                 <!-- Decorative Paw -->
                 <i class="fa-solid fa-paw position-absolute text-white opacity-10" style="font-size: 300px; right: -50px; bottom: -50px;"></i>
            </div>
        </div>
    </div>
</section>

<script>
    // Counter Animation Script
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
