<form action="result.php" method="post">
<CENTER>
<div>
姓:<label><for="name1"></label>
<input type="text" id="name1" size="20">
</div>
<div>
名:<label><for="name2"></label>
<input type="text" id="name2" size="20">
<div>
電話番号:<input size="5" type="text" name="電話番号[][-]" /> - <input size="7" type="text" name="電話番号[][-]" /> - <input size="7" type="text" name="電話番号[][]" />
</div>
<div>
    <p>
質問カテゴリ:<select name="example1">  //プルダウン形式で表示
    <option value="サンプル1">課題について</option>
    <option value="サンプル2">日報の書き方</option>
    <option value="サンプル3">メールの書き方</option>
    <option value="サンプル4">趣味</option>
    <option value="サンプル5">最近熱いアニメ</option>
    </select>
    </p>
</div>

<input type="submit">

</CENTER>
</form>
