<?php
include 'db.php';

$stmt = $pdo->query("SELECT * FROM objects");
$objects = $stmt->fetchAll(PDO::FETCH_ASSOC);

header('Content-Type: application/json');
echo json_encode($objects);
?>
