<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar dengan Google</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <div class="phone-frame">
    <!-- Header -->
    <div class="header animate-slide-down">
      <img src="logo.png" alt="Logo" class="logo">
      <h1>ONLINE SHOP</h1>
      <p>Daftar menggunakan akun Google</p>
    </div>

    <!-- Form Google Register -->
    <div class="login-box animate-fade-in">
      <h2>DAFTAR DENGAN GOOGLE</h2>

      <form action="proses_daftar.php" method="POST">
        <input type="email" name="email" placeholder="Masukkan Email Google" required>
        <input type="password" name="password" placeholder="Masukkan Password" required>
        <input type="password" name="konfirmasi" placeholder="Konfirmasi Password" required>
        <button type="submit">Selesai</button>
      </form>

      <p class="register">Sudah punya akun? <a href="login.php">Masuk</a></p>
    </div>

    <!-- Gambar bawah -->
    <div class="footer-image animate-slide-up">
      <img src="cart.png" alt="Gambar belanja">
    </div>
  </div>

</body>
</html>