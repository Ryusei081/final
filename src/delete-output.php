<?php session_start(); ?>
<?php require 'db-connect.php'; ?>
<?php require 'header.php'; ?>
<p><a href="menue.php" >メニューへ戻る</a></p>
<?php
    $pdo=new PDO($connect,USER,PASS);
    $sql=$pdo->prepare('delete from book where book_id=?');
    if($sql->execute([$_GET['id']])){
        echo '削除に成功しました。';
    }else{
        echo '削除に失敗しました。';
    }
?>
<br><hr><br>
<table>
    <tr><th>タイトル</th><th>著者</th><th>カテゴリID</th></tr>
<?php
    foreach($pdo->query('select * from book') as $row){
        echo '<tr>';
            echo '<td>',$row['book_id'],'</td>';
            echo '<td>','：','</td>';
            echo '<td>',$row['book_name'],'</td>';
            echo '<td>','：','</td>';
            echo '<td>',$row['author'],'</td>';
            echo '<td>','：','</td>';
            echo '<td>',$row['category_id'],'</td>';
            echo '</tr>';
            echo "\n";
    }
?>
<?php require 'footer.php'; ?>