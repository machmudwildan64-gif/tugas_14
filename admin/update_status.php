<?php
include '../config/database.php';
$id = $_GET['id'];
mysqli_query($conn, "UPDATE laporan SET status='valid' WHERE id='$id'");
header("location:dashboard.php");
?>