<?php session_start(); ?>
<?php require 'db-connect.php'; ?>
<?php require 'header.php'; ?>
<table>
<h1>本削除</h1>
<p><a href="#" onclick="history.back()">メニューへ戻る</a></p>
<?php
    $pdo=new PDO($connect,USER,PASS);
    foreach($pdo->query('select book_id,book_name,author,category_id from book') as $row ){
       echo '<input type="chekbox">'
    }
?>
</table>
<?php require 'footer.php'; ?>