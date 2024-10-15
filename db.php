<?php
// 資料庫連接資訊
$dbms = 'mysql';
$host = 'localhost';
$dbName = 'spe_db';
$user = 'kiki223';
$pass = 'xampp123';

$dsn = "$dbms:host=$host;dbname=$dbName";
try {
    $dbh = new PDO(
        $dsn,
        $user,
        $pass,
        array(
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
        )
    );
} catch (PDOException $e) {
    die("Error!: " . $e->getMessage());
}

//替代var_dump()函式，用來印出資料
function pr($value, $exit = false)
{
    echo "<pre>";
    print_r($value);
    echo "</pre>";
    if ($exit) {
        exit;
    }
}
