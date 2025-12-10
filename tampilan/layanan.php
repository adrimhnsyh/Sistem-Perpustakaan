<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PERPUSTAKAAN Politeknik STMI Jakarta</title>

    <link rel="icon" type="image/png" href="../images/LOGO STMI.png">

    <!-- Fonts & CSS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">

    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/bootstrap-icons.css" rel="stylesheet">
    <link href="../css/tooplate-clean-work.css" rel="stylesheet">

    <!-- Custom Style -->
    <style>
      /* Accordion Styling */
      .accordion-button {
        font-weight: 600;
        background: #e9f2ff;
        color: #0d47a1;
        transition: all 0.3s ease;
      }
      .accordion-button:hover {
        background: #bbdefb;
        color: #08306b;
      }
      .accordion-button:not(.collapsed) {
        background: #bbdefb;
        color: #0d47a1;
        box-shadow: inset 0 -1px 0 rgba(0, 0, 0, 0.125);
      }
      .accordion-body {
        background: #fff;
        color: #333;
        line-height: 1.7;
      }
      .accordion-item {
        border-radius: 12px !important;
        margin-bottom: 10px;
        overflow: hidden;
      }
      .featured-block {
        background: #f9fafc;
      }
    </style>
  </head>

  <body>
    <!-- Header -->
    <header class="site-header">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 d-flex flex-wrap">
            <p class="d-flex me-4 mb-0">
              <i class="bi-book me-2"></i> BACA BUKU
            </p>
            <p class="d-flex d-none d-md-block mb-0">
              <i class="bi-clock-fill me-2"></i>
              <strong>Senin - Jumat</strong> 7:30 AM - 16:00 PM
            </p>
          </div>
        </div>
      </div>
    </header>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
      <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="index.php">
          <img src="../images/Logo - STMI.svg" alt="Politeknik STMI Jakarta" class="logo-stmi">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Profil</a>
              <ul class="dropdown-menu dropdown-menu-light">
                <li><a class="dropdown-item" href="sejarah.php">Sejarah</a></li>
                <li><a class="dropdown-item" href="visi_misi.php">Visi Misi</a></li>
                <li><a class="dropdown-item" href="tujuan_fungsi.php">Tujuan & Fungsi</a></li>
                <li><a class="dropdown-item" href="struktur.php">Struktur Organisasi</a></li>
                <li><a class="dropdown-item" href="peraturan.php">Peraturan & Tata Tertib</a></li>
              </ul>
            </li>

            <li class="nav-item"><a class="nav-link active" href="layanan.php">Layanan</a></li>
            <li class="nav-item"><a class="nav-link" href="e-resources.php">E-Resources</a></li>
            <li class="nav-item ms-3">
              <a class="nav-link custom-btn custom-border-btn custom-btn-bg-white btn" href="login.php">Login Admin</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <main>
      <!-- Banner -->
      <section class="banner-section d-flex justify-content-center align-items-end">
        <div class="section-overlay"></div>
        <div class="container">
          <div class="row">
            <div class="col-lg-7">
              <h1 class="text-white mb-lg-0">Layanan Perpustakaan</h1>
            </div>
            <div class="col-lg-4 d-flex justify-content-lg-end align-items-center ms-auto">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center">
                  <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Layanan Perpustakaan</li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </section>

      <!-- Konten -->
      <section class="section-padding">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-10 col-12">
              <div class="featured-block shadow-sm p-4 rounded-4">
                <p style="font-weight: bold; font-size: 18px;">
                  Perpustakaan Politeknik STMI Jakarta menyediakan berbagai layanan untuk mendukung kegiatan akademik mahasiswa, dosen, dan karyawan. Berikut penjelasan setiap layanan:
                </p>

                <div class="accordion mt-3" id="layananAccordion">
                      <!-- Sirkulasi -->
                      <div class="accordion-item">
                          <h2 class="accordion-header" id="headingOne">
                              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                  1. Layanan Sirkulasi
                              </button>
                          </h2>

                          <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne">
                              <div class="accordion-body" style="text-align: justify;">

                                  <p>
                                      Kata sirkulasi berasal dari bahasa Inggris “circulation” yang berarti perputaran atau peredaran. 
                                      Dalam ilmu perpustakaan, sirkulasi dikenal sebagai kegiatan peminjaman dan pengembalian bahan pustaka. 
                                      Pelayanan ini mencakup pencatatan, pengolahan transaksi, serta bantuan kepada pemustaka dalam 
                                      memanfaatkan koleksi perpustakaan. Meja sirkulasi menjadi ujung tombak layanan karena menjadi 
                                      tempat pertama yang berhubungan langsung dengan pengguna.
                                  </p>

                                  <p>
                                      Koleksi yang dapat dipinjam adalah buku teks/buku umum seperti komputer, motivasi, sosial, ekonomi, 
                                      sejarah, ilmu alam, novel, dan buku pendukung perkuliahan.
                                  </p>

                                  <hr>

                                  <!-- ALUR PEMINJAMAN -->
                                  <h5><strong>1) Alur Peminjaman Buku Teks/Buku Umum</strong></h5>

                                  <ul>
                                      <li>Pemustaka mengisi buku tamu kunjungan.</li>
                                      <li>Pemustaka mencari koleksi melalui katalog online atau langsung ke rak buku.</li>
                                      <li>Pemustaka menuju meja sirkulasi dan menyerahkan Kartu Tanda Mahasiswa (KTM).</li>
                                      <li>Pustakawan memproses peminjaman melalui sistem informasi perpustakaan.</li>
                                      <li>Maksimal peminjaman adalah 2 judul buku.</li>
                                      <li>Lama peminjaman adalah 7 (tujuh) hari kerja.</li>
                                      <li>Pustakawan memberi stempel masa pinjam dan menyerahkan buku kepada pemustaka.</li>
                                      <li>Pemustaka dapat meninggalkan ruang perpustakaan atau melanjutkan kegiatan di dalam ruang baca.</li>
                                  </ul>

                                  <hr>

                                  <!-- ALUR PENGEMBALIAN -->
                                  <h5><strong>2) Alur Pengembalian Buku</strong></h5>

                                  <ul>
                                      <li>Pemustaka mengisi buku tamu kunjungan.</li>
                                      <li>Pemustaka menuju meja sirkulasi dan menyerahkan buku beserta KTM.</li>
                                      <li>Pustakawan memproses pengembalian pada sistem.</li>
                                      <li>Pustakawan menginformasikan apakah terdapat keterlambatan.</li>
                                      <li>Jika terlambat, pemustaka wajib membayar denda sesuai ketentuan.</li>
                                      <li>Pemustaka dapat meninggalkan ruang perpustakaan atau melanjutkan aktivitas di ruang baca.</li>
                                  </ul>

                                  <hr>

                                  <!-- ALUR PERPANJANGAN -->
                                  <h5><strong>3) Alur Perpanjangan Buku</strong></h5>

                                  <p><strong>Ketentuan Perpanjangan:</strong></p>
                                  <ul>
                                      <li>Buku tidak sedang dibutuhkan oleh pemustaka lain.</li>
                                      <li>Buku yang akan diperpanjang harus dibawa ke meja sirkulasi.</li>
                                      <li>Perpanjangan hanya dapat dilakukan 1 (satu) kali.</li>
                                  </ul>

                                  <p><strong>Alur:</strong></p>
                                  <ul>
                                      <li>Pemustaka mengisi buku tamu kunjungan.</li>
                                      <li>Pemustaka menuju meja sirkulasi dan menyerahkan buku serta KTM.</li>
                                      <li>Pustakawan memproses perpanjangan melalui sistem.</li>
                                      <li>Pustakawan memberi tahu apakah ada keterlambatan.</li>
                                      <li>Jika terlambat, denda harus dibayarkan terlebih dahulu.</li>
                                      <li>Pemustaka dapat meninggalkan ruang perpustakaan atau melanjutkan kegiatan di dalam perpustakaan.</li>
                                  </ul>

                              </div>
                          </div>
                      </div>
                  </div>

                    <!-- REFERENSI -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                2. Layanan Referensi
                            </button>
                        </h2>

                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo">
                            <div class="accordion-body" style="text-align: justify;">

                                <p>
                                    Layanan Referensi adalah layanan yang menyediakan berbagai koleksi seperti kamus, ensiklopedia,
                                    handbooks, direktori, peraturan, prosiding, laporan penelitian, skripsi, dan sumber informasi lain
                                    yang berguna sebagai bahan rujukan. Koleksi referensi tidak boleh dipinjam pulang dan hanya dapat
                                    digunakan di ruang perpustakaan.
                                </p>

                                <p>
                                    Layanan ini berfungsi sebagai jembatan antara pemustaka dengan sumber informasi yang kompleks,
                                    membantu mahasiswa, dosen, peneliti, dan tenaga kependidikan menemukan informasi yang akurat
                                    dan relevan.
                                </p>

                                <hr>

                                <!-- TABEL KOLEKSI REFERENSI -->
                                <h5><strong>Koleksi Referensi yang Dimiliki</strong></h5>

                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead class="table-light">
                                            <tr>  
                                                <th>No</th>
                                                <th>Jenis Koleksi</th>
                                                <th>Jumlah Judul</th>
                                                <th>Jumlah Eksemplar</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr><td>1</td><td>Kamus</td><td>25</td><td>46</td></tr>
                                            <tr><td>2</td><td>Ensiklopedia</td><td>2</td><td>2</td></tr>
                                            <tr><td>3</td><td>Buku Pegangan (Handbook/Manual)</td><td>40</td><td>60</td></tr>
                                            <tr><td>4</td><td>Karya Referensi Lainnya</td><td>22</td><td>24</td></tr>
                                            <tr><td>5</td><td>Peraturan Perundang-undangan</td><td>22</td><td>25</td></tr>
                                            <tr><td>6</td><td>Prosiding/Dokumen Konferensi</td><td>9</td><td>10</td></tr>
                                            <tr><td>7</td><td>Diktat</td><td>12</td><td>37</td></tr>
                                            <tr><td>8</td><td>Laporan Penelitian</td><td>60</td><td>60</td></tr>
                                            <tr><td>9</td><td>Karya Lapangan</td><td>75</td><td>75</td></tr>
                                            <tr><td>10</td><td>Skripsi</td><td>3195</td><td>3195</td></tr>
                                        </tbody>
                                        <tfoot class="table-light">
                                            <tr>
                                                <th colspan="2">Jumlah Keseluruhan</th>
                                                <th>3462</th>
                                                <th>3534</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>

                                <hr>

                                <!-- JENIS LAYANAN -->
                                <h5><strong>Jenis Layanan Referensi</strong></h5>

                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead class="table-light">
                                            <tr>
                                                <th>No</th>
                                                <th>Jenis Layanan</th>
                                                <th>Keterangan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr><td>1</td><td>Layanan Informasi</td><td>Tersedia</td></tr>
                                            <tr><td>2</td><td>Layanan Bimbingan Pemustaka Koleksi Referensi</td><td>Tersedia</td></tr>
                                            <tr><td>3</td><td>Layanan Penelusuran</td><td>Tersedia</td></tr>
                                            <tr><td>4</td><td>Layanan Cek Plagiarisme</td><td>Tersedia</td></tr>
                                        </tbody>
                                    </table>
                                </div>

                                <hr>

                                <!-- 1. LAYANAN INFORMASI -->
                                <h5><strong>1. Layanan Informasi</strong></h5>
                                <p>
                                    Layanan Informasi menyediakan bantuan kepada pemustaka dalam mencari, mendapatkan, mengevaluasi,
                                    dan menggunakan informasi. Layanan ini sangat penting untuk mendukung penelitian, manajemen data,
                                    pendidikan, dan kebutuhan informasi sehari-hari.
                                </p>

                                <hr>

                                <!-- 2. BIMBINGAN PEMUSTAKA -->
                                <h5><strong>2. Layanan Bimbingan Pemustaka Koleksi Referensi</strong></h5>

                                <p>Layanan ini membantu pemustaka memahami dan memanfaatkan koleksi referensi dengan optimal.</p>

                                <ul>
                                    <li><strong>Panduan Pencarian Informasi:</strong> Membantu teknik pencarian katalog online dan offline.</li>
                                    <li><strong>Penjelasan Jenis Koleksi:</strong> Kamus, ensiklopedia, jurnal, dan sumber digital.</li>
                                    <li><strong>Bantuan Akses Teknologi:</strong> Penggunaan database, perangkat lunak, dan platform digital.</li>
                                    <li><strong>Penyusunan Sumber Informasi:</strong> Panduan membuat daftar referensi dan catatan.</li>
                                    <li><strong>Sesi Pembelajaran Kelompok:</strong> Diskusi dan praktik penelusuran kolektif.</li>
                                </ul>

                                <hr>

                                <!-- 3. LAYANAN PENELUSURAN -->
                                <h5><strong>3. Layanan Penelusuran</strong></h5>

                                <ul>
                                    <li><strong>Akses Koleksi:</strong> Buku, jurnal, artikel ilmiah, TA, dan sumber digital.</li>
                                    <li><strong>Bantuan Petugas:</strong> Membantu merumuskan pertanyaan dan strategi penelusuran.</li>
                                    <li><strong>Teknologi Pencarian:</strong> Katalog online, jurnal elektronik, dan database lainnya.</li>
                                </ul>

                                <hr>

                                <!-- 4. LAYANAN CEK PLAGIARISME -->
                                <h5><strong>4. Layanan Cek Plagiarisme</strong></h5>

                                <p>
                                    Layanan ini menggunakan <strong>Turnitin</strong> untuk mengecek tingkat kesamaan karya ilmiah sebelum publikasi.
                                    Mahasiswa wajib menyerahkan laporan tugas akhir dengan hasil kesamaan <strong>maksimal 30%</strong>.
                                </p>

                            </div>
                        </div>
                    </div>

                    <!-- Surat Bebas -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFive">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                3. Layanan Surat Bebas Perpustakaan
                            </button>
                        </h2>

                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive">
                            <div class="accordion-body" style="text-align: justify;">

                                <p>
                                    Layanan Surat Bebas Perpustakaan adalah proses administrasi yang wajib dilakukan mahasiswa 
                                    sebelum dinyatakan lulus. Surat ini memastikan bahwa mahasiswa telah memenuhi seluruh 
                                    kewajiban perpustakaan, termasuk penyerahan laporan tugas akhir dan hasil Turnitin.
                                </p>

                                <h5><strong>Alur Pengurusan Surat Bebas Perpustakaan:</strong></h5>

                                <ol>
                                    <li>Mahasiswa telah menyelesaikan sidang akhir/seminar hasil dan memperoleh seluruh tanda tangan dosen pembimbing serta penguji, serta laporan telah direvisi.</li>
                                    <li>Mahasiswa mengunggah laporan tugas akhir ke link repositori (link diperoleh dari perpustakaan).</li>
                                    <li>Petugas repositori memproses unggahan laporan tugas akhir tersebut.</li>
                                    <li>Petugas repositori memberikan link hasil unggahan yang telah diterima di repositori.</li>
                                    <li>Mahasiswa mencetak 1 (satu) hardcopy laporan tugas akhir dan menyerahkannya ke perpustakaan.</li>
                                    <li>Mahasiswa membawa lembar hasil Turnitin yang menunjukkan tingkat kesamaan di bawah 30%.</li>
                                    <li>Mahasiswa menunjukkan link repositori yang telah dikonfirmasi oleh petugas repositori.</li>
                                    <li>Pustakawan memproses pengurusan Surat Bebas Perpustakaan pada sistem informasi perpustakaan.</li>
                                    <li>Mahasiswa mengajukan permohonan Surat Bebas Perpustakaan melalui e-learning.</li>
                                    <li>Pustakawan melakukan validasi dan mencetak Surat Keterangan Bebas Perpustakaan.</li>
                                    <li>Mahasiswa menerima Surat Keterangan Bebas Perpustakaan.</li>
                                </ol>

                            </div>
                        </div>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>

    <!-- Footer -->
    <footer class="site-footer">
            <div class="container">
                <div class="row align-items-start">

                    <!-- Kolom Logo -->
                    <div class="col-lg-3 col-md-6 col-12 mb-4">
                        <img src="../images/LOGO STMI.png" alt="Logo STMI" class="img-fluid mb-3" style="max-width: 150px;">
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

    <!-- Scripts -->
    <script src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../js/custom.js"></script>
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
