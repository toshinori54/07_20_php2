<?php

// DB接続情報
$dbn = 'mysql:dbname=gsacf_d07_20;charset=utf8;port=3306;host=localhost';
$user = 'root';
$pwd = '';

// DB接続
try {
  $pdo = new PDO($dbn, $user, $pwd);
} catch (PDOException $e) {
  echo json_encode(["db error" => "{$e->getMessage()}"]);
  exit();
}
// 参照はSELECT文！
$sql = 'select * FROM golf_table';
$stmt = $pdo->prepare($sql);
$status = $stmt->execute();

if ($status == false) {
  $error = $stmt->errorInfo();
  exit('sqlError:' . $error[2]);
} else {
  $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
  $output = "";
  foreach ($result as $record) {
    $output .= "<tr><td>{$record["username"]}</td>";
    // $output .= "<tr><td>{$record["username"]}</td><td>{$record["play"]}</td><tr>";
  }
}

?>

<!DOCTYPE html>

<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DB連携型ゴルフ幹事（一覧画面）</title>
</head>

<!-- DBから取ってきた名前をランダムに配置する。
DBの名前とTablebの中の枠に割り振った数字と組み合わせる。 -->

<body>
  <fieldset>
    <legend>DB連携型ゴルフ幹事（一覧画面）</legend>
    <a href="todo_input.php">入力画面</a>
    <table>
      <thead>
        <tr>
          <th>username</th>
          <th>play</th>
        </tr>
      </thead>
      <tbody>
        <!-- ここに<tr><td>deadline</td><td>todo</td><tr>の形でデータが入る -->
        <?= $output ?>
      </tbody>
    </table>
  </fieldset>
</body>

</html>

<!-- $outoputからランダムに１名抽出し
ランダムな組み合わせを作りたい -->

<main>
  <button id="start">START</button>
  <p id="echo">組合せ</p>
</main>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
  $("#start").on("click", function() {
    const ramdomNumber0 = Math.floor(Math.random() * 4)
    if (randomNumber0 == 0) {
      $("#echo").html("大吉")
    } else if (randomNumber0 == 1) {
      $("#echo").html(<?= $output ?>)
    } else if (randomNumber0 == 2) {
      $("#echo").html <?= $output ?>)
  } else if (randomNumber0 == 3) {
    $("#echo").html(<?= $output ?>)
  }

  });
</script>

<table>
  <tr>
    <td>　</td>
    <td></td>
    <td></td>
    <td></td>
  </tr>

</table>



<script>