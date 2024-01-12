<?php session_start(); ?>
<?php require 'db-connect.php'; ?>
<?php require 'header.php'; ?>
<p><a href="menue.php" >メニューへ戻る</a></p>
<?php
     $pdo=new PDO($connect,USER,PASS);
     $sql=$pdo->prepare('insert into book values(null,?,?,?)');
     if($sql->execute([$_POST['book_name'],$_POST['author'],$_POST['category_id']])){
        echo '登録完了しました。';
     }else{
        echo '登録に失敗しました。';
     }
?>

<?php require 'footer.php'; ?>
