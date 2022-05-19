<!--
    phpでhelloworldを表示してみよう。
    1.開始タグ終了タグをつける
    2.echoする
 -->

 <?php

echo 'hello world zznnnz';


?>

<html>

<head>
<title>テーブルタグの利用</title>
</head>

<body>

<?php

echo"<table border=1>";
echo "<tr><td>東京</td><td>晴れ</td></tr>";
echo "<tr><td>大阪</td><td>雨</td></tr>";
echo "<tr><td>名古屋</td><td>曇り</td></tr>";
echo "</table>";

?>

<?php
$song = "Echoes";
$artist = "Pink Floyd"; 
echo "<table>";
echo "<tr>";
echo "<th> Songs </th>";
echo "<th> Artists </th>";
echo "</tr>";
echo "<tr>";
echo "<td>".$song."</td>";
echo "<td>".$artist."</td>";
echo "</tr>";
echo "</table>";
?>

<?php
  $frends = "Tom,Mike,Wendy,Jane";
  $frend = explode(",",$frends);
  echo '<p>',$frend[0],'</p>';
  echo '<p>',$frend[1],'</p>';
  echo '<p>',$frend[2],'</p>';
  echo '<p>',$frend[3],'</p>';
?>


<?php
$frends = "Tom,Mike,Wendy,Jane";
$frend = explode(",",$frends);
$count = count( $frend );
$i = 0; 
while( $i < $count ) {
    echo '<p>',$frend[$i],'</p>';
    ++$i;
}
?> 



</body>

</html>