<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Online Shop Login</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
  
  <div class="phone-frame">                                                                           
    <div class="header animate-slide-down">
      <img src="logo.png" alt="Logo" class="logo">
      <h1>ONLINE SHOP</h1>
      <p>easier and affordable</p>
    </div>

    <div class="login-box animate-fade-in">
      <h2>LOGIN</h2>
      <form onsubmit="return handleLogin(event)">
        <input type="text" name="username" placeholder="No. Hp / Username / E-mail" required>
          <div class="password-wrapper" style="position: relative; width: 100%;">
            <input type="password" name="password" id="password" placeholder="Password" required style="width: 100%; padding-right: 40px; margin: 8px 0; border-radius: 8px; border: 1px solid #ccc; padding: 10px; font-size: 14px;">
            <i class="fas fa-eye" id="togglePassword" style="position: absolute; right: 12px; top: 50%; transform: translateY(-50%); cursor: pointer; color: #888;"></i>
          </div>
        <button type="submit">Login</button>
      </form>

      <a href="lupa_password.php" class="forgot">Lupa password?</a>

      <div class="divider">ATAU</div>

      <div class="social-login">
        <button class="fb" onclick="window.location.href='login_facebook.php'">Facebook</button>
        <button class="google" onclick="window.location.href='login_google.php'">Google</button>
      </div>

      <p class="register">Belum punya akun? <a href="register.php">Daftar</a></p>
    </div>

    <div class="footer-image animate-slide-up">
      <img src="cart.png" alt="Gambar belanja">
    </div>
  </div>

  <script>
    function handleLogin(event) {
      event.preventDefault();

      const username = event.target.username.value.trim();
      const password = event.target.password.value.trim();

      // Simulasi login
      if (username === "admin" && password === "12345") {
        alert("Login berhasil!");
        window.location.href = "beranda.php";
      } else {
        alert("Username atau password salah!");
      }
    }

    const togglePassword = document.querySelector('#togglePassword');
    const passwordField = document.querySelector('#password');

    togglePassword.addEventListener('click', function () {
      // Alihkan tipe input antara 'password' dan 'text'
      const type = passwordField.getAttribute('type') === 'password' ? 'text' : 'password';
      passwordField.setAttribute('type', type);
    
      // Ganti ikon mata (mata terbuka / mata dicoret)
      this.classList.toggle('fa-eye');
      this.classList.toggle('fa-eye-slash');
    });
  </script>
</body>
</html>