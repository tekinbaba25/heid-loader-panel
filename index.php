<?php
session_start();
if (!isset($_SESSION['logged_in'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>HEID LOADER Admin Panel</title>
</head>
<body>
    <h1>HEID LOADER Admin Panel</h1>
    <p>Hoş geldiniz! Buradan anahtarları yönetebilirsiniz.</p>
    <form method="POST" action="olustur.php">
        <label>Key Türü:</label><br>
        <select name="tur">
            <option value="1G">1 Günlük</option>
            <option value="7G">7 Günlük</option>
            <option value="30G">30 Günlük</option>
        </select><br><br>
        <button type="submit">Key Oluştur</button>
    </form>
    <br>
    <a href="logout.php">Çıkış Yap</a>
</body>
</html>
