<?php
session_start();
include '../config/database.php';
$username = $_POST['username'];
$password = $_POST['password'];

$query = mysqli_query($conn, "SELECT * FROM users WHERE username='$username' AND password='$password'");
if(mysqli_num_rows($query) > 0) {
    $data = mysqli_fetch_assoc($query);
    $_SESSION['username'] = $username;
    $_SESSION['role'] = $data['role'];
    header($data['role'] == "admin" ? "location:../admin/dashboard.php" : "location:../user/form_lapor.php");
} else {
    header("location:login.php?pesan=gagal");
}
?>