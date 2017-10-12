<?php
session_start();
include("functions.php");
ssidChk();
if ($_SESSION['kanri_flg'] == 0)
{
  echo "権限がありません";
  exit();
} else {
  //1.GETでidを取得
  $id = $_GET["id"];

  //2.DB接続など
  try {
    $pdo = new PDO('mysql:dbname=gs_db;charset=utf8;host=localhost','root','');
  } catch (PDOException $e) {
    exit('データベースに接続できませんでした。'.$e->getMessage());
  }

  //２．データ登録SQL作成
  $stmt = $pdo->prepare("SELECT * FROM gs_user_table WHERE id=:id");
  $stmt->bindValue(':id', $id);
  $status = $stmt->execute();

  //３．データ表示
  $view="";
  if($status==false){
    //execute（SQL実行時にエラーがある場合）
    $error = $stmt->errorInfo();
    exit("ErrorQuery:".$error[2]);
  }else{
    //Selectデータの数だけ自動でループしてくれる
    $row = $stmt->fetch(); //$row["name"]
  }
}
?>


<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>POSTデータ登録</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <style>div{padding: 10px;font-size:16px;}</style>
</head>
<body>

<!-- Head[Start] -->
<?php include('gnav.php'); ?>
<!-- Head[End] -->

<!-- Main[Start] -->
<form method="post" action="update_user.php">
  <div class="jumbotron">
   <fieldset>
    <legend>ユーザー登録</legend>
     <label>名前：<input type="text" name="name" value="<?=$row["name"]?>"></label><br>
     <label>ID：<input type="text" name="lid" value="<?=$row["lid"]?>"></label><br>
     <label>パスワード：<input type="text" name="lpw" value="<?=$row["lpw"]?>"></label><br>
     権限：<label><input type="radio" name="kanri_flg" value="0" <?php if ($row['kanri_flg'] == 0) {echo "checked='checked'";}?>>管理者<label>
          <label><input type="radio" name="kanri_flg" value="1" <?php if ($row['kanri_flg'] == 1) {echo "checked='checked'";}?>>スーパー管理者</label>
     有効：<label><input type="radio" name="life_flg" value="0" <?php if ($row['life_flg'] == 0) {echo "checked='checked'";}?>>使用中</label>
          <label><input type="radio" name="life_flg" value="0" <?php if ($row['life_flg'] == 1) {echo "checked='checked'";}?>>使用停止</label>
     <input type="hidden" name="id" value="<?=$id?>">
     <input type="submit" value="送信">
    </fieldset>
  </div>
</form>
<!-- Main[End] -->


</body>
</html>
