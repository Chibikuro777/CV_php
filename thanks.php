<?php
require_once('function.php');
require_once('dbconnect.php');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: form.php');
}
    // 入力内容の取得
    $name = $_POST['name'];
    $email = $_POST['email'];
    $comment = $_POST['comment'];
    // 表示

    $stmt = $dbh->prepare('INSERT INTO client_list (name, email, comment) VALUES (?, ?, ?)');
    $stmt->execute([$name, $email, $comment]);
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <title>Your comment sent</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="sass/style1.css">
</head>
<body>
    <h1>Thank you for your comment！</h1>
    <div class="form">
    <p><?php echo h($name); ?></p>
    <p><?php echo h($email); ?></p>
    <p><?php echo h($comment); ?></p>
    </div>
</body>
</html>