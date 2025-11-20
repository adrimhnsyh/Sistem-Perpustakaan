<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login Admin - Politeknik STMI Jakarta</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Poppins', sans-serif;
    }

    body {
      background: linear-gradient(135deg, #1976d2, #0d47a1);
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      color: #fff;
    }

    .login-container {
      background: rgba(255, 255, 255, 0.15);
      backdrop-filter: blur(20px);
      border-radius: 16px;
      padding: 45px 50px;
      width: 380px;
      box-shadow: 0 8px 35px rgba(0, 0, 0, 0.3);
      transition: 0.3s;
    }

    .login-container:hover {
      transform: translateY(-3px);
      box-shadow: 0 10px 40px rgba(0, 0, 0, 0.35);
    }

    .login-container img {
      display: block;
      margin: 0 auto 20px;
      width: 90px;
    }

    .login-container h2 {
      text-align: center;
      font-size: 24px;
      font-weight: 700;
      margin-bottom: 10px;
      color: #ffffff;
    }

    .login-container p {
      text-align: center;
      font-size: 14px;
      color: #cfd8dc;
      margin-bottom: 30px;
    }

    .input-group {
      margin-bottom: 20px;
    }

    .input-group label {
      display: block;
      font-weight: 600;
      margin-bottom: 6px;
      color: #f1f1f1;
      font-size: 14px;
    }

    .input-group input {
      width: 100%;
      padding: 12px 14px;
      border: 1px solid rgba(255,255,255,0.3);
      border-radius: 8px;
      background: rgba(255,255,255,0.2);
      color: #fff;
      font-size: 15px;
      transition: 0.3s;
    }

    .input-group input::placeholder {
      color: #e3f2fd;
    }

    .input-group input:focus {
      outline: none;
      border-color: #64b5f6;
      background: rgba(255,255,255,0.3);
    }

    .login-btn {
      width: 100%;
      background: #ffca28;
      border: none;
      color: #0d47a1;
      font-weight: 700;
      font-size: 15px;
      padding: 12px;
      border-radius: 8px;
      cursor: pointer;
      transition: all 0.3s ease;
      box-shadow: 0 4px 12px rgba(0,0,0,0.2);
    }

    .login-btn:hover {
      background: #ffd54f;
      box-shadow: 0 6px 16px rgba(0,0,0,0.25);
    }

    .footer-text {
      text-align: center;
      margin-top: 25px;
      font-size: 13px;
      color: #e3f2fd;
    }

    @media (max-width: 480px) {
      .login-container {
        width: 90%;
        padding: 30px;
      }
    }
  </style>
</head>
<body>

  <div class="login-container">
    <img src="images/Logo - STMI.svg" alt="Logo STMI">
    <h2>Login Admin</h2>
    <p>Politeknik STMI Jakarta</p>

    <form id="loginForm">
      <div class="input-group">
        <label for="nip">NIP</label>
        <input type="text" id="nip" placeholder="Masukkan NIP">
      </div>

      <div class="input-group">
        <label for="password">Password</label>
        <input type="password" id="password" placeholder="Masukkan password">
      </div>

      <button type="submit" class="login-btn">Masuk</button>
    </form>

    <div class="footer-text">
      © 2025 Politeknik STMI Jakarta
    </div>
  </div>

  <script>
    // Simulasi login sederhana
    document.getElementById("loginForm").addEventListener("submit", function(e) {
      e.preventDefault();

      const nip = document.getElementById("nip").value.trim();
      const password = document.getElementById("password").value.trim();

      if (nip === "" || password === "") {
        alert("Harap isi NIP dan Password terlebih dahulu!");
        return;
      }

      // Simulasi login berhasil
      if (nip === "admin" && password === "12345") {
       
        window.location.href = "dashboard.html"; // arahkan ke halaman dashboard
      } else {
        alert("NIP atau Password salah!");
      }
    });
  </script>

</body>
</html>
