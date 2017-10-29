<?php
include("functions.php");
if(
  !isset($_POST["q1"]) || $_POST["q1"]=="" ||
  !isset($_POST["q2"]) || $_POST["q2"]=="" ||
  !isset($_POST["q3"]) || $_POST["q3"]=="" ||
  !isset($_POST["q4"]) || $_POST["q4"]==""
){
  exit('ParamError');
}
//1.POSTでParamを取得
$q1  = $_POST["q1"];
$q2  = $_POST["q2"];
$q3  = $_POST["q3"];
$q4  = $_POST["q4"];

//2.DB接続など
$pdo = db_con();

$stmt = $pdo->prepare("INSERT INTO gs_survey (id, q1, q2, q3, q4, indate) VALUES (NULL, :q1, :q2, :q3, :q4, sysdate())");
$stmt->bindValue(':q1', $q1, PDO::PARAM_INT);
$stmt->bindValue(':q2', $q2, PDO::PARAM_INT);
$stmt->bindValue(':q3', $q3, PDO::PARAM_INT);
$stmt->bindValue(':q4', $q4, PDO::PARAM_STR);
$status = $stmt->execute();

if($status==false){
  queryError($stmt);
}else{
  echo "Thank you";;
  exit;
}

?>
