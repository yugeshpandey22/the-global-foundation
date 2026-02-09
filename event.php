<?php include 'includes/header.php'; ?>
<?php include 'includes/navbar.php'; ?>

<!-- Hero Section -->
<section class="position-relative d-flex align-items-center justify-content-center" 
         style="min-height: 400px; background: url('assets/images/slide1.jpg') center/cover no-repeat fixed;">
    <div class="position-absolute top-0 start-0 w-100 h-100" style="background: rgba(46, 125, 50, 0.85); mix-blend-mode: multiply;"></div>
    <div class="position-absolute top-0 start-0 w-100 h-100" style="background: linear-gradient(to bottom, transparent 0%, rgba(0,0,0,0.7) 100%);"></div>
    
    <div class="container position-relative z-1 text-center text-white animate-fade-up">
        <span class="badge bg-white text-success px-3 py-2 rounded-pill mb-3 text-uppercase fw-bold tracking-wider opacity-90">
            Stay Updated
        </span>
        <h1 class="display-3 fw-bold mb-3">News & Events</h1>
        <p class="lead fw-light opacity-90 mx-auto" style="max-width: 800px;">
            Explore our latest activities, upcoming programs, and stories of change from the ground.
        </p>
    </div>
</section>

<!-- Main Content -->
<section class="py-5 bg-light">
    <div class="container py-4">
        
        <!-- Featured Event -->
        <div class="card border-0 shadow-lg rounded-5 overflow-hidden mb-5 animate-fade-up position-relative">
            <div class="row g-0 align-items-center">
                <div class="col-lg-7 p-5">
                    <span class="badge bg-warning text-dark mb-3 px-3 py-2 rounded-pill fw-bold text-uppercase">Featured Event</span>
                    <h2 class="fw-bold text-dark mb-3">FLO Trade Fair & Bazaar</h2>
                    <div class="d-flex align-items-center gap-4 text-secondary mb-4">
                        <div class="d-flex align-items-center"><i class="fa-regular fa-calendar me-2 text-success"></i> 7 & 8 Oct, 2025</div>
                        <div class="d-flex align-items-center"><i class="fa-solid fa-location-dot me-2 text-success"></i> Hotel Madhuban, Dehradun</div>
                    </div>
                    <p class="text-secondary mb-4 lead" style="line-height: 1.7;">
                        The Global Rise Foundation exhibited Fruit Fiesta, Artisanal Handicrafts, and Exotic Teas at the FLO Trade Fair & Bazaar, connecting local artisans with broader markets.
                    </p>
                    <div class="d-flex gap-3">
                         <button class="btn btn-success px-4 py-2 rounded-pill hover-lift fw-bold" data-bs-toggle="modal" data-bs-target="#eventModal">
                            View Details
                        </button>
                        <a href="contact.php" class="btn btn-outline-success px-4 py-2 rounded-pill hover-lift fw-bold">
                            Participate
                        </a>
                    </div>
                </div>
                <div class="col-lg-5 h-100">
                    <img src="assets/images/flo_trade_fair.jpg" class="img-fluid w-100 h-100 object-fit-cover" style="min-height: 400px;" alt="FLO Trade Fair">
                </div>
            </div>
            <!-- Decorative Circle -->
            <div class="position-absolute top-0 end-0 bg-success opacity-10 rounded-circle" style="width: 200px; height: 200px; margin-top: -100px; margin-right: -100px;"></div>
        </div>

        <div class="row g-5">
            <!-- Left Column: Event List -->
            <div class="col-lg-8">
                <div class="d-flex align-items-center justify-content-between mb-4 animate-fade-up">
                    <h3 class="fw-bold text-dark mb-0">Recent Updates</h3>
                    <div class="input-group" style="max-width: 300px;">
                        <span class="input-group-text bg-white border-end-0 rounded-start-pill ps-3"><i class="fa-solid fa-search text-muted"></i></span>
                        <input type="text" class="form-control border-start-0 rounded-end-pill py-2" placeholder="Search events...">
                    </div>
                </div>

                <!-- Event Item 1 -->
                <div class="card border-0 shadow-sm rounded-4 mb-4 overflow-hidden hover-lift animate-fade-up delay-100">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="assets/images/woman.jpg" class="w-100 h-100 object-fit-cover" alt="Event Image" style="min-height: 200px;">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body p-4 d-flex flex-column h-100">
                                <div class="mb-2">
                                     <span class="badge bg-light text-success fw-bold border border-success border-opacity-25">Empowerment</span>
                                </div>
                                <h4 class="fw-bold text-dark mb-2">Women Skill Training Graduation</h4>
                                <div class="text-muted small mb-3">
                                    <i class="fa-regular fa-calendar me-2"></i> 05 Nov, 2025 &nbsp;|&nbsp; <i class="fa-regular fa-clock me-2"></i> 11:00 AM
                                </div>
                                <p class="text-secondary small mb-3 flex-grow-1">
                                    Graduation ceremony for 30 women who completed our 3-month intensive tailoring and embroidery training program.
                                </p>
                                <a href="#" class="text-success fw-bold text-decoration-none small stretched-link" data-bs-toggle="modal" data-bs-target="#eventModal1">
                                    Read Full Report <i class="fa-solid fa-arrow-right ms-1"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Event Item 2 -->
                <div class="card border-0 shadow-sm rounded-4 mb-4 overflow-hidden hover-lift animate-fade-up delay-200">
                    <div class="row g-0">
                        <div class="col-md-4">
                             <img src="assets/images/helth.jpg" class="w-100 h-100 object-fit-cover" alt="Event Image" style="min-height: 200px;">
                        </div>
                         <div class="col-md-8">
                            <div class="card-body p-4 d-flex flex-column h-100">
                                <div class="mb-2">
                                     <span class="badge bg-light text-danger fw-bold border border-danger border-opacity-25">Health</span>
                                </div>
                                <h4 class="fw-bold text-dark mb-2">Free Health Camp — Village X</h4>
                                <div class="text-muted small mb-3">
                                    <i class="fa-regular fa-calendar me-2"></i> 12 Oct, 2025 &nbsp;|&nbsp; <i class="fa-regular fa-clock me-2"></i> 09:00 AM
                                </div>
                                <p class="text-secondary small mb-3 flex-grow-1">
                                   Organized a comprehensive health camp providing free checkups, medicines, and hygiene kits to over 150 villagers.
                                </p>
                                <a href="#" class="text-success fw-bold text-decoration-none small stretched-link" data-bs-toggle="modal" data-bs-target="#eventModal2">
                                    Read Full Report <i class="fa-solid fa-arrow-right ms-1"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                
                 <div class="alert alert-warning border-0 shadow-sm rounded-4 d-flex align-items-center p-3 animate-fade-up">
                    <i class="fa-solid fa-calendar-xmark fs-4 me-3 text-warning"></i>
                    <div>
                        <strong>No more upcoming events.</strong><br>
                        <span class="small">Check back later or subscribe to our newsletter for updates.</span>
                    </div>
                </div>

            </div>

            <!-- Right Column: Sidebar -->
            <div class="col-lg-4 animate-fade-up delay-300">
                <!-- Quick Links -->
                <div class="bg-white p-4 rounded-4 shadow-sm border border-light mb-4">
                    <h5 class="fw-bold text-dark mb-3">Quick Links</h5>
                    <ul class="list-unstyled mb-0 d-flex flex-column gap-2">
                        <li><a href="gallery.php" class="text-decoration-none text-secondary hover-success"><i class="fa-solid fa-angle-right me-2 text-success"></i>Photo Gallery</a></li>
                        <li><a href="member.php" class="text-decoration-none text-secondary hover-success"><i class="fa-solid fa-angle-right me-2 text-success"></i>Become a Member</a></li>
                        <li><a href="donate.php" class="text-decoration-none text-secondary hover-success"><i class="fa-solid fa-angle-right me-2 text-success"></i>Donate Now</a></li>
                    </ul>
                </div>

                <!-- Subscribe -->
                <div class="bg-success text-white p-4 rounded-4 shadow-lg mb-4 position-relative overflow-hidden">
                    <div class="position-absolute top-0 end-0 bg-white opacity-10 rounded-circle" style="width: 100px; height: 100px; margin-top: -30px; margin-right: -30px;"></div>
                    <h5 class="fw-bold mb-2">Subscribe for Updates</h5>
                    <p class="small text-white-50 mb-3">Stay informed about our latest initiatives and impact stories.</p>
                    <form>
                        <div class="mb-2">
                            <input type="email" class="form-control border-0 rounded-3 shadow-sm" placeholder="Your Email Address">
                        </div>
                        <button class="btn btn-warning w-100 fw-bold rounded-3 shadow-sm text-dark">Subscribe</button>
                    </form>
                </div>

                <!-- Contact Mini -->
                <div class="bg-white p-4 rounded-4 shadow-sm border border-light">
                    <h5 class="fw-bold text-dark mb-3">Contact Us</h5>
                    <div class="d-flex align-items-center mb-3">
                        <div class="bg-light p-2 rounded-circle text-success me-3"><i class="fa-solid fa-phone"></i></div>
                        <div>
                            <span class="d-block text-secondary small">Call Us</span>
                            <span class="fw-bold text-dark">+91 7292007777</span>
                        </div>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="bg-light p-2 rounded-circle text-success me-3"><i class="fa-solid fa-envelope"></i></div>
                        <div>
                             <span class="d-block text-secondary small">Email Us</span>
                            <span class="fw-bold text-dark small">theglobalrisefoundation@gmail.com</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Modals -->

<!-- Modal: Featured Event -->
<div class="modal fade" id="eventModal" tabindex="-1">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content rounded-4 border-0 shadow-lg">
      <div class="modal-header border-0 pb-0">
        <h5 class="modal-title fw-bold text-success">FLO Trade Fair & Bazaar</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body p-4">
        <img src="assets/images/flo_trade_fair.jpg" class="img-fluid rounded-3 mb-4 w-100 object-fit-cover" style="height: 300px;">
        <h5 class="fw-bold text-dark mb-3">Event Overview</h5>
        <p class="text-secondary" style="line-height: 1.8;">
          The Global Rise Foundation participated in the prestigious FLO Trade Fair & Bazaar held at Hotel Madhuban. This event served as a platform to showcase the 'Fruit Fiesta' collection, handcrafted artisanal products, and our exclusive range of exotic teas produced by women self-help groups.
        </p>
        <p class="text-secondary" style="line-height: 1.8;">
           Participation in such events not only boosts the confidence of our rural women entrepreneurs but also opens up new avenues for market linkages and sales, ensuring sustainable livelihoods.
        </p>
        <ul class="list-unstyled bg-light p-3 rounded-3 mt-3">
             <li class="mb-2"><strong class="text-dark">Date:</strong> 7 & 8 October 2025</li>
             <li class="mb-2"><strong class="text-dark">Venue:</strong> Hotel Madhuban, Dehradun</li>
        </ul>
      </div>
    </div>
  </div>
</div>

<!-- Modal: Skill Training -->
<div class="modal fade" id="eventModal1" tabindex="-1">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content rounded-4 border-0 shadow-lg">
      <div class="modal-header border-0 pb-0">
        <h5 class="modal-title fw-bold text-success">Women Skill Training Graduation</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body p-4">
        <img src="assets/images/woman.jpg" class="img-fluid rounded-3 mb-4 w-100 object-fit-cover" style="height: 300px;">
        <p class="text-secondary" style="line-height: 1.8;">
           We celebrated the success of 30 determined women who completed our vocational training program. Certificates were distributed, and start-up kits were handed out to help them kickstart their own micro-enterprises.
        </p>
         <ul class="list-unstyled bg-light p-3 rounded-3 mt-3">
             <li class="mb-2"><strong class="text-dark">Date:</strong> 05 Nov, 2025</li>
        </ul>
      </div>
    </div>
  </div>
</div>

<!-- Modal: Health Camp -->
<div class="modal fade" id="eventModal2" tabindex="-1">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content rounded-4 border-0 shadow-lg">
      <div class="modal-header border-0 pb-0">
        <h5 class="modal-title fw-bold text-success">Free Health Camp</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body p-4">
        <img src="assets/images/helth.jpg" class="img-fluid rounded-3 mb-4 w-100 object-fit-cover" style="height: 300px;">
        <p class="text-secondary" style="line-height: 1.8;">
          Our medical team and volunteers reached out to the remote Village X to conduct a free health camp. Services included general checkups, distribution of vitamins and medicines, and awareness sessions on hygiene and sanitation.
        </p>
      </div>
    </div>
  </div>
</div>

<?php include 'includes/footer.php'; ?>
