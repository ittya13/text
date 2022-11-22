<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>課題１</title>
</head>
<body>
    <?php
    try{
    $kadai_name=$_POST['name'];
    $kadai_pass=$_POST['pass'];
    $kadai_name=htmlspecialchars($kadai_name,ENT_QUOTES,'UTF-8');
    $kadai_pass=htmlspecialchars($kadai_pass,ENT_QUOTES,'UTF-8');
    $dsn='mysql:dbname=shop;host=localhost;charset=utf8';
    $user='root';
    $password='';
    $dbh=new PDO($dsn,$user,$password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $sql='INSERT INTO mst_kadai(name,password)VALUES(?,?)';
    $stmt=$dbh->prepare($sql);
    $data[] = $kadai_name;
    $data[] = $kadai_pass;
    $stmt->execute($data);
    $dbh=null;
    print $kadai_name;
    print'さんを追加しました。<br/>';
}
catch(Exception $e)
{
    print'ただいま障害により大変ご迷惑をお掛けしております。';
    exit();
}
    
    ?>
    <a href="list.php">戻る</a>
</body>
</html>