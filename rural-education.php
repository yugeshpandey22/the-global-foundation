<?php include 'includes/header.php'; ?>
<?php include 'includes/navbar.php'; ?>

<!-- Hero Section -->
<section class="position-relative d-flex align-items-center justify-content-center" 
         style="min-height: 500px; background: url('assets/images/study child.jpg') center/cover no-repeat fixed;">
    <div class="position-absolute top-0 start-0 w-100 h-100" style="background: rgba(30, 64, 175, 0.85); mix-blend-mode: multiply;"></div> <!-- Blue overlay -->
    <div class="position-absolute top-0 start-0 w-100 h-100" style="background: linear-gradient(to bottom, transparent 0%, rgba(0,0,0,0.6) 100%);"></div>
    
    <div class="container position-relative z-1 text-center text-white animate-fade-up">
        <span class="badge bg-white text-primary px-3 py-2 rounded-pill mb-3 text-uppercase fw-bold tracking-wider opacity-90">
            Education for All
        </span>
        <h1 class="display-3 fw-bold mb-3">Rural Children Education</h1>
        <p class="lead fw-light opacity-90 mx-auto mb-4" style="max-width: 800px;">
            Empowering rural communities through quality education, after-school support, and equal opportunities for every child.
        </p>
    </div>
</section>

<!-- Main Content -->
<section class="py-5 bg-white">
    <div class="container py-5">
        <div class="row g-5 align-items-center">
            <!-- Left: Text Content -->
            <div class="col-lg-6 animate-fade-up">
                <h6 class="text-primary fw-bold text-uppercase ls-md mb-2">The Mission</h6>
                <h2 class="fw-bold display-6 mb-4 text-dark">Bridging the Education Gap</h2>
                <p class="text-secondary mb-4 lead" style="line-height: 1.8;">
                    Our program targets the educational disparities in rural India. By establishing after-school learning centers and providing material support, we ensure that children in underserved areas get the start they deserve.
                </p>
                
                <div class="d-flex flex-column gap-3 mb-5">
                    <div class="d-flex align-items-start">
                        <div class="icon-square bg-primary bg-opacity-10 text-primary rounded-circle p-2 me-3 mt-1">
                            <i class="fa-solid fa-graduation-cap"></i>
                        </div>
                        <div>
                            <h5 class="fw-bold mb-1 text-dark">After-School Support</h5>
                            <p class="text-secondary small mb-0">Remedial classes to help students catch up and excel.</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-start">
                         <div class="icon-square bg-primary bg-opacity-10 text-primary rounded-circle p-2 me-3 mt-1">
                            <i class="fa-solid fa-gift"></i>
                        </div>
                         <div>
                            <h5 class="fw-bold mb-1 text-dark">Material Distribution</h5>
                            <p class="text-secondary small mb-0">Free school kits, uniforms, and books for needy students.</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-start">
                         <div class="icon-square bg-primary bg-opacity-10 text-primary rounded-circle p-2 me-3 mt-1">
                            <i class="fa-solid fa-laptop-code"></i>
                        </div>
                         <div>
                            <h5 class="fw-bold mb-1 text-dark">Digital Literacy</h5>
                            <p class="text-secondary small mb-0">Introduction to computers and modern learning tools.</p>
                        </div>
                    </div>
                </div>

                <div class="bg-light p-4 rounded-4 border-start border-4 border-primary shadow-sm">
                    <h5 class="fw-bold text-dark mb-2">Our Goal by 2026</h5>
                    <p class="text-secondary mb-0">
                        To reach <strong>50 more villages</strong>, ensuring that financial constraints never force a child to drop out of school.
                    </p>
                </div>
            </div>

            <!-- Right: Image Grid -->
            <div class="col-lg-6 animate-fade-up delay-100">
                <div class="position-relative">
                    <!-- Main Image -->
                    <div class="rounded-5 overflow-hidden shadow-lg position-relative z-1">
                        <img src="assets/images/study child.jpg" alt="Children studying" class="w-100 object-fit-cover" style="height: 500px;">
                    </div>
                    <!-- Decorative Elements -->
                    <div class="position-absolute top-0 end-0 bg-primary rounded-circle opacity-10" style="width: 200px; height: 200px; margin-top: -50px; margin-right: -50px;"></div>
                    <div class="position-absolute bottom-0 start-0 bg-warning rounded-circle opacity-10" style="width: 150px; height: 150px; margin-bottom: -40px; margin-left: -40px;"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Our Impact Section -->
<section class="py-5 bg-primary text-white position-relative overflow-hidden">
    <div class="position-absolute top-0 start-0 w-100 h-100" style="background: radial-gradient(circle at center, rgba(255,255,255,0.1) 0%, transparent 70%);"></div>
    <div class="container py-4 position-relative z-1">
        <div class="text-center mb-5 animate-fade-up">
            <h6 class="text-white-50 fw-bold text-uppercase ls-md">Our Achievements</h6>
            <h2 class="fw-bold display-5 text-white">Impact at a Glance</h2>
        </div>
        <div class="row g-4 text-center justify-content-center divide-x-lg-white-50">
            <div class="col-md-3 col-6 animate-fade-up">
                <h2 class="display-4 fw-bold mb-0 counter" data-target="1200">0</h2>
                <p class="text-white-50 small text-uppercase fw-bold tracking-wider mt-2">Children Reached</p>
            </div>
            <div class="col-md-3 col-6 animate-fade-up delay-100">
                <h2 class="display-4 fw-bold mb-0 counter" data-target="50">0</h2>
                <p class="text-white-50 small text-uppercase fw-bold tracking-wider mt-2">Learning Centers</p>
            </div>
            <div class="col-md-3 col-6 animate-fade-up delay-200">
                <h2 class="display-4 fw-bold mb-0 counter" data-target="300">0</h2>
                <p class="text-white-50 small text-uppercase fw-bold tracking-wider mt-2">Scholarships</p>
            </div>
            <div class="col-md-3 col-6 animate-fade-up delay-300">
                <h2 class="display-4 fw-bold mb-0 counter" data-target="15">0</h2>
                <p class="text-white-50 small text-uppercase fw-bold tracking-wider mt-2">Years Service</p>
            </div>
        </div>
    </div>
</section>

<!-- Success Stories Section -->
<section class="py-5 bg-light">
    <div class="container py-5">
        <div class="d-flex justify-content-between align-items-end mb-5 animate-fade-up">
            <div>
                 <h6 class="text-primary fw-bold text-uppercase ls-md mb-2">Real Stories</h6>
                <h2 class="fw-bold display-6 mb-0 text-dark">Lives Transformed</h2>
            </div>
        </div>
        
        <div class="row g-4">
            <!-- Story 1 -->
            <div class="col-lg-4 col-md-6 animate-fade-up">
                <div class="bg-white rounded-4 overflow-hidden shadow-sm h-100 hover-lift group">
                    <div class="overflow-hidden position-relative" style="height: 250px;">
                        <img src="assets/images/anita.jpg" alt="Anita's Journey" class="w-100 h-100 object-fit-cover transition-transform group-hover-scale">
                        <div class="position-absolute bottom-0 start-0 bg-white px-3 py-1 m-3 rounded-2 fw-bold small shadow-sm text-primary">
                            Scholarship Winner
                        </div>
                    </div>
                    <div class="p-4">
                        <h5 class="fw-bold mb-3 text-dark">Anita’s Journey</h5>
                        <p class="text-secondary small mb-0" style="line-height: 1.7;">From missing school due to lack of books, Anita now excels in her studies with our scholarship support and aims to be a teacher.</p>
                    </div>
                </div>
            </div>
            <!-- Story 2 -->
             <div class="col-lg-4 col-md-6 animate-fade-up delay-100">
                <div class="bg-white rounded-4 overflow-hidden shadow-sm h-100 hover-lift group">
                    <div class="overflow-hidden position-relative" style="height: 250px;">
                        <img src="assets/images/village.jpg" alt="Village Library" class="w-100 h-100 object-fit-cover transition-transform group-hover-scale">
                        <div class="position-absolute bottom-0 start-0 bg-white px-3 py-1 m-3 rounded-2 fw-bold small shadow-sm text-primary">
                            Infrastructure
                        </div>
                    </div>
                    <div class="p-4">
                        <h5 class="fw-bold mb-3 text-dark">Village Library</h5>
                        <p class="text-secondary small mb-0" style="line-height: 1.7;">We set up a small library in a rural school, giving 200+ kids access to storybooks and learning resources for the first time.</p>
                    </div>
                </div>
            </div>
            <!-- Story 3 -->
             <div class="col-lg-4 col-md-6 animate-fade-up delay-200">
                <div class="bg-white rounded-4 overflow-hidden shadow-sm h-100 hover-lift group">
                    <div class="overflow-hidden position-relative" style="height: 250px;">
                        <img src="assets/images/digital.jpg" alt="Digital Literacy" class="w-100 h-100 object-fit-cover transition-transform group-hover-scale">
                         <div class="position-absolute bottom-0 start-0 bg-white px-3 py-1 m-3 rounded-2 fw-bold small shadow-sm text-primary">
                            New Skills
                        </div>
                    </div>
                    <div class="p-4">
                        <h5 class="fw-bold mb-3 text-dark">Digital Literacy</h5>
                        <p class="text-secondary small mb-0" style="line-height: 1.7;">Through our weekly workshops, rural children are learning to send emails and use educational apps effectively.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action Section -->
<section class="py-5 position-relative overflow-hidden" style="background: linear-gradient(135deg, #0d6efd 0%, #0a58ca 100%);">
    <div class="container-fluid px-4 px-lg-5 py-4 position-relative z-1">
        <div class="row align-items-center">
            <div class="col-lg-8 mb-4 mb-lg-0 text-center text-lg-start animate-fade-up">
                <h2 class="fw-bold text-white mb-2">Support Rural Education</h2>
                <p class="text-white-50 lead mb-0">
                    Join us as a volunteer or donor and help us reach more children. A small contribution can light up a future.
                </p>
            </div>
            <div class="col-lg-4 text-center text-lg-end animate-fade-up delay-100">
                
<a href="donate.php" class="btn btn-outline-success fw-bold px-5 py-3 rounded-pill hover-lift">
  Donate
</a>
            </div>
        </div>
    </div>
    <!-- Decorative Circle -->
    <div class="position-absolute top-0 end-0 bg-white opacity-10 rounded-circle" style="width: 300px; height: 300px; margin-right: -100px; margin-top: -100px;"></div>
</section>

<script>
    // Simple counter script (reused from other premium pages)
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
