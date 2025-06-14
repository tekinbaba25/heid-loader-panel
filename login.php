<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user = $_POST['username'];
    $pass = $_POST['password'];
    if ($user === "admin" && $pass === "123456") {
        $_SESSION['logged_in'] = true;
        header("Location: index.php");
        exit();
    } else {
        $error = "Hatalı giriş!";
    }
}
?>
<!DOCTYPE html>
<html lang="tr">
<head><meta charset="UTF-8"><title>Giriş</title></head>
<body>
    <h2>Admin Girişi</h2>
    <?php if (isset($error)) echo "<p style='color:red;'>$error</p>"; ?>
    <form method="POST">
        Kullanıcı Adı: <input name="username"><br>
        Şifre: <input type="password" name="password"><br><br>
        <button type="submit">Giriş Yap</button>
    </form>
</body>
</html>
