
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<table crass="formTable">
</head>

<body>
    <div>
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
    <?php    echo $_POST["Address"]."<br>";?>
</td>
</tr>
<tr>
<th>電話番号　：</th>
<td>
    <?php    echo $_POST["number1"] ."-" . $_POST["number2"]. "-". $_POST["number3"]."<br>";?>
</td>
</tr>

<tr>
<th>メールアドレス　：</th>
<td>
    <?php    echo $_POST["mail"] . "@" . $_POST["domain"]."<br>";?>
</td>
</tr>

<tr>
<th>どこで知ったか　：</th>
<td>
    <?php    echo $_POST["point"]."<br>";?>
</td>
</tr>

<tr>
<th>質問カテゴリ　：</th>
<td>
    <?php    echo $_POST["question"]."<br>";?>
</td>

</tr>
<tr>
<th>質問内容　：</th>
<td>
    <?php    echo $_POST["feelings"]."<br>";?>
</td>
</tr>
    </div>

</body>
</table>
