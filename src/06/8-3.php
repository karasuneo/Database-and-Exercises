<?php
$db_user = "root";
$db_pass = "admin";
$db_host = "Database_And_Exercises_DB";
$db_name = "mydb";
$db_type = "mysql";
$dsn = "$db_type:host=$db_host;dbname=$db_name;charset=utf8";

$pdo = new PDO($dsn, $db_user, $db_pass);

$sql = "INSERT INTO member (last_name, first_name, age) VALUES ( :last_name, :first_name, :age)";
$stmh = $pdo->prepare($sql);
$stmh->bindValue(':last_name', '中村', PDO::PARAM_STR);
$stmh->bindValue(':first_name', '六郎', PDO::PARAM_STR);
$stmh->bindValue(':age', 42, PDO::PARAM_INT);
$stmh->execute();


