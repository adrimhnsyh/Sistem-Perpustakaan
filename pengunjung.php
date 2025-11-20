<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Buku yang Belum Dikembalikan - Politeknik STMI Jakarta</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Poppins', sans-serif;
    }

    body {
      background-color: #e3f2fd;
      color: #333;
      display: flex;
      min-height: 100vh;
    }

    /* Sidebar */
    .sidebar {
      width: 260px;
      background: linear-gradient(180deg, #1565c0, #0d47a1);
      color: #fff;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      box-shadow: 4px 0 15px rgba(0,0,0,0.15);
      position: fixed;
      height: 100vh;
      overflow-y: auto;
      scrollbar-width: thin;
      scrollbar-color: rgba(255,255,255,0.3) transparent;
    }

    .sidebar::-webkit-scrollbar {
      width: 6px;
    }
    .sidebar::-webkit-scrollbar-thumb {
      background-color: rgba(255,255,255,0.3);
      border-radius: 10px;
    }

    .sidebar-header {
      text-align: center;
      padding: 25px 10px;
      border-bottom: 1px solid rgba(255,255,255,0.2);
    }

    .sidebar-header img {
      width: 100px;
      margin-bottom: 12px;
    }

    .sidebar-header h3 {
      font-size: 17px;
      font-weight: 700;
      color: #fff;
      line-height: 1.4;
    }

    .sidebar-header p {
      font-size: 13px;
      color: #cfd8dc;
      margin-top: 4px;
    }

    .menu {
      padding: 20px;
      flex-grow: 1;
    }

    .menu-section {
      margin-bottom: 25px;
    }

    .menu-section h4 {
      font-size: 14px;
      color: #bbdefb;
      margin-bottom: 8px;
      border-left: 3px solid #ffca28;
      padding-left: 8px;
      font-weight: 600;
      text-transform: uppercase;
    }

    .menu a {
      display: block;
      color: #fff;
      text-decoration: none;
      font-size: 14px;
      padding: 8px 10px;
      border-radius: 6px;
      transition: 0.3s;
    }

    .menu a:hover {
      background-color: rgba(255, 255, 255, 0.15);
      padding-left: 15px;
    }

    .menu .back-dashboard {
      margin-top: 15px;
      background-color: rgba(255, 255, 255, 0.15);
      text-align: center;
      font-weight: 600;
    }

    .menu .back-dashboard:hover {
      background-color: rgba(255, 255, 255, 0.25);
    }

    .sidebar-footer {
      text-align: center;
      padding: 15px;
      background: rgba(255,255,255,0.1);
      font-size: 13px;
      flex-shrink: 0;
    }

    /* Main Content */
    .main-content {
      margin-left: 260px;
      flex: 1;
      background-color: #f8fbff;
      padding: 25px;
    }

    header {
      background: #1976d2;
      color: #fff;
      padding: 15px 25px;
      border-radius: 12px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      box-shadow: 0 4px 12px rgba(0,0,0,0.2);
    }

    header h2 {
      font-size: 18px;
      font-weight: 600;
    }

    .user-info {
      font-size: 14px;
      background: rgba(255,255,255,0.2);
      padding: 6px 12px;
      border-radius: 8px;
    }

    /* Kartu Statistik */
    .stats-card {
      background: linear-gradient(135deg, #64b5f6, #1976d2);
      color: white;
      border-radius: 12px;
      padding: 20px;
      margin-top: 25px;
      box-shadow: 0 3px 12px rgba(0,0,0,0.15);
      text-align: center;
    }

    .stats-card h3 {
      font-size: 18px;
      margin-bottom: 8px;
      font-weight: 600;
    }

    .stats-card p {
      font-size: 26px;
      font-weight: 700;
    }

    /* Grafik */
    .chart-container {
      margin-top: 25px;
      background: #fff;
      border-radius: 12px;
      padding: 25px;
      box-shadow: 0 3px 10px rgba(0,0,0,0.1);
    }

    .chart-container h3 {
      color: #0d47a1;
      margin-bottom: 15px;
      font-size: 18px;
    }

    /* Tabel */
    .content-box {
      margin-top: 25px;
      background: #fff;
      border-radius: 12px;
      padding: 25px;
      box-shadow: 0 3px 10px rgba(0,0,0,0.1);
    }

    .content-box h3 {
      margin-bottom: 20px;
      color: #0d47a1;
      font-size: 18px;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      font-size: 14px;
    }

    thead {
      background-color: #1976d2;
      color: #fff;
    }

    th, td {
      padding: 10px 12px;
      text-align: left;
      border-bottom: 1px solid #ddd;
    }

    tbody tr:nth-child(even) {
      background-color: #f2f8ff;
    }

    tbody tr:hover {
      background-color: #e3f2fd;
    }

    .arsip-link {
      color: #1976d2;
      font-weight: 600;
      text-decoration: none;
    }

    .arsip-link:hover {
      text-decoration: underline;
    }

    footer {
      text-align: center;
      margin-top: 20px;
      color: #777;
      font-size: 13px;
    }

    @media (max-width: 768px) {
      .sidebar {
        display: none;
      }
      .main-content {
        margin-left: 0;
      }
      table {
        font-size: 12px;
      }
    }
  </style>
</head>
<body>
  <!-- Sidebar -->
  <aside class="sidebar">
    <div>
      <div class="sidebar-header">
        <img src="images/Logo - STMI.svg" alt="Logo STMI">
        <h3>Politeknik STMI Jakarta</h3>
        <p>Kementerian Perindustrian RI</p>
      </div>

      <div class="menu">
        <div class="menu-section">
          <h4>Menu Admin</h4>
          <a href="daftarpinjam.html">📚 Daftar Pinjam</a>
          <a href="transaksi.html">💳 Transaksi</a>
          <a href="rekap.html">📊 Rekap Transaksi</a>
          <a href="rekapta.html">📊 Rekap Transaksi TA</a>
          <a href="#">📘 Koleksi Buku</a>
          <a href="#">📖 Kodifikasi Buku</a>
          <a href="#">👥 Anggota</a>
          <a href="pengunjung.html">🧍‍♂️ Daftar Pengunjung Perpustakaan</a>
          <a href="#">🆕 Data Mahasiswa Baru</a>
        </div>

        <div class="menu-section">
          <h4>Laporan</h4>
          <a href="#">📨 Permohonan Surat Bebas Perpustakaan</a>
          <a href="#">📈 Hasil Survey Kepuasan</a>
        </div>

        <a href="dashboard.html" class="back-dashboard">⬅️ Kembali ke Dashboard</a>
      </div>
    </div>

    <div class="sidebar-footer">
      © 2025 Politeknik STMI Jakarta
    </div>
  </aside>

  <!-- Main Content -->
  <main class="main-content">
    <header>
      <h2>Daftar Buku yang Belum Dikembalikan</h2>
      <div class="user-info">👋 Halo, Admin</div>
    </header>

    <!-- Kartu Statistik Kunjungan -->
    <div class="stats-card">
      <h3>Jumlah Kunjungan Perpustakaan Hari Ini</h3>
      <p id="visitCount">0</p>
    </div>

    <!-- Grafik Kunjungan -->
    <div class="chart-container">
      <h3>Statistik Kunjungan Per Bulan</h3>
      <canvas id="visitorChart" height="100"></canvas>
    </div>

    <!-- Tabel Data -->
    <div class="content-box">
  <h3>Daftar Pengunjung Perpustakaan</h3>
  <table>
    <thead>
      <tr>
        <th>No.</th>
        <th>Id Pengunjung</th>
        <th>Nama</th>
        <th>Jenis</th>
        <th>Tujuan</th>
        <th>Tanggal</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>2921058</td>
        <td>Wiono Adi Nugroho</td>
        <td>Mahasiswa</td>
        <td>Pengurusan Surat Bebas Perpustakaan;</td>
        <td>2025-11-12 15:23:15</td>
      </tr>
      <tr>
        <td>2</td>
        <td>1323052</td>
        <td>Kevin Ezekiel Bayak</td>
        <td>Umum</td>
        <td>Kunjungan Biasa;</td>
        <td>2025-11-12 15:00:38</td>
      </tr>
      <tr>
        <td>3</td>
        <td>1323053</td>
        <td>Rafi Arya Putra</td>
        <td>Mahasiswa</td>
        <td>Kunjungan Biasa; Mencari Referensi (TA / Jurnal);</td>
        <td>2025-11-12 14:51:30</td>
      </tr>
      <tr>
        <td>4</td>
        <td>1323046</td>
        <td>Alif Nur Rohmat</td>
        <td>Mahasiswa</td>
        <td>Kunjungan Biasa;</td>
        <td>2025-11-12 14:50:06</td>
      </tr>
      <tr>
        <td>5</td>
        <td>1523012</td>
        <td>Maudifa A'zahra Irawan</td>
        <td>Umum</td>
        <td>Kunjungan Biasa;</td>
        <td>2025-11-12 13:39:57</td>
      </tr>
      <tr>
        <td>6</td>
        <td>1121030</td>
        <td>Adam Dzulfikar</td>
        <td>Mahasiswa</td>
        <td>Kunjungan Biasa;</td>
        <td>2025-11-12 13:35:41</td>
      </tr>
      <tr>
        <td>7</td>
        <td>1521015</td>
        <td>Mohamad Yusup Azhari</td>
        <td>Mahasiswa</td>
        <td>Pengurusan Surat Bebas Perpustakaan;</td>
        <td>2025-11-12 09:54:04</td>
      </tr>
      <tr>
        <td>8</td>
        <td>1525045</td>
        <td>Klemens Zefanya Nadeak</td>
        <td>Umum</td>
        <td>Kunjungan Biasa; Membaca Buku;</td>
        <td>2025-11-12 09:12:35</td>
      </tr>
      <tr>
        <td>9</td>
        <td>1323074</td>
        <td>Mohaqi Dwi Kartiko</td>
        <td>Mahasiswa</td>
        <td>Kunjungan Biasa;</td>
        <td>2025-11-12 08:25:04</td>
      </tr>
      <tr>
        <td>10</td>
        <td>1323081</td>
        <td>Muhammad Ikhsan Sikumbang</td>
        <td>Mahasiswa</td>
        <td>Bersantai / Menunggu Waktu;</td>
        <td>2025-11-12 08:01:02</td>
      </tr>
      <tr>
        <td>11</td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
        <td>2025-11-12 04:50:09</td>
      </tr>
      <tr>
        <td>12</td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
        <td>-</td>
        <td>2025-11-12 01:14:51</td>
      </tr>
    </tbody>
  </table>

  <div style="margin-top: 20px; font-size: 14px; color: #333;">
    <strong>Rekapitulasi:</strong><br>
    Kunjungan Biasa: 7<br>
    Membaca Buku: 1<br>
    Mencari Referensi (TA / Jurnal): 1<br>
    Meminjam / Mengembalikan Buku: 0<br>
    Pengurusan Surat Bebas Perpustakaan: 2<br>
    Keperluan Seputar Repository: 0<br>
    Bimbingan Penyusunan Tugas Akhir: 0<br>
    Bersantai / Menunggu Waktu: 1<br>
  </div>
</div>


    <footer>
      Dikelola oleh Politeknik STMI Jakarta
    </footer>
  </main>

  <script>
    // Simulasi data kunjungan harian
    const dailyVisits = Math.floor(Math.random() * (150 - 50 + 1)) + 50;
    document.getElementById("visitCount").textContent = dailyVisits.toLocaleString("id-ID");

    // Grafik Kunjungan Per Bulan
    const ctx = document.getElementById('visitorChart');
    new Chart(ctx, {
      type: 'bar',
      data: {
        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Agu', 'Sep', 'Okt', 'Nov', 'Des'],
        datasets: [{
          label: 'Jumlah Kunjungan',
          data: [320, 280, 350, 420, 400, 500, 550, 600, 480, 450, 390, 510],
          backgroundColor: '#1976d2',
          borderRadius: 8
        }]
      },
      options: {
        responsive: true,
        scales: {
          y: {
            beginAtZero: true,
            ticks: { stepSize: 100 }
          }
        },
        plugins: {
          legend: { display: false },
          tooltip: {
            callbacks: {
              label: (ctx) => ctx.parsed.y + ' pengunjung'
            }
          }
        }
      }
    });
  </script>
</body>
</html>
