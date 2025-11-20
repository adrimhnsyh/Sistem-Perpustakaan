<?php
session_start();

// Cek apakah user sudah login
if (!isset($_SESSION['nip'])) {
    header("Location: login.php");
    exit();
}

$nip= $_SESSION['nip']; // dari login.php
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard Intranet - Politeknik STMI Jakarta</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

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
    .sidebar::-webkit-scrollbar-track {
      background: transparent;
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

    .content-box {
      margin-top: 25px;
      background: #fff;
      border-radius: 12px;
      padding: 25px;
      box-shadow: 0 3px 10px rgba(0,0,0,0.1);
    }

    .content-box h3 {
      margin-bottom: 15px;
      color: #0d47a1;
      font-size: 18px;
    }

    .content-box img {
      width: 100%;
      border-radius: 8px;
      margin-top: 10px;
    }

    footer {
      text-align: center;
      margin-top: 20px;
      color: #777;
      font-size: 13px;
    }

    @media (max-width: 768px) {
      .sidebar {
        position: absolute;
        width: 220px;
        height: auto;
        display: none;
      }
      .main-content {
        margin-left: 0;
        padding: 15px;
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
          <h4>Admin</h4>
          <a href="#">🏠 Home</a>
          <a href="pengunjung.php">📘 Perpustakaan</a>
        </div>

        <div class="menu-section">
          <h4>Aplikasi Pribadi</h4>
          <a href="#">👤 Biodata</a>
          <a href="#">🔑 Ubah Password</a>
        </div>

        <div class="menu-section">
          <h4>Aplikasi Umum</h4>
          <a href="perpustakaan.php">📚 Perpustakaan</a>
          <a href="#">🖼️ Album Foto</a>
          <a href="#">📢 Whistle Blowing System</a>
        </div>

        <div class="menu-section">
          <h4>Dokumen</h4>
          <a href="#">📂 Download Dokumen</a>
        </div>

        <div class="menu-section">
          <h4>Sisformik</h4>
          <a href="#">🏅 Mahasiswa Terbaik</a>
          <a href="#">📅 Jadwal Kuliah</a>
        </div>

        <div class="menu-section">
          <h4>Login Aplikasi</h4>
          <a href="#">🧾 Login SIMPEL</a>
          <a href="#">🗂️ Login SIDIMAS</a>
          <a href="#">📨 Login Persuratan</a>
        </div>
      </div>
    </div>

    <div class="sidebar-footer">
      © 2025 Politeknik STMI Jakarta
    </div>
  </aside>

  <!-- Main content -->
  <main class="main-content">
    <header>
      <h2>Selamat Datang di Intranet Politeknik STMI Jakarta</h2>
      <div class="user-info">👋 Halo, <?= htmlspecialchars($nip) ?></div>
    </header>

    <div class="content-box">
      <h3>Whistle Blowing System</h3>
      <p>Laporkan penyimpangan, pelanggaran, atau tindakan tidak etis melalui sistem pelaporan resmi Politeknik STMI Jakarta.</p>
      <img src="https://intranet.stmi.ac.id/assets/whistle.jpg" alt="Whistle Blowing System">
    </div>

    <footer>
      Dikelola oleh Politeknik STMI Jakarta
    </footer>
  </main>

</body>
</html>
