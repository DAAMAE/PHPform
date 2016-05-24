<html>
<head>
    <link rel="stylesheet" type="text/css" href="style.css" media="all">
    <link rel="stylesheet" type="text/css" href="reset.css">
</head>
<body>
    <form action="result.php" method="post">

    <?php
    $name1="";
    if( !empty($_POST["name1"])) {$name1 = $_POST["name1"];}/*name1初期化　$_POSTが空でない時に$_POST name1値を代入*/
    $name2="";
    if( !empty($_POST["name2"])) {$name2 = $_POST["name2"];}
      ?>

    <title>お問い合わせ</title>

    <center>
    <font size="6">お問い合わせフォーム</font>
    </center>


    <table class="formTable">
<tr>
<th>姓　：</th>
<td><input type="text" name="name1" size="20" value="<?php echo $name1;?>" ></td> <!--echo表示-->
</tr>
<tr>
        <th>名　：</th>
        <td><input type="text" name="name2" size="20" value="<?php echo $name2;?>" ></td>
    </tr>
    <tr>
        <th>性別 ：</th>
    <td><input type="radio" name="sex" value="男"/> 男　
        <input type="radio" name="sex" value="女" /> 女
        <input type="radio" name="sex" value="不明" />不明 </td>
    </tr>
    <fieldset>
    <tr>
    <th>住所 ：</th>
        <td><input type="text" name="Address" size="50"></td>
    </tr>
    </fieldset>
    <tr>
    <th>電話番号 ：</th>
            <td><input size="5" type="text" onKeyup="this.value=this.value.replace(/[^0-9]+/i,'')" name="number1" >     <!--半角数字のみ入力可-->
                - <input size="5" type="text" onKeyup="this.value=this.value.replace(/[^0-9]+/i,'')" name="number2" >
                    - <input size="5" type="text" onKeyup="this.value=this.value.replace(/[^0-9]+/i,'')" name="number3" ></td>
    </tr>
    <tr>
    <th>メールアドレス　：</th>
        <td><input size="20" type="text" name="mail"> @<input size="15" type="text" name="domain"></td>
    </tr>
    <tr>
    <th>どこで知ったか　：</th>
    <td><input type="radio" value="雑誌・広告" name="point">雑誌・広告
        <input type="radio" value="ネット" name="point">ネット
        <input type="radio" value="友人・家族" name="point">友人・家族
        <input type="radio" value="その他" name="point">その他</td>
    </tr>
    <tr>
    <th>質問カテゴリ　：</th>
    <td><select name="question">
        <option value="課題について">課題について</option>
        <option value="日報の書き方">日報の書き方</option>
        <option value="メールの書き方">メールの書き方</option>
        <option value="趣味">趣味</option>
        <option value="最近熱いアニメ">最近熱いアニメ</option>
    </select>
    </td>
    </tr>
    <tr>

    <th>質問内容　：</th>

        <td align="center"><textarea name="feelings" rows="5" cols="20"></textarea></td>

    </tr>
    </table>
    <p align="center">
                <input type="submit" value="　　送信　　">　　　<input type="reset" value="リセット">
    </p>

</form>
</body>
</html>
