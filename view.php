<?php
require_once('function.php');
require_once 'dbconnect.php';

//SQLを実行
// ①DBからデータを取得
$stmt = $dbh->prepare('SELECT * FROM client_list');
$stmt->execute();
$results = $stmt->fetchAll();
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>一覧</title>
</head>

<body>
    <!-- //画面に表示する -->
    <!-- ②取得したデータを表示する -->
    <?php foreach ($results as $result) : ?>
        <p><?php echo h($result['name']); ?></p>
        <p><?php echo h($result['email']); ?></p>
        <p><?php echo h($result['comment']); ?></p>
    <?php endforeach; ?>
</body>

</html>