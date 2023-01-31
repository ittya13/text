<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    
    <title>ろくまる農園</title>
</head>
<body>
    <?php
    try{
    $pro_title=$_POST['title'];
    $pro_description=$_POST['description'];
    $pro_title=htmlspecialchars($pro_title,ENT_QUOTES,'UTF-8');
    $pro_description=htmlspecialchars($pro_description,ENT_QUOTES,'UTF-8');
    $pro_file_name=$_POST['file_name'];
    $dsn='mysql:dbname=shop;host=localhost;charset=utf8';
    $user='root';
    $password='';
    $dbh=new PDO($dsn,$user,$password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $sql='INSERT INTO image(title,description,file)VALUES(?,?,?)';
    $stmt=$dbh->prepare($sql);
    $data[] = $pro_title;
    $data[] = $pro_description;
    $data[] = $pro_file_name;
    $stmt->execute($data);
    $dbh=null;
    print $pro_title;
    print'さんを追加しました。<br/>';
}
catch(Exception $e)
{
    print'ただいま障害により大変ご迷惑をお掛けしております。';
    print $e->getMessage();
    exit();
}

header("location:done.php?mess=登録が完了しました");

    ?>
    <a href="pro_list.php">戻る</a>
</body>
</html>