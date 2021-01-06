<?php
// var_dump($_GET);
// exit();


// 送信されたIDをGETで受け取る
$id = $_GET['id'];
// 関数ファイル読み込み
include('functions.php');

// DB接続&id名でテーブルから検索
$pdo = connect_to_db();

$sql = 'SELECT * FROM golf_table WHERE id=:id';
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
$status = $stmt->execute();

if ($status == false) {
    $error = $stmt->errorInfo();
    echo json_encode(["error_msg" => "{$error[2]}"]);
    exit();
} else {
    $record = $stmt->fetch(PDO::FETCH_ASSOC);
    // var_dump($record);
    // exit();
}

?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DB連携型ゴルフ（編集画面）</title>
</head>

<body>
    <form action="todo_update.php" method="POST">
        <fieldset>
            <legend>DB連携型ゴルフ幹事（編集画面）</legend>
            <a href="todo_read.php">一覧画面</a>
            <div>
                username: <input type="text" name="username" value="<?= $record["username"] ?>">
            </div>
            <div>
                play: <input type="date" name="play" value="<?= $record["play"] ?>">
            </div>
            <div>
                <button>submit</button>
            </div>
            <input type="text" name="id" value="<?= $record["id"] ?>">
        </fieldset>
    </form>

</body>

</html>