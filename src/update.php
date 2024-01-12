<?php session_start(); ?>
<?php require 'db-connect.php'; ?>
<?php require 'header.php'; ?>
<table>
<h1>本更新</h1>
    <p><a href="#" onclick="history.back()">メニューへ戻る</a></p>
    <form action="update-output.php" method="post">
<?php
    $pdo=new PDO($connect,USER,PASS);
    foreach($pdo->query('select book_id,book_name,author from book') as $row ){
        echo '<tr>';
        echo '<td>',$row['book_id'],'</td>';
        echo '<td>','：','</td>';
        echo '<td>',$row['book_name'],'</td>';
        echo '<td>','：','</td>';
        echo '<td>',$row['author'],'</td>';
        echo '</tr>';
        echo "\n";
    }
?>
   <input type="submit" value="更新">
</form>
</table>
<?php require 'footer.php'; ?>