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
    try{
        $kadai_code=$_POST['code'];
    $kadai_name=$_POST['name'];
    $kadai_pass=$_POST['pass'];
    $kadai_pass2=$_POST['pass2'];
    $kadai_juusyo=$_POST['juusyo'];
    $kadai_denwa=$_POST['denwa'];
    $kadai_mail=$_POST['mail'];
    //設定済
    $kadai_name=htmlspecialchars($kadai_name,ENT_QUOTES,'UTF-8');
    $kadai_pass=htmlspecialchars($kadai_pass,ENT_QUOTES,'UTF-8');
    $kadai_pass2=htmlspecialchars($kadai_pass2,ENT_QUOTES,'UTF-8');
    $kadai_juusyo=htmlspecialchars($kadai_juusyo,ENT_QUOTES,'UTF-8');
    $kadai_denwa=htmlspecialchars($kadai_denwa,ENT_QUOTES,'UTF-8');
    $kadai_mail=htmlspecialchars($kadai_mail,ENT_QUOTES,'UTF-8');

    $dsn='mysql:dbname=shop;host=localhost;charset=utf8';
    $user='root';
    $password='';
    $dbh=new PDO($dsn,$user,$password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $sql='UPDATE kojin SET name=?,pass=?,pass2=?,juusyo=?,denwa=?,mail=? WHERE code=?';
    $stmt=$dbh->prepare($sql);
    $data[] = $kadai_name;
    $data[] = $kadai_pass;
    $data[] = $kadai_pass2;
    $data[] = $kadai_juusyo;
    $data[] = $kadai_denwa;
    $data[] = $kadai_mail;
    $data[] = $kadai_code;

    $stmt->execute($data);
    $dbh=null;
}
catch(Exception $e)
{
    print'ただいま障害により大変ご迷惑をお掛けしております。';
    print $e->getMessage();

    exit();
    
}
    
    ?>
    修正しました。<br>
    <br/>
    <a href="list.php">戻る</a>
</body>
</html>