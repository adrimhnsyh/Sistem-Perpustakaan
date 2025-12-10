<?php // halaman visi misi ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="icon" type="image/png" href="../images/LOGO STMI.png">
    <title>PERPUSTAKAAN Politeknik STMI Jakarta</title>

    <!-- CSS FILES -->        
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">

    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/bootstrap-icons.css" rel="stylesheet">
    <link href="../css/tooplate-clean-work.css" rel="stylesheet">
</head>

<body>

<header class="site-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-12 d-flex flex-wrap">
                <p class="d-flex me-4 mb-0">
                    <i class="bi-book me-2"></i>
                    BACA BUKU
                </p>

                <p class="d-flex d-lg-block d-md-block d-none me-4 mb-0">
                    <i class="bi-clock-fill me-2"></i>
                    <strong class="me-2">Senin - Jumat</strong> 7:30 AM - 16:00 PM
                </p>
            </div>
        </div>
    </div>
</header>

<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="../index.php">
            <img src="../images/Logo - STMI.svg" alt="Politeknik STMI Jakarta" class="logo-stmi">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">

                <li class="nav-item">
                    <a class="nav-link" href="../index.php">Home</a>
                </li>

                <li class="nav-item dropdown active">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarLightDropdownMenuLink" data-bs-toggle="dropdown">Profil</a>

                    <ul class="dropdown-menu dropdown-menu-light">
                        <li><a class="dropdown-item" href="sejarah.php">Sejarah</a></li>
                        <li><a class="dropdown-item active" href="visi_misi.php">Visi Misi</a></li>
                        <li><a class="dropdown-item" href="tujuan_fungsi.php">Tujuan & Fungsi</a></li>
                        <li><a class="dropdown-item" href="struktur.php">Struktur Organisasi</a></li>
                        <li><a class="dropdown-item" href="peraturan.php">Peraturan & Tata Tertib</a></li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="layanan.php">Layanan</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="e-resources.php">E-Resources</a>
                </li>

                <li class="nav-item ms-3">
                    <a class="nav-link custom-btn custom-border-btn custom-btn-bg-white btn" href="../login.php">Login Admin</a>
                </li>

            </ul>
        </div>
    </div>
</nav>

<main>

<section class="banner-section d-flex justify-content-center align-items-end">
    <div class="section-overlay"></div>

    <div class="container">
        <div class="row">

            <div class="col-lg-7 col-12">
                <h1 class="text-white mb-lg-0">VISI & MISI</h1>
            </div>

            <div class="col-lg-4 col-12 d-flex justify-content-lg-end align-items-center ms-auto">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Visi Misi</li>
                    </ol>
                </nav>
            </div>

        </div>
    </div>
</section>

<section class="section-padding" style="background: linear-gradient(180deg, #f7faff 0%, #e9eef7 100%);">
    <div class="container">
        <div class="row justify-content-center">

            <!-- VISI (KIRI) -->
            <div class="col-lg-5 col-md-6 col-12 mb-4">
                <div class="card shadow-lg border-0 p-4 text-center h-100" style="border-radius: 20px; background: white;">
                    <h3 class="fw-bold text-primary mb-3">VISI</h3>
                    <p class="text-secondary" style="font-size: 1.1rem; line-height: 1.8;">
                        Terwujudnya perpustakaan sebagai pusat layanan informasi dan referensi yang inovatif, berbasis teknologi informasi sebagai pendukung utama tercapainya Tridharma Perguruan Tinggi.
                    </p>
                </div>
            </div>

            <!-- MISI (KANAN) -->
            <div class="col-lg-7 col-md-6 col-12 mb-4">
                <div class="card shadow-lg border-0 p-4 h-100" style="border-radius: 20px; background: white;">
                    <h3 class="fw-bold text-primary text-center mb-4">MISI</h3>

                    <ol class="list-group list-group-numbered">

                        <li class="list-group-item border-0 py-3 d-flex align-items-start" style="background: transparent;">
                            <i class="bi bi-bookmark-check-fill text-primary me-3 fs-5"></i>
                            <span>Menyediakan koleksi perpustakaan yang lengkap dan berkualitas dalam berbagai bidang ilmu pengetahuan sebagai pendukung proses pembelajaran, pengajaran, dan riset ilmiah.</span>
                        </li>

                        <li class="list-group-item border-0 py-3 d-flex align-items-start" style="background: transparent;">
                            <i class="bi bi-lightbulb-fill text-primary me-3 fs-5"></i>
                            <span>Memberikan layanan informasi yang prima dan responsif terhadap kebutuhan sivitas akademika.</span>
                        </li>

                        <li class="list-group-item border-0 py-3 d-flex align-items-start" style="background: transparent;">
                            <i class="bi bi-laptop-fill text-primary me-3 fs-5"></i>
                            <span>Mengembangkan sistem perpustakaan berbasis teknologi informasi untuk meningkatkan efisiensi layanan.</span>
                        </li>

                        <li class="list-group-item border-0 py-3 d-flex align-items-start" style="background: transparent;">
                            <i class="bi bi-graph-up text-primary me-3 fs-5"></i>
                            <span>Meningkatkan pemanfaatan perpustakaan melalui program literasi informasi.</span>
                        </li>

                        <li class="list-group-item border-0 py-3 d-flex align-items-start" style="background: transparent;">
                            <i class="bi bi-people-fill text-primary me-3 fs-5"></i>
                            <span>Meningkatkan kompetensi SDM perpustakaan melalui pelatihan berkelanjutan.</span>
                        </li>

                        <li class="list-group-item border-0 py-3 d-flex align-items-start" style="background: transparent;">
                            <i class="bi bi-globe2 text-primary me-3 fs-5"></i>
                            <span>Menjalin kerja sama dengan institusi lain untuk memperluas jaringan informasi.</span>
                        </li>

                    </ol>
                </div>
            </div>

        </div>
    </div>
</section>


<style>
.card {
    transition: all 0.3s ease;
}
.card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
}
.list-group-item i {
    flex-shrink: 0;
}
</style>

</main>

<footer class="site-footer">
    <div class="container">
        <div class="row align-items-start">

            <!-- Logo -->
            <div class="col-lg-3 col-md-6 col-12 mb-4">
                <img src="../images/LOGO STMI.png" alt="Logo STMI" class="img-fluid mb-3" style="max-width: 150px;">
                <h5 class="text-white fw-bold">Perpustakaan STMI Jakarta</h5>
                <p class="text-white-50 mb-0">Melayani dengan ilmu dan integritas</p>
            </div>

            <!-- Media Sosial -->
            <div class="col-lg-4 col-md-6 col-12 mb-4">
                <h5 class="site-footer-title mb-3"><b>Media Sosial</b></h5>
                <ul class="list-unstyled mt-3">

                    <li class="d-flex align-items-center mb-2">
                        <a href="mailto:perpustakaan@stmi.ac.id" target="_blank" class="social-icon-link text-white fs-5 me-2">
                            <i class="bi bi-envelope-fill"></i>
                        </a>
                        <span class="text-white-50">perpustakaan@stmi.ac.id</span>
                    </li>

                    <li class="d-flex align-items-center mb-2">
                        <a href="mailto:lib.politeknikstmi@gmail.com" target="_blank" class="social-icon-link text-white fs-5 me-2">
                            <i class="bi bi-envelope-fill"></i>
                        </a>
                        <span class="text-white-50">lib.politeknikstmi@gmail.com</span>
                    </li>

                    <li class="d-flex align-items-center mb-2">
                        <a href="https://instagram.com/stmijakarta" target="_blank" class="social-icon-link text-white fs-5 me-2">
                            <i class="bi bi-instagram"></i>
                        </a>
                        <span class="text-white-50">@stmijakarta</span>
                    </li>

                    <li class="d-flex align-items-center mb-2">
                        <a href="https://instagram.com/perpus.politeknikstmijkt" target="_blank" class="social-icon-link text-white fs-5 me-2">
                            <i class="bi bi-instagram"></i>
                        </a>
                        <span class="text-white-50">@perpus.politeknikstmijkt</span>
                    </li>

                    <li class="d-flex align-items-center mb-2">
                        <a href="https://www.tiktok.com/@perpustakaan_stmijkt" target="_blank" class="social-icon-link text-white fs-5 me-2">
                            <i class="bi bi-tiktok"></i>
                        </a>
                        <span class="text-white-50">@perpustakaan_stmijkt</span>
                    </li>

                </ul>

                <p class="text-white-50 mt-3">Ikuti kami untuk informasi dan update terbaru.</p>
            </div>

            <!-- Jam Layanan -->
            <div class="col-lg-5 col-md-6 col-12 mb-4">
                <h5 class="site-footer-title mt-4 mb-3 text-white"><b>Jam Layanan Perpustakaan</b></h5>
                <div class="jam-layanan">
                    <p class="mb-1"><strong>Senin – Kamis:</strong> 08:00 – 16:00 WIB</p>
                    <p class="mb-1"><strong>Istirahat:</strong> 12:00 – 13:00 WIB</p>
                    <p class="mb-1"><strong>Jum’at:</strong> 08:00 – 16:30 WIB</p>
                    <p class="mb-0"><strong>Istirahat:</strong> 11:30 – 13:00 WIB</p>
                </div>
            </div>

        </div>

        <div class="site-footer-bottom py-3 text-center">
            <p class="mb-0 text-white-50">© 2025 Perpustakaan Politeknik STMI Jakarta</p>
        </div>
    </div>
</footer>

<!-- JAVASCRIPT FILES -->
<script src="../js/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/jquery.backstretch.min.js"></script>
<script src="../js/counter.js"></script>
<script src="../js/countdown.js"></script>
<script src="../js/init.js"></script>
<script src="../js/modernizr.js"></script>
<script src="../js/animated-headline.js"></script>
<script src="../js/custom.js"></script>

</body>
</html>
