<?php

// ファイルを読み込む
require_once 'dbconnect.php';

// 検索ボタンをクリックしたら 
// ユーザーが入力した内容と一致するデータを
// 画面に表示する

// ユーザーが入力した内容を取得
// 取得した内容は$nameに代入
// 変数$nameを画面に表示して取得できてるか確認

// $_GET['name']が存在していれば
$name = '';
if (isset($_GET['name'])) {
    $name = $_GET['name'];
    var_dump($name);
}

// ユーザーが入力した内容でDB(MySQL)を検索
// prepare = 準備する
$stmt = $dbh->prepare('SELECT * FROM client_list WHERE name = ?');
// execute = 実行する
$stmt->execute([$name]);
// 実行した結果を変数resultsに代入
$results = $stmt->fetchAll();
// echo '<pre>';
// var_dump($results);
// echo '<pre>';
// exit;

?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <title>Sent!</title>
    <meta charset="utf-8">
</head>

<body>
    <form action="search.php" method="GET">
        <!-- ""の場合、現在のページを表す -->
        <p>Type the name you want to search.</p>
        <input type="text" name="name">
        <input type="submit" value="Search">
    </form>
    <!-- 画面に表示する -->
    <?php foreach ($results as $result) : ?>
        <p><?php echo $result['email'] ?></p>
        <p><?php echo $result['name'] ?></p>
        <hr>
    <?php endforeach; ?>
</body>

</html>