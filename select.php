<?php
require_once("db_connect.php");

$sql = "SELECT * FROM gs_bm_table ORDER BY date DESC";
$stmt = $pdo->prepare($sql);
$status = $stmt->execute();
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>登録内容一覧</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <h1>📋 登録内容一覧</h1>
  <p><a href="index.php">＋ 新規登録</a></p>
  <hr>

<?php
if ($status == false) {
  echo "<p>SQL実行エラー</p>";
} else {
    while ($r = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo '<div class="card">';
        echo "<p><strong>📹 " . htmlspecialchars($r["name"]) . "</strong></p>";
        echo "<p><a href='" . htmlspecialchars($r["url"]) . "' target='_blank'>▶ YouTubeを見る</a></p>";
        if ($r["email"]) {
          echo "<p>🧑 投稿者：" . htmlspecialchars($r["email"]) . "</p>";
        }
        echo "<p>📝 " . nl2br(htmlspecialchars($r["content"])) . "</p>";
        echo "<p style='text-align:right;'>⏰ " . htmlspecialchars($r["date"]) . "</p>";
        echo '</div>';
      }
    }
?>

</body>
</html>
