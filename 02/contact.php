<link rel=stylesheet type="text/css" href="style.css">  
<form action="result.php" method="post">

<title>お問い合わせ</title>

<center>
<font size="+2"><b>お問い合わせ</b></font><br>
<br>
<br>
<div>
姓　：<input type="text" name="name1" size="20"><br>
名　：<input type="text" name="name2" size="20"><br>
</div>

    性別 ：<input type="radio" name="性別" value="男" /> 男　
    <input type="radio" name="性別" value="女" /> 女
    <input type="radio" name="性別" value="不明" />不明<br>

    住所 ：<input type="text" name="Address" size="50"><br>

    電話番号 ：<input size="5" type="text" name="number1"> - <input size="5" type="text" name="number2"> - <input size="5" type="text" name="number3"><br>

    メールアドレス<input size="20" type="text" name="mail">@<input size="15" type="text" name="domain"><br>

    <td><font>どこで知ったか</font></td><br>
    <td><input type="radio" value="雑誌・広告" name="point">雑誌・広告<br>
        <input type="radio" value="ネット" name="point">ネット<br>
        <input type="radio" value="友人・家族" name="point">友人・家族<br>
        <input type="radio" value="その他" name="point">その他</font></td><br>

    <p>
    質問カテゴリ ：<select name="question">
    <option value="課題について">課題について</option>
    <option value="日報の書き方">日報の書き方</option>
    <option value="メールの書き方">メールの書き方</option>
    <option value="趣味">趣味</option>
    <option value="最近熱いアニメ">最近熱いアニメ</option>
    </select>
    </p>

    <td>質問内容</td>
    <textarea name="feelings" rows="5" cols="20"></textarea><br>


<input type="submit" value="送信">　　　<input type="reset" value="リセット">
</center>
</form>
