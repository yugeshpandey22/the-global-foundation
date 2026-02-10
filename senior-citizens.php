<?php include 'includes/header.php'; ?>
<?php include 'includes/navbar.php'; ?>

<!-- Hero Section with Parallax -->
<!-- Hero Section with Parallax -->
<section class="position-relative d-flex align-items-center justify-content-center overflow-hidden" 
         style="min-height: 700px; background: url('assets/images/Senior%20citizen.jpg') center/cover no-repeat fixed;">
    <div class="position-absolute top-0 start-0 w-100 h-100" style="background: linear-gradient(135deg, rgba(234, 88, 12, 0.9), rgba(124, 45, 18, 0.85));"></div> <!-- Richer Orange/Brown for Warmth -->
    <!-- Animated Particles -->
    <div class="position-absolute w-100 h-100 top-0 start-0" style="background-image: radial-gradient(rgba(255,255,255,0.1) 1px, transparent 1px); background-size: 50px 50px; opacity: 0.3;"></div>
    
    <div class="container position-relative z-1 text-center text-white animate-fade-up pb-5">
        <span class="badge bg-white text-warning px-4 py-2 rounded-pill mb-4 text-uppercase fw-bold tracking-wider shadow-sm" style="color: #ea580c !important; letter-spacing: 2px;">
            Honoring A Lifetime of Love
        </span>
        <h1 class="display-1 fw-bold mb-4 text-shadow-sm">Where Wisdom Finds a Home</h1>
        <p class="lead fw-light opacity-90 mx-auto mb-5 fs-4" style="max-width: 800px; line-height: 1.8;">
            They held our hands when we were small. Now, it's our turn to hold theirs. We are dedicated to providing a sanctuary of dignity, care, and family for those who built our world.
        </p>
        <div class="d-flex justify-content-center gap-3 flex-wrap">
             <a href="#care-programs" class="btn btn-light text-warning fw-bold px-5 py-3 rounded-pill shadow-lg hover-lift" style="color: #ea580c !important;">Our Care Services</a>
             <a href="donate.php" class="btn btn-outline-warning fw-bold px-5 py-3 rounded-pill hover-lift" style="color: #ea580c !important; border-color: #ea580c;">Adopt a Grandparent</a>
        </div>
    </div>
    <!-- Wave Shape Divider -->
    <div class="position-absolute bottom-0 start-0 w-100">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffffff" fill-opacity="1" d="M0,96L48,112C96,128,192,160,288,160C384,160,480,128,576,112C672,96,768,96,864,112C960,128,1056,160,1152,160C1248,160,1344,128,1392,112L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
    </div>
</section>

<!-- Overview & Mission -->
<section class="py-5 bg-white position-relative">
    <div class="container py-5">
        <div class="row g-5 align-items-center">
            <!-- Left: Text Content -->
            <div class="col-lg-6 animate-fade-up">
                <div class="d-inline-block mb-3 position-relative">
                    <h6 class="text-warning fw-bold text-uppercase ls-md mb-0" style="color: #ea580c !important;">Dignity & Respect</h6>
                    <div class="position-absolute bottom-0 start-0 w-50 h-1 bg-warning opacity-25" style="margin-bottom: -5px;"></div>
                </div>
                <h2 class="fw-bold display-5 mb-4 text-dark">Not Just a Shelter, But a Home</h2>
                <p class="text-secondary mb-4 lead" style="line-height: 1.8;">
                    In India, millions of elderly parents are abandoned or live in isolation. At <strong>The Global Rise Foundation</strong>, we don't just provide a roof; we rebuild families. We create a vibrant community where laughter echoes, stories are shared, and no one ever feels alone again.
                </p>
                <p class="text-secondary mb-5" style="line-height: 1.8;">
                    Our approach goes beyond basic needs. We focus on <strong>Mental Wellness</strong>, <strong>Social Connection</strong>, and <strong>Spiritual Fulfillment</strong> to ensure that the golden years are truly golden.
                </p>
                
                <div class="row g-4">
                    <div class="col-sm-6">
                        <div class="p-4 rounded-4 bg-light h-100 border-start border-4 border-warning shadow-sm hover-lift transition-all">
                            <i class="fa-solid fa-heart-pulse fs-2 text-warning mb-3" style="color: #ea580c;"></i>
                            <h5 class="fw-bold text-dark">Holistic Health</h5>
                            <p class="small text-secondary mb-0">Regular checkups and emergency medical support.</p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="p-4 rounded-4 bg-light h-100 border-start border-4 border-info shadow-sm hover-lift transition-all">
                            <i class="fa-solid fa-hands-holding-circle fs-2 text-info mb-3"></i>
                            <h5 class="fw-bold text-dark">Emotional Support</h5>
                            <p class="small text-secondary mb-0">Counseling and companionship to combat isolation.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right: Image Composition -->
            <div class="col-lg-6 animate-fade-up delay-100">
                <div class="position-relative p-4">
                    <div class="position-absolute top-0 end-0 bg-warning opacity-10 rounded-circle animate-pulse" style="width: 300px; height: 300px; z-index: 0;"></div>
                    <div class="position-relative z-1">
                        <img src="assets/images/Senior%20citizen2.jpg" alt="Senior Citizen Care" class="w-100 rounded-5 shadow-lg object-fit-cover" style="height: 500px; transform: rotate(2deg);">
                    </div>
                    <!-- Floating Stat Card -->
                    <div class="position-absolute bottom-0 end-0 m-5 p-4 bg-white rounded-4 shadow-xl z-2 animate-float">
                        <div class="d-flex align-items-center gap-3">
                            <div class="rounded-circle bg-warning bg-opacity-10 p-3 text-warning" style="color: #ea580c !important;">
                                <i class="fa-solid fa-user-clock fs-2"></i>
                            </div>
                            <div>
                                <h3 class="fw-bold mb-0 text-dark counter" data-target="1200">0</h3>
                                <p class="small text-secondary mb-0 fw-bold text-uppercase">Seniors Supported</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Services / Programs - Glassmorphism Cards -->
<section id="care-programs" class="py-5 bg-light position-relative overflow-hidden">
    <!-- Background Decor -->
    <div class="position-absolute top-0 start-0 w-100 h-100" style="background: radial-gradient(circle at 90% 10%, rgba(234, 88, 12, 0.05) 0%, transparent 40%); pointer-events: none;"></div>

    <div class="container py-5 position-relative z-1">
        <div class="text-center mb-5 animate-fade-up" style="max-width: 700px; margin: 0 auto;">
            <div class="d-inline-flex align-items-center gap-2 px-3 py-1 rounded-pill bg-white border shadow-sm mb-3">
                <span class="w-2 h-2 rounded-circle bg-warning" style="background-color: #ea580c !important;"></span>
                <small class="fw-bold text-secondary text-uppercase tracking-wider">Comprehensive Care</small>
            </div>
            <h2 class="fw-bold display-5 text-dark mb-3">Supporting Every Aspect of Aging</h2>
            <p class="text-secondary lead">From physical health to emotional well-being, we ensure our elders live with pride.</p>
        </div>
        
        <div class="row g-4">
            <!-- Service Card 1 -->
            <div class="col-lg-4 col-md-6 animate-fade-up">
                <div class="card h-100 border-0 shadow-sm rounded-4 hover-lift overflow-hidden group">
                    <div class="card-body p-4 position-relative">
                        <div class="position-absolute top-0 end-0 p-3 opacity-10">
                            <i class="fa-solid fa-stethoscope fs-1 text-danger"></i>
                        </div>
                        <div class="icon-square bg-gradient-danger text-white rounded-3 p-3 mb-4 d-inline-block shadow-md" style="background: linear-gradient(135deg, #ef4444, #b91c1c);">
                            <i class="fa-solid fa-stethoscope fs-4"></i>
                        </div>
                        <h4 class="fw-bold mb-3 text-dark group-hover-text-danger transition-colors">Geriatric Healthcare</h4>
                        <p class="text-secondary mb-0">
                            Regular health camps, eye checkups, and subsidized medication for chronic conditions.
                        </p>
                    </div>
                </div>
            </div>
            
             <!-- Service Card 2 -->
             <div class="col-lg-4 col-md-6 animate-fade-up delay-100">
                <div class="card h-100 border-0 shadow-sm rounded-4 hover-lift overflow-hidden group">
                    <div class="card-body p-4 position-relative">
                        <div class="position-absolute top-0 end-0 p-3 opacity-10">
                            <i class="fa-solid fa-house-chimney-medical fs-1 text-success"></i>
                        </div>
                         <div class="icon-square bg-gradient-success text-white rounded-3 p-3 mb-4 d-inline-block shadow-md" style="background: linear-gradient(135deg, #22c55e, #15803d);">
                            <i class="fa-solid fa-house-chimney-medical fs-4"></i>
                        </div>
                        <h4 class="fw-bold mb-3 text-dark group-hover-text-success transition-colors">Assisted Living</h4>
                        <p class="text-secondary mb-0">
                            Running old age homes that serve as a sanctuary for homeless and abandoned seniors.
                        </p>
                    </div>
                </div>
            </div>

             <!-- Service Card 3 -->
            <div class="col-lg-4 col-md-6 animate-fade-up delay-200">
                <div class="card h-100 border-0 shadow-sm rounded-4 hover-lift overflow-hidden group">
                     <div class="card-body p-4 position-relative">
                        <div class="position-absolute top-0 end-0 p-3 opacity-10">
                             <i class="fa-solid fa-bowl-food fs-1 text-warning"></i>
                        </div>
                         <div class="icon-square bg-gradient-warning text-white rounded-3 p-3 mb-4 d-inline-block shadow-md" style="background: linear-gradient(135deg, #f59e0b, #d97706);">
                            <i class="fa-solid fa-bowl-food fs-4"></i>
                        </div>
                        <h4 class="fw-bold mb-3 text-dark group-hover-text-warning transition-colors">Nutritional Support</h4>
                        <p class="text-secondary mb-0">
                            Providing nutritious meals and supplements tailored to the dietary needs of the elderly.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Service Card 4 -->
            <div class="col-lg-4 col-md-6 animate-fade-up">
                 <div class="card h-100 border-0 shadow-sm rounded-4 hover-lift overflow-hidden group">
                     <div class="card-body p-4 position-relative">
                        <div class="position-absolute top-0 end-0 p-3 opacity-10">
                             <i class="fa-solid fa-puzzle-piece fs-1 text-primary"></i>
                        </div>
                         <div class="icon-square bg-gradient-primary text-white rounded-3 p-3 mb-4 d-inline-block shadow-md" style="background: linear-gradient(135deg, #3b82f6, #1d4ed8);">
                            <i class="fa-solid fa-puzzle-piece fs-4"></i>
                        </div>
                        <h4 class="fw-bold mb-3 text-dark group-hover-text-primary transition-colors">Recreation & Joy</h4>
                        <p class="text-secondary mb-0">
                            Organizing yoga, meditation, and cultural events to keep them active and happy.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Service Card 5 -->
            <div class="col-lg-4 col-md-6 animate-fade-up delay-100">
                 <div class="card h-100 border-0 shadow-sm rounded-4 hover-lift overflow-hidden group">
                     <div class="card-body p-4 position-relative">
                        <div class="position-absolute top-0 end-0 p-3 opacity-10">
                             <i class="fa-solid fa-gavel fs-1 text-secondary"></i>
                        </div>
                        <div class="icon-square bg-secondary text-white rounded-3 p-3 mb-4 d-inline-block shadow-md">
                            <i class="fa-solid fa-gavel fs-4"></i>
                        </div>
                        <h4 class="fw-bold mb-3 text-dark transition-colors">Legal Assistance</h4>
                        <p class="text-secondary mb-0">
                            Helping seniors understand their rights and providing legal aid for property or abuse issues.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Service Card 6 -->
            <div class="col-lg-4 col-md-6 animate-fade-up delay-200">
                 <div class="card h-100 border-0 shadow-sm rounded-4 hover-lift overflow-hidden group">
                     <div class="card-body p-4 position-relative">
                        <div class="position-absolute top-0 end-0 p-3 opacity-10">
                              <i class="fa-solid fa-hand-holding-hand fs-1 text-info"></i>
                        </div>
                        <div class="icon-square bg-info text-white rounded-3 p-3 mb-4 d-inline-block shadow-md">
                            <i class="fa-solid fa-hand-holding-hand fs-4"></i>
                        </div>
                        <h4 class="fw-bold mb-3 text-dark transition-colors">Companionship</h4>
                        <p class="text-secondary mb-0">
                            Volunteer programs connecting youth with seniors to bridge the generation gap.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Moments of Joy (Activities) Section -->
<section class="py-5 bg-white">
    <div class="container py-5">
        <div class="row align-items-center mb-5">
            <div class="col-lg-6">
                <h6 class="text-warning fw-bold text-uppercase ls-md mb-2" style="color: #ea580c !important;">More Than Care</h6>
                <h2 class="display-5 fw-bold text-dark">A Day in Our Life</h2>
            </div>
            <div class="col-lg-6 text-lg-end">
                <p class="lead text-secondary mb-0">We believe happiness is the best medicine. Our daily routine is designed to keep minds sharp and hearts full.</p>
            </div>
        </div>
        
        <div class="row g-4">
            <!-- Activity 1 -->
            <div class="col-md-3 col-sm-6 animate-fade-up">
                <div class="card border-0 rounded-4 overflow-hidden h-100 shadow-sm hover-lift">
                    <img src="assets/images/Senior%20citizen.jpg" class="card-img-top object-fit-cover hover-zoom" alt="Morning Yoga" style="height: 250px;">
                    <div class="card-body text-center p-4">
                        <i class="fa-solid fa-om fs-2 text-warning mb-3"></i>
                        <h5 class="fw-bold mb-2">Morning Yoga</h5>
                        <p class="small text-secondary mb-0">Starting the day with mindfulness and gentle movement.</p>
                    </div>
                </div>
            </div>
            <!-- Activity 2 -->
            <div class="col-md-3 col-sm-6 animate-fade-up delay-100">
                <div class="card border-0 rounded-4 overflow-hidden h-100 shadow-sm hover-lift">
                    <img src="assets/images/Senior%20citizen2.jpg" class="card-img-top object-fit-cover hover-zoom" alt="Community Dining" style="height: 250px;">
                    <div class="card-body text-center p-4">
                        <i class="fa-solid fa-utensils fs-2 text-success mb-3"></i>
                        <h5 class="fw-bold mb-2">Community Meals</h5>
                        <p class="small text-secondary mb-0">Sharing nutritious food and stories together like a family.</p>
                    </div>
                </div>
            </div>
            <!-- Activity 3 -->
            <div class="col-md-3 col-sm-6 animate-fade-up delay-200">
                <div class="card border-0 rounded-4 overflow-hidden h-100 shadow-sm hover-lift">
                    <img src="assets/images/Senior%20citizen.jpg" class="card-img-top object-fit-cover hover-zoom" alt="Music & Arts" style="height: 250px;">
                    <div class="card-body text-center p-4">
                        <i class="fa-solid fa-music fs-2 text-danger mb-3"></i>
                        <h5 class="fw-bold mb-2">Music & Arts</h5>
                        <p class="small text-secondary mb-0">Expressing creativity through painting and bhajans.</p>
                    </div>
                </div>
            </div>
            <!-- Activity 4 -->
            <div class="col-md-3 col-sm-6 animate-fade-up delay-300">
                <div class="card border-0 rounded-4 overflow-hidden h-100 shadow-sm hover-lift">
                    <img src="assets/images/Senior%20citizen2.jpg" class="card-img-top object-fit-cover hover-zoom" alt="Evening Walk" style="height: 250px;">
                    <div class="card-body text-center p-4">
                        <i class="fa-solid fa-leaf fs-2 text-primary mb-3"></i>
                        <h5 class="fw-bold mb-2">Nature Walks</h5>
                        <p class="small text-secondary mb-0">Peaceful evenings spent connecting with nature.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Why It Matters (Stats) Section -->
<section class="py-5 text-white position-relative" style="background: linear-gradient(135deg, #1f2937 0%, #111827 100%);">
    <div class="container py-5 position-relative z-1">
        <div class="row align-items-center">
            <div class="col-lg-5 mb-4 mb-lg-0 animate-fade-up">
                <h2 class="display-5 fw-bold mb-4">Why We Must Act Now</h2>
                <p class="lead opacity-75 mb-4">The silent crisis of elderly neglect is growing. Your support changes these numbers into stories of hope.</p>
                <a href="donate.php" class="btn btn-warning text-dark fw-bold px-4 py-3 rounded-pill hover-lift">Change a Life Today</a>
            </div>
            <div class="col-lg-7">
                <div class="row g-4 text-center">
                    <div class="col-sm-4 animate-fade-up delay-100">
                        <div class="p-4 border border-white border-opacity-10 rounded-4 bg-white bg-opacity-5 hover-lift">
                            <h2 class="display-4 fw-bold text-warning mb-0 counter" data-target="15">0</h2><span class="fs-4 text-warning">%</span>
                            <p class="small text-white-50 mt-2 text-uppercase fw-bold">Elderly Live Alone</p>
                        </div>
                    </div>
                    <div class="col-sm-4 animate-fade-up delay-200">
                        <div class="p-4 border border-white border-opacity-10 rounded-4 bg-white bg-opacity-5 hover-lift">
                            <h2 class="display-4 fw-bold text-danger mb-0 counter" data-target="40">0</h2><span class="fs-4 text-danger">%</span>
                            <p class="small text-white-50 mt-2 text-uppercase fw-bold">Financially Insecure</p>
                        </div>
                    </div>
                    <div class="col-sm-4 animate-fade-up delay-300">
                        <div class="p-4 border border-white border-opacity-10 rounded-4 bg-white bg-opacity-5 hover-lift">
                            <h2 class="display-4 fw-bold text-success mb-0 counter" data-target="100">0</h2><span class="fs-4 text-success">%</span>
                            <p class="small text-white-50 mt-2 text-uppercase fw-bold">Love at Global Rise</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Stories of Resilience (Testimonials) -->
<section class="py-5 bg-light">
    <div class="container py-5">
        <div class="text-center mb-5 animate-fade-up">
            <span class="text-warning fw-bold text-uppercase ls-md" style="color: #ea580c !important;">Real Voices</span>
            <h2 class="display-5 fw-bold text-dark mt-2">Stories of Hope & Renewal</h2>
        </div>
        
        <div class="row g-4">
            <!-- Story 1 -->
            <div class="col-lg-6 animate-fade-up">
                <div class="bg-white p-5 rounded-4 shadow-sm h-100 position-relative border-start border-4 border-warning">
                    <i class="fa-solid fa-quote-right position-absolute top-0 end-0 m-4 fs-1 text-light"></i>
                    <div class="d-flex align-items-center gap-3 mb-4">
                        <img src="assets/images/Senior%20citizen.jpg" class="rounded-circle object-fit-cover shadow-sm" width="80" height="80" alt="Mrs. Kapoor">
                        <div>
                            <h5 class="fw-bold mb-0">Mrs. Savitri Kapoor</h5>
                            <small class="text-secondary">Resident since 2024</small>
                        </div>
                    </div>
                    <p class="text-secondary lead fst-italic">
                        "After my husband passed away, the silence in my house was deafening. Looking at the walls felt like a punishment. Coming to Global Rise Foundation gave me a second family. Here, I laugh again, I cook with friends, and I feel needed."
                    </p>
                </div>
            </div>
            
            <!-- Story 2 -->
            <div class="col-lg-6 animate-fade-up delay-100">
                <div class="bg-white p-5 rounded-4 shadow-sm h-100 position-relative border-start border-4 border-info">
                    <i class="fa-solid fa-quote-right position-absolute top-0 end-0 m-4 fs-1 text-light"></i>
                    <div class="d-flex align-items-center gap-3 mb-4">
                        <img src="assets/images/Senior%20citizen2.jpg" class="rounded-circle object-fit-cover shadow-sm" width="80" height="80" alt="Mr. Verma">
                        <div>
                            <h5 class="fw-bold mb-0">Mr. Ramesh Verma</h5>
                            <small class="text-secondary">Resident since 2023</small>
                        </div>
                    </div>
                    <p class="text-secondary lead fst-italic">
                        "I spent years worrying about medical bills and loneliness. Here, I don't just get medicines; I get care. The volunteers treat me like their own grandfather. I have found peace in my final years."
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Impact / Vision Section -->
<section class="py-5 text-white position-relative" style="background: #1f2937;">
    <div class="position-absolute top-0 end-0 w-50 h-100" style="background: linear-gradient(to left, rgba(234, 88, 12, 0.1), transparent);"></div>
    <div class="container py-5 position-relative z-1">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-5 mb-lg-0 animate-fade-up">
                <span class="text-warning fw-bold text-uppercase d-block mb-2">Our Vision</span>
                <h2 class="display-5 fw-bold mb-4">A Society Where Elders are Cherished</h2>
                <p class="lead text-white-50 mb-4">
                    We envision a world where aging is celebrated, not feared. Where every senior feels valued, protected, and loved.
                </p>
                <div class="d-flex flex-column gap-3">
                    <div class="d-flex align-items-center gap-3">
                        <i class="fa-solid fa-circle-check text-warning fs-4"></i>
                        <span class="fs-5">Zero Homelessness for Elders</span>
                    </div>
                    <div class="d-flex align-items-center gap-3">
                        <i class="fa-solid fa-circle-check text-warning fs-4"></i>
                        <span class="fs-5">Accessible Healthcare for All</span>
                    </div>
                    <div class="d-flex align-items-center gap-3">
                        <i class="fa-solid fa-circle-check text-warning fs-4"></i>
                        <span class="fs-5">Dignity in Death & Life</span>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-5 offset-lg-1 animate-fade-up delay-100">
                <div class="bg-white bg-opacity-10 p-5 rounded-4 backdrop-blur shadow-lg border border-white border-opacity-10 text-center">
                    <i class="fa-solid fa-quote-left text-warning fs-1 mb-4 opacity-50"></i>
                    <p class="fs-4 fst-italic mb-4">"To care for those who once cared for us is one of the highest honors."</p>
                    <div class="d-flex align-items-center justify-content-center gap-3">
                         <img src="assets/images/Senior%20citizen.jpg" class="rounded-circle object-fit-cover border border-2 border-white" width="60" height="60" alt="Testimonial">
                         <div class="text-start">
                             <h6 class="mb-0 fw-bold">Ram Prasad</h6>
                             <small class="text-white-50">Resident, Old Age Home</small>
                         </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action Section with Gradient -->
<section class="py-5 position-relative overflow-hidden" style="background: linear-gradient(135deg, #ea580c 0%, #c2410c 100%);">
    <div class="container py-5 text-center position-relative z-1 animate-fade-up">
        <h2 class="display-4 fw-bold text-white mb-4">Be the Reason They Smile Today</h2>
        <p class="text-white-50 lead mb-5 mx-auto fs-4" style="max-width: 700px;">
            Your small contribution can provide a warm meal, essential medicine, or a safe bed for an abandoned senior. Join our family of changemakers.
        </p>
        <div class="d-flex justify-content-center gap-3">
             <a href="member.php" class="btn btn-outline-light fw-bold px-5 py-3 rounded-pill hover-lift">Member With Us</a>
             <a href="donate.php" class="btn btn-outline-light fw-bold px-5 py-3 rounded-pill hover-lift">Donate Now</a>
        </div>
    </div>
     <!-- Decorative Circles with Images (Fully Visible) -->
    <div class="position-absolute top-50 start-0 translate-middle-y rounded-circle border border-4 border-white shadow-lg overflow-hidden animate-pulse d-none d-lg-block" style="width: 250px; height: 250px; left: 5%; z-index: 0;">
        <img src="assets/images/Senior%20citizen.jpg" class="w-100 h-100 object-fit-cover" alt="Smile" style="opacity: 0.9;">
    </div>
    <div class="position-absolute top-50 end-0 translate-middle-y rounded-circle border border-4 border-white shadow-lg overflow-hidden animate-pulse delay-500 d-none d-lg-block" style="width: 250px; height: 250px; right: 5%; z-index: 0;">
        <img src="assets/images/Senior%20citizen2.jpg" class="w-100 h-100 object-fit-cover" alt="Smile" style="opacity: 0.9;">
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
