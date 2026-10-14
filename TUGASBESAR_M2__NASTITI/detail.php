<?php
include 'koneksi.php';

// Cek apakah ada parameter 'id' di URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM pembicara WHERE id = '$id'";
    $result = mysqli_query($koneksi, $query);
    $row = mysqli_fetch_assoc($result);

    if (!$row) {
        echo "<script>alert('Data tidak ditemukan!'); window.location='index.php';</script>";
        exit;
    }
} else {
    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Pembicara</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Profil Detail Narasumber</h1>
    </header>

    <main>
        <div style="background: white; padding: 2rem; border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.05);">
            <h2><?= htmlspecialchars($row['nama']); ?></h2>
            <hr style="margin: 1rem 0; border: 0; border-top: 1px solid #eee;">
            
            <p><strong>Bidang Keahlian:</strong> <?= htmlspecialchars($row['keahlian']); ?></p><br>
            
            <p><strong>Riwayat Institusi:</strong>
                <br><?= nl2br(htmlspecialchars($row['institusi'])); ?>
            </p><br>
            
            <p><strong>Tautan Portofolio:</strong> 
                <span style="text-decoration: underline; color: #666;"><?= htmlspecialchars($row['portofolio']); ?></span>
            </p>
            
            <div style="margin-top: 2rem;">
                <a href="index.php" class="btn" style="background-color: #7f8c8d;">← Kembali ke Daftar Pembicara</a>
            </div>
        </div>
    </main>

    <footer>
        <p>Sistem Pengelolaan Event & Workshop - Tugas 1 Pengembangan Aplikasi Web</p>
    </footer>
</body>
</html>