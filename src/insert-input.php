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
<p>カテゴリID</p>
<p>1：文学・文芸</p>
<p>2：ビジネス</p>
<p>3：趣味・実用</p>
<p>4：専門書</p>
<p>5：学習参考書</p>
<p>6：絵本・児童書</p>
<p>7：コミックス</p>
<p>8：雑誌・ムック</p>
<?php require 'footer.php'; ?>