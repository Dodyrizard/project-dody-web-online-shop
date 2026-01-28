<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar - Online Shop</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <div class="phone-frame">
    <!-- Header -->
    <div class="header animate-slide-down">
      <img src="logo.png" alt="Logo" class="logo">
      <h1>ONLINE SHOP</h1>
      <p>easier and affordable</p>
    </div>

    <!-- Form Register -->
    <div class="login-box animate-fade-in">
      <h2>DAFTAR</h2>
      <form action="buat_password.php" method="POST">
        <input type="text" name="nomor" placeholder="Nomor Telepon" required>
        <button type="submit">Berikutnya</button>
      </form>

      <div class="divider">ATAU</div>

      <div class="social-login">
        <button class="fb" onclick="window.location.href='register_facebook.php'">Facebook</button>
        <button class="google" onclick="window.location.href='register_google.php'">Google</button>
      </div>

      <p class="register">Sudah punya akun? <a href="login.php">Masuk</a></p>
    </div>

    <!-- Gambar bawah -->
    <div class="footer-image animate-slide-up">
      <img src="cart.png" alt="Gambar belanja">
    </div>
  </div>

</body>
</html>
