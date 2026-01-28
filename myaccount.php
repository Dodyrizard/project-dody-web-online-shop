<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Akun Saya - ONLINE SHOP</title>
    <link rel="stylesheet" href="myaccount.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>

    <header class="header-profile">
        <div class="profile-info-top">
            <div class="photo-container">
                <div class="profile-image-wrapper">
                    <img id="display-photo" src="" alt="Profile" style="display:none;">
                    
                    <div id="default-icon" class="default-avatar-container">
                        <i class="fas fa-user"></i>
                    </div>
                </div>
                
                <label for="upload-photo" class="edit-photo-btn">
                    <i class="fas fa-camera"></i>
                </label>
                <input type="file" id="upload-photo" style="display:none" onchange="previewImage(event)">
            </div>
            
            <div class="name-display">
                <h2 id="display-name-top">Dodyrizard Prasetyo</h2>
                <p><i class="fas fa-medal"></i> Member Terverifikasi</p>
            </div>
        </div>
    </header>

    <main class="main-container">
        <aside class="sidebar-account">
            <nav class="menu-list">
                <li><a href="#" class="active"><i class="fas fa-user-edit"></i> Edit Profil</a></li>
                <li><a href="beranda.php"><i class="fas fa-shopping-bag"></i> Lanjut Belanja</a></li>
                <li><a href="datapesanan.php"><i class="fas fa-bell"></i> Notifikasi</a></li>
                <li><a href="#" class="logout-link" onclick="logout()"><i class="fas fa-power-off"></i> Logout Akun</a></li>
            </nav>
        </aside>

        <section class="content-card">
            <h3><i class="fas fa-id-card"></i> Pengaturan Informasi Pribadi</h3>
            <hr style="margin: 20px 0; border: 0; border-top: 1px solid #eee;">
            
            <form id="profile-form">
                <div class="form-grid">
                    <div class="input-box">
                        <label>Nama Pengguna</label>
                        <input type="text" id="input-nama" placeholder="Masukkan nama...">
                    </div>
                    <div class="input-box">
                        <label>Alamat Email</label>
                        <input type="email" placeholder="email@contoh.com">
                    </div>
                    <div class="input-box">
                        <label>Nomor Telepon</label>
                        <input type="text" placeholder="08xxxxxxx">
                    </div>
                    <div class="input-box">
                        <label>Jenis Kelamin</label>
                        <input type="text" placeholder="Laki-laki / Perempuan">
                    </div>
                </div>
                
                <div class="input-box">
                    <label>Alamat Pengiriman</label>
                    <input type="text" placeholder="Jl. Joglo Raya No. 123">
                </div>

                <button type="button" class="btn-save" onclick="saveProfile()">Update Profil</button>
            </form>
        </section>
    </main>

    <script>
        // Fungsi untuk mengatur visibilitas Foto vs Siluet
        function updatePhotoDisplay(photoData) {
            const imgElement = document.getElementById('display-photo');
            const iconElement = document.getElementById('default-icon');

            if (photoData && photoData !== "null" && photoData !== "") {
                imgElement.src = photoData;
                imgElement.style.display = 'block';
                iconElement.style.display = 'none'; // Sembunyikan siluet jika ada foto
            } else {
                imgElement.style.display = 'none';
                iconElement.style.display = 'flex'; // Tampilkan siluet jika foto kosong
            }
        }

        window.onload = function() {
            // Muat Nama dari LocalStorage
            const savedName = localStorage.getItem('user_name');
            if (savedName) {
                document.getElementById('display-name-top').innerText = savedName;
                document.getElementById('input-nama').value = savedName;
            }

            // Muat Foto dari LocalStorage
            const savedPhoto = localStorage.getItem('user_photo');
            updatePhotoDisplay(savedPhoto);
        };

        function previewImage(event) {
            const reader = new FileReader();
            reader.onload = function() {
                const imageData = reader.result;
                
                // Simpan data gambar ke LocalStorage
                localStorage.setItem('user_photo', imageData);
                
                // Update tampilan seketika
                updatePhotoDisplay(imageData);
            }
            reader.readAsDataURL(event.target.files[0]);
        }

        function saveProfile() {
            const namaBaru = document.getElementById('input-nama').value;
            if (namaBaru.trim() !== "") {
                document.getElementById('display-name-top').innerText = namaBaru;
                localStorage.setItem('user_name', namaBaru);
                alert("Profil berhasil diperbarui!");
            } else {
                alert("Nama tidak boleh kosong.");
            }
        }

        function logout() {
            if(confirm("Apakah Anda yakin ingin keluar? Semua data profil akan ter-reset.")) {
            // 1. Menghapus data spesifik profil dari LocalStorage
            localStorage.removeItem('user_name');
            localStorage.removeItem('user_photo');
            localStorage.removeItem('riwayat_belanja');
        
            // 2. Memberikan notifikasi singkat (Opsional)
            alert("Anda telah berhasil keluar.");

            // 3. Alihkan (Redirect) ke halaman login.php
            window.location.href = "login.php";
            }
        }
    </script>
</body>
</html>