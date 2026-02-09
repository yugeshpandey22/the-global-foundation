<?php include 'includes/header.php'; ?>
<?php include 'includes/navbar.php'; ?>

<!-- Hero Section -->
<section class="position-relative py-5 bg-dark overflow-hidden" 
         style="background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('assets/images/village.jpg') center/cover no-repeat fixed;">
    <div class="position-absolute top-0 end-0 bg-success opacity-25 rounded-circle blur-3xl" style="width: 600px; height: 600px; margin-top: -300px; margin-right: -100px;"></div>
    
    <div class="container position-relative z-1 py-5 text-center text-white animate-fade-up">
        <span class="badge bg-white text-success px-3 py-2 rounded-pill mb-3 text-uppercase fw-bold tracking-wider">Support Us</span>
        <h1 class="display-3 fw-bold mb-3">Donate to The Global Rise Foundation</h1>
        <p class="lead fw-light opacity-90 mx-auto mb-0" style="max-width: 700px;">
            Your generosity funds education, health camps and women empowerment programs in rural communities.
            <br><span class="opacity-75 small mt-2 d-block">Donations are tax-deductible where applicable. Receipts provided on request.</span>
        </p>
    </div>
</section>

<!-- Donation Content -->
<section class="py-5 bg-light">
    <div class="container py-4">
        <div class="row g-5">
            <!-- Left Column: Donation Form -->
            <div class="col-lg-7 animate-fade-up">
                <div class="bg-white p-5 rounded-4 shadow-lg border-top border-4 border-success h-100">
                    <h3 class="fw-bold text-dark mb-4">Make a Contribution</h3>
                    
                    <form action="#" method="POST">
                        <!-- Amount Selection -->
                        <div class="mb-4">
                            <label class="form-label fw-bold text-secondary small text-uppercase">Choose an amount (INR)</label>
                            <div class="d-flex flex-wrap gap-2 mb-3">
                                <button type="button" class="btn btn-outline-success fw-bold px-4 py-2 rounded-pill donation-btn" onclick="setAmount(500)">₹500</button>
                                <button type="button" class="btn btn-outline-success fw-bold px-4 py-2 rounded-pill donation-btn" onclick="setAmount(1000)">₹1,000</button>
                                <button type="button" class="btn btn-outline-success fw-bold px-4 py-2 rounded-pill donation-btn" onclick="setAmount(2500)">₹2,500</button>
                                <button type="button" class="btn btn-outline-success fw-bold px-4 py-2 rounded-pill donation-btn" onclick="setAmount(5000)">₹5,000</button>
                            </div>
                            <div class="input-group">
                                <span class="input-group-text bg-light border-end-0 fw-bold text-success">₹</span>
                                <input type="number" id="customAmount" class="form-control form-control-lg bg-light border-start-0" placeholder="Enter custom amount">
                            </div>
                        </div>

                        <!-- Personal Details -->
                        <div class="row g-3 mb-3">
                            <div class="col-md-6">
                                <label class="form-label text-secondary small fw-bold text-uppercase">Full Name *</label>
                                <input type="text" class="form-control bg-light border-0 py-3 rounded-3" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label text-secondary small fw-bold text-uppercase">Email *</label>
                                <input type="email" class="form-control bg-light border-0 py-3 rounded-3" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label text-secondary small fw-bold text-uppercase">Phone</label>
                                <input type="tel" class="form-control bg-light border-0 py-3 rounded-3">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label text-secondary small fw-bold text-uppercase">Contribute To *</label>
                                <select class="form-select bg-light border-0 py-3 rounded-3" required>
                                    <option selected>General Fund</option>
                                    <option>Rural Children Education</option>
                                    <option>Women Empowerment</option>
                                    <option>Health Camps</option>
                                </select>
                            </div>
                        </div>

                         <!-- Payment Method & Message -->
                        <div class="mb-4">
                            <label class="form-label text-secondary small fw-bold text-uppercase">Payment Method *</label>
                            <select class="form-select bg-light border-0 py-3 rounded-3 mb-3" required>
                                <option value="" selected disabled>Choose a method</option>
                                <option value="upi">UPI / QR Code</option>
                                <option value="bank">Bank Transfer (NEFT/IMPS)</option>
                                <option value="offline">Offline / Cash</option>
                            </select>
                            
                            <label class="form-label text-secondary small fw-bold text-uppercase">Message (Optional)</label>
                            <textarea class="form-control bg-light border-0 rounded-3" rows="3" placeholder="Leave a message with your donation..."></textarea>
                        </div>

                        <button type="submit" class="btn btn-success w-100 py-3 fw-bold rounded-pill shadow hover-lift">
                            Proceed to Donate <i class="fa-solid fa-heart ms-2"></i>
                        </button>
                    </form>
                </div>
            </div>

            <!-- Right Column: Payment Details & Info -->
            <div class="col-lg-5 animate-fade-up delay-100">
                <div class="d-flex flex-column gap-4">
                    
                    <!-- UPI Section -->
                    <div class="bg-white p-4 rounded-4 shadow-sm text-center border border-light position-relative overflow-hidden">
                        <div class="position-absolute top-0 start-0 w-100 h-1 bg-success"></div>
                        <h5 class="fw-bold text-dark mb-3"><i class="fa-solid fa-qrcode text-success me-2"></i> Quick UPI (Scan)</h5>
                        <div class="p-3 bg-light d-inline-block rounded-3 mb-3 border">
                            <!-- Placeholder for QR Code Image -->
                            <div class="d-flex align-items-center justify-content-center text-muted" style="width: 180px; height: 180px; background: #e9ecef;">
                                <span class="small">QR Code Image</span>
                            </div>
                        </div>
                        <p class="small text-secondary mb-2">Scan with Google Pay / PhonePe / Paytm</p>
                        <div class="bg-success bg-opacity-10 text-success fw-bold py-2 px-3 rounded-pill d-inline-block mb-3">
                            UPI ID: theglobalrisefoundation@upi
                        </div>
                        <p class="small text-muted mb-0 fst-italic">
                            * Mention your name in remarks for receipt.
                        </p>
                    </div>

                    <!-- Bank Transfer Section -->
                    <div class="bg-white p-4 rounded-4 shadow-sm border border-light">
                        <h5 class="fw-bold text-dark mb-3"><i class="fa-solid fa-building-columns text-success me-2"></i> Bank Transfer</h5>
                        <p class="small text-secondary mb-3">Use these details for NEFT, IMPS or RTGS transfers.</p>
                        
                        <ul class="list-unstyled mb-0">
                            <li class="d-flex justify-content-between py-2 border-bottom">
                                <span class="text-secondary small fw-semibold">Account Name</span>
                                <span class="fw-bold text-dark text-end">The Global Rise Foundation</span>
                            </li>
                            <li class="d-flex justify-content-between py-2 border-bottom">
                                <span class="text-secondary small fw-semibold">Bank</span>
                                <span class="fw-bold text-dark text-end">PNB Kaulagarh Road, Dehradun</span>
                            </li>
                            <li class="d-flex justify-content-between py-2 border-bottom">
                                <span class="text-secondary small fw-semibold">A/C No.</span>
                                <span class="fw-bold text-success text-end font-monospace">1175002100014343</span>
                            </li>
                            <li class="d-flex justify-content-between py-2">
                                <span class="text-secondary small fw-semibold">IFSC Code</span>
                                <span class="fw-bold text-dark text-end font-monospace">PUNB0117500</span>
                            </li>
                        </ul>
                         <div class="mt-3 p-3 bg-warning bg-opacity-10 rounded-3 text-start">
                             <p class="small text-warning-emphasis mb-0 fw-semibold">
                                 <i class="fa-solid fa-circle-info me-1"></i> Proof Required
                             </p>
                             <p class="small text-secondary mb-0 mt-1">
                                 Once transfer is complete, send screenshot to <a href="mailto:theglobalrisefoundation@gmail.com" class="text-dark fw-bold text-decoration-none">theglobalrisefoundation@gmail.com</a>
                             </p>
                         </div>
                    </div>

                    <!-- Offline/Cash -->
                    <div class="bg-white p-4 rounded-4 shadow-sm border border-light">
                         <h5 class="fw-bold text-dark mb-2"><i class="fa-solid fa-hand-holding-dollar text-success me-2"></i> Offline / Cash</h5>
                         <p class="small text-secondary mb-3">You may also donate in person at our office. Please contact us to schedule a visit.</p>
                         <p class="small fw-bold text-dark mb-0 bg-light p-3 rounded-3">
                             <i class="fa-solid fa-location-dot text-danger me-2"></i> H NO 49, Gothra Mohabtabad, Pali, Faridabad - 121004, Haryana
                         </p>
                    </div>

                     <!-- Tax Benefit -->
                    <div class="bg-success text-white p-4 rounded-4 shadow-sm text-center">
                        <i class="fa-solid fa-file-invoice-dollar fs-2 mb-2"></i>
                        <h5 class="fw-bold mb-2">Tax Benefit & Receipt</h5>
                         <p class="small opacity-90 mb-0">
                             Donations to The Global Rise Foundation are eligible for tax benefits under applicable laws. Receipts will be issued upon request after payment confirmation.
                         </p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<script>
    function setAmount(amount) {
        document.getElementById('customAmount').value = amount;
        // Optional: Highlight selected button
        document.querySelectorAll('.donation-btn').forEach(btn => {
            btn.classList.remove('active', 'bg-success', 'text-white');
            btn.classList.add('btn-outline-success');
        });
        event.target.classList.remove('btn-outline-success');
        event.target.classList.add('active', 'bg-success', 'text-white');
    }
</script>

<?php include 'includes/footer.php'; ?>