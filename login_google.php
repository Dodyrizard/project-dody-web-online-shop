<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Google</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <style>
    /* Override styling agar konsisten dengan login.php */
    .header {
      background: linear-gradient(180deg, #e67e22, #d35400);
      color: white;
      text-align: center;
      padding: 25px 10px;
    }

    .header .logo {
      width: 60px;
      margin-bottom: 8px;
    }

    .header h1 {
      font-size: 20px;
      letter-spacing: 1px;
    }

    .header p {
      font-size: 13px;
      opacity: 0.9;
    }

    .phone-frame {
      width: 360px;
      background: white;
      border-radius: 30px;
      box-shadow: 0 0 25px rgba(0,0,0,0.2);
      overflow: hidden;
      margin: auto;
      margin-top: 40px;
      animation: pop 0.6s ease-in-out;
    }

    .login-box {
      padding: 25px;
      text-align: center;
    }

    .login-box h2 {
      color: #d35400;
      margin-bottom: 20px;
    }

    .login-box input {
      width: 100%;
      padding: 10px;
      margin: 8px 0;
      border-radius: 8px;
      border: 1px solid #ccc;
      font-size: 14px;
    }

    .login-box button {
      width: 100%;
      padding: 10px;
      background-color: #d35400;
      color: white;
      font-weight: bold;
      border: none;
      border-radius: 8px;
      cursor: pointer;
      transition: 0.3s;
    }

    .login-box button:hover {
      background-color: #e67e22;
      transform: scale(1.03);
    }

    .forgot {
      display: block;
      margin-top: 10px;
      color: #888;
      font-size: 13px;
      text-decoration: none;
    }

    .footer-image {
      text-align: left;
      padding: 10px 20px;
      background: white;
    }

    .footer-image img {
      width: 100px;
      opacity: 0.95;
    }

    @keyframes pop {
      0% { transform: scale(0.8); opacity: 0; }
      100% { transform: scale(1); opacity: 1; }
    }
  </style>
</head>
<body>

  <div class="phone-frame">
    <!-- Header -->
    <div class="header animate-slide-down">
      <img src="logo.png" alt="Logo" class="logo">
      <h1>ONLINE SHOP</h1>
      <p>Login menggunakan akun Google</p>
    </div>

    <!-- Form Login Google -->
    <div class="login-box animate-fade-in">
      <h2>LOGIN GOOGLE</h2>
      <form action="proses_login.php" method="POST">
        <input type="email" name="email" placeholder="Masukkan Email Google" required>
        <div class="password-wrapper" style="position: relative; width: 100%;">
          <input type="password" name="password" id="password" placeholder="Password" required 
            style="width: 100%; padding: 10px; padding-right: 40px; margin: 8px 0; border-radius: 8px; border: 1px solid #ccc; font-size: 14px;">
    
           <i class="fas fa-eye" id="togglePassword" 
            style="position: absolute; right: 12px; top: 50%; transform: translateY(-50%); cursor: pointer; color: #888;"></i>
        </div>
        <button type="submit">Login</button>
      </form>
      <a href="login.php" class="forgot">Kembali ke login utama</a>
    </div>

    <!-- Footer -->
    <div class="footer-image animate-slide-up">
      <img src="cart.png" alt="Cart">
    </div>
  </div>
<script>
    const togglePassword = document.querySelector('#togglePassword');
    const passwordField = document.querySelector('#password');

    togglePassword.addEventListener('click', function () {
        // Tukar tipe input
        const type = passwordField.getAttribute('type') === 'password' ? 'text' : 'password';
        passwordField.setAttribute('type', type);
        
        // Ganti ikon mata terbuka / mata dicoret
        this.classList.toggle('fa-eye');
        this.classList.toggle('fa-eye-slash');
    });
</script>
</body>
</html>
