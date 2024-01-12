<?php session_start(); ?>
<?php require 'header.php'; ?>
<h1>本登録</h1>
<a href="#" onclick="history.back()">メニューへ戻る</a>
<form action="insert-output.php" method="post">
   <p> タイトル：<input type="text" name="book_name"></p>
   <p> 著者：<input type="text" name="author"></p>
   <p>カテゴリID：<input type="text" name="category_id"></p>
   <input type="submit" value="登録">
</form>
<?php require 'footer.php'; ?>