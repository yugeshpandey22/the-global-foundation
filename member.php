<?php include 'includes/header.php'; ?>
<?php include 'includes/navbar.php'; ?>

<!-- Hero Section -->
<section class="position-relative d-flex align-items-center justify-content-center" 
         style="min-height: 500px; background: url('assets/images/teacher.jpg') center/cover no-repeat fixed;">
    <div class="position-absolute top-0 start-0 w-100 h-100" style="background: rgba(0, 0, 0, 0.6);"></div>
    <div class="container position-relative z-1 text-center text-white animate-fade-up">
        <span class="badge bg-white text-success px-3 py-2 rounded-pill mb-3 text-uppercase fw-bold tracking-wider">
            Join Our Mission
        </span>
        <h1 class="display-3 fw-bold mb-3">Become a Member</h1>
        <p class="lead fw-light opacity-90 mx-auto mb-4" style="max-width: 700px;">
            Join The Global Rise Foundation to teach, mentor, run workshops, and support community events. 
            Flexible roles — part-time, weekend, or long-term commitments.
        </p>
        <div class="d-flex gap-3 justify-content-center">
            <a href="#form" class="btn btn-success fw-bold px-4 py-3 rounded-pill shadow-lg hover-lift">Sign Up Now</a>
            <a href="#roles-section" class="btn btn-outline-light fw-bold px-4 py-3 rounded-pill hover-lift">View Roles</a>
        </div>
    </div>
</section>

<!-- Stats Section -->
<section class="py-5" style="background-color: #f8f9fa;">
    <div class="container mt-n5 position-relative z-2">
        <div class="row g-4">
            <div class="col-lg-3 col-md-6 animate-fade-up">
                <div class="bg-white p-4 rounded-4 shadow-sm text-center h-100 border-bottom border-4 border-success">
                    <div class="icon-square bg-success bg-opacity-10 text-success rounded-circle mx-auto mb-3 d-flex align-items-center justify-content-center" style="width: 60px; height: 60px;">
                        <i class="fa-solid fa-graduation-cap fs-4"></i>
                    </div>
                    <h2 class="fw-bold text-dark mb-1 counter" data-target="1200">0</h2>
                    <p class="text-secondary small text-uppercase fw-bold mb-0">Children Educated</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 animate-fade-up delay-100">
                <div class="bg-white p-4 rounded-4 shadow-sm text-center h-100 border-bottom border-4 border-success">
                    <div class="icon-square bg-warning bg-opacity-10 text-warning rounded-circle mx-auto mb-3 d-flex align-items-center justify-content-center" style="width: 60px; height: 60px;">
                        <i class="fa-solid fa-person-dress fs-4"></i>
                    </div>
                    <h2 class="fw-bold text-dark mb-1 counter" data-target="450">0</h2>
                    <p class="text-secondary small text-uppercase fw-bold mb-0">Women Trained</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 animate-fade-up delay-200">
                <div class="bg-white p-4 rounded-4 shadow-sm text-center h-100 border-bottom border-4 border-success">
                    <div class="icon-square bg-danger bg-opacity-10 text-danger rounded-circle mx-auto mb-3 d-flex align-items-center justify-content-center" style="width: 60px; height: 60px;">
                        <i class="fa-solid fa-heart-pulse fs-4"></i>
                    </div>
                    <h2 class="fw-bold text-dark mb-1 counter" data-target="75">0</h2>
                    <p class="text-secondary small text-uppercase fw-bold mb-0">Health Camps</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 animate-fade-up delay-300">
                <div class="bg-white p-4 rounded-4 shadow-sm text-center h-100 border-bottom border-4 border-success">
                    <div class="icon-square bg-info bg-opacity-10 text-info rounded-circle mx-auto mb-3 d-flex align-items-center justify-content-center" style="width: 60px; height: 60px;">
                        <i class="fa-solid fa-clock-rotate-left fs-4"></i>
                    </div>
                    <h2 class="fw-bold text-dark mb-1 counter" data-target="15">0</h2>
                    <p class="text-secondary small text-uppercase fw-bold mb-0">Years of Service</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Member Roles Section -->
<section class="py-5" id="roles-section">
    <div class="container py-4">
        <div class="text-center mb-5 animate-fade-up">
            <h6 class="text-success fw-bold text-uppercase ls-md">Opportunities</h6>
            <h2 class="fw-bold display-5 mb-3">Member Roles</h2>
            <p class="text-muted w-75 mx-auto">Find a role that matches your skills and passion.</p>
        </div>
        
        <div class="row g-4">
            <!-- Teacher / Tutor -->
            <div class="col-lg-4 col-md-6 animate-fade-up">
                <div class="card border-0 shadow-sm rounded-4 overflow-hidden h-100 hover-lift group">
                    <div class="position-relative overflow-hidden" style="height: 240px;">
                        <img src="assets/images/teacher.jpg" alt="Teaching role" class="w-100 h-100 object-fit-cover transition-transform group-hover-scale">
                        <div class="position-absolute bottom-0 start-0 w-100 p-3 bg-gradient-dark text-white">
                            <span class="badge bg-primary">Education</span>
                        </div>
                    </div>
                    <div class="card-body p-4">
                        <h4 class="fw-bold mb-3 text-dark">Teacher / Tutor</h4>
                        <p class="text-secondary mb-3">
                            Deliver after-school lessons, remedial classes, and literacy programs for children.
                        </p>
                        <div class="d-flex align-items-center text-muted small">
                            <i class="fa-regular fa-clock me-2"></i> 2-4 hours/week
                        </div>
                    </div>
                </div>
            </div>

            <!-- Health & Hygiene Volunteer -->
            <div class="col-lg-4 col-md-6 animate-fade-up delay-100">
                <div class="card border-0 shadow-sm rounded-4 overflow-hidden h-100 hover-lift group">
                    <div class="position-relative overflow-hidden" style="height: 240px;">
                        <img src="assets/images/dis.jpg" alt="Health role" class="w-100 h-100 object-fit-cover transition-transform group-hover-scale">
                        <div class="position-absolute bottom-0 start-0 w-100 p-3 bg-gradient-dark text-white">
                            <span class="badge bg-danger">Healthcare</span>
                        </div>
                    </div>
                    <div class="card-body p-4">
                        <h4 class="fw-bold mb-3 text-dark">Health Volunteer</h4>
                        <p class="text-secondary mb-3">
                            Support health camps, run awareness sessions and hygiene trainings.
                        </p>
                        <div class="d-flex align-items-center text-muted small">
                            <i class="fa-regular fa-clock me-2"></i> Event-based / ad-hoc
                        </div>
                    </div>
                </div>
            </div>

            <!-- Women Empowerment Coach -->
            <div class="col-lg-4 col-md-6 animate-fade-up delay-200">
                <div class="card border-0 shadow-sm rounded-4 overflow-hidden h-100 hover-lift group">
                    <div class="position-relative overflow-hidden" style="height: 240px;">
                        <img src="assets/images/we1.jpg" alt="Women empowerment role" class="w-100 h-100 object-fit-cover transition-transform group-hover-scale">
                        <div class="position-absolute bottom-0 start-0 w-100 p-3 bg-gradient-dark text-white">
                            <span class="badge bg-warning text-dark">Empowerment</span>
                        </div>
                    </div>
                    <div class="card-body p-4">
                        <h4 class="fw-bold mb-3 text-dark">Empowerment Coach</h4>
                        <p class="text-secondary mb-3">
                            Lead skill training, mentorship, and entrepreneurship workshops for women.
                        </p>
                        <div class="d-flex align-items-center text-muted small">
                            <i class="fa-regular fa-clock me-2"></i> 4-6 weeks program
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="text-center mt-5">
            <a href="#form" class="btn btn-outline-success rounded-pill px-5 fw-bold">Apply for a Role</a>
        </div>
    </div>
</section>

<!-- Why Become a Member Section -->
<section class="py-5 bg-light position-relative overflow-hidden">
    <div class="container py-4">
        <div class="row g-5 align-items-center">
            <!-- Left: Why Member -->
            <div class="col-lg-6 animate-fade-up">
                <h6 class="text-success fw-bold text-uppercase ls-md mb-2">Benefits</h6>
                <h2 class="fw-bold display-6 mb-4">Why Become a Member?</h2>
                <div class="d-flex flex-column gap-4">
                    <div class="d-flex">
                        <div class="flex-shrink-0">
                            <div class="icon-square bg-success text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
                                <i class="fa-solid fa-hand-holding-heart"></i>
                            </div>
                        </div>
                        <div class="ms-3">
                            <h5 class="fw-bold mb-1">Make an Impact</h5>
                            <p class="text-secondary mb-0">Make a measurable, positive difference in local communities.</p>
                        </div>
                    </div>
                    <div class="d-flex">
                        <div class="flex-shrink-0">
                            <div class="icon-square bg-success text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
                                <i class="fa-solid fa-briefcase"></i>
                            </div>
                        </div>
                        <div class="ms-3">
                            <h5 class="fw-bold mb-1">Gain Experience</h5>
                            <p class="text-secondary mb-0">Gain practical experience and skills for your CV.</p>
                        </div>
                    </div>
                    <div class="d-flex">
                        <div class="flex-shrink-0">
                            <div class="icon-square bg-success text-white rounded-circle d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
                                <i class="fa-solid fa-users"></i>
                            </div>
                        </div>
                        <div class="ms-3">
                            <h5 class="fw-bold mb-1">Community</h5>
                            <p class="text-secondary mb-0">Join a supportive team and meet like-minded people.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right: Support & Safety -->
            <div class="col-lg-6 animate-fade-up delay-100">
                <div class="bg-white p-5 rounded-4 shadow-lg border-start border-5 border-success position-relative">
                    <div class="position-absolute top-0 end-0 p-3 opacity-10">
                        <i class="fa-solid fa-shield-halved fs-1 text-success"></i>
                    </div>
                    <h4 class="fw-bold text-dark mb-3">Support & Safety</h4>
                    <p class="text-secondary mb-4" style="line-height: 1.8;">
                        Your safety is our priority. All members received proper orientation, safety briefings, and are supervised during field activities. We strictly follow child-protection policies to ensure a safe environment for everyone.
                    </p>
                    <div class="d-flex align-items-center gap-3">
                        <span class="badge bg-success bg-opacity-10 text-success rounded-pill px-3 py-2">Safe Environment</span>
                        <span class="badge bg-success bg-opacity-10 text-success rounded-pill px-3 py-2">Training Provided</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Member Stories Section -->
<section class="py-5 bg-success bg-opacity-5">
    <div class="container py-4">
        <div class="text-center mb-5">
            <h2 class="fw-bold mb-2">Member Stories</h2>
            <p class="text-secondary">Hear from those who are making a difference.</p>
        </div>
        
        <div id="memberStoriesCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
            <div class="carousel-inner">
                <!-- Story 1 -->
                <div class="carousel-item active">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="bg-white p-5 rounded-4 shadow-sm text-center position-relative">
                                <i class="fa-solid fa-quote-left fs-1 text-success opacity-25 position-absolute top-0 start-0 m-4"></i>
                                <div class="mb-4 position-relative z-1">
                                    <img src="assets/images/anita.jpg" alt="Amit Patel" class="rounded-circle border border-4 border-white shadow" style="width: 100px; height: 100px; object-fit: cover;">
                                </div>
                                <h5 class="fw-bold text-dark mb-1">Amit Patel</h5>
                                <p class="text-success small fw-bold text-uppercase mb-3">Health Volunteer</p>
                                <p class="text-secondary lead fst-italic mb-0">
                                    "Helping run health camps was rewarding — the team is very organized and supportive. Seeing the smiles on patients' faces makes it all worth it."
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Story 2 -->
                <div class="carousel-item">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="bg-white p-5 rounded-4 shadow-sm text-center position-relative">
                                <i class="fa-solid fa-quote-left fs-1 text-success opacity-25 position-absolute top-0 start-0 m-4"></i>
                                <div class="mb-4 position-relative z-1">
                                    <img src="assets/images/teacher.jpg" alt="Priya Sharma" class="rounded-circle border border-4 border-white shadow" style="width: 100px; height: 100px; object-fit: cover;">
                                </div>
                                <h5 class="fw-bold text-dark mb-1">Priya Sharma</h5>
                                <p class="text-success small fw-bold text-uppercase mb-3">Education Tutor</p>
                                <p class="text-secondary lead fst-italic mb-0">
                                    "Teaching children in rural areas has been the most fulfilling experience of my life. I've grown so much as a person and an educator!"
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Story 3 -->
                <div class="carousel-item">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="bg-white p-5 rounded-4 shadow-sm text-center position-relative">
                                <i class="fa-solid fa-quote-left fs-1 text-success opacity-25 position-absolute top-0 start-0 m-4"></i>
                                <div class="mb-4 position-relative z-1">
                                    <img src="assets/images/we1.jpg" alt="Rajesh Kumar" class="rounded-circle border border-4 border-white shadow" style="width: 100px; height: 100px; object-fit: cover;">
                                </div>
                                <h5 class="fw-bold text-dark mb-1">Rajesh Kumar</h5>
                                <p class="text-success small fw-bold text-uppercase mb-3">Disaster Relief</p>
                                <p class="text-secondary lead fst-italic mb-0">
                                    "Being part of disaster relief efforts showed me the power of community. Proud to be a member and serve when it matters most!"
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Carousel Controls -->
            <button class="carousel-control-prev" type="button" data-bs-target="#memberStoriesCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bg-success rounded-circle p-3 shadow" aria-hidden="true"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#memberStoriesCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon bg-success rounded-circle p-3 shadow" aria-hidden="true"></span>
            </button>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="py-5 bg-white">
    <div class="container py-4">
        <div class="text-center mb-5">
             <h2 class="fw-bold mb-2">Frequently Asked Questions</h2>
        </div>
        
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="accordion accordion-flush" id="faqAccordion">
                    <!-- Question 1 -->
                    <div class="accordion-item border-0 mb-3 shadow-sm rounded-3 overflow-hidden bg-light">
                        <h2 class="accordion-header" id="faqHeading1">
                            <button class="accordion-button collapsed fw-bold bg-light text-dark" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse1">
                                Who can volunteer?
                            </button>
                        </h2>
                        <div id="faqCollapse1" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body text-secondary border-top">
                                Anyone aged 16+ (under 18 with parental consent). We welcome students, professionals and retirees.
                            </div>
                        </div>
                    </div>

                    <!-- Question 2 -->
                    <div class="accordion-item border-0 mb-3 shadow-sm rounded-3 overflow-hidden bg-light">
                        <h2 class="accordion-header" id="faqHeading2">
                            <button class="accordion-button collapsed fw-bold bg-light text-dark" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse2">
                                Do I need experience?
                            </button>
                        </h2>
                        <div id="faqCollapse2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body text-secondary border-top">
                                No — we provide orientation and training. For specialist roles (medical, legal) relevant qualifications are required.
                            </div>
                        </div>
                    </div>

                    <!-- Question 3 -->
                    <div class="accordion-item border-0 mb-3 shadow-sm rounded-3 overflow-hidden bg-light">
                        <h2 class="accordion-header" id="faqHeading3">
                            <button class="accordion-button collapsed fw-bold bg-light text-dark" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse3">
                                Is volunteering paid?
                            </button>
                        </h2>
                        <div id="faqCollapse3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body text-secondary border-top">
                                Volunteering is unpaid, but reimbursements/stipends may be provided for some programs.
                            </div>
                        </div>
                    </div>

                    <!-- Question 4 -->
                    <div class="accordion-item border-0 mb-3 shadow-sm rounded-3 overflow-hidden bg-light">
                        <h2 class="accordion-header" id="faqHeading4">
                            <button class="accordion-button collapsed fw-bold bg-light text-dark" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse4">
                                How much time commitment is required?
                            </button>
                        </h2>
                        <div id="faqCollapse4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body text-secondary border-top">
                                It varies by role — from 2-4 hours/week for teaching to event-based for health camps. We offer flexible schedules.
                            </div>
                        </div>
                    </div>

                    <!-- Question 5 -->
                    <div class="accordion-item border-0 shadow-sm rounded-3 overflow-hidden bg-light">
                        <h2 class="accordion-header" id="faqHeading5">
                            <button class="accordion-button collapsed fw-bold bg-light text-dark" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse5">
                                Will I receive a certificate?
                            </button>
                        </h2>
                        <div id="faqCollapse5" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body text-secondary border-top">
                                Yes! All members receive certificates of appreciation after completing their commitment period.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Registration Form Section -->
<section class="py-5" id="form" style="background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);">
    <div class="container py-4">
        <div class="row g-5">
            <!-- Left: Form -->
            <div class="col-lg-8">
                <div class="bg-white p-5 rounded-4 shadow-lg border-top border-5 border-success position-relative overflow-hidden">
                    <div class="position-absolute top-0 end-0 p-3 opacity-10">
                        <i class="fa-solid fa-pencil fs-1 text-success"></i>
                    </div>
                    <h3 class="fw-bold text-success mb-4">Member Registration Form</h3>
                    <p class="text-secondary mb-4">Fill out the form below to join our team. We'll get back to you within 48 hours.</p>
                    
                    <form action="submit_member.php" method="POST">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label fw-bold small text-uppercase">Full Name *</label>
                                <input type="text" name="name" class="form-control bg-light border-0 py-3" required style="border-radius: 10px;">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label fw-bold small text-uppercase">Email Address *</label>
                                <input type="email" name="email" class="form-control bg-light border-0 py-3" required style="border-radius: 10px;">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label fw-bold small text-uppercase">Phone Number *</label>
                                <input type="tel" name="phone" class="form-control bg-light border-0 py-3" required style="border-radius: 10px;">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label fw-bold small text-uppercase">Age</label>
                                <input type="number" name="age" class="form-control bg-light border-0 py-3" min="18" max="100" style="border-radius: 10px;">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label fw-bold small text-uppercase">City *</label>
                                <input type="text" name="city" class="form-control bg-light border-0 py-3" required style="border-radius: 10px;">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label fw-bold small text-uppercase">State *</label>
                                <input type="text" name="state" class="form-control bg-light border-0 py-3" required style="border-radius: 10px;">
                            </div>
                            <div class="col-12">
                                <label class="form-label fw-bold small text-uppercase">Area of Interest *</label>
                                <select name="interest" class="form-select bg-light border-0 py-3" required style="border-radius: 10px;">
                                    <option value="">Select an area</option>
                                    <option value="Education">Education</option>
                                    <option value="Health">Health & Wellness</option>
                                    <option value="Disaster Relief">Disaster Relief</option>
                                    <option value="Women Empowerment">Women Empowerment</option>
                                    <option value="Community Development">Community Development</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <label class="form-label fw-bold small text-uppercase">Availability *</label>
                                <select name="availability" class="form-select bg-light border-0 py-3" required style="border-radius: 10px;">
                                    <option value="">Select your availability</option>
                                    <option value="Part-time">Part-time (Weekends)</option>
                                    <option value="Weekend">Weekend Only</option>
                                    <option value="Long-term">Long-term Commitment</option>
                                    <option value="Event-based">Event-based</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <label class="form-label fw-bold small text-uppercase">Why do you want to become a member?</label>
                                <textarea name="message" class="form-control bg-light border-0 py-3" rows="4" placeholder="Tell us about your motivation and skills..." style="border-radius: 10px; resize: none;"></textarea>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-success w-100 py-3 fw-bold shadow-sm rounded-3 hover-lift">Submit Application <i class="fa-solid fa-arrow-right ms-2"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Right: Info -->
            <div class="col-lg-4">
                <div class="sticky-top" style="top: 100px;">
                    <div class="bg-white p-4 rounded-4 shadow-sm mb-4 border border-light">
                        <h5 class="fw-bold mb-3 border-bottom pb-2">Why Join Us?</h5>
                        <ul class="list-unstyled text-secondary d-flex flex-column gap-3">
                            <li class="d-flex align-items-center">
                                <i class="fa-solid fa-circle-check text-success me-3"></i> Make a real difference
                            </li>
                            <li class="d-flex align-items-center">
                                <i class="fa-solid fa-circle-check text-success me-3"></i> Develop new skills
                            </li>
                            <li class="d-flex align-items-center">
                                <i class="fa-solid fa-circle-check text-success me-3"></i> Meet like-minded people
                            </li>
                            <li class="d-flex align-items-center">
                                <i class="fa-solid fa-circle-check text-success me-3"></i> Flexible options
                            </li>
                            <li class="d-flex align-items-center">
                                <i class="fa-solid fa-circle-check text-success me-3"></i> Get Certified
                            </li>
                        </ul>
                    </div>

                    <div class="bg-success text-white p-4 rounded-4 shadow-lg position-relative overflow-hidden" id="roles">
                        <div class="position-absolute bottom-0 end-0 opacity-10 p-2">
                             <i class="fa-solid fa-users fs-1"></i>
                        </div>
                        <h4 class="fw-bold mb-3 position-relative z-1">Available Roles</h4>
                        <p class="small mb-3 opacity-90 position-relative z-1">We offer various roles based on your skills and interests:</p>
                        <ul class="small mb-0 position-relative z-1 list-unstyled opacity-90">
                            <li class="mb-2">• Teaching & Mentoring</li>
                            <li class="mb-2">• Workshop Facilitation</li>
                            <li class="mb-2">• Event Coordination</li>
                            <li class="mb-2">• Community Outreach</li>
                            <li class="mb-2">• Administrative Support</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<script>
// Counter Animation
document.addEventListener('DOMContentLoaded', function() {
    const counters = document.querySelectorAll('.counter');
    const speed = 200; // Animation speed

    const animateCounter = (counter) => {
        const target = +counter.getAttribute('data-target');
        const increment = target / speed;

        const updateCount = () => {
            const count = +counter.innerText;
            if (count < target) {
                counter.innerText = Math.ceil(count + increment);
                setTimeout(updateCount, 10);
            } else {
                counter.innerText = target + '+';
            }
        };

        updateCount();
    };

    // Intersection Observer for scroll animation
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                animateCounter(entry.target);
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.5 });

    counters.forEach(counter => observer.observe(counter));
});
</script>

<?php include 'includes/footer.php'; ?>
