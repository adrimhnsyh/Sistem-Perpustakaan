<?php
// halaman E-Resources
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="icon" type="image/png" href="../images/LOGO STMI.png">
    <title>E-Resources | Perpustakaan STMI Jakarta</title>

    <!-- CSS FILES -->        
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,700;1,400&display=swap" rel="stylesheet">

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

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">

                <li class="nav-item">
                    <a class="nav-link" href="../index.php">Home</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarLightDropdownMenuLink" role="button" data-bs-toggle="dropdown">Profil</a>

                    <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarLightDropdownMenuLink">
                        <li><a class="dropdown-item" href="sejarah.php">Sejarah</a></li>
                        <li><a class="dropdown-item" href="visi_misi.php">Visi Misi</a></li>
                        <li><a class="dropdown-item" href="tujuan_fungsi.php">Tujuan & Fungsi</a></li>
                        <li><a class="dropdown-item" href="struktur.php">Struktur Organisasi</a></li>
                        <li><a class="dropdown-item" href="peraturan.php">Peraturan & Tata Tertib</a></li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="layanan.php">Layanan</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link active" href="e-resources.php">E-Resources</a>
                </li>

                <li class="nav-item ms-3">
                    <a class="nav-link custom-btn custom-border-btn custom-btn-bg-white btn" href="login.php">Login Admin</a>
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
                <h1 class="text-white mb-lg-0">E-Resources</h1>
            </div>

            <div class="col-lg-4 col-12 d-flex justify-content-lg-end align-items-center ms-auto">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">E-Resources</li>
                    </ol>
                </nav>
            </div>

        </div>
    </div>
</section>


<section class="partners-section">
    <div class="container">
        <div class="row justify-content-center align-items-center">

            <div class="col-lg-12 col-12">
                <h4 class="partners-section-title bg-white shadow-lg">Portal Jurnal Nasional</h4>
            </div>

            <div class="col-lg-2 col-md-4 col-6">
                <a href="https://garuda.kemdikbud.go.id" target="_blank">
                    <img src="../images/partners/garuda1.png" class="partners-image img-fluid">
                </a>
            </div>

            <div class="col-lg-2 col-md-4 col-6">
                <a href="https://sinta.kemdiktisaintek.go.id/" target="_blank">
                    <img src="../images/partners/sinta.png" class="partners-image img-fluid">
                </a>
            </div>

            <div class="col-lg-2 col-md-4 col-6">
                <a href="https://scholar.google.com/" target="_blank">
                    <img src="../images/partners/google-scholar.png" class="partners-image img-fluid">
                </a>
            </div>

            <div class="col-lg-2 col-md-4 col-6">
                <a href="https://www.emerald.com/" target="_blank">
                    <img src="../images/partners/logo-emerald.jpeg" class="partners-image img-fluid">
                </a>
            </div>

            <div class="col-lg-2 col-md-4 col-6">
                <a href="https://pubs.acs.org/" target="_blank">
                    <img src="../images/partners/acs-logo.svg" class="partners-image img-fluid">
                </a>
            </div>

            <div class="col-lg-2 col-md-4 col-6">
                <a href="https://www.neliti.com/id/" target="_blank">
                    <img src="../images/partners/neliti-logo.svg" class="partners-image img-fluid">
                </a>
            </div>

        </div>
    </div>
</section>

<section class="partners-section my-5">
    <div class="container">

        <!-- Tabs -->
        <ul class="nav nav-tabs" id="journalTabs" role="tablist">
            <li class="nav-item">
                <button class="nav-link active" id="nasional-tab" data-bs-toggle="tab" data-bs-target="#nasional" role="tab">
                    Jurnal Nasional
                </button>
            </li>
            <li class="nav-item">
                <button class="nav-link" id="internasional-tab" data-bs-toggle="tab" data-bs-target="#internasional" role="tab">
                    Jurnal Internasional
                </button>
            </li>
            <li class="nav-item">
                <button class="nav-link" id="free-tab" data-bs-toggle="tab" data-bs-target="#free" role="tab">
                    Free Books & Journals
                </button>
            </li>
        </ul>

        <!-- Tab Content -->
        <div class="tab-content p-4 border border-top-0">

            <!-- Jurnal Nasional -->
            <div class="tab-pane fade show active" id="nasional" role="tabpanel">
                <ul style="line-height: 1.8; text-align: left;">
                <h5 class="fw-bold mb-3">Jurnal Nasional</h5>

                <ul style="line-height: 1.8;">
                    <li>JUSI (Sistem Informasi – Universitas Ahmad Dahlan)
                        <a href="http://is.uad.ac.id/jusi/" target="_blank">Link</a>
                    </li>
                    <li>JIKI (Jurnal Ilmu Komputer – Fakultas Ilmu Komputer UI)
                        <a href="http://jiki.cs.ui.ac.id/" target="_blank">Link</a>
                    </li>
                    <li>JITI (Jurnal Sistem Informasi – MTI Fasilkom UI)
                        <a href="http://jurnal.mti.cs.ui.ac.id/" target="_blank">Link</a>
                    </li>
                    <li>Jurnal Informatika – Universitas Kristen Duta Wacana
                        <a href="http://ti.ukdw.ac.id/ojs/index.php/informatika" target="_blank">Link</a>
                    </li>
                    <li>Media Informatika – Universitas Islam Indonesia
                        <a href="http://journal.uii.ac.id/" target="_blank">Link</a>
                    </li>
                    <li>Kursor – Universitas Trunojoyo
                        <a href="http://journal.trunojoyo.ac.id/kursor" target="_blank">Link</a>
                    </li>
                    <li>JBI (Jurnal Buana Informatika – Universitas Atma Jaya Yogyakarta)
                        <a href="http://ejournal.uajy.ac.id/" target="_blank">Link</a>
                    </li>
                    <li>JITEE – Universitas Gadjah Mada
                        <a href="https://journal.ugm.ac.id/jitee" target="_blank">Link</a>
                    </li>
                    <li>SISFO – Institut Teknologi Sepuluh Nopember
                        <a href="https://ejurnal.its.ac.id/sisfo" target="_blank">Link</a>
                    </li>
                    <li>JUSITI – STMIK Dipanegara Makassar
                        <a href="http://ojs.dipanegara.ac.id/" target="_blank">Link</a>
                    </li>
                    <li>Jurnal Teknologi dan Manajemen
                        <a href="#" target="_blank">Link</a>
                    </li>
                    <li>Jurnal Teknik ITS
                        <a href="https://ejurnal.its.ac.id/index.php/teknik" target="_blank">Link</a>
                    </li>
                    <li>Jurnal Rekayasa Proses
                        <a href="https://ejournal.undip.ac.id/index.php/jrekpros" target="_blank">Link</a>
                    </li>
                    <li>Jurnal Bahan Alam Terbarukan
                        <a href="https://ejournal.undip.ac.id/index.php/bat" target="_blank">Link</a>
                    </li>
                    <li>Sainmatika: Jurnal Ilmiah Matematika dan IPA
                        <a href="https://jurnal.unimus.ac.id/index.php/sainmatika" target="_blank">Link</a>
                    </li>
                    <li>Jurnal Teknologi
                        <a href="#" target="_blank">Link</a>
                    </li>
                    <li>Jurnal Riset Teknologi Pencegahan Pencemaran Industri
                        <a href="https://ejournal.kemenperin.go.id/jrtppi" target="_blank">Link</a>
                    </li>
                    <li>Jurnal Litbang Industri
                        <a href="https://ejournal.kemenperin.go.id/jli" target="_blank">Link</a>
                    </li>
                    <li>Biopropal Industri
                        <a href="https://ejournal.kemenperin.go.id/biopropal" target="_blank">Link</a>
                    </li>
                    <li>Majalah Kulit, Karet, dan Plastik
                        <a href="https://ejournal.kemenperin.go.id/mkkp" target="_blank">Link</a>
                    </li>
                    <li>Jurnal Selulosa
                        <a href="https://ejournal.kemenperin.go.id/jselulosa" target="_blank">Link</a>
                    </li>
                    <li>Arena Tekstil
                        <a href="https://ejournal.kemenperin.go.id/arenatekstil" target="_blank">Link</a>
                    </li>
                    <li>Berita Litbang Industri
                        <a href="https://ejournal.kemenperin.go.id/blbi" target="_blank">Link</a>
                    </li>
                    <li>Jurnal Dinamika Penelitian Industri
                        <a href="https://ejournal.kemenperin.go.id/jdpi" target="_blank">Link</a>
                    </li>
                    <li>Dinamika Kerajinan dan Batik: Majalah Ilmiah
                        <a href="https://ejournal.kemenperin.go.id/dkb" target="_blank">Link</a>
                    </li>
                    <li>Jurnal Kimia dan Kemasan
                        <a href="https://ejournal.kemenperin.go.id/jkk" target="_blank">Link</a>
                    </li>
                    <li>Jurnal Industri Hasil Perkebunan
                        <a href="https://ejournal.kemenperin.go.id/jihp" target="_blank">Link</a>
                    </li>
                    <li>Jurnal Teknik dan Teknologi
                        <a href="#" target="_blank">Link</a>
                    </li>
                    <li>Jurnal Penelitian Teknologi Industri
                        <a href="https://ejournal.kemenperin.go.id/jpti" target="_blank">Link</a>
                    </li>
                    <li>Warta Industri Hasil Pertanian
                        <a href="https://ejournal.kemenperin.go.id/wihp" target="_blank">Link</a>
                    </li>
                    <li>Jurnal Riset Teknologi Industri
                        <a href="https://ejournal.kemenperin.go.id/jrti" target="_blank">Link</a>
                    </li>
                    <li>Jurnal Teknologi Agroindustri
                        <a href="https://ejournal.umm.ac.id/index.php/jtai" target="_blank">Link</a>
                    </li>
                    <li>Majalah BIAM
                        <a href="https://ejournal.kemenperin.go.id/biam" target="_blank">Link</a>
                    </li>
                    <li>Jurnal Teknologi Bahan dan Barang Teknik
                        <a href="https://ejournal.kemenperin.go.id/jtbb" target="_blank">Link</a>
                    </li>
                    <li>Jurnal Riset Industri Hasil Hutan
                        <a href="https://ejournal.kemenperin.go.id/jrihh" target="_blank">Link</a>
                    </li>
                    <li>Jurnal Metal Indonesia
                        <a href="https://ejournal.kemenperin.go.id/jmi" target="_blank">Link</a>
                    </li>
                    <li>Jurnal Keramik dan Gelas Indonesia
                        <a href="https://ejournal.kemenperin.go.id/jkgi" target="_blank">Link</a>
                    </li>
                    <li>Jurnal Hasil Penelitian Industri
                        <a href="https://ejournal.kemenperin.go.id/jhpi" target="_blank">Link</a>
                    </li>
                    <li>Journal of Industrial Research
                        <a href="https://ejournal.kemenperin.go.id/jir" target="_blank">Link</a>
                    </li>
                    <li>Jurnal Teknologi Proses dan Inovasi Industri
                        <a href="https://ejournal.kemenperin.go.id/jtpii" target="_blank">Link</a>
                    </li>
                </ul>
            </div>


            <!-- Jurnal Internasional -->
            <div class="tab-pane fade" id="internasional" role="tabpanel">
                <h5 class="fw-bold mb-3">Jurnal Internasional</h5>

                <ul style="line-height: 1.8; text-align: left;">
                    <li>IJCSIT (International Journal on Computer Science and Information Technologies)
                        <a href="http://www.ijcsit.com/" target="_blank">Link</a>
                    </li>
                    <li>ETASR (Engineering, Technology & Applied Science Research)
                        <a href="http://etasr.com/" target="_blank">Link</a>
                    </li>
                    <li>IJEEI (International Journal on Electrical Engineering & Informatics)
                        <a href="http://www.ijeei.org/" target="_blank">Link</a>
                    </li>
                    <li>IJITM (International Journal of Innovation and Technology Management)
                        <a href="https://www.worldscientific.com/worldscinet/ijitm" target="_blank">Link</a>
                    </li>
                    <li>IJCSI (International Journal of Computer Science Issues)
                        <a href="http://ijcsi.org/" target="_blank">Link</a>
                    </li>
                    <li>IJCA (International Journal of Computer Applications)
                        <a href="https://www.ijcaonline.org/" target="_blank">Link</a>
                    </li>
                    <li>GJCST (Global Journal of Computer Science and Technology)
                        <a href="https://computerresearch.org/index.php/computer" target="_blank">Link</a>
                    </li>
                    <li>IJSIT (Journal of Systems and Information Technology)
                        <a href="https://www.emerald.com/insight/publication/issn/1328-7265" target="_blank">Link</a>
                    </li>
                    <li>IJEERI (International Journal of Electrical Electronics Research & Innovation)
                        <a href="#" target="_blank">Link</a>
                    </li>
                    <li>NJCA (Nusantara Journal of Computer Applications)
                        <a href="https://nusantarajca.xyz/" target="_blank">Link</a>
                    </li>
                    <li>Journal of Computer and System Sciences
                        <a href="https://www.sciencedirect.com/journal/journal-of-computer-and-system-sciences" target="_blank">Link</a>
                    </li>
                    <li>International Journal of Computer Systems (IJCS)
                        <a href="https://www.ijcsjournal.org/" target="_blank">Link</a>
                    </li>
                    <li>Journal of Computer Information Systems
                        <a href="https://www.tandfonline.com/toc/ucis20/current" target="_blank">Link</a>
                    </li>
                    <li>Journal of Computer and Systems Sciences International
                        <a href="https://www.springer.com/journal/11954" target="_blank">Link</a>
                    </li>
                    <li>International Journal of Computer Systems Science and Engineering
                        <a href="https://www.journalspub.info/computers/" target="_blank">Link</a>
                    </li>
                    <li>International Journal of Technology
                        <a href="https://ijtech.eng.ui.ac.id/" target="_blank">Link</a>
                    </li>
                    <li>Journal of Engineering and Technological Sciences
                        <a href="https://journals.itb.ac.id/index.php/jets" target="_blank">Link</a>
                    </li>
                    <li>Polymer Degradation and Stability
                        <a href="https://www.sciencedirect.com/journal/polymer-degradation-and-stability" target="_blank">Link</a>
                    </li>
                    <li>Polymer Testing
                        <a href="https://www.sciencedirect.com/journal/polymer-testing" target="_blank">Link</a>
                    </li>
                </ul>
            </div>


            <!-- Free Books & Journals -->
            <div class="tab-pane fade" id="free" role="tabpanel">
                <h5 class="fw-bold mb-3">Free Books & Journals</h5>

                <ul style="line-height: 1.8; text-align: left;">

                    <li><strong>Research Paper or Books</strong></li>
                    <li><a href="http://gen.lib.rus.ec" target="_blank">http://gen.lib.rus.ec</a></li>
                    <li><a href="http://sci-hub.org" target="_blank">http://sci-hub.org</a></li>
                    <li><a href="http://sci-hub.cc" target="_blank">http://sci-hub.cc</a></li>
                    <li><a href="http://sci-hub.bz" target="_blank">http://sci-hub.bz</a></li>
                    <li><a href="http://search.crossref.org" target="_blank">http://search.crossref.org</a></li>
                    <li><a href="http://booksc.org" target="_blank">http://booksc.org</a></li>
                    <li><a href="http://libgen.io" target="_blank">http://libgen.io</a></li>
                    <li><a href="http://gen.lib.rus.ec/scimag/" target="_blank">http://gen.lib.rus.ec/scimag/</a></li>
                    <li><a href="http://airccj.org/csecfp/library/index.php" target="_blank">http://airccj.org/csecfp/library/index.php</a></li>

                    <br>

                    <li><strong>For Text Books</strong></li>
                    <li><a href="http://libgen.org" target="_blank">http://libgen.org</a></li>
                    <li><a href="http://gen.lib.rus.ec/" target="_blank">http://gen.lib.rus.ec/</a></li>
                    <li><a href="http://en.bookfi.org/" target="_blank">http://en.bookfi.org/</a></li>
                    <li><a href="http://lib.freescienceengineering.org/" target="_blank">http://lib.freescienceengineering.org/</a></li>
                    <li><a href="http://bookza.org/" target="_blank">http://bookza.org/</a></li>
                    <li><a href="http://bookzz.org/" target="_blank">http://bookzz.org/</a></li>

                    <br>

                    <li><strong>Open Access</strong></li>

                    <li>Directory of Open Access scholarly Resources (ROAD)
                        <a href="http://www.kopertis12.or.id/2016/03/13/directory-of-open-access-scholarly-resources-road.html" target="_blank">Link</a>
                    </li>

                    <li>Indonesia OneSearch - Perpusnas
                        <a href="http://www.kopertis12.or.id/2016/02/12/indonesia-onesearch-by-the-national-library-of-indonesia-2016.html" target="_blank">Link</a>
                    </li>

                    <li>Elsevier Journal Finder
                        <a href="http://journalfinder.elsevier.com" target="_blank">Link</a>
                    </li>

                    <li>Elsevier/ScienceDirect Open Access
                        <a href="http://www.sciencedirect.com/science/journals/all/all-open-access" target="_blank">Link</a>
                    </li>

                    <li>OMICS Open Access Journals
                        <a href="http://www.omicsonline.org/open-access-journals-list.php" target="_blank">Link</a>
                    </li>

                    <li>IEEE Xplore Digital Library
                        <a href="http://ieeexplore.ieee.org/Xplore/home.jsp" target="_blank">Link</a>
                    </li>

                    <li>Wiley Open Access Journals
                        <a href="http://www.wileyopenaccess.com/view/journals.html" target="_blank">Link</a>
                    </li>

                    <li>DOAJ — Directory of Open Access Journals
                        <a href="https://doaj.org" target="_blank">Link</a>
                    </li>

                    <li>Open Access Journals Search Engine (OAJSE)
                        <a href="http://www.oajse.com" target="_blank">Link</a>
                    </li>

                    <li>BookSC (World’s largest scientific article store)
                        <a href="http://booksc.org/" target="_blank">Link</a>
                    </li>

                    <li>Portal e-Journal Kemristekdikti — ProQuest
                        <a href="http://search.proquest.com" target="_blank">ProQuest</a>
                    </li>

                    <li>Portal e-Journal Kemristekdikti — Cengage
                        <a href="http://infotrac.galegroup.com/itweb" target="_blank">Cengage</a>
                    </li>

                    <li>Pencarian Terpadu Ristekdikti
                        <a href="http://ristekdikti.summon.serialssolutions.com" target="_blank">Link</a>
                    </li>

                    <li>Petunjuk Username & Password e-journal Ristekdikti
                        <a href="http://simlitabmas.dikti.go.id/ejournal/Default.aspx" target="_blank">Link</a>
                    </li>
                </ul>
            </div>


        </div>

    </div>
</section>


</main>

<footer class="site-footer">
    <div class="container">
        <div class="row align-items-start">

            <div class="col-lg-3 col-md-6 col-12 mb-4">
                <img src="../images/LOGO STMI.png" alt="Logo STMI" class="img-fluid mb-3" style="max-width: 150px;">
                <h5 class="text-white fw-bold">Perpustakaan STMI Jakarta</h5>
                <p class="text-white-50 mb-0">Melayani dengan ilmu dan integritas</p>
            </div>

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

                <p class="text-white-50 mt-3">Ikuti kami untuk informasi terbaru.</p>
            </div>

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

        <div class="site-footer-bottom py-3">
            <div class="container text-center">
                <p class="mb-0 text-white-50">
                    © 2025 Perpustakaan Politeknik STMI Jakarta
                </p>
            </div>
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