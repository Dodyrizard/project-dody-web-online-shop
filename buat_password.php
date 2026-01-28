<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Buat Password - Online Shop</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <div class="phone-frame">
    <!-- Header -->
    <div class="header animate-slide-down">
      <img src="logo.png" alt="Logo" class="logo">
      <h1>ONLINE SHOP</h1>
      <p>create your password</p>
    </div>

    <!-- Form Buat Password -->
    <div class="login-box animate-fade-in">
      <h2>BUAT PASSWORD</h2>

      <?php
      if (isset($_POST['nomor'])) {
        $nomor = htmlspecialchars($_POST['nomor']);
        echo "<p style='font-size:14px; color:#555;'>Nomor: <strong>$nomor</strong></p>";
      }
      ?>

      <form action="proses_daftar.php" method="POST">
        <input type="hidden" name="nomor" value="<?php echo isset($nomor) ? $nomor : ''; ?>">
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

  <script>
    function handleRegister(event) {
      event.preventDefault();
      const username = event.target.username.value.trim();
      alert("Akun " + username + " berhasil didaftarkan!");
      window.location.href = "login.php";
    }
  </script>
</body>
</html>
