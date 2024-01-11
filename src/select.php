<?php session_start(); ?>
<?php require 'db-connect.php'; ?>
<?php require 'header.php'; ?>
<table>
    <h1>本一覧</h1>
    <a href="#" onclick="history.back()">メニューへ戻る</a>
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
</table>
<?php require 'footer.php'; ?>