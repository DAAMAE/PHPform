<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="reset.css">
</head>
<body background="./img/nijihaikei.jpg">
    <form action="contact.php" method="post">
    <table class="formTable">


<input type="hidden" name="name1" value="<?php echo $_POST["name1"];?>">
<input type="hidden" name="name2" value="<?php echo $_POST["name2"];?>">
<input type="hidden" name="sex"　value="<?php echo $_POST["sex"]; ?>">
<input type="hidden" name="Address" value="<?php echo $_POST["Address"];?>">
<input type="hidden" name="number1" value="<?php echo $_POST["number1"];?>">
<input type="hidden" name="number2" value="<?php echo $_POST["number2"];?>">
<input type="hidden" name="number3" value="<?php echo $_POST["number3"];?>">
<input type="hidden" name="mail" value="<?php echo $_POST["mail"];?>">
<input type="hidden" name="domain" value="<?php echo $_POST["domain"];?>">

<title>送信内容の確認</title>

<center>
<font size="6"><i><b><h1 class="press">入力データ確認画面</h1></b></i></font>
</center>

<tr>
    <th>名前　：</th>
    <td class="name1">

    <?php
     echo $_POST["name1"] .  " " . $_POST["name2"]."<br>";?>
    </td>
</tr>
<tr>
    <th>性別　：</th>
    <td>
    <?php if(empty($_POST['rd'])==false ){
            echo $_POST['rd'];
        }else{
        echo "選択オナシャス！";
        }
    ?>
        <input type="hidden" name="rd" value="<?php echo $_POST['rd']; ?>">
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
    <?php echo $_POST["number1"] ."-" . $_POST["number2"]. "-". $_POST["number3"]."<br>";

    ?>
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

    <?php if(empty($_POST['where'])==false){
            foreach ($_POST['where'] as $value) {
                    switch (htmlspecialchars($value)) {
                    case '1':
                        echo "雑誌・広告";
                        break;
                    case '2':
                        echo "ネット";
                        break;
                    case '3':
                        echo "友人・家族";
                        break;
                    case '4':
                        echo "その他";
                        break;
                }
            }
        }else{
            echo "選択オナシャス！";
        }
                  ?>
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
        <?php
    // 質問内容の値が入っているかチェック 改行対応
    if($_POST['feelings'] !== ""){
        echo nl2br(htmlspecialchars($_POST['feelings']) );/* 改行文字の前に HTML の改行タグを挿入する */
        /*特殊文字を HTML エンティティに変換する*/
    }else{
        echo "
          　　　　　／⌒　　⌒＼<br>
　　　 ／（ ●） 　（●）＼<br>
　　／::::::⌒（__人__）⌒:::::＼　　＜　書いて、どうぞ！<br>
　　|　　　　　|r┬-|　　　　  |<br>
　　＼ 　　 　 `ー'´ 　 　 ／
    ";}
                ?>
    </td>
</tr>

</table>

        <p align="center">
        <input type="submit" value="　　戻る　　">
        </p>

</body>
</html>
