<?php
include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modul Pembicara - Event & Workshop</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Narasumber & Speaker</h1>
        <p>Sistem Pengelolaan Event & Workshop</p>
    </header>

    <main>
        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 1.5rem;">
            <h2>Daftar Pembicara Utama</h2>
            <a href="tambah.php" class="btn" style="background-color: #2ecc71;">+ Tambah Pembicara</a>
        </div>
        
        <div class="card-container">
            <?php
            $query  = "SELECT * FROM pembicara";
            $result = mysqli_query($koneksi, $query);

            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
            ?>
                <div class="card">
                        <h3><?= htmlspecialchars($row['nama']); ?></h3>
                        <p><strong>Keahlian:</strong> <?= htmlspecialchars($row['keahlian']); ?></p>
                        <p><strong>Institusi:</strong> <?= htmlspecialchars($row['institusi']); ?></p>
                        <a href="detail.php?id=<?= $row['id']; ?>" class="btn">Lihat Profil Lengkap</a>
                    <!-- Tombol Aksi -->
                        <a href="proses-delete.php?id=<?= $row['id']; ?>" class="btn" style="background-color: #e74c3c;" onclick="return confirm('Yakin ingin menghapus data ini?');">Hapus</a>
                         <a href="proses-edit.php" class="btn" style="background-color: #ff02d1;"> </a>
                </div>
            <?php
                }
            } else {
                echo "<p>Belum ada data pembicara di database.</p>";
            }
            ?>
        </div>
    </main>

    <footer>
        <p>Dibuat oleh: Salsabila Nastitihani | NIM: 102022500293 | Kelas: SI4906</p>
        <p>Kelompok: 8 | Modul: Modul Pembicara / Speaker</p>
    </footer>
</body>
</html>