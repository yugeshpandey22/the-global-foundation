<?php include 'includes/header.php'; ?>
<?php include 'includes/navbar.php'; ?>

<!-- Hero Section (Premium Full-Screen Carousel) -->
<div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="6000">
    <div class="carousel-indicators mb-5">
        <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active" aria-current="true"></button>
        <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1"></button>
        <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2"></button>
    </div>
    <div class="carousel-inner">
        <!-- Slide 1 -->
        <div class="carousel-item active vh-100 position-relative">
            <div class="position-absolute top-0 start-0 w-100 h-100" 
                 style="background: url('assets/images/slide3.jpg') center/cover no-repeat; animation: kenBurns 20s infinite alternate;">
            </div>
            <div class="position-absolute top-0 start-0 w-100 h-100" style="background: linear-gradient(rgba(0,0,0,0.3), rgba(0,0,0,0.7));"></div>
            <div class="container h-100 d-flex align-items-center position-relative z-1">
                <div class="text-white ps-md-5" style="max-width: 800px;">
                    <span class="badge bg-success bg-opacity-75 text-white px-3 py-2 rounded-pill mb-3 text-uppercase fw-bold tracking-wider animate-fade-down">
                        Building Futures
                    </span>
                    <h1 class="display-2 fw-bold mb-4 animate-fade-up">Education for <br> Rural Children</h1>
                    <p class="lead mb-5 opacity-90 animate-fade-up delay-100" style="font-weight: 300;">
                        After-school learning centers, scholarships, and school supplies to ensure every child has a bright future.
                    </p>
                    <div class="d-flex gap-3 animate-fade-up delay-200">

                        <a href="donate.php" class="btn btn-outline-light fw-bold px-5 py-3 rounded-pill hover-lift">Contribute</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Slide 2 -->
        <div class="carousel-item vh-100 position-relative">
            <div class="position-absolute top-0 start-0 w-100 h-100" 
                 style="background: url('assets/images/slide1.jpg') center/cover no-repeat; animation: kenBurns 20s infinite alternate;">
            </div>
            <div class="position-absolute top-0 start-0 w-100 h-100" style="background: linear-gradient(rgba(0,0,0,0.3), rgba(0,0,0,0.7));"></div>
            <div class="container h-100 d-flex align-items-center position-relative z-1">
                <div class="text-white ps-md-5" style="max-width: 800px;">
                    <span class="badge bg-warning text-dark px-3 py-2 rounded-pill mb-3 text-uppercase fw-bold tracking-wider animate-fade-down">
                        Saving Lives
                    </span>
                    <h1 class="display-2 fw-bold mb-4 animate-fade-up">Health Camps <br> for All</h1>
                    <p class="lead mb-5 opacity-90 animate-fade-up delay-100" style="font-weight: 300;">
                        Providing essential medical care, checkups, and medicines to remote villages where access is scarce.
                    </p>
                    <div class="d-flex gap-3 animate-fade-up delay-200">

                        <a href="contact.php" class="btn btn-outline-light fw-bold px-5 py-3 rounded-pill hover-lift">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Slide 3 -->
        <div class="carousel-item vh-100 position-relative">
            <div class="position-absolute top-0 start-0 w-100 h-100" 
                 style="background: url('assets/images/slide2.jpg') center/cover no-repeat; animation: kenBurns 20s infinite alternate;">
            </div>
            <div class="position-absolute top-0 start-0 w-100 h-100" style="background: linear-gradient(rgba(0,0,0,0.3), rgba(0,0,0,0.7));"></div>
            <div class="container h-100 d-flex align-items-center position-relative z-1">
                 <div class="text-white ps-md-5" style="max-width: 800px;">
                    <span class="badge bg-danger px-3 py-2 rounded-pill mb-3 text-uppercase fw-bold tracking-wider animate-fade-down">
                        Empowerment
                    </span>
                    <h1 class="display-2 fw-bold mb-4 animate-fade-up">Empowering <br> Women</h1>
                    <p class="lead mb-5 opacity-90 animate-fade-up delay-100" style="font-weight: 300;">
                        Skill development programs and livelihood training to create independent and self-sufficient futures.
                    </p>
                    <div class="d-flex gap-3 animate-fade-up delay-200">

                        <a href="member.php" class="btn btn-outline-light fw-bold px-5 py-3 rounded-pill hover-lift">Join Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon p-4 bg-white bg-opacity-10 rounded-circle backdrop-blur" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon p-4 bg-white bg-opacity-10 rounded-circle backdrop-blur" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<!-- About Section -->
<section class="py-5 bg-white position-relative overflow-hidden">
    <div class="container py-5 position-relative z-1">
        <div class="row g-5 align-items-center">
            <!-- Left Side: Content -->
            <div class="col-lg-6 animate-fade-up">
                 <h6 class="text-success fw-bold text-uppercase ls-md mb-3">About Us</h6>
                <h2 class="display-5 fw-bold mb-4 text-dark">Who We Are</h2>
                <p class="text-secondary lead mb-4" style="line-height: 1.8;">
                    The Global Rise Foundation is a registered Section 8 company working since <strong>2026</strong> towards education, health, and women empowerment. We work with communities to create sustainable change through grassroots programs and capacity building.
                </p>
                
                <div class="row g-4 mt-2">
                    <div class="col-sm-6">
                        <div class="d-flex align-items-center p-3 rounded-4 bg-light border border-light">
                            <div class="icon-square bg-success text-white rounded-circle p-3 me-3">
                                <i class="fa-solid fa-calendar-check fs-4"></i>
                            </div>
                            <div>
                                <h5 class="fw-bold mb-0">Since 2026</h5>
                                <span class="text-muted small text-uppercase">Registered</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="d-flex align-items-center p-3 rounded-4 bg-light border border-light">
                            <div class="icon-square bg-success text-white rounded-circle p-3 me-3">
                                <i class="fa-solid fa-phone fs-4"></i>
                            </div>
                            <div>
                                <h5 class="fw-bold mb-0">+91 7292007777</h5>
                                <span class="text-muted small text-uppercase">Support Line</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Side: Join Cause Card -->
            <div class="col-lg-6 animate-fade-up delay-100">
                <div class="bg-dark text-white p-5 rounded-5 shadow-lg position-relative overflow-hidden">
                    <div class="position-absolute top-0 end-0 p-5 opacity-10">
                        <i class="fa-solid fa-hand-holding-heart fs-1" style="font-size: 10rem;"></i>
                    </div>
                    <h3 class="fw-bold mb-3 display-6">Join Our Cause</h3>
                    <p class="text-white-50 mb-4 lead">Volunteer, contribute or partner with us to amplify impact. Small actions add up to big change.</p>
                    
                    <div class="mb-4 p-3 bg-white bg-opacity-10 rounded-3 backdrop-blur">
                        <label class="d-block text-white-50 small fw-bold mb-1 text-uppercase">Email Us</label>
                        <a href="mailto:theglobalrisefoundation@gmail.com" class="text-white fw-bold fs-5 text-decoration-none">theglobalrisefoundation@gmail.com</a>
                    </div>

                    <a href="donate.php" class="btn btn-success fw-bold py-3 px-4 rounded-pill w-100 shadow hover-lift">Contribute</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Stats Section -->
<div class="bg-success py-5 text-white position-relative overflow-hidden">
    <div class="position-absolute top-0 start-0 w-100 h-100 bg-pattern opacity-10" style="background-image: radial-gradient(circle, #ffffff 1px, transparent 1px); background-size: 20px 20px;"></div>
    <div class="container position-relative z-1 py-4">
         <div class="row g-4 text-center divide-x-lg-white-50">
            <div class="col-lg-3 col-6 animate-fade-up">
                <h2 class="display-4 fw-bold mb-0 counter" data-target="1200">0</h2>
                <p class="text-white-50 small text-uppercase fw-bold tracking-wider mt-2">Children Educated</p>
            </div>
            <div class="col-lg-3 col-6 animate-fade-up delay-100">
                <h2 class="display-4 fw-bold mb-0 counter" data-target="450">0</h2>
                <p class="text-white-50 small text-uppercase fw-bold tracking-wider mt-2">Women Trained</p>
            </div>
            <div class="col-lg-3 col-6 animate-fade-up delay-200">
                <h2 class="display-4 fw-bold mb-0 counter" data-target="75">0</h2>
                <p class="text-white-50 small text-uppercase fw-bold tracking-wider mt-2">Health Camps</p>
            </div>
            <div class="col-lg-3 col-6 animate-fade-up delay-300">
                <h2 class="display-4 fw-bold mb-0 counter" data-target="15">0</h2>
                <p class="text-white-50 small text-uppercase fw-bold tracking-wider mt-2">Years Service</p>
            </div>
        </div>
    </div>
</div>

<!-- Projects Section -->
<section class="py-5 bg-light">
    <div class="container py-5">
        <div class="d-flex justify-content-between align-items-end mb-5 animate-fade-up">
            <div>
                <h6 class="text-success fw-bold text-uppercase ls-md mb-2">Our Work</h6>
                <h2 class="fw-bold display-6 mb-0 text-dark">Our Projects</h2>
            </div>
            <a href="projects.php" class="btn btn-outline-success rounded-pill px-4 fw-bold d-none d-md-inline-block">View All Projects</a>
        </div>
        
        <div class="row g-4">
            <!-- Card 1 -->
            <div class="col-lg-4 col-md-6 animate-fade-up">
                <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden hover-lift group">
                    <div class="position-relative overflow-hidden" style="height: 300px;">
                        <img src="assets/images/program1.jpg" alt="Child Education" class="w-100 h-100 object-fit-cover transition-transform group-hover-scale">
                        <div class="position-absolute top-0 end-0 m-3">
                             <span class="badge bg-white text-dark shadow-sm rounded-pill px-3 py-2 fw-bold">Education</span>
                        </div>
                    </div>
                    <div class="card-body p-4 d-flex flex-column">
                        <h4 class="fw-bold mb-3 text-dark">Rural Children Education</h4>
                        <p class="text-secondary mb-4 small flex-grow-1" style="line-height: 1.7;">
                            After-school centers, scholarships & supplies for rural children to arrest dropout rates.
                        </p>
                        <a href="projects.php" class="text-success fw-bold text-decoration-none small stretched-link">Learn more <i class="fa-solid fa-arrow-right ms-1"></i></a>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col-lg-4 col-md-6 animate-fade-up delay-100">
                <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden hover-lift group">
                   <div class="position-relative overflow-hidden" style="height: 300px;">
                        <img src="assets/images/program2.jpg" alt="Women Empowerment" class="w-100 h-100 object-fit-cover transition-transform group-hover-scale">
                        <div class="position-absolute top-0 end-0 m-3">
                             <span class="badge bg-white text-dark shadow-sm rounded-pill px-3 py-2 fw-bold">Livelihood</span>
                        </div>
                    </div>
                    <div class="card-body p-4 d-flex flex-column">
                        <h4 class="fw-bold mb-3 text-dark">Women Empowerment</h4>
                        <p class="text-secondary mb-4 small flex-grow-1" style="line-height: 1.7;">
                            Skill training, self-help groups and micro-entrepreneurship for financial independence.
                        </p>
                        <a href="projects.php" class="text-success fw-bold text-decoration-none small stretched-link">Learn more <i class="fa-solid fa-arrow-right ms-1"></i></a>
                    </div>
                </div>
            </div>

             <!-- Card 3 -->
             <div class="col-lg-4 col-md-6 animate-fade-up delay-200">
                <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden hover-lift group">
                    <div class="position-relative overflow-hidden" style="height: 300px;">
                        <img src="assets/images/slide3.jpg" alt="Health & Hygiene" class="w-100 h-100 object-fit-cover transition-transform group-hover-scale">
                        <div class="position-absolute top-0 end-0 m-3">
                             <span class="badge bg-white text-dark shadow-sm rounded-pill px-3 py-2 fw-bold">Health</span>
                        </div>
                    </div>
                    <div class="card-body p-4 d-flex flex-column">
                        <h4 class="fw-bold mb-3 text-dark">Health & Hygiene</h4>
                        <p class="text-secondary mb-4 small flex-grow-1" style="line-height: 1.7;">
                            Regular health camps, sanitation drives and awareness workshops in remote areas.
                        </p>
                        <a href="projects.php" class="text-success fw-bold text-decoration-none small stretched-link">Learn more <i class="fa-solid fa-arrow-right ms-1"></i></a>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="text-center mt-4 d-md-none">
             <a href="projects.php" class="btn btn-outline-success rounded-pill px-4 fw-bold">View All Projects</a>
        </div>
    </div>
</section>

<!-- News & Events Section -->
<section class="py-5 bg-white">
    <div class="container py-5">
        <div class="d-flex justify-content-between align-items-end mb-5 animate-fade-up">
            <div>
                <h6 class="text-success fw-bold text-uppercase ls-md mb-2">Updates</h6>
                <h2 class="fw-bold display-6 mb-0 text-dark">News & Events</h2>
            </div>
            <a href="news.php" class="btn btn-link text-success text-decoration-none fw-bold small">See all news <i class="fa-solid fa-arrow-right ms-1"></i></a>
        </div>
        
        <div class="row g-4">
            <!-- News 1 -->
            <div class="col-lg-4 col-md-6 animate-fade-up">
                <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden hover-lift">
                    <div class="row g-0 h-100">
                        <div class="col-12 position-relative" style="height: 200px;">
                            <img src="assets/images/news1.jpg" class="w-100 h-100 object-fit-cover" alt="Health Camp">
                            <div class="position-absolute bottom-0 start-0 bg-white px-3 py-1 m-3 rounded-2 fw-bold small shadow-sm text-success">
                                26 Sep 2025
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="card-body p-4">
                                <h5 class="fw-bold text-dark mb-2">Health Camp at Village X</h5>
                                <p class="text-secondary small mb-0">Free checkups & medicines for 150 people were provided by our team of volunteer doctors.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- News 2 -->
            <div class="col-lg-4 col-md-6 animate-fade-up delay-100">
                <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden hover-lift">
                    <div class="row g-0 h-100">
                        <div class="col-12 position-relative" style="height: 200px;">
                            <img src="assets/images/news2.jpg" class="w-100 h-100 object-fit-cover" alt="Skill Training">
                             <div class="position-absolute bottom-0 start-0 bg-white px-3 py-1 m-3 rounded-2 fw-bold small shadow-sm text-success">
                                12 Aug 2025
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="card-body p-4">
                                <h5 class="fw-bold text-dark mb-2">Skill Training for Women</h5>
                                <p class="text-secondary small mb-0">30 women completed our 3-month tailoring and embroidery training program.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

             <!-- News 3 -->
             <div class="col-lg-4 col-md-6 animate-fade-up delay-200">
                 <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden hover-lift">
                    <div class="row g-0 h-100">
                        <div class="col-12 position-relative" style="height: 200px;">
                            <img src="assets/images/news3.jpg" class="w-100 h-100 object-fit-cover" alt="School Supplies">
                             <div class="position-absolute bottom-0 start-0 bg-white px-3 py-1 m-3 rounded-2 fw-bold small shadow-sm text-success">
                                05 Jul 2025
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="card-body p-4">
                                <h5 class="fw-bold text-dark mb-2">School Supplies Drive</h5>
                                <p class="text-secondary small mb-0">Distributed educational kits to 300 students in government schools.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<!-- Contact Section -->
<section class="py-5 bg-light">
    <div class="container py-5">
        <div class="row g-5">
            <!-- Left Side: Contact Info -->
            <div class="col-lg-5 animate-fade-up">
                <h6 class="text-success fw-bold text-uppercase ls-md mb-2">Get in Touch</h6>
                <h1 class="display-5 fw-bold text-dark mb-4">Contact Us</h1>
                <p class="lead text-secondary mb-5">For partnership, volunteering, or contributions, please reach out to us.</p>
                
                <div class="d-flex flex-column gap-4">
                    <!-- Phone -->
                    <div class="d-flex gap-3">
                        <div class="flex-shrink-0">
                            <div class="bg-white p-3 rounded-circle shadow-sm text-success d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                                <i class="fa-solid fa-phone"></i>
                            </div>
                        </div>
                        <div>
                            <h5 class="fw-bold text-dark mb-1">Phone</h5>
                            <p class="text-secondary mb-0">+91 7292007777</p>
                        </div>
                    </div>

                    <!-- Email -->
                    <div class="d-flex gap-3">
                        <div class="flex-shrink-0">
                            <div class="bg-white p-3 rounded-circle shadow-sm text-success d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                                <i class="fa-solid fa-envelope"></i>
                            </div>
                        </div>
                        <div>
                            <h5 class="fw-bold text-dark mb-1">Email</h5>
                            <a href="mailto:theglobalrisefoundation@gmail.com" class="text-decoration-none text-secondary hover-success">theglobalrisefoundation@gmail.com</a>
                        </div>
                    </div>

                    <!-- Address -->
                    <div class="d-flex gap-3">
                        <div class="flex-shrink-0">
                             <div class="bg-white p-3 rounded-circle shadow-sm text-success d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                                 <i class="fa-solid fa-location-dot"></i>
                            </div>
                        </div>
                        <div>
                             <h5 class="fw-bold text-dark mb-1">Regd. Address</h5>
                            <p class="text-secondary mb-0">The Global Rise Foundation<br>H NO 49, Gothra Mohabtabad, Pali<br>Faridabad - 121004, Haryana</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Side: Form -->
            <div class="col-lg-7 animate-fade-up delay-100">
                <div class="bg-white p-5 rounded-5 shadow-lg border border-light position-relative overflow-hidden">
                    <div class="position-absolute top-0 end-0 bg-success opacity-10 rounded-circle" style="width: 200px; height: 200px; margin-top: -100px; margin-right: -100px;"></div>
                    
                    <h3 class="fw-bold mb-4 text-dark position-relative z-1">Send a Message</h3>
                    
                    <form action="#" method="POST">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label text-secondary small fw-bold text-uppercase">Name</label>
                                <input type="text" class="form-control form-control-lg bg-light border-0 py-3 rounded-3" placeholder="Full Name">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label text-secondary small fw-bold text-uppercase">Email</label>
                                <input type="email" class="form-control form-control-lg bg-light border-0 py-3 rounded-3" placeholder="name@example.com">
                            </div>
                            <div class="col-12">
                                <label class="form-label text-secondary small fw-bold text-uppercase">Message</label>
                                <textarea class="form-control form-control-lg bg-light border-0 rounded-3" rows="4" placeholder="How can we help?" style="resize: none;"></textarea>
                            </div>
                            <div class="col-12 mt-4">
                                <button type="submit" class="btn btn-success w-100 py-3 fw-bold rounded-pill shadow hover-lift">
                                    Send Message <i class="fa-solid fa-paper-plane ms-2"></i>
                                </button>
                                <p class="text-center text-muted small mt-3 mb-0">
                                    We typically reply within <span class="fw-bold text-dark">24 hours</span>.
                                </p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
// Counter Animation
document.addEventListener('DOMContentLoaded', function() {
    const counters = document.querySelectorAll('.counter');
    const speed = 200;

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
