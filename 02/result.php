<html>
<head>

    <link rel="stylesheet" type="text/css" href="style.css" >
    <link rel="stylesheet" type="text/css" href="reset.css">
</head>
<body>
    <form action="contact.php" method="post">
    <table crass="formTable">

<input type="hidden" name="name1" value="<?php echo $_POST["name1"];?>">
<input type="hidden" name="name2" value="<?php echo $_POST["name2"];?>">

<title>送信内容の確認</title>
<tr>
<th>名前　：</th>
    <td>
    <?php echo $_POST["name1"] .  " " . $_POST["name2"]."<br>";?>
    </td>
</tr>
<tr>
<th>性別　：</th>
<td>
    <?php echo $_POST["sex"]."<br>";?>
</td>
</tr>
<tr>
<th>住所　：</th>
<td>
    <?php echo $_POST["Address"]."<br>";?>
</td>
</tr>
<tr>
<th>電話番号　：</th>
<td>
    <?php echo $_POST["number1"] ."-" . $_POST["number2"]. "-". $_POST["number3"]."<br>";?>
</td>
</tr>
<tr>
<th>メールアドレス　：</th>
<td>
    <?php echo $_POST["mail"] . "@" . $_POST["domain"]."<br>";?>
</td>
</tr>
<tr>
<th>どこで知ったか　：</th>
<td>
    <?php echo $_POST["point"]."<br>";?>
</td>
</tr>
<tr>
<th>質問カテゴリ　：</th>
<td>
    <?php echo $_POST["question"]."<br>";?>
</td>
</tr>
<tr>
<th>質問内容　：</th>
<td>
    <?php echo $_POST["feelings"]."<br>";?>
</td>
</tr>

<th><input type="submit" value="　　戻る　　"></th>　　
</table>
</body>
</html>
