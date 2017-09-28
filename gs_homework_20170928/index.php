<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>本のブックマーク</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <style>div{padding: 10px;font-size:16px;}</style>
</head>
<body>

<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
    <div class="navbar-header"><a class="navbar-brand" href="select.php">本のブックマーク</a></div>
    </div>
  </nav>
</header>
<!-- Head[End] -->


<!-- Main[Start] -->
<form method="post" action="insert.php">
  <div class="jumbotron">
   <fieldset>
    <legend>本の情報を入力</legend>
     <label>書籍名：<input type="text" name="book_name"></label><br>
     <label>書籍URL：<input type="text" name="book_url"></label><br>
     <label>書籍コメント：<br>
       <textArea name="book_comment" rows="4" cols="40"></textArea></label><br>
     <input type="submit" value="送信">
    </fieldset>
  </div>
</form>
<!-- Main[End] -->


</body>
</html>
