<?php
// var_dump($_POST);
// exit();

// idをgetで受け取る
$id = $_GET['id'];

include('functions.php');
$pdo = connect_to_db();

// idを指定して更新するSQLを作成 -> 実行の処理
$sql = ' DELETE FROM golf_table WHERE id=:id';
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
$status = $stmt->execute();

if ($status == false) {
    $error = $stmt->errorInfo();
    echo json_encode(["error_msg" => "{$error[2]}"]);
    exit();
} else {

    // 一覧画面にリダイレクト
    header('Location:todo_read.php');
    exit();
}
