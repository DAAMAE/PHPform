<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="reset.css">
</head>
<body background="./img/nijihaikei.jpg">
    <form action="result.php" method="post">

    <?php
    $name1="";
    if( !empty($_POST["name1"])) {$name1 = $_POST["name1"];}/*name1初期化　$_POSTが空でない時に$_POST name1値を代入*/
    $name2="";
    if( !empty($_POST["name2"])) {$name2 = $_POST["name2"];}
    $sex = "";
    if( !empty($_POST["sex"]) ){$rd = $_POST["sex"]; }
    $Address="";
    if( !empty($_POST["Address"])) {$Address = $_POST["Address"];}
    $number1="";
    if( !empty($_POST["number1"])) {$number1 = $_POST["number1"];}
    $number2="";
    if( !empty($_POST["number2"])) {$number2 = $_POST["number2"];}
    $number3="";
    if( !empty($_POST["number3"])) {$number3 = $_POST["number3"];}
    $mail="";
    if( !empty($_POST["mail"])) {$mail = $_POST["mail"];}
    $domain="";
    if( !empty($_POST["domain"])) {$domain = $_POST["domain"];}

      ?>

    <title>お問い合わせ</title>

    <center>
    <font size="6"><i><b><h1 class="press">お問い合わせフォーム</h1></b></i></font>
    </center>


    <table class="formTable">
<tr>
        <th>姓   <font size="2" color="#ff0000"><b>[必須]</b></th>
<!--echo表示　required」属性が記述されている入力要素では、空欄のままフォームの [送信] ボタンが押された場合、エラーメッセージを出す。-->
        <td><input type="text" name="name1" size="20"  placeholder="アムロ" value="<?php echo $name1;?>" required aria-required="true" ></td> <!--echo表示-->
</tr>
<!-- plamceholder 入力ボックスの初期値として薄いグレーの文字を表示する-->
<tr>
        <th>名   <font size="2" color="#ff0000"><b>[必須]</b></th>
        <td><input type="text" name="name2" size="20" placeholder="レイ" value="<?php echo $name2;?>" required aria-required="true" ></td>
</tr>
<?php
  // ラジオボタンの checked の状態を空にしておく
      $rd = "男性";

  // 空の否定判定、checked の状態を維持
      if( !empty($_POST['rd']) ){$rd = $_POST['rd']; }
   ?>

<tr>
        <th>性別   </th>

              <td><label><input type="radio" value="男性" name="rd"  <?php if($rd == "男性"){echo "checked";} ?> >男性</label>
                  <label><input type="radio" value="女性" name="rd" 　<?php if($rd == "女性"){echo "checked";} ?> >女性</label>
                  <label><input type="radio" value="不明" name="rd" 　<?php if($rd == "不明"){echo "checked";} ?> >不明</label>
            </td>

</tr>
<tr>
        <th>住所   <font size="2" color="#ff0000"><b>[必須]</b></th>
        <td><input type="text" name="Address" size="50" placeholder="サイド7" value="<?php echo $Address;?>" required aria-required="true" ></td>
</tr>
<tr>
        <th>電話番号　<br>(半角数字)</th>
        <td><input size="5" type="text"  onKeyup="this.value=this.value.replace(/[^0-9]+/i,'')" name="number1" placeholder="114" value="<?php echo $number1;?>" >     <!--半角数字のみ入力可-->
            - <input size="5" type="text" onKeyup="this.value=this.value.replace(/[^0-9]+/i,'')" name="number2" placeholder="514" value="<?php echo $number2;?>">
                - <input size="5" type="text" onKeyup="this.value=this.value.replace(/[^0-9]+/i,'')" name="number3" placeholder="810" value="<?php echo $number3;?>"></td>
</tr>
<tr>
        <th>メールアドレス   <font size="2" color="#ff0000"><b>[必須]</b></th>
        <td><input size="20" type="text" name="mail" placeholder="R-Amuro" value="<?php echo $mail;?>">
             @<input size="15" type="text" name="domain" placeholder="gundam.co.jp" value="<?php echo $domain;?>"></td>
</tr>
<tr>
        <th>どこで知ったか　<br>(複数選択可)</th>
        <td><ul style="list-style:none;">
            <li><label><input type="checkbox" value="1" name="where[]" style="width">雑誌・広告</label></li>
            <li><label><input type="checkbox" value="2" name="where[]" style="width">ネット</label></li>
            <li><label><input type="checkbox" value="3" name="where[]" style="width">友人・家族</label></li>
            <li><label><input type="checkbox" value="4" name="where[]" style="width" onclick="connecttext('textforscb',this.checked);">その他</label>

        </td>
</tr>
<tr>
        <th>質問カテゴリ　</th>
        <td><select name="question">
            <option value="メールの書き方">メールの書き方</option>
            <option value="日報の書き方">日報の書き方</option>
            <option value="料金について">料金について</option>
            <option value="お手続きについて">お手続きについて</option>
            <option value="サービス利用について">サービス利用について</option>
        </select>
        </td>
</tr>
<tr>
        <th>質問内容　</th>
        <td align="center"><textarea name="feelings" placeholder="やってみなければわからん！" rows="5" cols="20"></textarea></td>
</tr>

</table>
        <p align="center">
            <button class="button1" type="submit">  送信  </button>
            <button  class="button2" type="reset" onClick="location.href='contact.php'">  リセット </button>
            <!--強引の策 location.href="URL"指定したURLへジャンプする-->
               </p>


</form>
</body>

</html>
