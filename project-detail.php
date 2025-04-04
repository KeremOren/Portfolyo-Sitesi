<?php
// Proje ID'sini URL'den al
$projectId = $_GET['id'] ?? null;

// Proje verilerini tanımla
$projects = [
    'project1' => [
        'title' => 'Psikolog Sitesi',
        'description' => 'Modern ve kullanıcı dostu bir psikolog sitesi. Randevu sistemi ve online danışmanlık hizmetleri için özel olarak tasarlanmış arayüz.',
        'images' => [
            'assets/images/projects/project1/slide1.jpg',
            'assets/images/projects/project1/slide2.jpg',
            'assets/images/projects/project1/slide3.jpg'
        ],
        'tech_stack' => ['HTML5', 'CSS3', 'JavaScript', 'Bootstrap 5', 'PHP']
    ],
    'project2' => [
        'title' => 'Temizlik Sitesi',
        'description' => 'Modern ve kullanıcı dostu bir temizlik şirketi web sitesi. Müşterilerin kolayca hizmet rezervasyonu yapabilmesi için özel bir sistem içerir. Responsive tasarımı ile tüm cihazlarda sorunsuz çalışır.',
        'images' => [
            './assets/images/temizlik.png',
            './assets/images/temizlik2.png',
            './assets/images/temizlik3.png',
            './assets/images/temizlik4.png',
            './assets/images/temizlik5.png',
            './assets/images/temizlik6.png',
            './assets/images/temizlik7.png',
            './assets/images/temizlik8.png',
            './assets/images/temizlik9.png'
        ],
        'tech_stack' => ['HTML5', 'CSS3', 'Bootstrap 5', 'JavaScript']
    ],
    'project3' => [
        'title' => 'Pilates Sitesi',
        'description' => 'Profesyonel bir pilates stüdyosu için tasarlanmış modern web sitesi. Online ders rezervasyonu ve canlı pilates dersleri için özel arayüz.',
        'images' => [
            'assets/images/projects/project3/slide1.jpg',
            'assets/images/projects/project3/slide2.jpg',
            'assets/images/projects/project3/slide3.jpg'
        ],
        'tech_stack' => ['HTML5', 'CSS3', 'JavaScript', 'PHP', 'MySQL']
    ]
];

// ID'ye göre ilgili proje verisini seç
$project = $projects[$projectId] ?? null;

// Proje bulunamazsa ana sayfaya yönlendir
if (!$project) {
    header('Location: index.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $project['title']; ?> - Portfolio</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="assets/css/style.css" rel="stylesheet">
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="index.php">Portfolio</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php#home">Ana Sayfa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php#about">Hakkımda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php#portfolio">Portfolyo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">İletişim</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Project Detail Hero Section -->
    <section class="project-detail-hero">
        <div class="container">
            <h1><?php echo $project['title']; ?></h1>
        </div>
        <div class="hero-shape">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#ffffff" fill-opacity="1" d="M0,96L48,112C96,128,192,160,288,160C384,160,480,128,576,112C672,96,768,96,864,112C960,128,1056,160,1152,160C1248,160,1344,128,1392,112L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
            </svg>
        </div>
    </section>

    <!-- Project Detail Content -->
    <section class="project-detail-content py-5">
        <div class="container">
            <div class="row">
                <!-- Proje Galerisi (Slider) -->
                <div class="col-lg-8 mb-4 mb-lg-0">
                    <!-- Carousel Section -->
                    <div class="project-carousel">
                        <div id="projectCarousel" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <?php foreach ($project['images'] as $index => $image): ?>
                                <div class="carousel-item <?php echo $index === 0 ? 'active' : ''; ?>">
                                    <div style="background-color: #f8f9fa; height: 600px; display: flex; align-items: center; justify-content: center;">
                                        <img src="<?php echo $image; ?>" class="d-block" alt="Project Image" 
                                             style="max-height: 100%; width: auto; max-width: 100%; object-fit: contain;">
                                    </div>
                                </div>
                                <?php endforeach; ?>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#projectCarousel" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#projectCarousel" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                        
                        <!-- Thumbnail Navigation -->
                        <div class="thumbnail-navigation mt-3">
                            <div class="row g-2">
                                <?php foreach ($project['images'] as $index => $image): ?>
                                <div class="col-4 col-md-2">
                                    <div style="height: 80px; background-color: #f8f9fa; display: flex; align-items: center; justify-content: center; cursor: pointer;" 
                                         onclick="$('#projectCarousel').carousel(<?php echo $index; ?>)">
                                        <img src="<?php echo $image; ?>" class="img-thumbnail" alt="Thumbnail" 
                                             style="max-height: 100%; width: auto; max-width: 100%; object-fit: contain;">
                                    </div>
                                </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Proje Açıklaması -->
                <div class="col-lg-4">
                    <div class="project-description">
                        <h2>Proje Açıklaması</h2>
                        <p><?php echo $project['description']; ?></p>
                        
                        <h3>Kullanılan Teknolojiler</h3>
                        <ul class="tech-stack-list">
                            <?php foreach ($project['tech_stack'] as $tech): ?>
                            <li><?php echo $tech; ?></li>
                            <?php endforeach; ?>
                        </ul>

                        <div class="back-to-portfolio mt-4">
                            <a href="index.php#portfolio" class="btn btn-primary">
                                <i class="fas fa-arrow-left me-2"></i>Portfolyoya Geri Dön
                            </a>
                        </div>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Carousel için JavaScript
        function goToSlide(index) {
            const carousel = new bootstrap.Carousel(document.getElementById('projectCarousel'));
            carousel.to(index);
        }

        // Navbar scroll efekti
        window.addEventListener('scroll', function() {
            if (window.scrollY > 50) {
                document.querySelector('.navbar').classList.add('scrolled');
            } else {
                document.querySelector('.navbar').classList.remove('scrolled');
            }
        });
    </script>
</body>
</html> 