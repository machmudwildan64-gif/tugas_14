<?php 
session_start();
if($_SESSION['role'] != "admin") header("location:../auth/login.php");
include '../config/database.php';
$data = mysqli_query($conn, "SELECT * FROM laporan ORDER BY id DESC");
?>
<!DOCTYPE html>
<html>
<head><title>Admin Dashboard</title><link rel="stylesheet" href="../assets/style.css"></head>
<body>
    <nav>Selamat Datang, Admin | <a href="../auth/logout.php">Logout</a></nav>
    <h2>Rekap Pelanggaran</h2>
    <table border="1" cellpadding="10">
        <tr><th>Pelapor</th><th>Pelanggar</th><th>Kategori</th><th>Status</th><th>Aksi</th></tr>
        <?php while($row = mysqli_fetch_assoc($data)): ?>
        <tr>
            <td><?= $row['pelapor']; ?></td>
            <td><?= $row['nama_pelanggar']; ?></td>
            <td><?= $row['kategori']; ?></td>
            <td><b><?= $row['status']; ?></b></td>
            <td><a href="update_status.php?id=<?= $row['id']; ?>">Validasi</a></td>
        </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>