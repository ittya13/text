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

    $dsn='mysql:dbname=shop;host=localhost;charset=utf8';
    $user='root';
    $password='';
    $dbh=new PDO($dsn,$user,$password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $sql='DELETE FROM kojin WHERE code=?';
    $stmt=$dbh->prepare($sql);
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
    削除しました。<br>
    <br/>
    <a href="list.php">戻る</a>
</body>
</html>