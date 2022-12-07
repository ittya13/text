<!DOCTYPE html>

<html lang="ja">
<head>
<link rel="stylesheet" href="kadai.css">
    <meta charset="UTF-8">
    <meta http-equiv="Cache-Control" content="no-cache">
    <title>課題１</title>
</head>
<body>
    <?php
      $kadai_code=$_POST['code'];
    $kadai_name=$_POST['name'];
    $kadai_pass=$_POST['pass'];
    $kadai_pass2=$_POST['pass2'];
    $kadai_juusyo=$_POST['juusyo'];
    $kadai_denwa=$_POST['denwa'];
    $kadai_mail=$_POST['mail'];

    $kadai_name=htmlspecialchars($kadai_name,ENT_QUOTES,'UTF-8');
    $kadai_pass=htmlspecialchars($kadai_pass,ENT_QUOTES,'UTF-8');
    $kadai_pass2=htmlspecialchars($kadai_pass2,ENT_QUOTES,'UTF-8');
    $kadai_juusyo=htmlspecialchars($kadai_juusyo,ENT_QUOTES,'UTF-8');
    $kadai_denwa=htmlspecialchars($kadai_denwa,ENT_QUOTES,'UTF-8');
    $kadai_mail=htmlspecialchars($kadai_mail,ENT_QUOTES,'UTF-8');

    if ($kadai_name=='') 
    {

        print'氏名が入力されていません。<br/>';
    }
    else
    {
        print'スタッフ名';
        print$kadai_name;
        print'<br/>';
    }
    if($kadai_pass==''){

        print'ふりがなが入力されていません。<br/>';
    }
    if($kadai_pass2==''){
        print'郵便番号が入力されていません。<br/>';
    }
    if($kadai_juusyo==''){
        print'住所が入力されていません。<br/>';
    }
    if($kadai_denwa==''){
        print'電話番号が入力されていません。<br/>';
    }
    if($kadai_mail==''){
        print'Eメールアドレスが入力されていません。<br/>';

    }

    if($kadai_name==''||$kadai_pass=''||$kadai_pass2=''||$kadai_juusyo==''||$kadai_denwa==''||$kadai_mail==''){
        print'<form>';
        print'<button type="button" onclick="history.back()">戻る</button>';
        print'<form>';
    }
    else{
      
            print' <form method="post" action="edit_done.php">';
            print'<input type="hidden" name="code" value="'.$kadai_code.'">';
        print'<input type="hidden" name="name" value="'.$kadai_name.'">';
        print'<input type="hidden" name="pass" value="'.$kadai_pass.'">';
        print'<input type="hidden" name="pass2" value="'.$kadai_pass2.'">';
        print'<input type="hidden" name="juusyo" value="'.$kadai_juusyo.'">';
        print'<input type="hidden" name="denwa" value="'.$kadai_denwa.'">';
        print'<input type="hidden" name="mail" value="'.$kadai_mail.'">';
        print'<br/>';
        print'<button type="button" onclick="history.back()">戻る</button>';
        print'<button type="submit">ＯＫ</button>';
        print'</form>';
    }
    ?>
</body>
</html>
