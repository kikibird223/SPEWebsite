<?php
// 包含資料庫連線配置
include('db.php');

// 查詢所有服務項目
$sql = "SELECT * FROM services";
$stmt = $dbh->prepare($sql);
$stmt->execute();
$services = $stmt->fetchAll(PDO::FETCH_ASSOC);

// 轉換為 JSON 格式
echo json_encode(['services' => $services]);
?>
