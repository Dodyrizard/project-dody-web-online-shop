<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Feedback Pengguna - PasarOnline</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body { font-family: 'Segoe UI', sans-serif; background: #f4f7f6; display: flex; justify-content: center; padding: 40px 20px; }
        .feedback-card { background: white; padding: 30px; border-radius: 15px; box-shadow: 0 10px 25px rgba(0,0,0,0.1); max-width: 500px; width: 100%; }
        .header { text-align: center; margin-bottom: 30px; }
        .header i { font-size: 40px; color: #d35400; margin-bottom: 10px; }
        .question { margin-bottom: 20px; }
        .question label { display: block; font-weight: bold; margin-bottom: 10px; color: #333; }
        select, textarea { width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 8px; box-sizing: border-box; font-size: 14px; }
        .submit-btn { background: #d35400; color: white; border: none; width: 100%; padding: 15px; border-radius: 10px; font-weight: bold; cursor: pointer; transition: 0.3s; margin-top: 10px; }
        .submit-btn:hover { background: #e67e22; }
        .back-link { display: block; text-align: center; margin-top: 20px; color: #888; text-decoration: none; font-size: 14px; }
    </style>
</head>
<body>

<div class="feedback-card">
    <div class="header">
        <i class="fas fa-comments"></i>
        <h2>Menu Feedback</h2>
        <p>Bantu kami menjadi lebih baik dengan menjawab 3 pertanyaan singkat ini.</p>
    </div>

    <form action="simpan_feedback.php" method="POST">
        <div class="question">
            <label>1. Seberapa mudah Anda menemukan produk yang dicari?</label>
            <select name="kemudahan" required>
                <option value="">-- Pilih Jawaban --</option>
                <option value="Sangat Mudah">Sangat Mudah</option>
                <option value="Cukup Mudah">Cukup Mudah</option>
                <option value="Sulit">Sulit</option>
            </select>
        </div>

        <div class="question">
            <label>2. Menurut Anda, bagaimana tampilan visual web kami?</label>
            <select name="tampilan" required>
                <option value="">-- Pilih Jawaban --</option>
                <option value="Sangat Menarik">Sangat Menarik</option>
                <option value="Biasa Saja">Biasa Saja</option>
                <option value="Perlu Perbaikan">Perlu Perbaikan</option>
            </select>
        </div>

        <div class="question">
            <label>3. Fitur apa yang paling ingin Anda tambahkan di web ini?</label>
            <textarea name="saran" rows="4" placeholder="Contoh: Fitur Dark mode dll..." required></textarea>
        </div>

        <button type="submit" class="submit-btn">Kirim Feedback</button>
    </form>

    <a href="beranda.php" class="back-link">Nanti saja, kembali ke Beranda</a>
</div>

</body>
</html>