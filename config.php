<?php
$dsn = "mysql:dbname=blog;host=localhost";
$dbuser = "root";
$dbpass = "";

try {
    $pdo = new PDO($dsn, $dbuser, $dbpass);
} catch (PDOExecption $e) {
    echo "A conexão falhou: ".$e->getMessage();
}