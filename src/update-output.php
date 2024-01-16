<?php session_start(); ?>
<?php require 'db-connect.php'; ?>
<?php require 'header.php'; ?>
<p><a href="menue.php" >メニューへ戻る</a></p>
<?php
    $pdo=new PDO($connect,USER,PASS);
    $sql=$pdo->prepare('update book set book_name=?,author=?,category_id=? where book_id=?');
    if(empty($_POST['book_name'])){
        echo 'タイトルを入力してください';
    }else if($sql->execute(
        [htmlspecialchars($_POST['book_name']),$_POST['author'],$_POST['category_id'],$_POST['book_id']]
    )){
        echo '更新に成功しました。';
    }else{
        echo '更新に失敗しました。';
    }
?>
<?php require 'footer.php'; ?>
    