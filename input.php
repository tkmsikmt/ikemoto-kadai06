
<!-- <?php
if(isset($_POST["store"])) {
  // セレクトボックスで選択された値を受け取る
  $store = $_POST["store"];

  // 受け取った値を画面に出力
  echo $store;
}

if(isset($_POST["zaiko"])) {
    // セレクトボックスで選択された値を受け取る
    $zaiko = $_POST["zaiko"];
  
    // 受け取った値を画面に出力
    echo $zaiko;
  }
?> -->

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>課題テンプレート</title>
</head>

<body>
    <!-- <form action="write.php" method="post">
        お名前2: <input type="text" name="name">
        出身: <input type="text" name="birthPlace">
        <input type="submit" value="送信">
    </form> -->

    <form action="write.php" method = "POST">
        <select name="store" id="key" >
        <option value="00" >薬局選択</option>
        <option value="クオール" >クオール</option>
        <option value="アイン" >アイン</option>
         </select>

        <select name="zaiko" id="key" >
        <option value="00">在庫</option>
        <option value="有り">在庫有り</option>
        <option value="無し">在庫無し</option>
        </select>

      <input type="submit"name="submit"value="送信"/>
    </form>
</body>

</html>

<!-- <?php
if(isset($_POST["store"])) {
  // セレクトボックスで選択された値を受け取る
  $store = $_POST["store"];

  // 受け取った値を画面に出力
  echo $store;
}

if(isset($_POST["zaiko"])) {
    // セレクトボックスで選択された値を受け取る
    $zaiko = $_POST["zaiko"];
  
    // 受け取った値を画面に出力
    echo $zaiko;
  }
?> -->
