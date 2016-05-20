

<link rel="stylesheet" type="text/css" href="style.css">
<table crass="formTable">

<tr>
<th>姓　：</th>
<td>
  <?php echo $_POST["name1"] .  " " . $_POST["name2"]."<br>";?>
</td>
</tr>



<tr>
<th>名　：</th>
<td><input type="text" name="name2" size="20">[必須]</td>
</tr>

<?php
echo $_POST["性別"]."<br>";
echo $_POST["Address"]."<br>";
echo $_POST["number1"] ."-" . $_POST["number2"]. "-". $_POST["number3"]."<br>";
echo $_POST["mail"] . "@" . $_POST["domain"]."<br>";
echo $_POST["point"]."<br>";
echo $_POST["question"]."<br>";
echo $_POST["feelings"]."<br>";




?>
