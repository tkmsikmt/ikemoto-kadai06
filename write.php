<?php


// $name= $_POST['name'];
// $birthPlace=$_POST['birthPlace'];


$store=$_POST['store'];
$zaiko=$_POST['zaiko'];


// ファイルをオープン
$file= fopen("./sample.csv", "a");


//記入時

$time = date('Y/m/d H:i:s');


// // ファイルに書き込み
fwrite($file, $time . "," .  $store . ","  . $zaiko . "\n");
// fwrite($file, $time .  $store  . $zaiko . "\n");


//　ファイルに保存
fclose($file);

?>


<html>

<head>
    <meta charset="utf-8">
    <title>File書き込み</title>
</head>

<body>

    <h1>書き込みしました。</h1>
    <h2>  ./sample.csv を確認しましょう！</h2>

    <ul>
        <li><a href="read.php">ストア在庫を確認する</a></li>
        <li><a href="input.php">ストア在庫入力する</a></li>
    </ul>
</body>

</html>
