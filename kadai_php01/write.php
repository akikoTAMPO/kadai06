<?php

$icon = $_POST['icon'];
$title = $_POST['title'];
$name = $_POST['name'];
$date = $_POST['date'];
$detail = $_POST['detail'];

$time = date('Y-m-d H:i:s');
// ファイルに書き込み
$file = fopen('data/data.txt', 'a');
fwrite($file, $time . '/' . $icon . '/' . $title . '/' . $name . '/' . $date . '/' . $detail . "\n");
fclose($file);
//文字作成
?>


<html>

<head>
    <meta charset="utf-8">
    <title>File書き込み</title>
    <style>
        /* CSSを書く */
    </style>
</head>

<body>

    <h1>書き込みしました。</h1>
    <h2>./data/data.txt を確認しましょう！</h2>

    <ul>
        <li><a href="read.php">確認する</a></li>
        <li><a href="input.php">戻る</a></li>
    </ul>
</body>

</html>
