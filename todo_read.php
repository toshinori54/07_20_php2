<?php

// // DB接続情報
// $dbn = 'mysql:dbname=gsacf_d07_20;charset=utf8;port=3306;host=localhost';
// $user = 'root';
// $pwd = '';

// // DB接続
// try {
//   $pdo = new PDO($dbn, $user, $pwd);
// } catch (PDOException $e) {
//   echo json_encode(["db error" => "{$e->getMessage()}"]);
//   exit();
// }
//DB接続　functions.phpの呼び出し
include('functions.php');
//$pdoに接続情報を入れたい
$pdo = connect_to_db();

// 参照はSELECT文！
//↓↓これでもリロードで出来る
// $sql = 'select * FROM golf_table ORDER BY RAND() LIMIT 4';
$sql = 'SELECT * FROM golf_table ';
$stmt = $pdo->prepare($sql);
$status = $stmt->execute();

if ($status == false) {
  $error = $stmt->errorInfo();
  exit('sqlError:' . $error[2]);
} else {
  $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
  $output = "";
  foreach ($result as $record) {
    // $output .= "<tr><td>{$record["username"]}</td>";
    $output .= "<tr>";
    $output .= "<td>{$record["username"]}</td>";
    $output .= "<td>{$record["play"]}</td>";
    $output .= "<td>{$record["id"]}</td>";
    $output .= "</tr>";
    //edit deleteリンク追加
    $output .= "<td><a href='todo_edit.php?id={$record["id"]}'>edit</a></td>";
    $output .= "<td><a href='todo_delete.php?id={$record["id"]}'>delete</a></td>";
    $output .= "</tr>";
  }
  // $valueの参照を解除する．解除しないと，再度foreachした場合に最初からループしない
  // 今回は以降foreachしないので影響なし
  unset($record);
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
          <th>id</th>
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
  // var menbers = [<?= $output ?>];

  $("#start").on("click", function() {
    const random = Math.floor(Math.random() * choice.length);
    if (random == 0) {
      console.log("テスト");
      // $("#echo").html("")
    } else {
      console.log("テスト以外");

    }

  });

  // var menbers = [<?= $output ?>]
  // document.getElementByid("dat").value = menbers[Math.floor(Math.random() * menbars.length)];
  // $("#start").on("click", function() {
  //   const ramdomNumber0 = Math.floor(Math.random() * menber.length)
  //   if (randomNumber0 == 0) {
  //     $("#echo").html($record["id"])
  //   } else if (randomNumber0 == 1) {
  //     $("#echo").html($record["id"])
  //   } else if (randomNumber0 == 2) {
  //     $("#echo").html($record["id"])
  //   } else {
  //     console.log("エラー");
  //   }
  // });
</script>

<table>
  <tr>
    <td><input type="text" id="output1" placeholder="ランダムに表示されます"></td>
    <td><input type="text" id="output2" placeholder="ランダムに表示されます"></td>
    <td><input type="text" id="output3" placeholder="ランダムに表示されます"></td>
    <td><input type="text" id="output4" placeholder="ランダムに表示されます"></td>
  </tr>
</table>
<script>