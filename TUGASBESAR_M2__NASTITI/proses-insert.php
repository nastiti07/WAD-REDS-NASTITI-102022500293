<?php
include 'koneksi.php';
if (isset($_POST['simpan'])) {
    $nama       = $_POST['nama'];
    $keahlian   = $_POST['keahlian'];
    $institusi  = $_POST['institusi'];
    $portofolio = $_POST['portofolio'];

    $query = "INSERT INTO pembicara (nama, keahlian, institusi, portofolio) 
              VALUES ('$nama', '$keahlian', '$institusi', '$portofolio')";
    
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        echo "<script>alert('Data Pembicara Berhasil Ditambahkan!'); window.location='index.php';</script>";
    } else {
        echo "Gagal menambahkan data: " . mysqli_error($koneksi);
    }
}
?>