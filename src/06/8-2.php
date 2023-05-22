<?php
$db_user = "user";
$db_pass = "f3u6mi";
$db_host = "Database_And_Exercises_DB";
$db_name = "mydb";
$db_type = "mysql";
$dsn = "$db_type:host=$db_host;dbname=$db_name;charset=utf8";

try {
    $pdo = new PDO($dsn, $db_user, $db_pass);
    echo "接続成功\n";
} catch (PDOException $e) {
    echo "接続失敗: " . $e->getMessage() . "\n";
    exit(1);
}
