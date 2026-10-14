<?php
include 'koneksi.php';
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "SELECT*FROM pembicara WHERE id = '$id'";
    $row = mysqli_fetch_assoc($result);
    $result = mysqli_query($koneksi, $query);
    $categories = mysqli_query ($conn, "SELECT*FROM pembicara WHERE catagories");
?>
<input type="hidden" name="id" value 

<a href = "index.php?id=<?= &id ?>" btn btn-warning mb-2 w-100> edit  </a>