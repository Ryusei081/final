<?php session_start(); ?>
<?php require 'db-connect.php'; ?>
<?php require 'header.php'; ?>
<table>
<h1>本更新</h1>
<p><a href="#" onclick="history.back()">メニューへ戻る</a></p>
<?php
    $pdo=new PDO($connect,USER,PASS);
    foreach($pdo->query('select book_id,book_name,author,category_id from book') as $row ){
        echo '<tr>';
        echo '<form action="update-output.php" method="post">';
        echo '<input type="hidden" name="book_id" value="',$row['book_id'],'">';
        echo '<td>',$row['book_id'],'</td>';
        echo '<td>','タイトル：<input type="text" name="book_name" value="',$row['book_name'],'">','</td>';
        echo '<td>','著者：<input type="text" name="author" value="',$row['author'],'">','</td>';
        echo '<td>','カテゴリID：<input type="text" name="category_id" value="',$row['category_id'],'">','</td>';
        echo '<td>','<input type="submit" value="更新">','</td>';
        echo '</tr>';
        echo '</form>';
        echo "\n";
    }
?>
</table>
<?php require 'footer.php'; ?>