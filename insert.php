<?php
// データ受け取り
$name = $_POST["name"];
$url = $_POST["url"];
$email = $_POST["email"];
$content = $_POST["content"];

// DB接続
require_once("db_connect.php");

// SQL作成
$sql = "INSERT INTO gs_bm_table(name, email, content, url, date)
        VALUES(:name, :email, :content, :url, sysdate())";

// 実行準備
$stmt = $pdo->prepare($sql);

// バインド
$stmt->bindValue(':name', $name, PDO::PARAM_STR);
$stmt->bindValue(':url', $url, PDO::PARAM_STR);
$stmt->bindValue(':email', $email, PDO::PARAM_STR);
$stmt->bindValue(':content', $content, PDO::PARAM_STR);

// 実行
$status = $stmt->execute();

// 結果チェック
if ($status == false) {
  $error = $stmt->errorInfo();
  var_dump($error);
  exit("QueryError:" . $error[2]);
} else {
  header("Location: select.php");
  exit();
}
?>
