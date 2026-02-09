<?php include 'includes/header.php'; ?>
<?php include 'includes/navbar.php'; ?>

<!-- Contact Section -->
<section class="py-5" style="background: linear-gradient(135deg, #f8f9fa 0%, #e9f5ec 100%);">
    <div class="container py-5">
        <div class="row g-5 align-items-center">
            
            <!-- Left Side: Contact Info -->
            <div class="col-lg-5 animate-fade-up">
                <h1 class="display-4 fw-bold text-success mb-3">Get In Touch</h1>
                <p class="lead text-secondary mb-5">Reach out to us using the details below or send us a quick message via the form.</p>
                
                <div class="d-flex flex-column gap-4">
                    <!-- Phone -->
                    <div class="d-flex gap-3">
                        <div class="bg-white p-3 rounded-circle shadow-sm text-success d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                            <i class="fa-solid fa-phone fs-5"></i>
                        </div>
                        <div>
                            <h5 class="fw-bold text-dark mb-1">Phone:</h5>
                            <p class="text-secondary mb-0">+91 7292007777</p>
                        </div>
                    </div>

                    <!-- Email -->
                    <div class="d-flex gap-3">
                        <div class="bg-white p-3 rounded-circle shadow-sm text-success d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                            <i class="fa-solid fa-envelope fs-5"></i>
                        </div>
                        <div>
                            <h5 class="fw-bold text-dark mb-1">Email:</h5>
                            <a href="mailto:theglobalrisefoundation@gmail.com" class="text-decoration-none text-secondary hover-success">theglobalrisefoundation@gmail.com</a>
                        </div>
                    </div>

                    <!-- Address -->
                    <div class="d-flex gap-3">
                        <div class="bg-white p-3 rounded-circle shadow-sm text-success d-flex align-items-center justify-content-center" style="width: 50px; height: 50px;">
                            <i class="fa-solid fa-location-dot fs-5"></i>
                        </div>
                        <div>
                            <h5 class="fw-bold text-dark mb-1">Regd. Address:</h5>
                            <p class="text-secondary mb-0">The Global Rise Foundation</p>
                            <p class="text-secondary mb-0">H NO 49, Gothra Mohabtabad,</p>
                            <p class="text-secondary mb-0">Adarash Public School, Pali,</p>
                            <p class="text-secondary mb-0">Ballabgarh, Faridabad - 121004</p>
                            <p class="text-secondary mb-0">Haryana, India</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Side: Unique Form Card -->
            <div class="col-lg-7 animate-fade-up delay-100">
                <div class="bg-white p-4 p-md-5 rounded-4 shadow-lg border-0 position-relative overflow-hidden">
                    <!-- Decorative Circle -->
                    <div class="position-absolute top-0 end-0 bg-success opacity-10 rounded-circle" style="width: 150px; height: 150px; margin-top: -50px; margin-right: -50px;"></div>
                    
                    <h3 class="fw-bold mb-4 text-dark position-relative z-1">Send a message</h3>
                    
                    <form action="#" method="POST">
                        <div class="mb-4">
                            <label class="form-label text-secondary small fw-bold text-uppercase">Name</label>
                            <input type="text" class="form-control form-control-lg bg-light border-0" placeholder="Your Full Name" style="border-radius: 10px;">
                        </div>
                        
                        <div class="mb-4">
                            <label class="form-label text-secondary small fw-bold text-uppercase">Email</label>
                            <input type="email" class="form-control form-control-lg bg-light border-0" placeholder="name@example.com" style="border-radius: 10px;">
                        </div>
                        
                        <div class="mb-4">
                            <label class="form-label text-secondary small fw-bold text-uppercase">Message</label>
                            <textarea class="form-control form-control-lg bg-light border-0" rows="4" placeholder="How can we help you?" style="border-radius: 10px; resize: none;"></textarea>
                        </div>
                        
                        <button type="submit" class="btn btn-success w-100 py-3 fw-bold rounded-3 shadow hover-lift" style="background-color: #2E8B57; border: none; letter-spacing: 1px;">
                            Send Message <i class="fa-solid fa-paper-plane ms-2"></i>
                        </button>

                        <p class="text-center text-muted small mt-4 mb-0">
                            We will respond within <span class="fw-bold text-dark">3-5 business days</span>.
                        </p>
                    </form>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Optional: Map Section (Unique Touch) -->
<section class="bg-white border-top">
    <iframe 
        src="https://maps.google.com/maps?q=101/4%20Arya%20Nagar%20Block%202%20Rajpur%20Road%20Dehradun&t=&z=15&ie=UTF8&iwloc=&output=embed" 
        width="100%" 
        height="450" 
        style="border:0; display: block;" 
        allowfullscreen="" 
        loading="lazy">
    </iframe>
</section>

<?php include 'includes/footer.php'; ?>
