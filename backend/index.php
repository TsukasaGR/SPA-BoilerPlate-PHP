<?php

echo 'Hello Backend!!!<br>';

try {
    $dbName = 'test_db';
    $dbHost = 'app-db';
    $dbPort = '3306';
    $dbUser = 'root';
    $dbPass = 'root';
    $sql = new PDO (
        "mysql:dbname={$dbName}; host={$dbHost};port={$dbPort}",
        'root',
        'root' );
    echo 'DB接続に成功しました。';
} catch ( PDOException $e ) {
    echo "接続エラー:{$e->getMessage()}. <br>test_dbを作成していない場合は作成して下さい";
}
$sql = null;
