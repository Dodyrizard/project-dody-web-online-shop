<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembayaran - Online Shop</title>
    <link rel="stylesheet" href="payment.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>

<div class="payment-container">
    <div class="payment-header">
        <h1><i class="fas fa-shield-alt"></i> Checkout Payment</h1>
        <p>Selesaikan pembayaranmu untuk segera memproses pesanan.</p>
    </div>

    <div class="payment-wrapper">
        <form id="payment-form" onsubmit="handlePayment(event)">
            <div class="form-section">
                <h3><i class="fas fa-user"></i> Informasi Pengiriman</h3>
                <div class="input-group">
                    <label>Nama Lengkap</label>
                    <input type="text" name="nama" placeholder="Contoh: Dodyrizard Prasetyo" required>
                </div>
                <div class="input-group">
                    <label>No. Telepon / WhatsApp</label>
                    <input type="tel" name="phone" placeholder="0812xxxx" required>
                </div>
                <div class="input-group">
                    <label>Alamat Lengkap</label>
                    <textarea name="alamat" rows="3" placeholder="Nama jalan, No rumah, RT/RW" required></textarea>
                </div>
            </div>

            <div class="form-section">
                <h3><i class="fas fa-credit-card"></i> Metode Pembayaran</h3>
                <div class="payment-methods">
                    <label class="method-option">
                        <input type="radio" name="metode" value="transfer_bank" onclick="showBankOptions()" required>
                        <div class="method-box">
                            <i class="fas fa-university"></i>
                            <span>Transfer Bank</span>
                        </div>
                    </label>
                    
                    <label class="method-option">
                        <input type="radio" name="metode" value="e_wallet" onclick="showEwalletOptions()">
                        <div class="method-box">
                            <i class="fas fa-wallet"></i>
                            <span>E-Wallet</span>
                        </div>
                    </label>
                    
                    <label class="method-option">
                        <input type="radio" name="metode" value="cod" onclick="hideAllOptions()">
                        <div class="method-box">
                            <i class="fas fa-truck"></i>
                            <span>COD</span>
                        </div>
                    </label>
                </div>

                <div id="bank-selection-panel" class="selection-panel">
                    <p class="panel-title">Pilih Bank Transfer:</p>
                    <div class="bank-grid">
                        <label class="bank-item">
                            <input type="radio" name="nama_bank" value="BCA" onclick="displayVA('BCA')">
                            <div class="bank-card">BCA</div>
                        </label>
                        <label class="bank-item">
                            <input type="radio" name="nama_bank" value="Mandiri" onclick="displayVA('Mandiri')">
                            <div class="bank-card">Mandiri</div>
                        </label>
                        <label class="bank-item">
                            <input type="radio" name="nama_bank" value="BNI" onclick="displayVA('BNI')">
                            <div class="bank-card">BNI</div>
                        </label>
                    </div>
                </div>

                <div id="ewallet-selection-panel" class="selection-panel">
                    <p class="panel-title">Pilih E-Wallet:</p>
                    <div class="bank-grid ewallet-grid"> 
                        <label class="bank-item">
                            <input type="radio" name="nama_ewallet" value="Dana" onclick="displayEwallet('Dana')">
                            <div class="bank-card">Dana</div>
                        </label>
                        <label class="bank-item">
                            <input type="radio" name="nama_ewallet" value="OVO" onclick="displayEwallet('OVO')">
                            <div class="bank-card">OVO</div>
                        </label>
                    </div>
                </div>

                <div id="va-display-panel" class="display-panel">
                    <div class="va-header">
                        <p>Nomor Virtual Account <span id="va-bank-name"></span> PT Kami:</p>
                        <h2 id="va-number"></h2>
                        <button type="button" class="btn-copy" onclick="copyText('va-number')">
                            <i class="fas fa-copy"></i> SALIN NOMOR
                        </button>
                    </div>
                    <div class="va-instruction">
                        <p class="instr-title">Cara Pembayaran:</p>
                        <div id="instr-bank" class="instr-content">
                            <ol>
                                <li>Buka aplikasi Bank / ATM Anda.</li>
                                <li>Pilih Transfer ke Virtual Account.</li>
                                <li>Input nomor VA di atas.</li>
                                <li>Total tagihan akan muncul otomatis.</li>
                            </ol>
                        </div>
                    </div>
                </div>

                <div id="ewallet-display-panel" class="display-panel qr-panel">
                    <div class="ewallet-header">
                        <p>Scan QR atau Transfer ke <span id="ewallet-name"></span>:</p>
                        <div id="qr-area">
                            <img id="qr-image" src="qr.jpg" alt="QR Code Pembayaran">
                            <p class="qr-subtext">Silakan Scan QR Code di atas</p>
                        </div>
                        <h2 id="ewallet-number"></h2>
                        <button type="button" class="btn-copy-alt" onclick="copyText('ewallet-number')">
                            <i class="fas fa-copy"></i> SALIN NOMOR VA
                        </button>
                    </div>
                    <div class="va-instruction">
                        <p class="instr-title">Cara Pembayaran:</p>
                        <div class="instr-content">
                            <ol>
                                <li>Buka aplikasi <span id="ewallet-name-instr"></span>.</li>
                                <li>Pilih menu <b>Scan / QRIS</b> atau <b>Transfer</b>.</li>
                                <li>Scan kode QR di atas atau masukkan nomor VA secara manual.</li>
                                <li>Masukkan nominal sesuai total tagihan.</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

            <button type="submit" class="pay-btn">Bayar Sekarang</button>
        </form>

        <div class="order-summary">
            <h3>Ringkasan Pesanan</h3>
            <div id="summary-items"></div>
            <hr>
            <div class="summary-total">
                <span>Total Tagihan:</span>
                <h2 id="final-total">Rp 0</h2>
            </div>
        </div>
    </div>
</div>

<div id="success-modal" class="modal-overlay">
    <div class="modal-content">
        <div class="modal-icon">
            <i class="fas fa-check"></i>
        </div>
        <h2>Berhasil!</h2>
        <p id="success-msg"></p>
        <button class="btn-finish" onclick="finishOrder()">Kembali ke Beranda</button>
    </div>
</div>

<script>
    const phoneTujuan = "087877921510";

    function loadSummary() {
        const cartData = JSON.parse(localStorage.getItem('cart')) || [];
        const summaryContainer = document.getElementById('summary-items');
        let total = 0;
        summaryContainer.innerHTML = cartData.map(item => {
            total += item.harga;
            return `<div class="summary-item">
                        <span>${item.nama}</span><strong>Rp ${item.harga.toLocaleString('id-ID')}</strong>
                    </div>`;
        }).join('');
        document.getElementById('final-total').innerText = "Rp " + total.toLocaleString('id-ID');
    }

    function showBankOptions() {
        document.getElementById('bank-selection-panel').style.display = 'block';
        document.getElementById('ewallet-selection-panel').style.display = 'none';
        document.getElementById('ewallet-display-panel').style.display = 'none';
        resetEwalletSelection();
    }

    function displayVA(bankName) {
        const vaPanel = document.getElementById('va-display-panel');
        const vaNumber = document.getElementById('va-number');
        const vaBankName = document.getElementById('va-bank-name');
        let num = (bankName === 'BCA') ? "8837300012345" : (bankName === 'Mandiri') ? "9001200054321" : "8277000098765";
        vaBankName.innerText = bankName;
        vaNumber.innerText = num;
        vaPanel.style.display = 'block';
        document.getElementById('ewallet-display-panel').style.display = 'none';
    }

    function showEwalletOptions() {
        document.getElementById('ewallet-selection-panel').style.display = 'block';
        document.getElementById('bank-selection-panel').style.display = 'none';
        document.getElementById('va-display-panel').style.display = 'none';
        resetBankSelection();
    }

    function displayEwallet(name) {
        let vaEwallet = (name === 'Dana') ? "8528" + phoneTujuan : "9" + phoneTujuan;
        document.getElementById('ewallet-name').innerText = name;
        document.getElementById('ewallet-name-instr').innerText = name;
        document.getElementById('ewallet-number').innerText = vaEwallet;
        
        const qrImageElement = document.getElementById('qr-image');
        qrImageElement.src = "qr.jpg"; 

        document.getElementById('ewallet-display-panel').style.display = 'block';
        document.getElementById('va-display-panel').style.display = 'none';
    }

    function hideAllOptions() {
        document.getElementById('bank-selection-panel').style.display = 'none';
        document.getElementById('ewallet-selection-panel').style.display = 'none';
        document.getElementById('va-display-panel').style.display = 'none';
        document.getElementById('ewallet-display-panel').style.display = 'none';
        resetBankSelection(); 
        resetEwalletSelection();
    }

    function copyText(id) {
        navigator.clipboard.writeText(document.getElementById(id).innerText);
        alert("Nomor berhasil disalin!");
    }

    function resetBankSelection() { document.getElementsByName('nama_bank').forEach(r => r.checked = false); }
    function resetEwalletSelection() { document.getElementsByName('nama_ewallet').forEach(r => r.checked = false); }

    function handlePayment(event) {
        event.preventDefault();
        const metode = document.querySelector('input[name="metode"]:checked').value;
        if (metode === 'transfer_bank' && !document.querySelector('input[name="nama_bank"]:checked')) {
            alert("Pilih bank dulu!"); return;
        }
        if (metode === 'e_wallet' && !document.querySelector('input[name="nama_ewallet"]:checked')) {
            alert("Pilih Dana atau OVO dulu!"); return;
        }
        document.getElementById('success-msg').innerText = (metode === 'cod') ? "Tunggu kurir kami mengantarkan paket Anda." : "Pesanan berhasil dibuat! Silakan segera selesaikan pembayaran sesuai instruksi.";
        document.getElementById('success-modal').style.display = 'flex';
    }

    function finishOrder() {
    // 1. Ambil data keranjang saat ini
    const cartData = JSON.parse(localStorage.getItem('cart')) || [];
    
    if (cartData.length > 0) {
        // 2. Ambil riwayat yang sudah ada atau buat array baru jika kosong
        const riwayat = JSON.parse(localStorage.getItem('riwayat_belanja')) || [];
        
        // 3. Ambil detail dari form (opsional, untuk melengkapi data)
        const metode = document.querySelector('input[name="metode"]:checked').value;
        const total = cartData.reduce((sum, item) => sum + item.harga, 0);
        const sekarang = new Date();

        // 4. Buat objek pesanan baru
        const pesananBaru = {
            id: 'ORD-' + sekarang.getTime(), // ID unik berdasarkan timestamp
            tanggal: sekarang.toLocaleDateString('id-ID'),
            jam: sekarang.getHours() + ':' + sekarang.getMinutes(),
            items: cartData,
            metode: metode,
            total: total
        };

        // 5. Masukkan ke riwayat dan simpan kembali ke localStorage
        riwayat.push(pesananBaru);
        localStorage.setItem('riwayat_belanja', JSON.stringify(riwayat));
    }

    // 6. Hapus keranjang dan pindah halaman
    localStorage.removeItem('cart');
    window.location.href = 'beranda.php';
    }

    loadSummary();
</script>
</body>
</html>