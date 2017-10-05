<?php
if (
  !isset($_POST["book_name"]) || $_POST["book_name"]=="" ||
  !isset($_POST["book_url"]) || $_POST["book_url"]=="" ||
  !isset($_POST["book_comment"]) || $_POST["book_comment"]==""
) {
  exit('ParamError');
}
//1.
$book_name = $_POST["book_name"];
$book_url = $_POST["book_url"];
$book_comment = $_POST["book_comment"];

//2.
try {
  $pdo = new PDO('mysql:dbname=gs_db;charset=utf8;host=localhost','root','');
} catch (PDOException $e) {
  exit('DbConnectError:'.$e->getMessage());
}

//３．
$sql = "INSERT INTO gs_bm_table(id, book_name, book_url, book_comment,indate)
  VALUES(NULL, :a1, :a2, :a3, sysdate())";

$stmt = $pdo->prepare($sql);
$stmt->bindValue(':a1', $book_name, PDO::PARAM_STR);
$stmt->bindValue(':a2', $book_url, PDO::PARAM_STR);
$stmt->bindValue(':a3', $book_comment, PDO::PARAM_STR);
$status = $stmt->execute();

//４．
if($status==false){
  $error = $stmt->errorInfo();
  exit("QueryError:".$error[2]);
}else{
  header("Location: index.php");
  exit;
}
?>
