<?php session_start(); ?>
<?php require 'db-connect.php'; ?>
<?php require 'header.php'; ?>
<table>
    <h1>本一覧</h1>
    <a href="#" onclick="history.back()">メニューへ戻る</a>
    <tr><th></th><th></th><th>タイトル</th><th></th><th>著者</th><th></th><th>カテゴリID</th></tr>
    <?php
        $pdo=new PDO($connect,USER,PASS);
        foreach($pdo->query('select book_id,book_name,author,category_id from book') as $row ){
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
</table>
<?php require 'footer.php'; ?>