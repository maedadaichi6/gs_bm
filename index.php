<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>ブックマーク登録</title>
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <h1>📚 ブックマーク登録</h1>
  <form action="insert.php" method="post">
  <label>動画タイトル：<input type="text" name="name"></label><br>
  <label>YouTubeリンク：<input type="url" name="url"></label><br>
  <label>メールアドレス：<input type="email" name="email"></label><br>
  <label>感想・メモ：<textarea name="content"></textarea></label><br>
  <input type="submit" value="登録">
</form>

  <p><a href="select.php">▶ 一覧を見る</a></p>
</body>
</html>
