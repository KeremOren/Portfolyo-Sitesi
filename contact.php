<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>İletişim - Portfolio</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
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
            <a class="navbar-brand" href="index.php" data-aos="fade-right">Portfolio</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item" data-aos="fade-left" data-aos-delay="100">
                        <a class="nav-link" href="index.php#home">Ana Sayfa</a>
                    </li>
                    <li class="nav-item" data-aos="fade-left" data-aos-delay="200">
                        <a class="nav-link" href="index.php#about">Hakkımda</a>
                    </li>
                    <li class="nav-item" data-aos="fade-left" data-aos-delay="300">
                        <a class="nav-link" href="index.php#portfolio">Portfolyo</a>
                    </li>
                    <li class="nav-item" data-aos="fade-left" data-aos-delay="400">
                        <a class="nav-link active" href="contact.php">İletişim</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Contact Hero Section -->
    <section class="contact-hero">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7" data-aos="fade-right">
                    <h1 class="display-4 fw-bold text-white mb-4 text-start">İletişime <span class="highlight">Geç</span></h1>
                    <p class="lead text-white mb-4 text-start">Projeleriniz için benimle iletişime geçebilirsiniz</p>
                    <div class="hero-buttons text-start">
                        <a href="#contact-form" class="btn btn-primary btn-lg me-3">Mesaj Gönder</a>
                        <a href="#contact-info" class="btn btn-outline-light btn-lg">İletişim Bilgileri</a>
                    </div>
                </div>
                <div class="col-lg-5" data-aos="fade-left">
                    <div class="floating-icons">
                        <i class="fas fa-envelope floating-icon"></i>
                        <i class="fas fa-phone floating-icon"></i>
                        <i class="fas fa-map-marker-alt floating-icon"></i>
                        <i class="fas fa-comments floating-icon"></i>
                        <i class="fas fa-paper-plane floating-icon"></i>
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

    <!-- Contact Section -->
    <section id="contact-info" class="contact-page-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6" data-aos="fade-right">
                    <div class="contact-info">
                        <div class="info-item" data-aos="zoom-in" data-aos-delay="100">
                            <i class="fas fa-envelope"></i>
                            <h3>E-posta</h3>
                            <p>info@example.com</p>
                        </div>
                        <div class="info-item" data-aos="zoom-in" data-aos-delay="200">
                            <i class="fas fa-phone"></i>
                            <h3>Telefon</h3>
                            <p>+90 555 123 4567</p>
                        </div>
                        <div class="info-item" data-aos="zoom-in" data-aos-delay="300">
                            <i class="fas fa-map-marker-alt"></i>
                            <h3>Adres</h3>
                            <p>İstanbul, Türkiye</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <div id="contact-form" class="contact-form">
                        <?php if (isset($_GET['success'])): ?>
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <i class="fas fa-check-circle me-2"></i>Mesajınız başarıyla gönderildi!
                                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                            </div>
                        <?php endif; ?>
                        <?php if (isset($_GET['error'])): ?>
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <i class="fas fa-exclamation-circle me-2"></i>Bir hata oluştu. Lütfen tekrar deneyin.
                                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                            </div>
                        <?php endif; ?>
                        <form action="admin/process.php" method="POST" id="contactForm" onsubmit="return validateForm(event)">
                            <div class="mb-3">
                                <label for="name" class="form-label">Adınız</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                                <div class="invalid-feedback">Lütfen adınızı girin.</div>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">E-posta Adresiniz</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                                <div class="invalid-feedback">Lütfen geçerli bir e-posta adresi girin.</div>
                            </div>
                            <div class="mb-3">
                                <label for="subject" class="form-label">Konu</label>
                                <input type="text" class="form-control" id="subject" name="subject" required>
                                <div class="invalid-feedback">Lütfen konu girin.</div>
                            </div>
                            <div class="mb-3">
                                <label for="message" class="form-label">Mesajınız</label>
                                <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                                <div class="invalid-feedback">Lütfen mesajınızı girin.</div>
                            </div>
                            <button type="submit" class="btn btn-primary" id="submitBtn">
                                <i class="fas fa-paper-plane me-2"></i>Gönder
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

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
    <script>
        // Form doğrulama
        function validateForm(event) {
            event.preventDefault();
            
            const form = document.getElementById('contactForm');
            const submitBtn = document.getElementById('submitBtn');
            
            // Form doğrulama
            if (!form.checkValidity()) {
                event.stopPropagation();
                form.classList.add('was-validated');
                return false;
            }
            
            // Submit butonunu devre dışı bırak
            submitBtn.disabled = true;
            submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin me-2"></i>Gönderiliyor...';
            
            // Formu gönder
            form.submit();
            
            return true;
        }
        
        // AOS başlat
        AOS.init({
            duration: 1000,
            once: true
        });
    </script>
</body>
</html> 