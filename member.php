<?php include 'includes/header.php'; ?>
<?php include 'includes/navbar.php'; ?>

<!-- Page Header -->
<div class="container-fluid bg-dark text-white py-5 position-relative overflow-hidden" style="min-height: 400px; display: flex; align-items: center; justify-content: center;">
    <!-- Background Image with Overlay -->
    <div class="position-absolute top-0 start-0 w-100 h-100" style="background: url('assets/images/swachh-bharat2.jpg') center/cover no-repeat; filter: brightness(0.4);"></div>
    
    <div class="container position-relative z-1 text-center py-5">
        <h1 class="display-3 fw-bold mb-3 animate-fade-up">Become a Member</h1>
        <p class="lead opacity-75 mb-0 animate-fade-up delay-100 fs-4">Join our family and make a lasting impact together.</p>
    </div>
</div>

<!-- Membership Form Section -->
<section class="py-5 bg-light">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card border-0 shadow-lg rounded-4 overflow-hidden animate-fade-up">
                    <div class="card-header bg-gradient-primary text-white p-4 text-center">
                        <h3 class="mb-0 fw-bold"><i class="fa-solid fa-id-card me-2"></i> Membership Application</h3>
                    </div>
                    <div class="card-body p-5">
                        <form action="submit_member.php" method="POST">
                            <div class="row g-4">
                                <div class="col-md-6">
                                    <label for="firstName" class="form-label fw-bold">First Name</label>
                                    <input type="text" class="form-control form-control-lg bg-light border-0" id="firstName" name="first_name" required placeholder="John">
                                </div>
                                <div class="col-md-6">
                                    <label for="lastName" class="form-label fw-bold">Last Name</label>
                                    <input type="text" class="form-control form-control-lg bg-light border-0" id="lastName" name="last_name" required placeholder="Doe">
                                </div>
                                
                                <div class="col-md-6">
                                    <label for="email" class="form-label fw-bold">Email Address</label>
                                    <input type="email" class="form-control form-control-lg bg-light border-0" id="email" name="email" required placeholder="name@example.com">
                                </div>
                                <div class="col-md-6">
                                    <label for="phone" class="form-label fw-bold">Phone Number</label>
                                    <input type="tel" class="form-control form-control-lg bg-light border-0" id="phone" name="phone" required placeholder="+91 98765 43210">
                                </div>

                                <div class="col-12">
                                    <label for="address" class="form-label fw-bold">Address</label>
                                    <textarea class="form-control form-control-lg bg-light border-0" id="address" name="address" rows="3" required placeholder="Your full address"></textarea>
                                </div>

                                <div class="col-md-6">
                                    <label for="occupation" class="form-label fw-bold">Occupation</label>
                                    <input type="text" class="form-control form-control-lg bg-light border-0" id="occupation" name="occupation" placeholder="Student, Engineer, etc.">
                                </div>
                                <div class="col-md-6">
                                    <label for="age" class="form-label fw-bold">Age</label>
                                    <input type="number" class="form-control form-control-lg bg-light border-0" id="age" name="age" required min="18" placeholder="18+">
                                </div>

                                <div class="col-12">
                                    <label class="form-label fw-bold">Why do you want to join?</label>
                                    <textarea class="form-control form-control-lg bg-light border-0" name="reason" rows="4" placeholder="Tell us about your motivation..."></textarea>
                                </div>

                                <div class="col-12 mt-4">
                                    <button type="submit" class="btn btn-primary btn-lg w-100 rounded-pill fw-bold shadow-md hover-scale py-3">
                                        Submit Application <i class="fa-solid fa-paper-plane ms-2"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                
                <div class="text-center mt-5 text-muted animate-fade-up delay-200">
                    <p>Already a member? <a href="login.php" class="text-decoration-none fw-bold">Login Here</a></p>
                    <small>By submitting this form, you appreciate our <a href="#" class="text-secondary">Terms & Conditions</a>.</small>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
