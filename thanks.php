<?php
require_once('function.php');
require_once('dbconnect.php');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: form.php');
}

// 入力内容の取得
$gender = $_POST['gender'];
$name = $_POST['name'];
$name_result = 'Welcome ' . $gender . $name;
$email = $_POST['email'];
$comment = $_POST['comment'];
// 表示

$stmt = $dbh->prepare("INSERT INTO client_list (title, name, email, comment) VALUES (?, ?, ?, ?)");
$stmt->execute([$gender, $name, $email, $comment]);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Your comment sent</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./sass/style1.css">
</head>

<body>
    <h1>Thank you for your comment！</h1>
    <div class="form">
        <p><?php echo $name_result; ?></p>
        <p><?php echo $email; ?></p>
        <p><?php echo $comment; ?></p>
    </div>
</body>

</html>