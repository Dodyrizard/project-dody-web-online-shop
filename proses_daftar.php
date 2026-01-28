<?php
// Ambil data dari form
$nomor = isset($_POST['nomor']) ? htmlspecialchars($_POST['nomor']) : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';
$konfirmasi = isset($_POST['konfirmasi']) ? $_POST['konfirmasi'] : '';

// Cek apakah password dan konfirmasi sama
if ($password !== $konfirmasi) {
    echo "
    <script>
      alert('Konfirmasi password tidak cocok! Silakan ulangi.');
      window.history.back();
    </script>";
    exit;
}

// Kalau cocok, tampilkan pesan sukses dan kembali ke login
echo "
<!DOCTYPE html>
<html lang='id'>
<head>
  <meta charset='UTF-8'>
  <meta name='viewport' content='width=device-width, initial-scale=1.0'>
  <title>Pendaftaran Berhasil</title>
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background-color: #fff5f0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
    .success-box {
      background: white;
      padding: 30px 40px;
      border-radius: 15px;
      box-shadow: 0 0 20px rgba(0,0,0,0.2);
      text-align: center;
      color: #d35400;
    }
    h2 {
      margin-bottom: 10px;
    }
    p {
      color: #555;
      margin-bottom: 15px;
    }
  </style>
  <meta http-equiv='refresh' content='2;url=login.php'>
</head>
<body>
  <div class='success-box'>
    <h2>Pendaftaran Berhasil 🎉</h2>
    <p>Nomor: <strong>$nomor</strong></p>
    <p>Silakan login kembali...</p>
  </div>
</body>
</html>
";
?>
