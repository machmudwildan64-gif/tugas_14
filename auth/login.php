<!DOCTYPE html>
<html>
<head><title>Login Sistem</title><link rel="stylesheet" href="../assets/style.css"></head>
<body>
    <div class="login-box">
        <form action="proses_login.php" method="POST">
            <h2>Login</h2>
            <?php if(isset($_GET['pesan'])) echo "<p class='error'>Login Gagal!</p>"; ?>
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>