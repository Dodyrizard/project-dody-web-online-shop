<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Pesanan - PasarOnline</title>
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        .container-pesanan { max-width: 800px; margin: 50px auto; padding: 20px; }
        .pesanan-card { 
            background: white; border-radius: 15px; padding: 20px; margin-bottom: 20px; 
            box-shadow: 0 4px 15px rgba(0,0,0,0.05); border-left: 6px solid #d35400;
        }
        .pesanan-header { display: flex; justify-content: space-between; border-bottom: 1px solid #eee; padding-bottom: 10px; margin-bottom: 15px; }
        .tag-waktu { font-size: 0.85rem; color: #888; }
        .item-list { font-size: 0.95rem; color: #444; margin: 10px 0; }
        .status-bayar { color: #27ae60; font-weight: bold; font-size: 0.8rem; text-transform: uppercase; }
    </style>
</head>
<body style="background: #f4f6f8;">

<div class="container-pesanan">
    <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:30px;">
        <h2><i class="fas fa-clipboard-list"></i> Riwayat Pesanan Anda</h2>
        <a href="beranda.php" style="text-decoration:none; color:#d35400; font-weight:bold;">&larr; Kembali</a>
    </div>

    <div id="list-pesanan-container">
        </div>
</div>

<script>
    function loadDataPesanan() {
        const riwayat = JSON.parse(localStorage.getItem('riwayat_belanja')) || [];
        const container = document.getElementById('list-pesanan-container');

        if (riwayat.length === 0) {
            container.innerHTML = `
                <div style="text-align:center; padding:100px 20px; color:#bbb;">
                    <i class="fas fa-box-open" style="font-size:60px; margin-bottom:20px;"></i>
                    <p>Belum ada pesanan yang dibuat.</p>
                </div>`;
            return;
        }

        container.innerHTML = riwayat.map(order => `
            <div class="pesanan-card">
                <div class="pesanan-header">
                    <div>
                        <strong>ID: ${order.id}</strong><br>
                        <span class="tag-waktu"><i class="far fa-calendar-alt"></i> ${order.tanggal} | <i class="far fa-clock"></i> ${order.jam} WIB</span>
                    </div>
                    <span class="status-bayar">Diterima</span>
                </div>
                <div class="item-list">
                    <strong>Produk:</strong> ${order.items.map(i => i.nama).join(', ')}
                </div>
                <div style="display:flex; justify-content:space-between; align-items:center; margin-top:15px;">
                    <span style="font-size:0.9rem; color:#666;">Metode: <strong>${order.metode.replace('_', ' ').toUpperCase()}</strong></span>
                    <h3 style="color:#d35400; margin:0;">Rp ${order.total.toLocaleString('id-ID')}</h3>
                </div>
            </div>
        `).join('');
    }

    loadDataPesanan();
</script>
</body>
</html>