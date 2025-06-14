<?php
session_start();
if (!isset($_SESSION['logged_in'])) {
    header("Location: login.php");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $tur = $_POST['tur'];
    $key = strtoupper($tur) . '-' . substr(str_shuffle("ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890"), 0, 5);
    $jsonPath = 'data.json';
    $keys = file_exists($jsonPath) ? json_decode(file_get_contents($jsonPath), true) : [];
    $keys[] = ["key" => $key, "tur" => $tur, "tarih" => date("Y-m-d H:i:s")];
    file_put_contents($jsonPath, json_encode($keys, JSON_PRETTY_PRINT));
    echo "Key oluşturuldu: $key<br><a href='index.php'>Geri dön</a>";
}
?>
