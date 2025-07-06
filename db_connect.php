<?php
// DB接続情報（XAMPP用）
$dsn = 'mysql:dbname=gs_db_kadai;host=localhost;charset=utf8';
$user = 'root';      // XAMPPは通常これ
$pass = '';          // パスワードは初期状態では空

try {
  // DB接続実行
  $pdo = new PDO($dsn, $user, $pass);
} catch (PDOException $e) {
  // エラーがあったら表示
  exit('DBConnectError:' . $e->getMessage());
}
?>
