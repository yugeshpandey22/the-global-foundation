<header class="sticky-top bg-white shadow-sm">
    <div class="container-fluid px-lg-5">
        <nav class="navbar navbar-expand-lg navbar-light py-3">
            <div class="container-fluid px-0">
                <!-- Logo -->
                <a href="<?= BASE_URL ?>/index.php" class="navbar-brand d-flex align-items-center gap-3">
                    <img src="<?= BASE_URL ?>/assets/images/logo.png?v=<?= time() ?>" alt="The Global Rise Foundation" style="height: 85px; width: auto;">
                    <div class="d-flex flex-column">
                        <span class="fw-bold text-success lh-1" style="font-size: 1.5rem;">The Global Rise</span>
                        <span class="text-secondary small fw-semibold text-uppercase" style="letter-spacing: 1.5px; font-size: 0.8rem;">Foundation</span>
                    </div>
                </a>

                <!-- Mobile Toggle -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Navigation -->
                <div class="collapse navbar-collapse" id="navbarContent">
                    <ul class="navbar-nav mx-auto mb-2 mb-lg-0 gap-2">
                        <li class="nav-item"><a href="<?= BASE_URL ?>/index.php" class="nav-link">Home</a></li>
                        <li class="nav-item"><a href="<?= BASE_URL ?>/about.php" class="nav-link">About</a></li>
                        <li class="nav-item dropdown">
                            <a href="<?= BASE_URL ?>/projects.php" class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown">Our Projects</a>
                            <ul class="dropdown-menu shadow border-0">
                                <li><a href="<?= BASE_URL ?>/rural-education.php" class="dropdown-item">Rural Children Education</a></li>
                                <li><a href="<?= BASE_URL ?>/women-empowerment.php" class="dropdown-item">Women Empowerment</a></li>
                                <li><a href="<?= BASE_URL ?>/disaster-management.php" class="dropdown-item">Disaster Management</a></li>
                                <li><a href="<?= BASE_URL ?>/special-needs.php" class="dropdown-item">Special Needs Education</a></li>
                                <li><a href="<?= BASE_URL ?>/slum-education.php" class="dropdown-item">Educating Slum Children</a></li>
                                <li><a href="<?= BASE_URL ?>/health-project.php" class="dropdown-item">Health Project</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a href="<?= BASE_URL ?>/gallery.php" class="nav-link">Gallery</a></li>
                        <li class="nav-item"><a href="<?= BASE_URL ?>/member.php" class="nav-link">Members</a></li>
                        <li class="nav-item"><a href="<?= BASE_URL ?>/event.php" class="nav-link">Events</a></li>
                        <li class="nav-item"><a href="<?= BASE_URL ?>/contact.php" class="nav-link">Contact</a></li>
                    </ul>

                    <!-- Right Side Actions -->
                    <div class="d-flex align-items-center gap-3">
                        <a href="<?= BASE_URL ?>/donate.php" class="btn btn-contribute">Contribute</a>
                        <div class="dropdown">
                            <button class="btn btn-success text-white fw-bold dropdown-toggle px-3 py-2 rounded-2" type="button" id="languageDropdown" data-bs-toggle="dropdown" aria-expanded="false" style="background-color: #689f71; border: none;">
                                <i class="fa-solid fa-globe me-1"></i> <span id="currentLang">EN</span>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end shadow border-0" aria-labelledby="languageDropdown">
                                <li><a href="javascript:void(0)" class="dropdown-item" onclick="changeLanguage('en')">English</a></li>
                                <li><a href="javascript:void(0)" class="dropdown-item" onclick="changeLanguage('hi')">हिन्दी</a></li>
                            </ul>
                        </div>
                        <div id="google_translate_element" style="display:none;"></div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>
