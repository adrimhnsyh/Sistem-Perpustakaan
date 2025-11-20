<?php
session_start();

// ========== KONEKSI DATABASE ==========
$host = "localhost";
$user = "root";
$pass = "";
$db   = "perpustakaan"; // ganti sesuai database kamu

$conn = mysqli_connect($host, $user, $pass, $db);
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// ========== PROSES LOGIN ==========
$pesan = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nip      = mysqli_real_escape_string($conn, $_POST['nip']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $query = "SELECT * FROM login WHERE nip='$nip' AND password='$password' LIMIT 1";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        $data = mysqli_fetch_assoc($result);

        $_SESSION['nip'] = $data['nip'];
        $_SESSION['status'] = "login";

        header("Location: dashboard.php");
        exit();
    } else {
        $pesan = "NIP atau Password salah!";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Admin</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(135deg, #4A90E2, #355C7D);
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .login-box {
      background: #fff;
      width: 350px;
      padding: 30px;
      border-radius: 18px;
      box-shadow: 0 10px 25px rgba(0,0,0,0.15);
      text-align: center;
    }

    .login-box h2 {
      margin-bottom: 15px;
      font-size: 24px;
      font-weight: 600;
    }

    .input-group {
      text-align: left;
      margin-bottom: 15px;
    }

    .input-group label {
      font-size: 14px;
      font-weight: 500;
    }

    .input-group input {
      width: 100%;
      padding: 10px;
      margin-top: 5px;
      border: 1px solid #ccc;
      border-radius: 10px;
      font-size: 14px;
      box-sizing: border-box;
    }

    .btn-login {
      width: 100%;
      padding: 12px;
      background: #4A90E2;
      color: #fff;
      font-size: 16px;
      border: none;
      border-radius: 10px;
      cursor: pointer;
      transition: 0.2s;
      font-weight: 600;
      margin-top: 10px;
    }

    .btn-login:hover {
      background: #357ABD;
    }

    .footer-text {
      margin-top: 15px;
      font-size: 13px;
      color: #666;
    }

    .error {
      color: red;
      font-size: 14px;
      margin-bottom: 10px;
    }
  </style>
</head>

<body>

  <div class="login-box">
    <h2>Login Admin</h2>

    <?php if ($pesan != "") { ?>
      <p class="error"><?= $pesan ?></p>
    <?php } ?>

    <form method="POST">

      <div class="input-group">
        <label>NIP</label>
        <input type="text" name="nip" placeholder="Masukkan NIP" required>
      </div>

      <div class="input-group">
        <label>Password</label>
        <input type="password" name="password" placeholder="Masukkan password" required>
      </div>

      <button type="submit" class="btn-login">Login</button>

    </form>

    <p class="footer-text">Dummy Login Version</p>
  </div>

</body>
</html>
