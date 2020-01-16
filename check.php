<?php
// ファイルの読み込み
require_once('function.php');

// echo '<pre>';
// var_dump($_SERVER['REQUEST_METHOD']);
// exit;
    // POST送信ではなかったら、index.phpにリダイレクトする
    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        header('Location: form.php');
    }

    $name = $_POST['name']; //inputの[name]タグ
    // $_POST['nickname']
    // ユーザーが入力したニックネームが入ってる
    // POSTで送信されたデータは
    // $_POSTっていうスーパーグローバル変数に連想配列形式で保存されます。

    // スーパーグローバル変数とは↓
    // 自分で定義する必要がない変数
    // PHPで元々用意されている変数
    // 複数ある
    // それぞれ役割がある
    // $_POSTの役割
    // POSTされたデータを連想配列形式で保存
    // key： name属性の値
    // value： ユーザーが入力した内容

    // ['okinawa' => 'FC琉球'] //key / value

    // メールアドレス
        $email = $_POST['email'];
    // お問い合わせ
        $comment = $_POST['comment'];
        // 入力内容のチェック
        if ($name == '') {
            $name_result = 'Oops! No name typed';
        } else {
            $name_result = 'Welcome ' .'Mr. /Ms. '. $name;
        }
        
        if(strpos($email,'@') === false){
            $email_result = 'Oops! No email address typed.';//'$email'のなかに'@'が含まれていない場合
          }
        if(strpos($email,'@') !== false && $email != ''){
            $email_result = 'Email address：' . $email;//'$email'のなかに'@'が含まれている場合
          }
        // if ($email == '' || $email != '@') {
        //     $email_result = 'Oops! No email address typed.';
        // } else {
        //     $email_result = 'Email address：' . $email;
        // }
    
        if ($comment == '') {
            $comment_result =  'Oops! No comment typed.';
        } else {
            $comment_result = 'Comment：' . $comment;
        }
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <title>confirm</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="sass/style1.css">
</head>
<body>
    <h1>confirm</h1>
    <div class="form">
    <p><?php echo h($name_result); ?></p>
    <p><?php echo h($email_result); ?></p>
    <p><?php echo h($comment_result); ?></p>
    </div>
    <form action="thanks.php" method="POST">
        <input type="hidden" name="name" value="<?= h($name) ?>">
        <input type="hidden" name="email" value="<?= h($email) ?>">
        <input type="hidden" name="comment" value="<?= h($comment) ?>">
        <div class="buttons">
        <div class="submit">
        <button type="button" onclick="history.back()">return</button>
        </div>
        <?php if($name != '' && $email !='' && strpos($email,'@')  && $comment != ''): ?>
        <div class="submit">
            <input type="submit" name="" value="submit">
        </div>
        </div>
        <?php endif; ?>
    </form>
</body>
</html>