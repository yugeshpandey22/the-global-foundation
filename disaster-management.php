<?php include 'includes/header.php'; ?>
<?php include 'includes/navbar.php'; ?>

<!-- Hero Section -->
<section class="position-relative d-flex align-items-center justify-content-center" 
         style="min-height: 500px; background: url('assets/images/dis2.jpg') center/cover no-repeat fixed;">
    <div class="position-absolute top-0 start-0 w-100 h-100" style="background: rgba(220, 53, 69, 0.85); mix-blend-mode: multiply;"></div> <!-- Red/Danger overlay for Disaster theme -->
    <div class="position-absolute top-0 start-0 w-100 h-100" style="background: linear-gradient(to bottom, transparent 0%, rgba(0,0,0,0.6) 100%);"></div>
    
    <div class="container position-relative z-1 text-center text-white animate-fade-up">
        <span class="badge bg-white text-danger px-3 py-2 rounded-pill mb-3 text-uppercase fw-bold tracking-wider opacity-90">
            Emergency Response
        </span>
        <h1 class="display-3 fw-bold mb-3">Disaster Management</h1>
        <p class="lead fw-light opacity-90 mx-auto mb-4" style="max-width: 800px;">
            Providing immediate relief, medical support, and long-term rehabilitation to communities in crisis.
        </p>
    </div>
</section>

<!-- Mission Section -->
<section class="py-5 bg-white">
    <div class="container py-5">
        <div class="row g-5 align-items-center">
            <!-- Left: Text Content -->
            <div class="col-lg-6 animate-fade-up">
                <h6 class="text-danger fw-bold text-uppercase ls-md mb-2">Our Mission</h6>
                <h2 class="fw-bold display-6 mb-4 text-dark">Responding with Speed & Care</h2>
                <p class="text-secondary mb-4 lead" style="line-height: 1.8;">
                    Disasters can strike at any time, leaving communities vulnerable. At <strong>The Global Rise Foundation</strong>, we mobilize quickly to provide <strong class="text-danger">emergency relief, food, medical support, and shelter</strong> during natural calamities and crises.
                </p>
                <p class="text-secondary mb-0" style="line-height: 1.8;">
                     Our efforts focus on minimizing immediate suffering and helping communities recover with resilience. We work hand-in-hand with local communities to ensure rapid response and long-term rehabilitation, making sure no one is left behind in times of crisis.
                </p>
            </div>

            <!-- Right: Image -->
            <div class="col-lg-6 animate-fade-up delay-100">
                <div class="position-relative">
                    <div class="rounded-5 overflow-hidden shadow-lg position-relative z-1">
                        <img src="assets/images/dis2.jpg" alt="Disaster Relief Work" class="w-100 object-fit-cover" style="height: 400px;">
                    </div>
                     <!-- Decorative Elements -->
                    <div class="position-absolute top-0 end-0 bg-danger rounded-circle opacity-10" style="width: 200px; height: 200px; margin-top: -50px; margin-right: -50px;"></div>
                    <div class="position-absolute bottom-0 start-0 bg-dark rounded-circle opacity-10" style="width: 150px; height: 150px; margin-bottom: -40px; margin-left: -40px;"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Key Focus Areas -->
<section class="py-5 bg-light">
    <div class="container py-5">
        <div class="text-center mb-5 animate-fade-up">
            <h6 class="text-danger fw-bold text-uppercase ls-md">Our Approach</h6>
            <h2 class="fw-bold display-5 text-dark">Comprehensive Relief</h2>
        </div>
        
        <div class="row g-4 justify-content-center">
            <!-- Focus Area 1 -->
            <div class="col-lg-4 col-md-6 animate-fade-up">
                <div class="bg-white rounded-4 overflow-hidden shadow-sm h-100 hover-lift group border border-light">
                    <div class="overflow-hidden position-relative" style="height: 250px;">
                         <img src="assets/images/pre.jpg" alt="Preparedness" class="w-100 h-100 object-fit-cover transition-transform group-hover-scale">
                         <div class="position-absolute top-0 start-0 m-3 px-3 py-1 bg-white rounded-pill shadow-sm fw-bold small text-danger">Step 1</div>
                    </div>
                    <div class="p-4">
                        <h4 class="fw-bold mb-3 text-dark">Preparedness</h4>
                        <p class="text-secondary mb-0" style="line-height: 1.7;">
                            Community training, awareness programs, and safety drills to ensure readiness for floods, earthquakes, and landslides. We empower communities with knowledge.
                        </p>
                    </div>
                </div>
            </div>
            
            <!-- Focus Area 2 -->
             <div class="col-lg-4 col-md-6 animate-fade-up delay-100">
                <div class="bg-white rounded-4 overflow-hidden shadow-sm h-100 hover-lift group border border-light">
                    <div class="overflow-hidden position-relative" style="height: 250px;">
                        <img src="assets/images/dis.jpg" alt="Relief Operations" class="w-100 h-100 object-fit-cover transition-transform group-hover-scale">
                        <div class="position-absolute top-0 start-0 m-3 px-3 py-1 bg-danger text-white rounded-pill shadow-sm fw-bold small">Step 2</div>
                    </div>
                    <div class="p-4">
                        <h4 class="fw-bold mb-3 text-dark">Relief & Response</h4>
                        <p class="text-secondary mb-0" style="line-height: 1.7;">
                            Immediate distribution of food, drinking water, medicines, and shelter kits during emergencies. Our rapid response teams are always ready to serve.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Focus Area 3 -->
             <div class="col-lg-4 col-md-6 animate-fade-up delay-200">
                <div class="bg-white rounded-4 overflow-hidden shadow-sm h-100 hover-lift group border border-light">
                    <div class="overflow-hidden position-relative" style="height: 250px;">
                        <img src="assets/images/dis2.jpg" alt="Recovery & Rehabilitation" class="w-100 h-100 object-fit-cover transition-transform group-hover-scale">
                        <div class="position-absolute top-0 start-0 m-3 px-3 py-1 bg-white rounded-pill shadow-sm fw-bold small text-success">Step 3</div>
                    </div>
                    <div class="p-4">
                        <h4 class="fw-bold mb-3 text-dark">Recovery</h4>
                        <p class="text-secondary mb-0" style="line-height: 1.7;">
                            Supporting long-term recovery by rebuilding infrastructure, restoring livelihoods, and providing psychosocial support. We help communities rebuild stronger.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action Section -->
<section class="py-5 position-relative overflow-hidden" style="background: linear-gradient(135deg, #dc3545 0%, #b02a37 100%);">
    <div class="container-fluid px-4 px-lg-5 py-4 position-relative z-1">
        <div class="row align-items-center">
            <div class="col-lg-8 mb-4 mb-lg-0 text-center text-lg-start animate-fade-up">
                <h2 class="fw-bold text-white mb-2">Be a Part of Relief & Recovery</h2>
                <p class="text-white-50 lead mb-0">
                    Your contribution can provide food, shelter, and medical aid to families during disasters.
                </p>
            </div>
            <div class="col-lg-4 text-center text-lg-end animate-fade-up delay-100">
                <a href="member.php" class="btn btn-light text-danger fw-bold px-5 py-3 rounded-pill shadow-lg me-2 hover-lift">Become a Member</a>
                <a href="donate.php" class="btn btn-light text-danger fw-bold px-5 py-3 rounded-pill hover-lift">Donate for Relief</a>
            </div>
        </div>
    </div>
    <!-- Decorative Circle -->
    <div class="position-absolute top-0 end-0 bg-white opacity-10 rounded-circle" style="width: 300px; height: 300px; margin-right: -100px; margin-top: -100px;"></div>
</section>

<?php include 'includes/footer.php'; ?>
