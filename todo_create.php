<?php

//データうけとりの時にまずやること（確認用）
// var_dump($_POST);
// exit();

//エラーが無いか確認している？
if (
  !isset($_POST["username"]) || $_POST["username"] == "" ||
  !isset($_POST["play"]) || $_POST["play"] == ""
  // !isset($_POST["place"]) || $_POST["place"] == ""

) {
  exit("ParamError");
}


//データを変数に格納
$username = $_POST["username"];
$play = $_POST["play"];
// $id = $_POST['id'];
// $place = $_POST["place"];

// // DB接続情報
// $dbn = 'mysql:dbname=gsacf_d07_20;charset=utf8;port=3306;host=localhost';
// $user = 'root';
// $pwd = ''; //空文字

// // DB接続
// try {
//   $pdo = new PDO($dbn, $user, $pwd);
// } catch (PDOException $e) {
//   exit("OK");
//   echo json_encode(["db error" => "{$e->getMessage()}"]);
//   exit();
// }

//DB接続　functions.phpの呼び出し
include('functions.php');
//$pdoに接続情報を入れたい
$pdo = connect_to_db();

$sql = 'INSERT INTO golf_table(id, username, play, created_at, updated_at)    
VALUES(NULL, :username, :play, sysdate(), sysdate())';
$stmt = $pdo->prepare($sql);
//バインド変数が２つなので以下が２行
$stmt->bindValue(':username', $username, PDO::PARAM_STR);
//PARAM_STRは数字の場合はPARAM_INTに変える
$stmt->bindValue(':play', $play, PDO::PARAM_STR);
$status = $stmt->execute(); // SQLを実行

// 失敗時にエラーを出力し，成功時は登録画面に戻る
if ($status == false) {
  $error = $stmt->errorInfo();
  // データ登録失敗次にエラーを表示
  exit('sqlError:' . $error[2]);
} else {
  // 登録ページへ移動
  header('Location:todo_input.php');
}
