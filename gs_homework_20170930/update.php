<?php
//1.POSTでParamを取得
$id             = $_POST["id"];
$book_name      = $_POST["book_name"];
$book_url       = $_POST["book_url"];
$book_comment   = $_POST["book_comment"];

//2.DB接続など
try {
  $pdo = new PDO('mysql:dbname=gs_db;charset=utf8;host=localhost','root','');
} catch (PDOException $e) {
  exit('DbConnectError:'.$e->getMessage());
}

//3.UPDATE gs_an_table SET ....; で更新(bindValue)
//　基本的にinsert.phpの処理の流れです。
$stmt = $pdo->prepare("UPDATE gs_bm_table SET book_name=:book_name,book_url=:book_url,book_comment=:book_comment WHERE id=:id");
$stmt->bindValue(':book_name', $book_name);
$stmt->bindValue(':book_url', $book_url);
$stmt->bindValue(':book_comment', $book_comment);
$stmt->bindValue(':id', $id);
$status = $stmt->execute();

if($status==false){
  //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
  $error = $stmt->errorInfo();
  exit("QueryError:".$error[2]);
}else{
  //５．select.phpへリダイレクト
  header("Location: select.php");
  exit;
}

?>
