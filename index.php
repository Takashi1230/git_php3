<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>データ登録</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <style>div{padding: 10px;font-size:16px;}</style>
</head>
<body>

<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
    <div class="navbar-header"><a class="navbar-brand" href="select.php">データ一覧</a></div>
    </div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<form method="POST" action="insert.php">
  <div class="jumbotron">
   <fieldset>
    <legend>ブックマーク登録</legend>
     <label>書籍名：<input type="text" name="bookname"></label><br>
     <label>書籍URL：<input type="text" name="url"></label><br>
     <b>おすすめ度：</b>
      <label>★★★★★<input type="radio" name="star" value = "5"></label>
      <label>★★★★<input type="radio" name="star" value = "4"></label>
      <label>★★★<input type="radio" name="star" value = "3"></label>
      <label>★★<input type="radio" name="star" value = "2"></label>
      <label>★<input type="radio" name="star" value = "1"></label>
     <br>
     <label>書籍コメント<textArea name="comment" rows="4" cols="40"></textArea></label><br>
     <input type="submit" value="送信">
    </fieldset>
  </div>
</form>
<a href="select.php">結果を見る</a>
<!-- Main[End] -->


</body>
</html>
