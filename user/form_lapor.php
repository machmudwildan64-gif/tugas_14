<?php 
session_start();
if($_SESSION['role'] != "user") header("location:../auth/login.php");
include '../config/database.php';

if(isset($_POST['kirim'])) {
    $p = $_SESSION['username'];
    $n = $_POST['nama_pelanggar'];
    $k = $_POST['kategori'];
    mysqli_query($conn, "INSERT INTO laporan (pelapor, nama_pelanggar, kategori, status) VALUES ('$p', '$n', '$k', 'pending')");
    echo "<script>alert('Laporan Terkirim!');</script>";
}
?>
<!DOCTYPE html>
<html>
<head><title>Form Lapor</title><link rel="stylesheet" href="../assets/style.css"></head>
<body>
    <nav>User: <?= $_SESSION['username']; ?> | <a href="../auth/logout.php">Logout</a></nav>
    <form method="POST">
        <h2>Laporkan Pelanggaran</h2>
        <input type="text" name="nama_pelanggar" placeholder="Nama Pelanggar" required>
        <select name="kategori">
            <option value="Terlambat">Terlambat</option>
            <option value="Atribut">Atribut</option>
            <option value="Bolos">Bolos</option>
        </select>
        <button type="submit" name="kirim">Kirim Laporan</button>
    </form>
</body>
</html>