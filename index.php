<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modern Portfolio</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- AOS CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="assets/css/style.css" rel="stylesheet">
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#" data-aos="fade-right">Portfolio</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item" data-aos="fade-left" data-aos-delay="100">
                        <a class="nav-link" href="#home">Ana Sayfa</a>
                    </li>
                    <li class="nav-item" data-aos="fade-left" data-aos-delay="200">
                        <a class="nav-link" href="#about">Hakkımda</a>
                    </li>
                    <li class="nav-item" data-aos="fade-left" data-aos-delay="300">
                        <a class="nav-link" href="#portfolio">Portfolyo</a>
                    </li>
                    <li class="nav-item" data-aos="fade-left" data-aos-delay="400">
                        <a class="nav-link" href="contact.php">İletişim</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="hero-section">
        <div class="hero-content">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6" data-aos="fade-right">
                        <h1 class="display-4 fw-bold">Merhaba, Ben <span class="highlight">Frontend</span> Geliştirici</h1>
                        <p class="lead">Modern ve etkileyici web deneyimleri oluşturuyorum</p>
                        <div class="hero-buttons">
                            <a href="#portfolio" class="btn btn-primary btn-lg me-3">Projelerimi Gör</a>
                            <a href="contact.php" class="btn btn-outline-light btn-lg">İletişime Geç</a>
                        </div>
                    </div>
                    <div class="col-lg-6" data-aos="fade-left">
                        <div class="hero-image">
                            <div class="floating-icons">
                                <i class="fab fa-html5 floating-icon"></i>
                                <i class="fab fa-css3-alt floating-icon"></i>
                                <i class="fab fa-js floating-icon"></i>
                                <i class="fab fa-bootstrap floating-icon"></i>
                                <i class="fab fa-php floating-icon"></i>
                            </div>
                            <img src="assets/images/hero-image.svg" alt="Hero Image" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero-shape">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#ffffff" fill-opacity="1" d="M0,96L48,112C96,128,192,160,288,160C384,160,480,128,576,112C672,96,768,96,864,112C960,128,1056,160,1152,160C1248,160,1344,128,1392,112L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
            </svg>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="about-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6" data-aos="fade-right">
                    <div class="about-image">
                        <img src="/Portfolyo%20Sitesi/assets/images/kerem.png" alt="Hakkımda" class="loaded">
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <div class="section-title">
                        <h2>Hakkımda</h2>
                        <div class="title-line"></div>
                    </div>
                    <p class="about-text">Ben bir Frontend geliştirici ve UI/UX tasarımcısıyım. Modern web teknolojileri kullanarak kullanıcı dostu ve etkileyici web siteleri geliştiriyorum.</p>
                    <div class="skills-container">
                        <h3>Yeteneklerim</h3>
                        <div class="skill-tags">
                            <span class="skill-tag" data-aos="zoom-in" data-aos-delay="100">HTML5</span>
                            <span class="skill-tag" data-aos="zoom-in" data-aos-delay="200">CSS3</span>
                            <span class="skill-tag" data-aos="zoom-in" data-aos-delay="300">JavaScript</span>
                            <span class="skill-tag" data-aos="zoom-in" data-aos-delay="400">React</span>
                            <span class="skill-tag" data-aos="zoom-in" data-aos-delay="500">UI/UX Design</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio Section -->
    <section id="portfolio" class="portfolio-section">
        <div class="container">
            <div class="section-title text-center" data-aos="fade-up">
                <h2>Portfolyo</h2>
                <div class="title-line"></div>
            </div>
            <div class="portfolio-filters" data-aos="fade-up" data-aos-delay="100">
                <button class="filter-btn active" data-filter="all">Tümü</button>
                <button class="filter-btn" data-filter="web">Web</button>
                <button class="filter-btn" data-filter="mobile">Mobil</button>
                <button class="filter-btn" data-filter="design">Tasarım</button>
            </div>
            <div class="row portfolio-grid">
                <!-- Portfolio Item 1 (Web) -->
                <div class="col-lg-4 col-md-6 portfolio-item" data-category="web" data-aos="fade-up" data-aos-delay="200">
                    <div class="portfolio-card">
                        <div class="portfolio-image">
                            <img src="assets/images/projects/project1.jpg" alt="Project 1">
                            <div class="portfolio-overlay">
                                <div class="portfolio-links d-flex justify-content-center">
                                    <a href="project-detail.php?id=project1" class="btn btn-light" target="_blank">Detaylar</a>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio-content">
                            <h3>Psikolog Sitesi</h3>
                            <p>Modern ve kullanıcı dostu bir psikolog sitesi</p>
                        </div>
                    </div>
                </div>
                <!-- Portfolio Item 2 (Web) -->
                <div class="col-lg-4 col-md-6 portfolio-item" data-category="web" data-aos="fade-up" data-aos-delay="300">
                    <div class="portfolio-card">
                        <div class="portfolio-image">
                            <img src="assets/images/projects/project2.jpg" alt="Project 2">
                            <div class="portfolio-overlay">
                                <div class="portfolio-links d-flex justify-content-center">
                                    <a href="project-detail.php?id=project2" class="btn btn-light" target="_blank">Detaylar</a>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio-content">
                            <h3>Temizlik Sitesi</h3>
                            <p>Şık ve profesyonel bir temizlik sitesi tasarımı</p>
                        </div>
                    </div>
                </div>
                <!-- Portfolio Item 3 (Web) -->
                <div class="col-lg-4 col-md-6 portfolio-item" data-category="web" data-aos="fade-up" data-aos-delay="400">
                    <div class="portfolio-card">
                        <div class="portfolio-image">
                            <img src="assets/images/projects/project3.jpg" alt="Project 3">
                            <div class="portfolio-overlay">
                                <div class="portfolio-links d-flex justify-content-center">
                                    <a href="project-detail.php?id=project3" class="btn btn-light" target="_blank">Detaylar</a>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio-content">
                            <h3>Pilates Sitesi</h3>
                            <p>Şık ve profesyonel bir pilates sitesi tasarımı</p>
                        </div>
                    </div>
                </div>
                <!-- Portfolio Item 4 (Mobile - Yakında) -->
                <div class="col-lg-4 col-md-6 portfolio-item" data-category="mobile" data-aos="fade-up" data-aos-delay="500">
                    <div class="portfolio-card coming-soon">
                        <div class="portfolio-image placeholder">
                             <i class="fas fa-mobile-alt fa-3x"></i>
                        </div>
                        <div class="portfolio-content text-center">
                            <h3>Mobil Uygulama</h3>
                            <p class="text-muted">Yakında...</p>
                        </div>
                    </div>
                </div>
                <!-- Portfolio Item 5 (Design - Yakında) -->
                <div class="col-lg-4 col-md-6 portfolio-item" data-category="design" data-aos="fade-up" data-aos-delay="600">
                     <div class="portfolio-card coming-soon">
                        <div class="portfolio-image placeholder">
                            <i class="fas fa-palette fa-3x"></i>
                        </div>
                        <div class="portfolio-content text-center">
                            <h3>Tasarım Projesi</h3>
                            <p class="text-muted">Yakında...</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Remove the contact section and add modal -->
    <!-- Contact Modal -->
    <div class="modal fade" id="contactModal" tabindex="-1" aria-labelledby="contactModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="contactModalLabel">İletişim</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="contact-form">
                        <form id="contactForm">
                            <div class="mb-3">
                                <input type="text" name="name" class="form-control" placeholder="Adınız" required>
                            </div>
                            <div class="mb-3">
                                <input type="email" name="email" class="form-control" placeholder="E-posta Adresiniz" required>
                            </div>
                            <div class="mb-3">
                                <textarea name="message" class="form-control" rows="5" placeholder="Mesajınız" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary btn-lg w-100">Gönder</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer mt-auto py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p>&copy; <?php echo date('Y'); ?> Portfolio. Tüm hakları saklıdır.</p>
                </div>
                <div class="col-md-6 text-md-end">
                    <div class="social-links">
                        <a href="#"><i class="fab fa-github"></i></a>
                        <a href="#"><i class="fab fa-linkedin"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="assets/js/main.js"></script>
</body>
</html> 