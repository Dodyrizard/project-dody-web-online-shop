<?php
$kat_dipilih = isset($_GET['kategori']) ? $_GET['kategori'] : '';

$semua_produk = [
    ['nama' => 'Puma Speedcat', 'harga' => 2200000, 'img' => 'puma.jpg', 'rating' => 4.7, 'terjual' => 200, 'kat' => 'sepatu'],
    ['nama' => 'iPhone 15 Pro Max', 'harga' => 18500000, 'img' => 'ip15.jpg', 'rating' => 3.9, 'terjual' => 5, 'kat' => 'handphone'],
    ['nama' => 'VGA RTX 5060', 'harga' => 11800000, 'img' => 'vga.jpg', 'rating' => 4.9, 'terjual' => 8, 'kat' => 'vga'],
    ['nama' => 'Jaket Kulit Harajuku', 'harga' => 750000, 'img' => 'jaket.jpg', 'rating' => 4.0, 'terjual' => 50, 'kat' => 'jaket'],
    ['nama' => 'Nike Air Force 1 \'07 White', 'harga' => 1350000, 'img' => 'airforce.jpg', 'rating' => 4.8, 'terjual' => 250, 'kat' => 'sepatu'],
    ['nama' => 'Keyboard Mechanical', 'harga' => 400000, 'img' => 'keyboard.jpg', 'rating' => 4.4, 'terjual' => 800, 'kat' => 'keyboard'],
    ['nama' => 'Adidas Adizero Evo SL', 'harga' => 2500000, 'img' => 'adidas.jpg', 'rating' => 5.0, 'terjual' => 500, 'kat' => 'sepatu'],
    ['nama' => 'Jaket Kekalahan', 'harga' => 250000, 'img' => 'jaketkekalahan.jpg', 'rating' => 4.5, 'terjual' => 30, 'kat' => 'jaket'],
    ['nama' => 'Vans Old Skool Classics', 'harga' => 1100000, 'img' => 'vans.jpg', 'rating' => 4.5, 'terjual' => 150, 'kat' => 'sepatu'],
    ['nama' => 'Monitor MSI 24inch', 'harga' => 8000000, 'img' => 'monitor.jpg', 'rating' => 4.6, 'terjual' => 10, 'kat' => 'monitor'],
    ['nama' => 'Nike Air Zoom Alphafly Next% 3', 'harga' => 4299000, 'img' => 'nike.jpg', 'rating' => 4.9, 'terjual' => 80, 'kat' => 'sepatu'],
    ['nama' => 'SSD NVMe m.2 Samsung PRO 990 2280', 'harga' => 300000, 'img' => 'ssd.jpg', 'rating' => 5.0, 'terjual' => 98, 'kat' => 'ssd'],
    ['nama' => 'Kursi Gaming', 'harga' => 5000000, 'img' => 'kursi.jpg', 'rating' => 4.5, 'terjual' => 250, 'kat' => 'kursi'],
    ['nama' => 'Mousepad Gaming', 'harga' => 100000, 'img' => 'mousepad.jpg', 'rating' => 3.5, 'terjual' => 2, 'kat' => 'mousepad'],
];
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PasarOnline - Beranda</title>
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>

    <nav class="navbar">
        <div class="nav-container">
            <h1 class="logo">ONLINE SHOP</h1>
            <div class="search-bar">
                <input type="text" id="input-cari" placeholder="Cari produk impianmu..." onkeyup="filterProduk()">
                <button><i class="fas fa-search"></i></button>
            </div>
            <div class="nav-icons">
                <a href="keranjang.php" class="cart-icon-container" style="text-decoration: none; color: white; position: relative;">
                    <i class="fas fa-shopping-cart"></i>
                    <span id="cart-count">0</span>
                </a>
                <a href="datapesanan.php" style="text-decoration: none; color: white;"><i class="fas fa-bell"></i></a>
                <a href="feedback.php" style="text-decoration: none; color: white;"><i class="fas fa-comment-alt"></i></a>
                <a href="myaccount.php" class="user-profile" style="text-decoration: none; color: white;">
                    <i class="fas fa-user-circle"></i> <span id="nav-username">Akun Saya</span>
                </a>
            </div>
        </div>
    </nav>

    <div class="main-content">
        <aside class="sidebar">
            <div class="balance-card">
                <h3><i class="fas fa-wallet"></i> Saldo Saya</h3>
                <div class="balance-item"><span>E-Wallet</span><strong id="label-ewallet">Rp 0</strong></div>
                <div class="balance-item"><span>Bank</span><strong id="label-bank">Rp 0</strong></div>
                <button class="topup-btn" onclick="openTopup()">Top Up</button>
            </div>

            <div class="menu-categories">
                <h4>Kategori</h4>
                <ul>
                    <li><a href="beranda.php" style="color: <?= $kat_dipilih == '' ? '#d35400' : 'inherit' ?>;"><i class="fas fa-home"></i> Semua Produk</a></li>
                    <li><a href="beranda.php?kategori=fashion" style="color: <?= $kat_dipilih == 'fashion' ? '#d35400' : 'inherit' ?>;"><i class="fas fa-tshirt"></i> Fashion</a></li>
                    <li><a href="beranda.php?kategori=elektronik" style="color: <?= $kat_dipilih == 'elektronik' ? '#d35400' : 'inherit' ?>;"><i class="fas fa-mobile-alt"></i> Elektronik</a></li>
                    <li><a href="beranda.php?kategori=gaming" style="color: <?= $kat_dipilih == 'gaming' ? '#d35400' : 'inherit' ?>;"><i class="fas fa-gamepad"></i> Gaming</a></li>
                </ul>
            </div>
        </aside>

        <section class="products">
            <div class="section-header">
                <h2><?= ($kat_dipilih == 'fashion') ? "Koleksi Fashion (Sepatu & Jaket)" : "Rekomendasi Untukmu" ?></h2>
            </div>
            
            <div class="sorting-options">
                <span>Urutkan Berdasarkan: </span>
                <select id="sort-select" onchange="sortProducts()">
                    <option value="default">Terbaru</option>
                    <option value="rating_desc">Rating Tertinggi</option>
                    <option value="rating_asc">Rating Terendah</option>
                    <option value="terjual">Paling Banyak Terjual</option>
                    <option value="harga_asc">Harga Termurah</option>
                    <option value="harga_desc">Harga Termahal</option>
                </select>
            </div>

            <div class="product-grid">
                <?php
                foreach ($semua_produk as $p) {
                    $show = false;
                    if ($kat_dipilih == '') $show = true; 
                    elseif ($kat_dipilih == 'fashion' && ($p['kat'] == 'sepatu' || $p['kat'] == 'jaket')) $show = true;
                    elseif ($kat_dipilih == 'elektronik' && ($p['kat'] == 'handphone' || $p['kat'] == 'keyboard' || $p['kat'] == 'monitor')) $show = true;
                    elseif ($kat_dipilih == 'gaming' && ($p['kat'] == 'vga' || $p['kat'] == 'ssd' || $p['kat'] == 'kursi' || $p['kat'] == 'mousepad')) $show = true;

                    if ($show) : ?>
                        <div class="card" data-rating="<?= $p['rating'] ?>" data-terjual="<?= $p['terjual'] ?>" data-harga="<?= $p['harga'] ?>" data-kategori="<?= $p['kat'] ?>">
                            <img src="<?= $p['img'] ?>" alt="<?= $p['nama'] ?>">
                            <div class="card-body">
                                <h3><?= $p['nama'] ?></h3>
                                <p class="price">Rp <?= number_format($p['harga'], 0, ',', '.') ?></p>
                                <div class="info">
                                    <span>⭐ <?= $p['rating'] ?></span>
                                    <button class="add-to-cart-btn" onclick="addToCart(this)"><i class="fas fa-cart-plus"></i></button>
                                    <span><?= $p['terjual'] ?> Terjual</span>
                                </div>
                            </div>
                        </div>
                    <?php endif; 
                } ?>
            </div>
        </section>
    </div>

    <div id="topupModal" class="modal-overlay">
        <div class="modal-box" id="modal-step-1">
            <h2>Top Up Saldo</h2>
            <p>Pilih nominal:</p>
            <div class="nominal-selector">
                <div class="nominal-btn" onclick="selectNominal(50000, this)">Rp 50rb</div>
                <div class="nominal-btn" onclick="selectNominal(100000, this)">Rp 100rb</div>
                <div class="nominal-btn" onclick="selectNominal(200000, this)">Rp 200rb</div>
                <div class="nominal-btn" onclick="selectNominal(500000, this)">Rp 500rb</div>
            </div>
            <input type="number" id="customAmount" class="form-input" placeholder="Atau ketik nominal lain...">
            
            <p>Pilih Metode:</p>
            <select id="pay-method" class="form-input">
                <option value="ewallet">E-Wallet (20910895326097742)</option>
                <option value="bca">Bank BCA (8837300012345)</option>
                <option value="mandiri">Bank Mandiri (9001200054321)</option>
                <option value="bni">Bank BNI (8277000098765)</option>
            </select>
            
            <button class="btn-confirm" onclick="toStep2()">Lanjutkan</button>
            <button class="btn-cancel" onclick="closeTopup()">Batal</button>
        </div>

        <div class="modal-box" id="modal-step-2" style="display:none;">
            <h2>Detail Pembayaran</h2>
            <div class="va-display">
                <small id="va-name" style="font-weight:bold; color:#888;"></small>
                <h3 id="va-code" style="color:var(--primary-color); letter-spacing:1px; margin:10px 0;"></h3>
                <p id="total-val" style="font-weight:bold;"></p>
            </div>
            <button class="btn-confirm" onclick="finishTopup()">Saya Sudah Bayar</button>
            <button class="btn-cancel" onclick="closeTopup()">Batal</button>
        </div>
    </div>

<script>
let amount = 0;
let method = "";

function sortProducts() {
    const grid = document.querySelector('.product-grid');
    const cards = Array.from(grid.querySelectorAll('.card'));
    const sortBy = document.getElementById('sort-select').value;
    if (sortBy === 'default') { location.reload(); return; }
    cards.sort((a, b) => {
        let attr = sortBy.includes('harga') ? 'harga' : (sortBy.includes('rating') ? 'rating' : 'terjual');
        let valA = parseFloat(a.getAttribute('data-' + attr));
        let valB = parseFloat(b.getAttribute('data-' + attr));
        return sortBy.endsWith('_asc') ? valA - valB : valB - valA;
    });
    cards.forEach(c => grid.appendChild(c));
}

function openTopup() { 
    document.getElementById('topupModal').style.display = 'flex'; 
    document.getElementById('modal-step-1').style.display = 'block';
    document.getElementById('modal-step-2').style.display = 'none';
}
function closeTopup() { document.getElementById('topupModal').style.display = 'none'; }

function selectNominal(val, el) {
    amount = val;
    document.querySelectorAll('.nominal-btn').forEach(b => b.classList.remove('active'));
    el.classList.add('active');
    document.getElementById('customAmount').value = "";
}

function toStep2() {
    let custom = document.getElementById('customAmount').value;
    amount = custom ? parseInt(custom) : amount;
    method = document.getElementById('pay-method').value;
    if(amount < 10000) { alert("Minimal Rp 10.000"); return; }

    const vas = {
        'ewallet': { n: 'E-WALLET', c: '20910895326097742' },
        'bca': { n: 'BANK BCA', c: '8837300012345' },
        'mandiri': { n: 'BANK MANDIRI', c: '9001200054321' },
        'bni': { n: 'BANK BNI', c: '8277000098765' }
    };

    document.getElementById('modal-step-1').style.display = 'none';
    document.getElementById('modal-step-2').style.display = 'block';
    document.getElementById('va-name').innerText = vas[method].n + " VIRTUAL ACCOUNT";
    document.getElementById('va-code').innerText = vas[method].c;
    document.getElementById('total-val').innerText = "Total: Rp " + amount.toLocaleString('id-ID');
}

function finishTopup() {
    let key = (method === 'ewallet') ? 'saldo_ewallet' : 'saldo_bank';
    let current = parseInt(localStorage.getItem(key)) || 0;
    localStorage.setItem(key, current + amount);
    alert("Top Up Berhasil!");
    closeTopup();
    updateBalance();
}

function updateBalance() {
    let ew = parseInt(localStorage.getItem('saldo_ewallet')) || 0;
    let bk = parseInt(localStorage.getItem('saldo_bank')) || 0;
    document.getElementById('label-ewallet').innerText = "Rp " + ew.toLocaleString('id-ID');
    document.getElementById('label-bank').innerText = "Rp " + bk.toLocaleString('id-ID');
}

function updateCart() {
    let cart = JSON.parse(localStorage.getItem('cart')) || [];
    document.getElementById('cart-count').innerText = cart.length;
}

function filterProduk() {
    // Ambil kata kunci dari input dan ubah ke huruf kecil
    let keyword = document.getElementById('input-cari').value.toLowerCase();
    
    // Ambil semua elemen kartu produk
    let cards = document.querySelectorAll('.card');

    cards.forEach(card => {
        // Ambil Nama Produk (dari tag h3)
        let namaProduk = card.querySelector('h3').innerText.toLowerCase();
        
        // Ambil Kategori Produk (dari atribut data-kategori yang sudah kita buat)
        let kategoriProduk = card.getAttribute('data-kategori').toLowerCase();

        // Cek apakah kata kunci ada di Nama ATAU di Kategori
        if (namaProduk.includes(keyword) || kategoriProduk.includes(keyword)) {
            card.style.display = "flex"; // Tampilkan jika cocok
        } else {
            card.style.display = "none"; // Sembunyikan jika tidak cocok
        }
    });
}

function addToCart(btn) {
    const card = btn.closest('.card');
    const nama = card.querySelector('h3').innerText;
    const harga = parseInt(card.getAttribute('data-harga'));
    
    // 1. Ambil source (alamat) gambar dari elemen <img> di dalam card
    const img = card.querySelector('img').src; 

    let cart = JSON.parse(localStorage.getItem('cart')) || [];
    
    // 2. Masukkan properti 'img' ke dalam objek yang disimpan
    cart.push({ nama, harga, img }); 
    
    localStorage.setItem('cart', JSON.stringify(cart));
    updateCart();
    alert(nama + " masuk keranjang!");
}

window.onload = function() {
    updateCart();
    updateBalance();
    const user = localStorage.getItem('user_name');
    if (user) document.getElementById('nav-username').innerText = user;
};
</script>
</body>
</html>