<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ゴルフ幹事（入力画面）</title>
</head>

<body>
  <form action="todo_create.php" method="POST">
    <fieldset>
      <legend>ゴルフ幹事（入力画面）</legend>
      <a href="todo_read.php">一覧画面</a>
      <div>
        プレイヤー: <input type="text" name="username">
      </div>
      <div>
        プレー日: <input type="date" name="play">
      </div>
      <!-- <select name="place">
        <option value="">都道府県をお選びください。</option>

        <optgroup label="九州・沖縄">
          <option value="福岡県">福岡県</option>
          <option value="佐賀県">佐賀県</option>
          <option value="長崎県">長崎県</option>
          <option value="熊本県">熊本県</option>
          <option value="大分県">大分県</option>
          <option value="宮崎県">宮崎県</option>
          <option value="鹿児島県">鹿児島県</option>
          <option value="沖縄県">沖縄県</option>
        </optgroup>
      </select> -->

      <div>
        <button>submit</button>
      </div>
    </fieldset>
  </form>

</body>

</html>