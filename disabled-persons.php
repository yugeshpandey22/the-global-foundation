<?php include 'includes/header.php'; ?>
<?php include 'includes/navbar.php'; ?>

<!-- Hero Section -->
<!-- Hero Section with Parallax -->
<section class="position-relative d-flex align-items-center justify-content-center overflow-hidden" 
         style="min-height: 600px; background: url('assets/images/persion.jpg') center/cover no-repeat fixed;">
    <div class="position-absolute top-0 start-0 w-100 h-100" style="background: linear-gradient(135deg, rgba(13, 148, 136, 0.9), rgba(15, 118, 110, 0.8));"></div>
    <!-- Animated Particles (Optional simple CSS effect) -->
    <div class="position-absolute w-100 h-100 top-0 start-0" style="background-image: radial-gradient(rgba(255,255,255,0.1) 1px, transparent 1px); background-size: 50px 50px; opacity: 0.3;"></div>
    
    <div class="container position-relative z-1 text-center text-white animate-fade-up pb-5">
        <span class="badge bg-white text-info px-4 py-2 rounded-pill mb-4 text-uppercase fw-bold tracking-wider shadow-sm" style="color: #0f766e !important; letter-spacing: 2px;">
            Empowering Lives
        </span>
        <h1 class="display-2 fw-bold mb-4 text-shadow-sm">Abilities Beyond Disabilities</h1>
        <p class="lead fw-light opacity-90 mx-auto mb-5fs-4" style="max-width: 800px; line-height: 1.6;">
            We believe in a world where every individual, regardless of ability, has the chance to thrive, contribute, and live with dignity.
        </p>
        <div class="d-flex justify-content-center gap-3">
             <a href="#programs" class="btn btn-light text-info fw-bold px-5 py-3 rounded-pill shadow-lg hover-lift">Our Programs</a>
             <a href="donate.php" class="btn btn-outline-light fw-bold px-5 py-3 rounded-pill hover-lift">Support Us</a>
        </div>
    </div>
    <!-- Wave Shape Divider -->
    <div class="position-absolute bottom-0 start-0 w-100">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffffff" fill-opacity="1" d="M0,96L48,112C96,128,192,160,288,160C384,160,480,128,576,112C672,96,768,96,864,112C960,128,1056,160,1152,160C1248,160,1344,128,1392,112L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
    </div>
</section>

<!-- Overview & Mission - Modern Layout -->
<section class="py-5 bg-white position-relative">
    <div class="container py-5">
        <div class="row g-5 align-items-center">
            <!-- Left: Text Content -->
            <div class="col-lg-6 animate-fade-up">
                <div class="d-inline-block mb-3 position-relative">
                    <h6 class="text-info fw-bold text-uppercase ls-md mb-0" style="color: #0d9488 !important;">Our Mission</h6>
                    <div class="position-absolute bottom-0 start-0 w-50 h-1 bg-info opacity-25" style="margin-bottom: -5px;"></div>
                </div>
                <h2 class="fw-bold display-5 mb-4 text-dark">Building an Inclusive World</h2>
                <p class="text-secondary mb-5 lead" style="line-height: 1.8;">
                    Disability is not an inability. It is simply a different ability. At The Global Rise Foundation, we focus on what people <strong>can</strong> do, providing them with the tools, training, and therapy to overcome barriers.
                </p>
                
                <div class="row g-4">
                    <div class="col-sm-6">
                        <div class="p-4 rounded-4 bg-light h-100 border-start border-4 border-info shadow-sm hover-lift transition-all">
                            <i class="fa-solid fa-hand-holding-heart fs-2 text-info mb-3" style="color: #0d9488;"></i>
                            <h5 class="fw-bold text-dark">Compassionate Care</h5>
                            <p class="small text-secondary mb-0">Treating everyone with the respect they deserve.</p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="p-4 rounded-4 bg-light h-100 border-start border-4 border-warning shadow-sm hover-lift transition-all">
                            <i class="fa-solid fa-users-rays fs-2 text-warning mb-3"></i>
                            <h5 class="fw-bold text-dark">Social Integration</h5>
                            <p class="small text-secondary mb-0">Creating opportunities for social mingling.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right: Image Composition -->
            <div class="col-lg-6 animate-fade-up delay-100">
                <div class="position-relative p-4">
                    <div class="position-absolute top-0 end-0 bg-info opacity-10 rounded-circle animate-pulse" style="width: 300px; height: 300px; z-index: 0;"></div>
                    <div class="position-relative z-1">
                        <img src="assets/images/persion2.jpg" alt="Inclusive Environment" class="w-100 rounded-5 shadow-lg object-fit-cover" style="height: 500px; transform: rotate(-2deg);">
                    </div>
                    <!-- Floating Stat Card -->
                    <div class="position-absolute bottom-0 start-0 m-5 p-4 bg-white rounded-4 shadow-xl z-2 animate-float">
                        <div class="d-flex align-items-center gap-3">
                            <div class="rounded-circle bg-info bg-opacity-10 p-3 text-info">
                                <i class="fa-solid fa-face-smile fs-2"></i>
                            </div>
                            <div>
                                <h3 class="fw-bold mb-0 text-dark counter" data-target="500">0</h3>
                                <p class="small text-secondary mb-0 fw-bold text-uppercase">Smiles Created</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Services / Programs - Glassmorphism Cards -->
<section id="programs" class="py-5 bg-light position-relative overflow-hidden">
    <!-- Background Decor -->
    <div class="position-absolute top-0 start-0 w-100 h-100" style="background: radial-gradient(circle at 10% 20%, rgba(13, 148, 136, 0.05) 0%, transparent 40%); pointer-events: none;"></div>

    <div class="container py-5 position-relative z-1">
        <div class="text-center mb-5 animate-fade-up" style="max-width: 700px; margin: 0 auto;">
            <div class="d-inline-flex align-items-center gap-2 px-3 py-1 rounded-pill bg-white border shadow-sm mb-3">
                <span class="w-2 h-2 rounded-circle bg-info"></span>
                <small class="fw-bold text-secondary text-uppercase tracking-wider">Our Core Services</small>
            </div>
            <h2 class="fw-bold display-5 text-dark mb-3">Holistic Support System</h2>
            <p class="text-secondary lead">We don't just provide aid; we build a complete ecosystem of support for rehabilitation and growth.</p>
        </div>
        
        <div class="row g-4">
            <!-- Service Card 1 -->
            <div class="col-lg-4 col-md-6 animate-fade-up">
                <div class="card h-100 border-0 shadow-sm rounded-4 hover-lift overflow-hidden group">
                    <div class="card-body p-4 position-relative">
                        <div class="position-absolute top-0 end-0 p-3 opacity-10">
                            <i class="fa-solid fa-user-doctor fs-1 text-info"></i>
                        </div>
                        <div class="icon-square bg-gradient-info text-white rounded-3 p-3 mb-4 d-inline-block shadow-md" style="background: linear-gradient(135deg, #0d9488, #115e59);">
                            <i class="fa-solid fa-user-doctor fs-4"></i>
                        </div>
                        <h4 class="fw-bold mb-3 text-dark group-hover-text-info transition-colors">Therapy & Rehab</h4>
                        <p class="text-secondary mb-0">
                            State-of-the-art physiotherapy and occupational therapy to enhance physical capabilities and independence.
                        </p>
                    </div>
                    <div class="card-footer bg-white border-0 p-4 pt-0">
                         <a href="#" class="btn btn-link text-info p-0 fw-bold text-decoration-none">Learn More <i class="fa-solid fa-arrow-right ms-1"></i></a>
                    </div>
                </div>
            </div>
            
             <!-- Service Card 2 -->
             <div class="col-lg-4 col-md-6 animate-fade-up delay-100">
                <div class="card h-100 border-0 shadow-sm rounded-4 hover-lift overflow-hidden group">
                    <div class="card-body p-4 position-relative">
                        <div class="position-absolute top-0 end-0 p-3 opacity-10">
                            <i class="fa-solid fa-graduation-cap fs-1 text-warning"></i>
                        </div>
                         <div class="icon-square bg-gradient-warning text-white rounded-3 p-3 mb-4 d-inline-block shadow-md" style="background: linear-gradient(135deg, #f59e0b, #d97706);">
                            <i class="fa-solid fa-graduation-cap fs-4"></i>
                        </div>
                        <h4 class="fw-bold mb-3 text-dark group-hover-text-warning transition-colors">Special Education</h4>
                        <p class="text-secondary mb-0">
                            Customized curriculum designed for different learning speeds, ensuring no child is left behind.
                        </p>
                    </div>
                     <div class="card-footer bg-white border-0 p-4 pt-0">
                         <a href="#" class="btn btn-link text-warning p-0 fw-bold text-decoration-none">Learn More <i class="fa-solid fa-arrow-right ms-1"></i></a>
                    </div>
                </div>
            </div>

             <!-- Service Card 3 -->
            <div class="col-lg-4 col-md-6 animate-fade-up delay-200">
                <div class="card h-100 border-0 shadow-sm rounded-4 hover-lift overflow-hidden group">
                     <div class="card-body p-4 position-relative">
                        <div class="position-absolute top-0 end-0 p-3 opacity-10">
                             <i class="fa-solid fa-hands-holding-circle fs-1 text-danger"></i>
                        </div>
                         <div class="icon-square bg-gradient-danger text-white rounded-3 p-3 mb-4 d-inline-block shadow-md" style="background: linear-gradient(135deg, #ef4444, #b91c1c);">
                            <i class="fa-solid fa-hands-holding-circle fs-4"></i>
                        </div>
                        <h4 class="fw-bold mb-3 text-dark group-hover-text-danger transition-colors">Family Support</h4>
                        <p class="text-secondary mb-0">
                            Counseling and workshops for families to create a supportive home environment.
                        </p>
                    </div>
                     <div class="card-footer bg-white border-0 p-4 pt-0">
                         <a href="#" class="btn btn-link text-danger p-0 fw-bold text-decoration-none">Learn More <i class="fa-solid fa-arrow-right ms-1"></i></a>
                    </div>
                </div>
            </div>

            <!-- Service Card 4 -->
            <div class="col-lg-4 col-md-6 animate-fade-up">
                 <div class="card h-100 border-0 shadow-sm rounded-4 hover-lift overflow-hidden group">
                     <div class="card-body p-4 position-relative">
                        <div class="position-absolute top-0 end-0 p-3 opacity-10">
                             <i class="fa-solid fa-briefcase fs-1 text-primary"></i>
                        </div>
                         <div class="icon-square bg-gradient-primary text-white rounded-3 p-3 mb-4 d-inline-block shadow-md" style="background: linear-gradient(135deg, #3b82f6, #1d4ed8);">
                            <i class="fa-solid fa-briefcase fs-4"></i>
                        </div>
                        <h4 class="fw-bold mb-3 text-dark group-hover-text-primary transition-colors">Vocational Skills</h4>
                        <p class="text-secondary mb-0">
                            Training in handicrafts, computers, and other trades to foster financial independence.
                        </p>
                    </div>
                     <div class="card-footer bg-white border-0 p-4 pt-0">
                         <a href="#" class="btn btn-link text-primary p-0 fw-bold text-decoration-none">Learn More <i class="fa-solid fa-arrow-right ms-1"></i></a>
                    </div>
                </div>
            </div>

            <!-- Service Card 5 -->
            <div class="col-lg-4 col-md-6 animate-fade-up delay-100">
                 <div class="card h-100 border-0 shadow-sm rounded-4 hover-lift overflow-hidden group">
                     <div class="card-body p-4 position-relative">
                        <div class="position-absolute top-0 end-0 p-3 opacity-10">
                             <i class="fa-solid fa-wheelchair fs-1 text-success"></i>
                        </div>
                        <div class="icon-square bg-gradient-success text-white rounded-3 p-3 mb-4 d-inline-block shadow-md" style="background: linear-gradient(135deg, #22c55e, #15803d);">
                            <i class="fa-solid fa-wheelchair fs-4"></i>
                        </div>
                        <h4 class="fw-bold mb-3 text-dark group-hover-text-success transition-colors">Mobility Aids</h4>
                        <p class="text-secondary mb-0">
                            Distribution of wheelchairs, crutches, and hearing aids to those in need.
                        </p>
                    </div>
                     <div class="card-footer bg-white border-0 p-4 pt-0">
                         <a href="#" class="btn btn-link text-success p-0 fw-bold text-decoration-none">Learn More <i class="fa-solid fa-arrow-right ms-1"></i></a>
                    </div>
                </div>
            </div>

            <!-- Service Card 6 -->
            <div class="col-lg-4 col-md-6 animate-fade-up delay-200">
                 <div class="card h-100 border-0 shadow-sm rounded-4 hover-lift overflow-hidden group">
                     <div class="card-body p-4 position-relative">
                        <div class="position-absolute top-0 end-0 p-3 opacity-10">
                              <i class="fa-solid fa-users-line fs-1 text-secondary"></i>
                        </div>
                        <div class="icon-square bg-secondary text-white rounded-3 p-3 mb-4 d-inline-block shadow-md">
                            <i class="fa-solid fa-users-line fs-4"></i>
                        </div>
                        <h4 class="fw-bold mb-3 text-dark transition-colors">Community Life</h4>
                        <p class="text-secondary mb-0">
                            Inclusive events and outings to ensure full participation in society.
                        </p>
                    </div>
                     <div class="card-footer bg-white border-0 p-4 pt-0">
                         <a href="#" class="btn btn-link text-secondary p-0 fw-bold text-decoration-none">Learn More <i class="fa-solid fa-arrow-right ms-1"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Impact / Goals Section - Dark Mode feel -->
<section class="py-5 text-white position-relative" style="background: #111827;">
    <div class="position-absolute top-0 end-0 w-50 h-100" style="background: linear-gradient(to left, rgba(13, 148, 136, 0.1), transparent);"></div>
    <div class="container py-5 position-relative z-1">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-5 mb-lg-0 animate-fade-up">
                <span class="text-info fw-bold text-uppercase d-block mb-2">Future Vision</span>
                <h2 class="display-5 fw-bold mb-4">Goals for Tomorrow</h2>
                <div class="d-flex flex-column gap-4">
                    <!-- Progress Bar 1 -->
                    <div>
                        <div class="d-flex justify-content-between mb-1">
                            <span class="fw-semibold">Accessibility Projects</span>
                            <span class="text-info">85%</span>
                        </div>
                        <div class="progress bg-white bg-opacity-10" style="height: 10px;">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 85%"></div>
                        </div>
                    </div>
                     <!-- Progress Bar 2 -->
                    <div>
                        <div class="d-flex justify-content-between mb-1">
                            <span class="fw-semibold">Therapy Center Expansion</span>
                            <span class="text-warning">60%</span>
                        </div>
                        <div class="progress bg-white bg-opacity-10" style="height: 10px;">
                            <div class="progress-bar bg-warning" role="progressbar" style="width: 60%"></div>
                        </div>
                    </div>
                     <!-- Progress Bar 3 -->
                    <div>
                        <div class="d-flex justify-content-between mb-1">
                            <span class="fw-semibold">Employment Placements</span>
                            <span class="text-success">75%</span>
                        </div>
                        <div class="progress bg-white bg-opacity-10" style="height: 10px;">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 75%"></div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-5 offset-lg-1 animate-fade-up delay-100">
                <div class="bg-white bg-opacity-10 p-4 rounded-4 backdrop-blur shadow-lg border border-white border-opacity-10">
                    <h4 class="fw-bold mb-4">Why We Do It?</h4>
                    <div class="d-flex gap-3 mb-4">
                         <img src="assets/images/persion2.jpg" class="rounded-circle object-fit-cover border border-2 border-white" width="60" height="60" alt="Testimonial">
                         <div>
                             <p class="mb-1 fst-italic">“The foundation gave my son a new lease on life. He is now learning computers and feels so confident.”</p>
                             <small class="text-white-50 fw-bold">- Sunita Devi, Parent</small>
                         </div>
                    </div>
                     <div class="d-flex gap-3">
                         <img src="assets/images/persion.jpg" class="rounded-circle object-fit-cover border border-2 border-white" width="80"height="80" alt="Testimonial">
                         <div>
                             <p class="mb-1 fst-italic">“I never thought I could work. The vocational training changed everything for me.”</p>
                             <small class="text-white-50 fw-bold">- Rahul, Beneficiary</small>
                         </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action Section with Gradient -->
<section class="py-5 position-relative overflow-hidden" style="background: linear-gradient(135deg, #0f766e 0%, #0d9488 100%);">
    <div class="container py-5 text-center position-relative z-1 animate-fade-up">
        <h2 class="display-5 fw-bold text-white mb-3">Be the Reason Someone Smiles</h2>
        <p class="text-white-50 lead mb-5 mx-auto" style="max-width: 600px;">
            Your contribution can sponsor a therapy session, buy a wheelchair, or fund a child's education.
        </p>
        <div class="d-flex justify-content-center gap-3">
             <a href="member.php" class="btn btn-outline-light fw-bold px-5 py-3 rounded-pill hover-lift">Join Our Mission</a>
             <a href="donate.php" class="btn btn-outline-light fw-bold px-5 py-3 rounded-pill hover-lift">Donate Now</a>
        </div>
    </div>
     <!-- Decorative Circles with Images (Fully Visible) -->
    <div class="position-absolute top-50 start-0 translate-middle-y rounded-circle border border-4 border-white shadow-lg overflow-hidden animate-pulse d-none d-lg-block" style="width: 250px; height: 250px; left: 5%; z-index: 0;">
        <img src="assets/images/persion.jpg" class="w-100 h-100 object-fit-cover" alt="Smile" style="opacity: 0.9;">
    </div>
    <div class="position-absolute top-50 end-0 translate-middle-y rounded-circle border border-4 border-white shadow-lg overflow-hidden animate-pulse delay-500 d-none d-lg-block" style="width: 250px; height: 250px; right: 5%; z-index: 0;">
        <img src="assets/images/persion2.jpg" class="w-100 h-100 object-fit-cover" alt="Smile" style="opacity: 0.9;">
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
