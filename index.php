<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="icon" type="image/png" href="images/LOGO STMI.png">
    <title>PERPUSTAKAAN Politeknik STMI Jakarta</title>

    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-icons.css" rel="stylesheet">
    <link href="css/tooplate-clean-work.css" rel="stylesheet">
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

                <p class="d-none d-md-block d-lg-block me-4 mb-0">
                    <i class="bi-clock-fill me-2"></i>
                    <strong class="me-2">Senin - Jumat</strong> 7:30 AM - 16:00 PM
                </p>
            </div>
        </div>
    </div>
</header>

<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="index.php">
            <img src="images/Logo - STMI.svg" alt="Logo STMI" class="logo-stmi">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">

                <li class="nav-item">
                    <a class="nav-link active" href="index.php">Home</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarLightDropdownMenuLink" role="button"
                        data-bs-toggle="dropdown">
                        Profil
                    </a>

                    <ul class="dropdown-menu dropdown-menu-light">
                        <li><a class="dropdown-item" href="tampilan/sejarah.php">Sejarah</a></li>
                        <li><a class="dropdown-item" href="tampilan/visi_misi.php">Visi Misi</a></li>
                        <li><a class="dropdown-item" href="tampilan/tujuan_fungsi.php">Tujuan & Fungsi</a></li>
                        <li><a class="dropdown-item" href="tampilan/struktur.php">Struktur Organisasi</a></li>
                        <li><a class="dropdown-item" href="tampilan/peraturan.php">Peraturan & Tata Tertib</a></li>
                    </ul>
                </li>

                <li class="nav-item"><a class="nav-link" href="tampilan/layanan.php">Layanan</a></li>
                <li class="nav-item"><a class="nav-link" href="tampilan/e-resources.php">E-Resources</a></li>

                <li class="nav-item ms-3">
                    <a class="nav-link custom-btn custom-border-btn custom-btn-bg-white btn" href="login.php">Login Admin</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<main>

    <!-- HERO SECTION -->
    <section class="hero-section hero-section-full-height d-flex justify-content-center align-items-center">
        <div class="section-overlay"></div>

        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-12 text-center mx-auto">
                    <h1 class="cd-headline rotate-1 text-white mb-4 pb-2" style="font-size: 70px; white-space: nowrap;">
                        <span>MAU CARI </span>
                        <span class="cd-words-wrapper">
                            <b class="is-visible">Buku Buku</b>
                            <b>Jurnal Ilmiah</b>
                            <b>Tugas Akhir</b>
                        </span>
                    </h1>
                </div>
            </div>
        </div>

        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#ffffff" d="M0,224L40,229.3C80,235,160,245,240,250.7C320,256,400,256,480,240C560,224,640,192,720,176C800,160,880,160,960,138.7C1040,117,1120,75,1200,80C1280,85,1360,139,1400,165.3L1440,192V320H0Z"></path>
        </svg>
    </section>

    <!-- INTRO SECTION -->
    <section class="intro-section" id="intro-section">
        <div class="container">
            <div class="row justify-content-lg-center align-items-center">

                <div class="col-lg-6 col-12 text-logo">
                    <div class="judul-stmi">
                        <h2 class="mb-4">PERPUSTAKAAN</h2>
                        <span class="politeknik">POLITEKNIK</span>
                        <span class="stmi">STMI JAKARTA</span>
                    </div>
                    <p><a href="#">NPP : 3171052C0000001</a></p>
                </div>

                <div class="col-lg-6 col-12 custom-block-wrap">
                    <img src="images/gedungstmiedit.png" class="img-fluid" alt="">
                </div>

            </div>
        </div>
    </section>

    <!-- 2 INFO CARD -->
    <section class="services-section section-padding">
        <div class="container">

            <div class="row text-center mb-5">
                <h2 class="fw-bold">Berita dan Kegiatan Perpustakaan</h2>
            </div>

            <div class="row">
                <div class="col-lg-6 col-12 mb-4">
                    <div class="services-thumb section-bg p-3">
                        <div class="row">
                            <div class="col-md-5 col-12">
                                <img src="images/berita/AKREDITASI_B.png" class="services-image img-fluid rounded" alt="">
                            </div>

                            <div class="col-md-7 col-12 d-flex align-items-center">
                                <div class="services-info">
                                    <h4 class="services-title mb-2">STATUS AKREDITASI</h4>
                                    <p>Perpustakaan STMI Jakarta resmi meraih akreditasi “B” dari Perpustakaan Nasional RI sebagai bentuk peningkatan kualitas layanan.</p>
                                    <a href="https://www.instagram.com/p/DReQy3TEn99/?utm_source=ig_web_copy_link&igsh=MzRlODBiNWFlZA==" 
                                        class="btn btn-primary btn-sm mt-2" 
                                        target="_blank" 
                                        rel="noopener noreferrer">
                                            Selengkapnya
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-12 mb-4">
                    <div class="services-thumb section-bg p-3">
                        <div class="row">
                            <div class="col-md-5 col-12">
                                <img src="images/berita/hibah.png" class="services-image img-fluid rounded" alt="">
                            </div>

                            <div class="col-md-7 col-12 d-flex align-items-center">
                                <div class="services-info">
                                    <h4 class="services-title mb-2">HIBAH BUKU DOSEN</h4>
                                    <p>Perpustakaan Politeknik STMI Jakarta menerima hibah buku dari Guru Besar yaitu ibu Prof Dr. Siti Aisyah, ST, MT.</p>
                                    <a href="https://www.instagram.com/p/DR3R3szE9RD/?utm_source=ig_web_copy_link&igsh=MzRlODBiNWFlZA==" class="btn btn-primary btn-sm mt-2" 
                                        target="_blank" 
                                        rel="noopener noreferrer">
                                            Selengkapnya
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6 col-12 mb-4">
                    <div class="services-thumb section-bg p-3">
                        <div class="row">
                            <div class="col-md-5 col-12">
                                <img src="images/berita/donasi.png" class="services-image img-fluid rounded" alt="">
                            </div>

                            <div class="col-md-7 col-12 d-flex align-items-center">
                                <div class="services-info">
                                    <h4 class="services-title mb-2">AYO DONASIKAN BUKUMU!</h4>
                                    <p>Hai #sobatperpus👋<br>
                                        Sudahkah kamu tahu? Sekarang kamu bisa berbagi ilmu dan inspirasi melalui 
                                        Program Gerakan Donasi Buku yang diselenggarakan oleh Perpustakaan Politeknik STMI Jakarta</p>
                                    <a href="https://www.instagram.com/p/DPxrFw9k3K5/?utm_source=ig_web_copy_link&igsh=MzRlODBiNWFlZA=="class="btn btn-primary btn-sm mt-2" 
                                        target="_blank" 
                                        rel="noopener noreferrer">Selengkapnya
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-12 mb-4">
                    <div class="services-thumb section-bg p-3">
                        <div class="row">
                            <div class="col-md-5 col-12">
                                <img src="images/berita/dutabaca.png" class="services-image img-fluid rounded" alt="">
                            </div>

                            <div class="col-md-7 col-12 d-flex align-items-center">
                                <div class="services-info">
                                    <h4 class="services-title mb-2">DUTA BACA 2025</h4>
                                    <p>Perpustakaan Politeknik STMI Jakarta dengan bangga mempersembahkan Duta Baca 2025:<br>
                                        👩‍🎓 Devi Agustiana (ABO 24)<br>
                                        👨‍🎓 Dannyel Haposan Sinaga (SIIO 25)<br>
                                    sebagai Duta Baca 2025.Semoga keduanya dapat menginspirasi sivitas akademika dalam meningkatkan budaya literasi dan minat baca.</p>
                                    <a href="https://www.instagram.com/p/DOx0TZXiKec/?utm_source=ig_web_copy_link&igsh=MzRlODBiNWFlZA=="class="btn btn-primary btn-sm mt-2" 
                                        target="_blank" 
                                        rel="noopener noreferrer">
                                            Selengkapnya
                                        </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- MENU INFORMASI -->
    <section class="services-section section-padding section-bg">
        <div class="container">

            <section class="section-menu py-5">
                <div class="container">

                    <div class="row text-center mb-5">
                        <h2 class="fw-bold">Informasi Perpustakaan</h2>
                        <p class="text-muted">Pilih bagian untuk melihat detail informasi</p>
                    </div>

                    <div class="row g-4 justify-content-center">

                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="menu-card p-4 shadow-sm rounded-4 text-center hover-effect">
                                <div class="menu-icon mb-3 text-primary fs-1">
                                    <i class="bi bi-book-half"></i>
                                </div>  
                                <h4 class="fw-semibold mb-2">Sejarah</h4>
                                <p class="text-muted">Perjalanan berdirinya perpustakaan dari masa ke masa.</p>
                                <a href="tampilan/sejarah.php" class="btn btn-outline-primary mt-3 px-4">Lihat</a>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="menu-card p-4 shadow-sm rounded-4 text-center hover-effect">
                                <div class="menu-icon mb-3 text-success fs-1">
                                    <i class="bi bi-lightbulb-fill"></i>
                                </div>
                                <h4 class="fw-semibold mb-2">Visi & Misi</h4>
                                <p class="text-muted">Arah dan tujuan utama perpustakaan dalam melayani pengguna.</p>
                                <a href="tampilan/visi_misi.php" class="btn btn-outline-success mt-3 px-4">Lihat</a>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="menu-card p-4 shadow-sm rounded-4 text-center hover-effect">
                                <div class="menu-icon mb-3 text-warning fs-1">
                                    <i class="bi bi-bullseye"></i>
                                </div>
                                <h4 class="fw-semibold mb-2">Tujuan</h4>
                                <p class="text-muted">Meningkatkan literasi dan layanan pengetahuan bagi civitas akademika.</p>
                                <a href="tampilan/tujuan_fungsi.php" class="btn btn-outline-warning mt-3 px-4">Lihat</a>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="menu-card p-4 shadow-sm rounded-4 text-center hover-effect">
                                <div class="menu-icon mb-3 text-danger fs-1">
                                    <i class="bi bi-diagram-3-fill"></i>
                                </div>
                                <h4 class="fw-semibold mb-2">Struktur Organisasi</h4>
                                <p class="text-muted">Susunan tim dan jabatan yang mengelola perpustakaan.</p>
                                <a href="tampilan/struktur.php" class="btn btn-outline-danger mt-3 px-4">Lihat</a>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="menu-card p-4 shadow-sm rounded-4 text-center hover-effect">
                                <div class="menu-icon mb-3 text-info fs-1">
                                    <i class="bi bi-journal-text"></i>
                                </div>
                                <h4 class="fw-semibold mb-2">Peraturan & Tata Tertib</h4>
                                <p class="text-muted">Panduan dan aturan yang wajib ditaati oleh seluruh pengunjung.</p>
                                <a href="tampilan/peraturan.php" class="btn btn-outline-info mt-3 px-4">Lihat</a>
                            </div>
                        </div>


                    </div>
                </div>
            </section>

            <style>
                .hover-effect {
                    transition: all .3s ease;
                    background-color: #ffffff;
                }
                .hover-effect:hover {
                    transform: translateY(-6px);
                    box-shadow: 0 10px 20px rgba(0,0,0,0.15);
                }
                .menu-icon i {
                    transition: .3s ease;
                }
                .hover-effect:hover .menu-icon i {
                    color: #0d6efd;
                }
                .section-menu {
                    background-image: url('images/ISI PERPUS (2).jpg');
                    background-size: cover;
                    background-position: center;
                    background-attachment: fixed;
                    position: relative;
                }
                .section-menu::before {
                    content: "";
                    position: absolute;
                    inset: 0;
                    background: rgba(255,255,255,0.85);
                    z-index: 0;
                }
                .section-menu .container {
                    position: relative;
                    z-index: 1;
                }
            </style>

        </div>
    </section>

</main>

<footer class="site-footer">
            <div class="container">
                <div class="row align-items-start">

                    <!-- Kolom Logo -->
                    <div class="col-lg-3 col-md-6 col-12 mb-4">
                        <img src="images/LOGO STMI.png" alt="Logo STMI" class="img-fluid mb-3" style="max-width: 150px;">
                        <h5 class="text-white fw-bold">Perpustakaan STMI Jakarta</h5>
                        <p class="text-white-50 mb-0">Melayani dengan ilmu dan integritas</p>
                    </div>

                    <!-- Kolom Media Sosial -->
                    <div class="col-lg-4 col-md-6 col-12 mb-4">
                        <h5 class="site-footer-title mb-3"><b>Media Sosial</b></h5>
                        <ul class="list-unstyled mt-3">

                        <!-- Gmail 1 -->
                        <li class="d-flex align-items-center mb-2">
                            <a href="mailto:perpustakaan@stmi.ac.id" target="_blank" class="social-icon-link text-white fs-5 me-2">
                            <i class="bi bi-envelope-fill"></i>
                            </a>
                            <span class="text-white-50">perpustakaan@stmi.ac.id</span>
                        </li>

                        <!-- Gmail 2 -->
                        <li class="d-flex align-items-center mb-2">
                            <a href="mailto:lib.politeknikstmi@gmail.com" target="_blank" class="social-icon-link text-white fs-5 me-2">
                            <i class="bi bi-envelope-fill"></i>
                            </a>
                            <span class="text-white-50">lib.politeknikstmi@gmail.com</span>
                        </li>

                        <!-- Instagram 1 -->
                        <li class="d-flex align-items-center mb-2">
                            <a href="https://instagram.com/stmijakarta" target="_blank" class="social-icon-link text-white fs-5 me-2">
                            <i class="bi bi-instagram"></i>
                            </a>
                            <span class="text-white-50">@stmijakarta</span>
                        </li>

                        <!-- Instagram 2 -->
                        <li class="d-flex align-items-center mb-2">
                            <a href="https://instagram.com/perpus.politeknikstmijkt" target="_blank" class="social-icon-link text-white fs-5 me-2">
                            <i class="bi bi-instagram"></i>
                            </a>
                            <span class="text-white-50">@perpus.politeknikstmijkt</span>
                        </li>

                        <!-- tiktok -->
                        <li class="d-flex align-items-center mb-2">
                            <a href="https://www.tiktok.com/@perpustakaan_stmijkt" target="_blank" class="social-icon-link text-white fs-5 me-2">
                            <i class="bi bi-tiktok"></i>
                            </a>
                            <span class="text-white-50">@perpustakaan_stmijkt</span>
                        </li>

                        </ul>

                        <p class="text-white-50 mt-3">Ikuti kami untuk informasi dan update terbaru.</p>
                    </div>

                    <!-- Kolom Kontak dan Jam Layanan -->
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
            

                <!-- Bagian bawah footer -->
                <div class="site-footer-bottom py-3">
                    <div class="container text-center">
                    <p class="mb-0 text-white-50">
                        © 2025 Perpustakaan Politeknik STMI Jakarta
                    </p>
                </div>
            </div>
        </footer>

<!-- JAVASCRIPT -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.backstretch.min.js"></script>
<script src="js/counter.js"></script>
<script src="js/countdown.js"></script>
<script src="js/init.js"></script>
<script src="js/modernizr.js"></script>
<script src="js/animated-headline.js"></script>
<script src="js/custom.js"></script>

<script>
    document.querySelectorAll('.dropdown-toggle').forEach(function(drop) {
        drop.addEventListener('click', function(e) {
            if (window.innerWidth < 992) {
                e.preventDefault();
                let menu = this.nextElementSibling;
                menu.classList.toggle('show');
            }
        });
    });
</script>

</body>
</html>
