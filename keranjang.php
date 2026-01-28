<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Keranjang Belanja - Online Shop</title>
    <link rel="stylesheet" href="keranjang.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        /* CSS Tambahan khusus halaman keranjang */
        .container-keranjang {
            max-width: 1000px;
            margin: 50px auto;
            padding: 20px;
            background: white;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
        }
        .header-keranjang {
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 2px solid #eee;
            padding-bottom: 20px;
            margin-bottom: 20px;
        }
        .grid-keranjang {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            gap: 20px;
        }
        .footer-keranjang {
            margin-top: 30px;
            text-align: right;
            border-top: 2px solid #eee;
            padding-top: 20px;
        }
    </style>
</head>
<body style="background-color: #f4f4f4;">

<div class="container-keranjang">
    <div class="header-keranjang">
        <h1><i class="fas fa-shopping-basket"></i> Keranjang Saya</h1>
        <a href="beranda.php" style="color: #d35400; text-decoration: none;">&larr; Kembali Belanja</a>
    </div>

    <div id="cart-content" class="grid-keranjang">
        </div>

    <div class="footer-keranjang">
        <h2 id="total-harga">Total: Rp 0</h2>
        <button onclick="prosesCheckout()" style="background: #d35400; color: white; border: none; padding: 15px 40px; border-radius: 8px; cursor: pointer; font-weight: bold; font-size: 1.1rem;">
        Checkout Sekarang</button>
    </div>
</div>

<script>
    // Fungsi untuk memuat data dari LocalStorage
    function loadCart() {
        const cartData = JSON.parse(localStorage.getItem('cart')) || [];
        const container = document.getElementById('cart-content');
        let total = 0;

        if (cartData.length === 0) {
            container.innerHTML = "<p style='grid-column: 1/-1; text-align: center; padding: 50px;'>Keranjang Anda masih kosong.</p>";
            return;
        }

        container.innerHTML = cartData.map((item, index) => {
            total += item.harga;
            return `
        <div class="cart-grid-item" style="border: 1px solid #eee; padding: 15px; border-radius: 10px; text-align: center; position: relative;">
            <button onclick="hapusItem(${index})" style="position: absolute; top: 5px; right: 5px; border: none; background: #ff4757; color: white; border-radius: 50%; cursor: pointer;">&times;</button>
            
            <img src="${item.img}" style="width: 100%; height: 120px; object-fit: contain;">
            
            <h4 style="margin: 10px 0;">${item.nama}</h4>
            <p style="color: #d35400; font-weight: bold;">Rp ${item.harga.toLocaleString('id-ID')}</p>
        </div>
    `;
}).join('');

        document.getElementById('total-harga').innerText = "Total: Rp " + total.toLocaleString('id-ID');
    }

    function hapusItem(index) {
        let cartData = JSON.parse(localStorage.getItem('cart')) || [];
        cartData.splice(index, 1);
        localStorage.setItem('cart', JSON.stringify(cartData));
        loadCart(); // Refresh tampilan
    }

    // Jalankan saat halaman dibuka
    loadCart();

    function prosesCheckout() {
    // Mengecek apakah keranjang kosong sebelum pindah halaman
    let cartData = JSON.parse(localStorage.getItem('cart')) || [];
    
    if (cartData.length === 0) {
        alert("Keranjang Anda masih kosong! Silakan pilih produk terlebih dahulu.");
    } else {
        // Berpindah ke halaman payment.php
        window.location.href = 'payment.php';
    }
    }   
</script>
</body>
</html>