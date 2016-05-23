
<body>
<form>


<link href="style.css" rel="stylesheet" type="text/css" >
<table crass="formTable">


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

</table>
</body>
</form>
