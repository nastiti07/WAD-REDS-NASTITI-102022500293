<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Pembicara - Modul Pembicara</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Tambah Narasumber & Speaker</h1>
        <p>Sistem Pengelolaan Event & Workshop</p>
    </header>

    <main>
        <div style="background: white; padding: 2rem; border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.05);">
            <h2>Form Tambah Pembicara</h2>
            <hr style="margin: 1rem 0; border: 0; border-top: 1px solid #eee;">
            
            <form action="proses-insert.php" method="POST">
                <div style="margin-bottom: 1rem;">
                    <label><strong>Nama Lengkap & Gelar:</strong></label><br>
                    <input type="text" name="nama" required style="width: 100%; padding: 0.5rem; margin-top: 0.3rem;">
                </div>

                <div style="margin-bottom: 1rem;">
                    <label><strong>Keahlian:</strong></label><br>
                    <textarea name="keahlian" required style="width: 100%; padding: 0.5rem; margin-top: 0.3rem; height: 80px;"></textarea>
                </div>

                <div style="margin-bottom: 1rem;">
                    <label><strong>Institusi / Universitas:</strong></label><br>
                    <input type="text" name="institusi" required style="width: 100%; padding: 0.5rem; margin-top: 0.3rem;">
                </div>

                <div style="margin-bottom: 1.5rem;">
                    <label><strong>Tautan Portofolio:</strong></label><br>
                    <input type="text" name="portofolio" placeholder="https://..." style="width: 100%; padding: 0.5rem; margin-top: 0.3rem;">
                </div>

                <button type="submit" name="simpan" class="btn" style="border: none; cursor: pointer;">Simpan Data</button>
                <a href="index.php" class="btn" style="background-color: #7f8c8d; text-decoration: none;">Batal</a>
            </form>
        </div>
    </main>

    <footer>
        <p>Dibuat oleh: Salsabila Nastitihani | NIM: 102022500293 | Kelas: SI4906</p>
        <p>Kelompok: 8 | Modul: Modul Pembicara / Speaker</p>
    </footer>
</body>
</html>