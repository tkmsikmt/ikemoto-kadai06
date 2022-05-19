
<?php

// #1 ファイルの読み込み
$f = fopen("./sample.csv", "r");

// #2 テーブルのHTMLを生成
echo "<table border=1>
        <tr>
            <th>時間</th>
            <th>ストア</th>
            <th>在庫有無</th>
        </tr>";

// #3 csvのデータを配列に変換し、HTMLに埋め込んでいる
while($line = fgetcsv($f)) {
    echo "<tr>";
    for ($i=0;$i<count($line);$i++) {
        echo "<td>" . $line[$i] . "</td>";
    }
    echo "</tr>";
}
echo "</table>";

// #4 ファイルを閉じる
fclose($f);
?>

<html>

<head>
    <meta charset="utf-8">
    <title>File入力へ戻る</title>
</head>

<body>

    <h1>入力に戻ろう</h1>
    <ul>
        <li><a href="input.php">ストア在庫入力する</a></li>
    </ul>
</body>

</html>



<!-- <?php
// ファイルを開く
// #1 ファイルの読み込み

// $openfile= fopen("./sample.csv", "r"); -->
// $openFile = fopen('data/data.txt', 'r');


// #2 テーブルのHTMLを生成
// echo "<table border=1>
//         <tr>
//             <th>時間</th>
//             <th>ストア</th>
//             <th>在庫</th>
//         </tr>";

// ファイル内容を1行ずつ読み込んで出力

// ＋＋できていた構文＋＋
// while($str = fgets($openfile)){
//     echo"<table border=1>";
//     // echo "<table>";
//     echo "<tr>";
//     echo nl2br ("<td> ".$str." </td>");
//     // echo"<th> nl2br($str)</th>";
//     echo "</tr>";
//     echo "</table>";
// }


// // ++ 授業のオリジナル構文++ 
// while ($str = fgets($openFile)) {
//     echo nl2br($str);
// };

// ＋＋安達さん推奨＋＋

// while($str = fgets($openfile)){
//     $arr = explode(",",$str);
//     echo $arr[0]."<br>";
// }


// // ファイルパス指定し、任意のファイルを読み取り専用でファイルオープン
// $file = fopen("test.txt", "r");
// ファイルオープンして代入した変数 $file から fgets() で1行 $line に代入

// while($line = fgets($openfile)){
//     echo $line . "<br>"; // 結果：1 2 3
//     // var_dump($line);
// };



// $str = fgets($openFile)
// $str_arry = explode(",",$str );
// $count = count( $str_arry );
// $i = 0; 

// while( $i < $count ) {
//     echo '<p>',$str_arry[$i],'</p>';
//     ++$i;
// }


// $frend = explode(",",$frends);
// $count = count( $frend );

// ファイルを閉じる

// fclose($openfile);
// // fclose($openFile);

// ?>



