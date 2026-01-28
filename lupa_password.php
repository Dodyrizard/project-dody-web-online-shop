<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ganti Password - ONLINE SHOP</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Segoe UI', sans-serif; }
        body { background-color: #fdf2e9; display: flex; justify-content: center; align-items: center; min-height: 100vh; padding: 20px; }
        
        .container { background: white; width: 100%; max-width: 400px; border-radius: 20px; overflow: hidden; box-shadow: 0 10px 25px rgba(0,0,0,0.1); }
        .header { background: #d35400; padding: 40px 20px; text-align: center; color: white; }
        .header i { font-size: 50px; margin-bottom: 10px; }
        .header h2 { font-size: 24px; text-transform: uppercase; }
        
        .form-content { padding: 30px; }
        .form-content h3 { text-align: center; color: #d35400; margin-bottom: 25px; }
        
        .input-group { position: relative; margin-bottom: 20px; }
        .input-group i { position: absolute; left: 15px; top: 50%; transform: translateY(-50%); color: #d35400; }
        .input-group input { width: 100%; padding: 12px 15px 12px 45px; border: 1px solid #ddd; border-radius: 10px; outline: none; transition: 0.3s; }
        .input-group input:focus { border-color: #d35400; box-shadow: 0 0 5px rgba(211, 84, 0, 0.2); }
        
        .btn-reset { width: 100%; background: #d35400; color: white; border: none; padding: 12px; border-radius: 10px; font-weight: bold; cursor: pointer; transition: 0.3s; font-size: 16px; }
        .btn-reset:hover { background: #e67e22; }
        
        .back-login { display: block; text-align: center; margin-top: 20px; color: #888; text-decoration: none; font-size: 14px; }
        .back-login:hover { color: #d35400; }
    </style>
</head>
<body>

<div class="container">
    <div class="header">
        <i class="fas fa-lock-open"></i>
        <h2>Online Shop</h2>
        <p>Ganti Password Akun Anda</p>
    </div>

    <div class="form-content">
        <h3>RESET PASSWORD</h3>
        <form id="resetForm">
            <div class="input-group">
                <i class="fas fa-user"></i>
                <input type="text" id="identity" placeholder="Username / Email / No Tlpn" required>
            </div>

            <div class="input-group">
                <i class="fas fa-key"></i>
                <input type="password" id="newPassword" placeholder="Masukkan Password Baru" required>
            </div>

            <div class="input-group">
                <i class="fas fa-check-double"></i>
                <input type="password" id="confirmPassword" placeholder="Konfirmasi Password Baru" required>
            </div>

            <button type="submit" class="btn-reset">Ganti Password</button>
        </form>

        <a href="login.php" class="back-login">Kembali ke Halaman Login</a>
    </div>
</div>

<script>
    document.getElementById('resetForm').addEventListener('submit', function(e) {
        e.preventDefault();
        
        const password = document.getElementById('newPassword').value;
        const confirm = document.getElementById('confirmPassword').value;

        if(password !== confirm) {
            alert("Password dan konfirmasi password tidak cocok!");
            return;
        }

        // Simulasi berhasil ganti password
        alert("Password berhasil diperbarui! Silakan login kembali.");
        window.location.href = "login.php";
    });
</script>

</body>
</html>