<?php
$host = "localhost";
$dbname = "vr_room";
$username = "root";
$password = ""; // ใส่รหัสผ่านของ MySQL ถ้ามี

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>
