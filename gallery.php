<?php include 'includes/header.php'; ?>
<?php include 'includes/navbar.php'; ?>
<?php include 'includes/db.php'; ?>

<!-- Page Header -->
<div class="py-5 bg-light">
    <div class="container py-5 text-center">
        <h1 class="display-4 fw-bold text-success mb-3">Photo Gallery</h1>
        <p class="lead text-secondary mb-0">Moments of impact and change from our journey.</p>
    </div>
</div>

<!-- Gallery Section -->
<section class="py-5">
    <div class="container py-4">
        
        <!-- Filter Buttons -->
        <div class="d-flex justify-content-center flex-wrap gap-2 mb-5">
            <button class="btn btn-outline-success active px-4 rounded-pill fw-bold filter-btn" data-filter="all">All</button>
            <button class="btn btn-outline-success px-4 rounded-pill fw-bold filter-btn" data-filter="Education">Education</button>
            <button class="btn btn-outline-success px-4 rounded-pill fw-bold filter-btn" data-filter="Health">Health</button>
            <button class="btn btn-outline-success px-4 rounded-pill fw-bold filter-btn" data-filter="Empowerment">Empowerment</button>
            <button class="btn btn-outline-success px-4 rounded-pill fw-bold filter-btn" data-filter="Events">Events</button>
        </div>

        <div class="row g-4" id="gallery-grid">
            <?php
            $sql = "SELECT * FROM gallery ORDER BY upload_date DESC";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    ?>
                    <div class="col-lg-4 col-md-6 gallery-item" data-category="<?php echo $row['category']; ?>">
                        <div class="card border-0 shadow-sm rounded-4 overflow-hidden h-100 hover-lift group">
                            <div class="position-relative overflow-hidden" style="height: 250px;">
                                <img src="<?php echo $row['image_path']; ?>" alt="<?php echo $row['title']; ?>" class="w-100 h-100 object-fit-cover transition-transform group-hover-scale" loading="lazy">
                                <div class="position-absolute bottom-0 start-0 m-3 px-3 py-1 bg-white rounded-pill shadow-sm fw-bold small text-success">
                                    <?php echo $row['category']; ?>
                                </div>
                            </div>
                            <div class="card-body">
                                <h5 class="fw-bold text-dark mb-0"><?php echo $row['title']; ?></h5>
                            </div>
                        </div>
                    </div>
                    <?php
                }
            } else {
                echo '<div class="col-12 text-center py-5"><p class="text-muted lead">No images found in the gallery yet.</p></div>';
            }
            ?>
        </div>
    </div>
</section>

<!-- Simple Filter Script -->
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const filterBtns = document.querySelectorAll('.filter-btn');
        const galleryItems = document.querySelectorAll('.gallery-item');

        filterBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                // Formatting active state
                filterBtns.forEach(b => {
                    b.classList.remove('active', 'btn-success', 'text-white');
                    b.classList.add('btn-outline-success');
                });
                btn.classList.remove('btn-outline-success');
                btn.classList.add('active', 'btn-success', 'text-white');

                const filter = btn.getAttribute('data-filter');

                galleryItems.forEach(item => {
                    if (filter === 'all' || item.getAttribute('data-category') === filter) {
                        item.style.display = 'block';
                        // Add fade-in animation logic if desired
                    } else {
                        item.style.display = 'none';
                    }
                });
            });
        });
    });
</script>

<?php include 'includes/footer.php'; ?>
